<?php
function generateReport()
{
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <?php if (isAdmin() || isEditor()) : ?>
                <th width="25%">Action</th>
            <?php endif; ?>
        </tr>
        <?php
        foreach ($students as $student) {
        ?>
            <tr>
                <td><?php printf('%s %s', $student['fname'], $student['lname']) ?></td>
                <td><?php printf('%s', $student['role']) ?></td>
                <?php if (isAdmin()) : ?>
                    <td><?php printf('<a href="/crud/index.php?task=edit&id=%s">Edit</a> | <a href="/crud/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']) ?></td>
                <?php elseif (isEditor()) : ?>
                    <td><?php printf('<a href="/crud/index.php?task=edit&id=%s">Edit</a>', $student['id']) ?></td>
                <?php endif; ?>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}

function addStudent($fname, $lname, $roll)
{

}

function updateStudent($id, $fname, $lname, $roll)
{

}

function deleteStudent($id)
{
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);

    foreach($students as $offset=>$student)
    {
        if($student['id'] == $id)
        {
            unset($students[$offset]);
        }

        $serializeData = serialize($students);
        file_get_contents(DB_NAME, $serializeData, LOCK_EX);
    }
}


function seed()
{

}

function isAdmin()
{
    return $_SESSION['role'] = 'admin';
}
function isEditor()
{
    return ('editor' == $_SESSION['role']);
}

function hasPrivilege()
{
    return (isAdmin() || isEditor());
}
