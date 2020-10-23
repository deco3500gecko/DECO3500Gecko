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

    table {
        width: 100%;
    }

    .autocomplete {
        /*the container must be positioned relative:*/
        position: relative;
        display: inline-block;
    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }
    
    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    .autocomplete-items div:hover {
        /*when hovering an item:*/
        background-color: #e9e9e9;
    }

    .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-right border-bottom bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading" style="background-color: #6ac6db">Class Buddy</div>
        </div>
        
        <div id="page-content-wrapper">
            
            <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #6ac6db">
                
                <div class="container-fluid">
                    
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('Welcome/classes'); ?>">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/teams'); ?>">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="main">
                <h2>Classes</h2>

                <?php 
				$attributes = ['id' => 'class-form'];
                echo form_open('Welcome/classes', $attributes);
                echo form_dropdown('class', $classes, $class);
                echo '<input type="submit" name="submit" value="Change" />';
                echo form_close();
				?>

                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addStudentModal">Add student</button>

                <form autocomplete="off" class="input-group md-form form-sm form-1 pl-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    
                    <input id="myInput" class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                    
                    
                </form>

                <table class="table table-hover">
                    <thead>
                        <tr class="table-secondary">
                            <th scope="col">STUDENT NAME</th>
                            <th scope="col">STUDENT ID</th>
                            <th scope="col">ATTENDANCE</th>
                            <th scope="col">TEAM</th>
                            <th scope="col">DIETARY</th>
                            <th scope="col">EXTRA</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($student_list as $student) { ?>
						<tr>
							<td><?php echo $student->name; ?></td>
							<td><?php echo $student->student_id; ?></td>
                            <td><?php echo $student->days_attended; ?></td>
                            <td><?php echo $student->team; ?></td>
                            <td><?php echo $student->dietary; ?></td>
                            <td><?php echo $student->extra; ?></td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button" id="dropdownMenuLink<?php echo $student->student_id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Details
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink<?php echo $student->student_id; ?>">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?php echo $student->student_id; ?>" href="">Edit Profile</a>
                                        <a class="dropdown-item" href="<?php echo base_url('Welcome/view_profile/' . $student->student_id); ?>">View Profile</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#removeModal<?php echo $student->student_id; ?>" href="">Remove Student</a>
                                    </div>
                                </div>
                            </td>
						</tr>

                        <div class="modal fade" id="exampleModal<?php echo $student->student_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open('Welcome/edit_profile'); ?>
                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $student->name; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="id" type="text" class="form-control" placeholder="Student ID" value="<?php echo $student->student_id; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="dietary" type="text" class="form-control" placeholder="Dietary" value="<?php echo $student->dietary; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="extra" type="text" class="form-control" placeholder="Extra" value="<?php echo $student->extra; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <select name="team" class="form-control">
                                                        <option value="" selected disabled hidden>Team</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Yellow">Yellow</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Blue">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" value="Save changes">
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="removeModal<?php echo $student->student_id; ?>" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Remove Student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open('Welcome/remove_student'); ?>
                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <p>By removing <?php echo $student->name; ?>, you will lose: </p>
                                                    <ul>
                                                        <li>student information</li>
                                                        <li>attendance analytics</li>
                                                    </ul>

                                                    <input name="name" type="hidden" class="form-control" placeholder="Name" value="<?php echo $student->name; ?>">
                                                    <input name="id" type="hidden" class="form-control" placeholder="Student ID" value="<?php echo $student->student_id; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-danger" value="Remove">
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

						<?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>

    <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Welcome/add_student'); ?>
                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="name" type="text" class="form-control" placeholder="Name" value="">
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="id" type="text" class="form-control" placeholder="Student ID" value="">
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="dietary" type="text" class="form-control" placeholder="Dietary" value="">
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="extra" type="text" class="form-control" placeholder="Extra" value="">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <select name="team" class="form-control">
                                    <option value="" selected disabled hidden>Team</option>
                                    <option value="Red">Red</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Green">Green</option>
                                    <option value="Blue">Blue</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Add Student">
                        </div>

                        <input type="hidden" name="class" value="<?php echo $class; ?>">
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <script>
    var js_array =<?php echo json_encode($names); ?>;  

    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
            x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
    }

    autocomplete(document.getElementById("myInput"), js_array);
    </script>

</body>