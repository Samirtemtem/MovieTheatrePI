<?php

include_once '../config.php';
class GlobalCrudController
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = config::getConnexion();;
    }
    public function GetDatafromTable($tableName)
    {
        $allowedTables = ["categories", "movies", "ratings", "user_art", "user_vis"];

        if (!in_array($tableName, $allowedTables)) {
            // Handle invalid table name (throw an exception, log an error, etc.)
            echo "Invalid table name";
            return;
        }
    
        // Prepare the statement
        $stmt = $this->pdo->prepare("SELECT * FROM $tableName");
    
        // Check if the preparation was successful
        if ($stmt) {
            // Execute the query
            $stmt->execute();

        // Get the result set
        $stmt->execute();

        // Fetch the results as an associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rows = [];

        // Fetch data and collect rows in the array
        // Return the array of rows
        return $result;
    }

  
    
 
}
}
?>
