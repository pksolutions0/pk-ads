 <?php 
 if ($_SERVER['HTTP_HOST'] == "localhost") {
        define('mode', 0);
    } else {
        define('mode', 1);
    }




    // case 0 for local host work
    // case 1 for production

    if (mode == 1) {

        // Mysqli Db
        // this database is use for crud and also use for popup
        $servername = "localhost";
        $username = "u495702832_seoservices";
        $password = "4Bx];bRmXY=^";
        $database = "u495702832_seoservices";
        // 
        #
        //
    } else {

        #
        // edit this details based on your database info and domain info
        #
        // database info
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "rapidseo";
    } ?>