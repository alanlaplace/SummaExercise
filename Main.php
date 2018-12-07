<?php namespace SummaExercise;

    include("Enterprise.php");
    include("Employee.php");
    include("Developer.php");
    include("Designer.php");
    include("DesignerType.php");
    include("ProgrammingLanguage.php");
    include("IdGenerator.php");

    function printLine($text){
        echo "<p>".$text."</p>";
    }

    function printSubtitle($text){
        echo "<b>".$text."</b>";
    }

    echo "<h1>Summa Exercise</h1>";

    // Create enterprise
    printSubtitle("Creating example enterprise...");
    $enterprise = new Enterprise("Example enterprise");
    printLine("New enterprise created, name: ".$enterprise->name);

    // Create designer
    printSubtitle("Creating new designer...");
    $designer = new Designer("Cosme", "Fulanito", 20, DesignerType::GRAPHIC);
    printLine("New designer created.");
    printLine("Designer information: {".(string)$designer."}");

    // Create new developer
    printSubtitle("Creating new developer...");
    $developer = new Developer("Guy", "Incognito", 21, ProgrammingLanguage::PHP);
    printLine("New developer created.");
    printLine("Developer information: {".(string)$developer."}");

    // Add employees to Example enterprise
    printSubtitle("Adding employees to enterprise...");
    $enterprise->addEmployee($designer);
    $enterprise->addEmployee($developer);
    printline("Update complete");

    // Show enterprise employees updated information
    printSubtitle("Employees list information");
    printLine($enterprise->getFormattedEmployeesList());

    // Show average employee list
    printSubtitle("Getting average age...");
    printLine("Average age is: ".$enterprise->getAverageAge());

    // Changing id to designer so i can find it later
    printSubtitle("Changing designer id to 10000 and developer name to Mark");
    $designer->id = 10000;
    $developer->name = "Mark";

    // Showing updated information
    printline("Employees list information after update");
    printLine($enterprise->getFormattedEmployeesList());

    //
    printSubtitle("Find employee with id 10000 and show information");
    printLine((string)$enterprise->getEmployee(10000));

?>