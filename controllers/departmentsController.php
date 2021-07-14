<?php

require_once MODELS . "departmentsModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

switch ($_GET["action"]) {
    case "getAllDepartments":
        getAllDepartments();
        break;
    case "getDepartment":
        getDepartment($_GET["id"]);
        break;
    default:
        echo "Not valid action";
        break;
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllDepartments()
{
    $departments = getDepartments();
    require_once VIEWS . "departments/departmentDashboard.php";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getDepartment($request)
{
    $department = getById($request);
    $departmentData = $department[0];
    $departmentEmployees = $department[1];
    require_once VIEWS . "departments/department.php";
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}