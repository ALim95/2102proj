<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CrowdFund | Home</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style>
    body {
      padding-top: 10px;
      font: 400 18px/1.5 "Roboto", sans-serif;
      background-color: #f4f4f4;
      width: 85%;
      margin: auto;
    }

    #target-reached {
      color: rgb(17, 170, 17);
    }

    #target-near {
      color: rgb(53, 240, 253);
    }

    a {
      color: #222;
      text-decoration: none;
    }

    a:visited {
      color: #222;
    }

    a:hover {
      color: grey;
    }

    .search {
      width: 100%;
      position: relative
    }

    .searchTerm {
      float: left;
      width: 100%;
      border: 3px solid #222;
      padding: 5px;
      height: 20px;
      border-radius: 5px;
      outline: none;
      color: #9DBFAF;
    }

    .searchTerm:focus {
      color: #222;
    }

    .searchButton {
      position: absolute;
      right: -50px;
      width: 40px;
      height: 36px;
      border: 1px solid #222;
      background: #222;
      text-align: center;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
    }

    /*Resize the wrap to see the search bar change!*/

    .wrap {
      width: 30%;
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    */
    /* info (hed, dek, source, credit) */

    .rg-container {
      width: 85%;
      margin: auto;
      padding: 1em 0.5em;
      color: #222;
    }

    .rg-header {
      margin-bottom: 1em;
      text-align: left;
    }

    .rg-header>* {
      display: block;
    }

    .rg-hed {
      display: grid; 
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
      font-weight: bold;     
    }

    .rg-hed .title {
      font-size: 1.8em;
      grid-column: 1 / span 1;
    }

    .rg-hed .userProfile{
      grid-column: 2 / span 5;
      align-self: center;
      justify-self: end;
      font-size: 1em;
    }

    .rg-dek {
      font-size: 1em;
    }

    .rg-dek form {
      display: inline-block;
    }

    .rg-dek form button#createproject {
      background-color: #222;
      border: 3px solid #222;
      color: #f4f4f4;
      cursor: pointer;
      border-radius: 12px;
    }

    /* table */

    table.rg-table {
      width: 100%;
      margin-bottom: 0.5em;
      font-size: 1em;
      border-collapse: collapse;
      border-spacing: 0;
    }

    table.rg-table tr {
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
      text-align: left;
      color: #333;
    }

    table.rg-table thead {
      border-bottom: 3px solid #ddd;
    }

    table.rg-table tr {
      border-bottom: 1px solid #ddd;
      color: #222;
    }

    table.rg-table tr.highlight {
      background-color: #dcf1f0 !important;
    }

    table.rg-table.zebra tr:nth-child(even) {
      background-color: #f6f6f6;
    }

    table.rg-table th {
      font-weight: bold;
      padding: 0.35em;
      font-size: 0.9em;
    }

    table.rg-table td {
      padding: 0.35em;
      font-size: 0.9em;
    }

    table.rg-table td a {
      color: #222;
      text-decoration: none;
    }

    table.rg-table td a:visited {
      color: #222;
    }

    table.rg-table td a:hover {
      color: grey;
    }

    table.rg-table .highlight td {
      font-weight: bold;
    }

    table.rg-table th.number,
    td.number {
      text-align: right;
    }

    /* media queries */

    @media screen and (max-width: 600px) {
      .rg-container {
        max-width: 600px;
        margin: 0 auto;
      }
      .rg-hed {
      display: inline-block;
    }
      table.rg-table {
        width: 100%;
      }
      table.rg-table tr.hide-mobile,
      table.rg-table th.hide-mobile,
      table.rg-table td.hide-mobile {
        display: none;
      }
      table.rg-table thead {
        display: none;
      }
      table.rg-table tbody {
        width: 100%;
      }
      table.rg-table tr,
      table.rg-table th,
      table.rg-table td {
        display: block;
        padding: 0;
      }
      table.rg-table tr {
        border-bottom: none;
        margin: 0 0 1em 0;
        padding: 0.5em;
      }
      table.rg-table tr.highlight {
        background-color: inherit !important;
      }
      table.rg-table.zebra tr:nth-child(even) {
        background-color: transparent;
      }
      table.rg-table.zebra td:nth-child(even) {
        background-color: #f6f6f6;
      }
      table.rg-table tr:nth-child(even) {
        background-color: transparent;
      }
      table.rg-table td {
        padding: 0.5em 0 0.25em 0;
        border-bottom: 1px dotted #ccc;
        text-align: right;
      }
      table.rg-table td[data-title]:before {
        content: attr(data-title);
        font-weight: bold;
        display: inline-block;
        content: attr(data-title);
        float: left;
        margin-right: 0.5em;
        font-size: 0.95em;
      }
      table.rg-table td:last-child {
        padding-right: 0;
        border-bottom: 2px solid #ccc;
      }
      table.rg-table td:empty {
        display: none;
      }
      table.rg-table .highlight td {
        background-color: inherit;
        font-weight: normal;
      }
    }
  </style>
