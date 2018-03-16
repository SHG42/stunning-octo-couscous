<!DOCTYPE html>
<?php
require '../../../con_test.php';
require '../../../databaseConnect.php';


session_start();
session_destroy();
//this is all that's needed to log out
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>User has logged out</p>

    <!--
    <div class="unicornIcons">
      <div class="photo" id="chocolatepalocorn">
        <img src="starterUnicorns/chocolatepalocorn.png" alt="Chocolate Palomino Unicorn">
      </div>
      <div class="photo" id="flaxensorrelcorn">
        <img src="starterUnicorns/flaxensorrelcorn.png" alt="Flaxen Sorrel Unicorn">
      </div>
      <div class="photo" id="starunicorn">
        <img src="starterUnicorns/starunicorn.png" alt="Starry Purple Unicorn">
      </div>
      <div class="photo" id="deericorn">
        <img src="starterUnicorns/deericorn.vector.png" alt="Deerlike Unicorn">
      </div>
      <div class="photo" id="greenblackunicorn">
        <img src="starterUnicorns/greenblackunicorn.png" alt="Green and Black Unicorn">
      </div>
      <div class="photo" id="heraldicbeast">
        <img src="starterUnicorns/heraldicbeast.png" alt="Heraldic Unicorn with Sword">
      </div>
      <div class="photo" id="prettyunicorn">
        <img src="starterUnicorns/prettyunicorn.png" alt="Soft Pastel Unicorn">
      </div>
      <div class="photo" id="traditionalunicorn">
        <img src="starterUnicorns/traditionalunicorn.png" alt="Traditional White and Silver Unicorn">
      </div>
    </div>

    <form Name = "f1" action="sf_chooseregion.php" method="post">
      <?PHP print $wholeDropdownHTML; ?>
    <button type="submit" name = "Submit" Value = "View This Region">View This Region</button>
    </form>
    <?php
      //code to display dropdown region list, trying php dynamic form

      $startSelect = "<SELECT NAME=regiondrop>";
      $endSelect = "</SELECT>";
      $getRegionDrop = "";
      $regionName = '';
      $dropdown = '';
      $wholeDropdownHTML = "";

      if ($_SERVER['REQUEST_METHOD']=='POST') {
        $getRegionDrop = $_GET['regiondrop'];
        header ("Location: sf_chooseregion.php?h1=" . $getRegionDrop);//redirect to same page
      }

      $database = "sf_registry";
      $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

      if ($db_found) {
        $preparestmt = $db_found->prepare("SELECT regionID, regionName FROM tbl_sf_regions");//if database connects, select region info from region table

        if ($preparestmt) {//if the info has been selected...
          $preparestmt->execute();
          $result = $preparestmt->get_result();

          if ($result->num_rows > 0) {//if the preparestatement gets results...

            while ($row = $result->fetch_assoc()) {
              $regionID = $row['regionID'];
              $regionName = $row['regionName'];
              $dropdown = $dropdown . "<OPTION VALUE='" . $regionID . "'>" . $regionName . "</OPTION>" . "<BR>";//fetch region ID as the option values, and display region name as title in dropdown list
            }
            $wholeDropdownHTML = $startSelect . $dropdown . $endSelect;
          }
        }
      }


    ?>


    <form Name = "f1" action="sf_startpage.php" method="post">
      <select name="region">
        <option value="none">Select a Region</option>
        <option value="1">Arctic</option>
        <option value="2">Desert</option>
        <option value="3">Swamp</option>
        <option value="4">Forest</option>
        <option value="5">Savannah</option>
        <option value="6">Mountains</option>
      </select>
      <button type="submit" name = "Submit" Value = "View This Region">View This Region</button>
    </form>

    $region = $_POST['region'];
    Switch ($region) {
      Case 'Arctic':
        print ("The Arctic: A region of frigid desolation... but there is also wild, crystalline beauty for those brave enough to seek it. The soaring glaciers harbor dark, silent forests brimming with unknown wonders. The unicorns of this realm are determined and hardy creatures, experts in survival.");
        break;
      Case 'Desert':
        print ("The Desert: Unicorns here forge a life between blistering sunlight and icy-cold nights, but they are fiercely loyal to this scorching realm. The towering sand dunes offer boundless danger, but also limitless adventure. What mysteries lie in the heart of the Desert? Unicorns of this realm are shrewd and clever.");
        break;
      Case 'Swamp':
        print ("The Swamp: Hazy shapes wind their way through the warm, shallow waters here. The thick canopy and dangling branches shield a labyrinth of channels, lagoons, and ponds. On islands of sturdy cypress trees, and on clusters of floating flat-bottomed boats, herds of unicorns make their homes. Unicorns of this realm are relaxed and adventurous.");
        break;
      Case 'Forest':
        print ("The Forest: Massive trees, ancient and gnarled, stand amid thick fog and lancing shafts of sunlight. The unwary soon find themselves hopelessly lost, but those who know this realm find their way with ease. The Forest bristles with life, not all of it friendly. Unicorns of this realm are studious and slow to trust.");
        break;
      Case 'Savannah':
        print ("The Savannah: A sea of tall grass graces the Savannah, the endless golden waves dotted with twisted trees and rock outcrops. The sun shines brightly here, sometimes unbearably so, and sudden lightning storms can give the uncautious an unpleasant surprise. Unicorns of this realm are quick-witted and sharp-eyed.");
        break;
      Case 'Mountains':
        print ("The Mountains: Many believe that these towering peaks are a sacred realm, due to their proximity to Sunflame Mountain. Sacred or not, the herds that live amidst the peaks must contend with perilous slopes, howling winds, and the beasts that lurk in the mist. Unicorns here are daring and observant.");
        break;
      default:
        print ("No Region Selected");
    }

    if ($result->num_rows == 0) {
      $SQL = "INSERT INTO tbl_sf_members (region) VALUES ($yourRegion)";//INSERT INTO and VALUES are sql keywords
    //VALUES can be entered as direct text or variables
    //format: "INSERT INTO table_name (names of columns) VALUES (values for columns)"
      $result = mysqli_query($db_found, $SQL);
      mysqli_close($db_found);
      print "You Have Chosen";
    } else {
      $errorMessage = "You have already chosen a region";
    }

    if ($db_found) {
      $SQL = $db_found->prepare('SELECT * FROM tbl_sf_members WHERE usrregion=$yourRegion');
        //selecting the region column only. need to make sure this column contains no existing values so a user can only make this choice from the startpage once.
      $SQL->bind_param('s', $yourRegion);
      $SQL->execute();
      //to ensure that values in region column are not overwritten, we need to get results back from sql query:
      $result = $SQL->get_result();//if any results come back, then that entry already exists
      //$SQL->store_result();
      //$result = $SQL->num_rows;
      //print $result;
      if ($result->num_rows > 0) {
        $errorMessage = "You have already chosen a Region";
      } else {//if no rows are returned, we can add the region to the database
        $SQL = $db_found->prepare("INSERT INTO tbl_sf_members (usrregion) VALUES (?)");//prepared statement to insert values to database table
        $SQL->bind_param('s', $yourRegion);//binding selected region again to add to db
        $SQL->execute();
        print "Region Chosen, Welcome Stranger";
      }
    }

    $SQL = $db_found->prepare('UPDATE tbl_sf_members SET usrregion = ?');
    $SQL->bind_param('s', $yourRegion);
    $SQL->execute();


    if (isset($_POST['Submit1'])) {
      require '../../../con_test.php';
      $yourRegion = $_POST['region'];

      $database = 'sf_registry';
      $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database);//creating a new mysqli object passing in our constants from the configure file

      if ($db_found) {//setup code to see if user has already chosen region or not
        $SQL = $db_found->prepare('SELECT * FROM tbl_sf_members WHERE usrregion=?');
          //selecting the region column only. need to make sure this column doesnt already have an entry so user can't change selected region by resubmitting form.
        $SQL->bind_param('s', $yourRegion);
        $SQL->execute();
        //to ensure each entry in L1 username column is unique, we need to get results back from sql query:
        $result = $SQL->get_result();//if any results come back, then that entry already exists
        //$SQL->store_result();
        //$result = $SQL->num_rows;
        //print $result;
        if ($result->num_rows > 0) {
          $errorMessage = "You have already chosen";
        }
      }
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      require '../../../con_test.php';

      $yourStarter = $_POST['Unicorn'];
      //retrieving user input from textboxes

      $database = "sf_registry";
      $db_handle = mysqli_connect (DB_SERVER, DB_USER, DB_PASS);
      $db_found = mysqli_select_db($db_handle, $database);

      if ($db_found) {
        # code...
      }
    }
    //after user choicesubmit and enter to database, redirect to header: homepage
  -->
  </body>
</html>
KEEP:
