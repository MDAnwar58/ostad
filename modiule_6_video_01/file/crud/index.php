<?php
session_start(); 
include_once('inc/function.php');
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';

if('edit' == $task)
{
    if(!hasPrivilege())
    {
        header('location: /crud/index.php?task=report');
    }
}

if('delete' == $task)
{
    if(!isAdmin())
    {
        header('location: /crud/index.php?task=report');
        return;
    }
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if($id>0)
    {
        deleteStudent($id);
        header('location: /crud/index.php?task=report');
    }
}
if('seed' == $task)
{
    if(!isAdmin())
    {
        header('location: /crud/index.php?task=report');
        return;
    }
    seed();
    $info = "Seeding is complete";
}
$fname = '';
$lname = '';
$roll = '';

if(isset($_POST['submit']))
{
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    if($id)
    {
        if($fname != '' && $lname != '' && $roll != '')
        {
            $result = updateStudent($id, $fname, $lname, $roll);
            if($result)
            {
                header('location: /crud/index.php?task=report');
            }else
            {
                $error = 1;
            }
        }
    }else
    {
        if($fname != '' && $lname != '' && $roll != '')
        {
            $result = addStudent($fname, $lname, $roll);
            if($result)
            {
                header('location: /crud/index.php?task=report');
            }else
            {
                $error = 1;
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Example</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Project 2 - CRUD</h2>
                <p>A simple project to perform CRUD operations using plain files and PHP</p>
                <?php include_once('inc/template/nav.php') ?>

                <?php
                if($info != '')
                {
                    echo "<p>{$info}</p>";
                }
                ?>
            </div>
        </div>
        <?php if('1' == $error): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <blockquote>Duplicate Roll Number</blockquote>
            </div>
        </div>
        <?php endif; ?>
        <?php if('report' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if('add' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="/crud/index.php?task=add" method="POST">
                    <label for="">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php $fname ?>">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php $lname ?>">
                    <label for="">Roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $roll ?>">
                    <button type="submit" class="button-primary" name="submit">Save</button>
                </form>
            </div>
        </div>
        <?php endif; ?>
        <?php
            if('edit' == $task):
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
                $student = getStudent($id);
        ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="/crud/index.php?task=add" method="POST">
                    <label for="">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php $fname ?>">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php $lname ?>">
                    <label for="">Roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $roll ?>">
                    <button type="submit" class="button-primary" name="submit">Save</button>
                </form>
            </div>
        </div>
        <?php
            endif;
        ?>
    </div>
</body>

</html>