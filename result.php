<?php

$name = isset($_GET['name']) ? $_GET['name'] : "";
$club = isset($_GET['club']) ? $_GET['club'] : "";
$time = isset($_GET['time']) ? $_GET['time'] : "";
$skills = isset($_GET['skills']) ? $_GET['skills'] : [];

$skill = implode(" and ", $skills)
?>
<div style="border: 1px dashed orangered; width: 35%; margin: 15% 0  0 30%; justify-items: center; align-items: center;">
<img style="margin-left: 40%;" src="./quality_2323848.png" width="100px" alt="your rewards">
    <h3 style="margin-left: 32%;">Thx you <?= isset($_GET['name']) ? $_GET['name'] : ""; ?></h3>
    <p style="margin-left: 22%;"> We received your application for the <?= isset($_GET['club']) ? $_GET['club'] : ""; ?>
    </p>
    <p style="margin-left: 12%;"> You are <?= $skill ?></p>
    <p style="margin-left: 22%;"> You will be available on <?= isset($_GET['time']) ? $_GET['time'] : ""; ?></p>
</div>