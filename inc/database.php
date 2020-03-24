<?php
            // This makes it possible to print things from database
            if(isset($_GET["gameCategoryId"]))
            {
                $categoryId = $_GET["gameCategoryId"];
            }
            else 
            {
                $categoryId = "";
            }
            $sql = "SELECT * FROM `games` , `gamecategory` WHERE 
            `gamecategory`.`gameCategoryId` = `games`.`gameCategoryId`";
            if(isset($categoryId) && $categoryId)
            {
                $sql.= " AND `gamecategory`.`gameCategoryId` = ".$categoryId."";
            }
            $sql.= " ORDER BY `GameID` ASC";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $games[] = $row;
            }
?>