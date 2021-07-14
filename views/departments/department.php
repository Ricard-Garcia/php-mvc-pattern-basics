<?php
$page = "Department form";
require_once VIEWS . "head/head.php";
?>

<body>
    <h1 class='main-title'><?= $departmentData["dept_name"] ?> department</h1>
    <form class="w-50" method="POST" action="./index.php?controller=departments&action=updateDepartment">
        <div class="form-group mb-3 p-0">
            <label for="inputEmail4">Department's id</label>
            <input type="text" class="form-control" id="inputName" value="<?= $departmentData["dept_no"] ?>" placeholder="Id" maxlength="4">
        </div>
        <div class="form-group mb-3 p-0">
            <label for="inputPassword4">Department's name</label>
            <input type="text" class="form-control" id="inputLastName" value="<?= $departmentData["dept_name"] ?>" placeholder="Name" maxlength="40">
        </div>
        <div class="form-group mb-3 p-0 h-auto">
            <label>Employees in department</label>
            <div class="border rounded p-2 pb-0 ">
                <ul class="list-unstyled mb-0">
                    <?php foreach ($departmentEmployees as $employee) : ?>
                        <li class="dept-emp mb-0">· <?= $employee["Emp-name"] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="d-flex container-fluid p-0 mt-4">
            <button type="submit" class="btn btn-dark mr-2">Update</button>
            <!-- Back to dashboard -->
            <a href="./index.php?controller=departments&action=getAllDepartments" class='btn btn-outline-secondary '>Back</a>
        </div>
    </form>
</body>