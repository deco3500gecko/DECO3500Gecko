<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/80dbd8c441.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <style>
    body {
        min-height: 100vh;
        background-color: #fff;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
    }

    #wrapper {
		overflow-x: hidden;
	}

    #page-content-wrapper {
		min-width: 100vw;
	}

    .navbar {
		padding: 14px 20px;
		margin: 0;
	}

	.nav-link {
		padding: 0;
		font-size: 19.2px;
	}

    #sidebar-wrapper {
        max-height: 48px;
    }

    .sidebar-heading {
		padding: 0.875rem 1.25rem;
		font-size: 1.2rem;
        width: 240px;
	}

    #main {
        margin-left: -240px;
        margin-right: 240px;
        padding: 35px;
        padding-left: 250px;
        padding-right: 250px;
        min-height: 90vh;
    }

    #student-info {
        padding-left: 12px;
        padding-right: 12px;
        height: 500px;
    }

    #student-info-container {
        height: 600px;
    }

    #student-info .form-control-plaintext {
        padding-top: 0;
        padding-bottom: 0;
    }

    #attendance-analytics {
        height: 484px;
    }

    #attendance-container-row {
        height: 100px;
    }

    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-right bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading" style="background-color: #6ac6db">Class Buddy</div>
        </div>
        
        <div id="page-content-wrapper">
            
            <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #6ac6db">
                
                <div class="container-fluid">
                    
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/dashboard'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/classes'); ?>">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/teams'); ?>">Teams</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="<?php echo base_url('Welcome/rewards/unredeemed'); ?>">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="main">
                <div class="row card align-middle" style="height: 100px;">
                    <h2><?php echo $name; ?></h2>
                </div>
                

                <div class="row mt-4">
                    <div class="col-3 card mr-2" id="student-info-container">
                        <h4 class="card-title">Student Information</h4>

                        <form id="student-info" action="" class="pl-3">
                            <div class="form-group row">
                                <label for="Name" class="mb-0">Name</label>
                                <input type="text" readonly class="form-control-plaintext" id="Name" value="<?php echo $name; ?>">
                            </div>

                            <div class="form-group row">
                                <label for="Name" class="mb-0">Student ID</label>
                                <input type="text" readonly class="form-control-plaintext" id="ID" value="<?php echo $student_id; ?>">
                            </div>

                            <div class="form-group row">
                                <label for="Name" class="mb-0">Student Email</label>
                                <input type="text" readonly class="form-control-plaintext" id="Email" value="<?php echo $student_id . '@student.edu.au'; ?>">
                            </div>

                            <div class="form-group row">
                                <label for="Name" class="mb-0">Team</label>
                                <input type="text" readonly class="form-control-plaintext" id="Team" value="<?php echo $team; ?>">
                            </div>

                            <div class="form-group row">
                                <label for="Name" class="mb-0">Dietary</label>
                                <input type="text" readonly class="form-control-plaintext" id="Dietary" value="<?php echo $dietary; ?>">
                            </div>

                            <div class="form-group row">
                                <label for="Name" class="mb-0">Extra</label>
                                <input type="text" readonly class="form-control-plaintext" id="Extra" value="<?php echo $extra; ?>">
                            </div>
                        </form>
                    </div>

                    <div class="col ml-2">
                        <div class="row mb-2" id="attendance-container-row">
                            <div class="col card mr-2">
                                <h4 class="card-title">Total Current Term Days Attended</h4>
                                <p><?php echo $days_attended; ?> days</p>
                            </div>

                            <div class="col card ml-2">
                                <h4 class="card-title">Total Previous Term Days Attended</h4>
                                <p>0 days</p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col card" id="attendance-analytics">
                                <h4 class="card-title">Attendance Analytics</h4>
                                <div id="calendar_basic" style="width: 800px; "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>


</body>

<script>
    google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([
          // Many rows omitted for brevity.
          [ new Date(2020, 0, 1), 1 ],
          <?php 
            foreach ($dates as $date) {
                $date = new DateTime($date);
                echo '[new Date(' . $date->format('Y, m-1, d') . '), 30000],';
            }
          ?>
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

       var options = {
            title: "<?php echo $name; ?> Attendance",
            calendar: {
                cellSize: 15,
            },
            cellColor: {
                backgroundColor: '#76a7fa',
                color: '#a0c3ff'
            }
       };

       chart.draw(dataTable, options);
   }


</script>