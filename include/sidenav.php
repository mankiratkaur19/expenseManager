<div class="sidenav" style="background-color: white;width: 25vw;height: inherit;border-right: 3px solid;">
    <ul style="list-style-type: none;padding: 0;color: #4b4747;/* border-bottom: 3px solid; */">
        <li style="
                    font-size: 24px;
                    border-bottom: 3px solid darkgrey;
                    border-top: 3px solid darkgrey;
                    padding: 10px 0; 
                    <?php
                        if($filename == "income")
                            echo 'background-color: #4b4747;'; 
                    ?>
                ">
            <a href="./income.php" 
                <?php
                    if($filename == "income")
                    echo "style=' color: white;'";
                else
                    echo "style='color: #4b4747'";
                ?>
            >
                Add Income
            </a>
        </li>
        <li style="
                    font-size: 24px;
                    border-bottom: 3px solid darkgrey;
                    padding: 10px 0; 
                    <?php
                        if($filename == "expense")
                            echo 'background-color: #4b4747;'; 
                    ?>
                ">
            <a href="./expense.php" 
                <?php
                    if($filename == "expense")
                    echo "style=' color: white;'";
                else
                    echo "style='color: #4b4747'";
                ?>
            >
                Add Expense 
            </a>
        </li>
        <li style="
                    font-size: 24px;
                    border-bottom: 3px solid darkgrey;
                    padding: 10px 0; 
                    <?php
                        if($filename == "index")
                            echo 'background-color: #4b4747;'; 
                    ?>
                ">
            <a href="./" 
                <?php
                    if($filename == "index")
                    echo "style=' color: white;'";
                else
                    echo "style='color: #4b4747'";
                ?>
            >
                All Transactions 
            </a>
        </li>
        <li style="
                    font-size: 24px;
                    border-bottom: 3px solid darkgrey;
                    padding: 10px 0; 
                    <?php
                        if($filename == "report")
                            echo 'background-color: #4b4747;'; 
                    ?>
                ">
            <a href="./report.php" 
                <?php
                    if($filename == "report")
                        echo "style=' color: white;'";
                    else
                        echo "style='color: #4b4747'";
                ?>
            >
                Expense Report 
            </a>
        </li>
    </ul>
</div>