</head>

<?php
session_start();
   $db = pg_connect("host=localhost port=5432 dbname=projectdemo user=postgres password=cowcowmilk");
   if (!$db) {
    echo "An error occured when connecting to DB.\n";
    exit;
  }  
  $user = $_SESSION['email'];
  if (isset($_POST['submit'])) {
      $query = pg_query($db, "SELECT title, (amountfund*100/targetamount) as pctamount, targetamount, projectid, enddate FROM project_advertised where upper(title) like upper('%$_POST[project_title]%')");
  } else if (isset($_POST['showfunded'])) {
    $query = pg_query($db, "SELECT title, (amountfund*100/targetamount) as pctamount, targetamount, projectid, enddate FROM project_advertised where (amountfund*100/targetamount) >= 100");
  } else {
      $query = pg_query($db, "SELECT title, (amountfund*100/targetamount) as pctamount, targetamount, projectid, enddate FROM project_advertised");
  }
  if (!$query) {
  echo "An error occured while querying DB.\n";
  exit;
}
?>

<body>
  <div class='rg-container'>
    <table class='rg-table' summary='CrowdFund'>
      <caption class='rg-header'>
        <span class='rg-hed'>
          <a class='title' href="home.php">CrowdFund</a>
          <?php
            echo ("<div class='userProfile'>Logged in as: ".$user."</div>")
          ?>
        </span>
        <span class='rg-dek'>
          <form action="addproject.php">
            <button type="submit" id="createproject" />Add Project
            <i class="fa fa-plus"></i>
            </button>
          </form>
          <form action="home.php" method="POST">
            <button type="submit" name="showfunded" id="createproject" />Show Funded
            <i class="fa fa-check"></i>
            </button>
          </form>
        </span>
      </caption>
      <form action="home.php" method="POST">
        <div class="wrap">
          <div class="search">
            <input type="text" name="project_title" class="searchTerm" placeholder="Search a project">
            <button type="submit" name="submit" class="searchButton">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <thead>
        <tr>
          <th class='text '>Project Title</th>
          <th class=' '>% Funded</th>
          <th class=' '>Target</th>
          <th class=' '>End Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while ($row = pg_fetch_array($query)) {
              echo "<tr>";
              echo "<td class='text ' data-title='Project Title'><a href=\"viewproject.php?projectid=".$row['projectid']."\">".$row['title']."</a></td>";
              if ($row['pctamount'] >= 100){
                  echo "<td class='text' data-title='% Funded'><span id = 'target-reached'>".$row['pctamount']."%</span></td>";
              } else if ($row['pctamount'] >= 65){
                  echo "<td class='text' data-title='% Funded'><span id = 'target-near'>".$row['pctamount']."%</span></td>";
              } else {
                  echo "<td class='text' data-title='% Funded'>".$row['pctamount']."%</td>";
              }                
              echo "<td class='text' data-title='Target'>$".$row['targetamount']."</td>"; 
              echo "<td class='text' data-title='End Date'>".$row['enddate']."</td>";
              echo "</tr>";
          }
          ?>
      </tbody>
    </table>
  </div>
</body>

</html>