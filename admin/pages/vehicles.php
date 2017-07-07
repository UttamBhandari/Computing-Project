
<style>
    #vehicle
    {
        border:0;
        position: static;
        margin: 120px 0px 0px 17%;
        padding: 0px 0px 0px 0px;
        border-radius: 25px;
        height: 500px;
    }
    #task_times
    {
        width: 50%;
    }
    h2
    {
        width: 95%;
        margin: 5px;
    }
    hr
    {
        width: 90%;

    }
    #vehicle_service
    {
        margin:0px 0px 0px 0px;
        padding: 0px;
        width: 15%;
    }
    #form_table
    {
        width: 80%;
    }
    #error_print{
        color:#f00;
    }
</style>


<div id="vehicles">
            <div id="vehicles" style="padding:0px;">

                <form action="./actions/add_vehicle.php" id="vehicle" method="post" name="book" style="border: 10px solid #555;">
                    <center>
                        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>"/>
                        <input type="hidden" id="default_date" name="default_date" value="<?php echo date("Y-m-d");?>"/>

                        <h2>Add a new Vehicle</h2>      
                        <hr />
                        <table id = "form_table" border="0">

                            <tr>
                                <td>Vehicle Name</td>
                                <td>
                                    <input type="text" name="vehicle_name" id="vehicle_name"  required="required" placeholder="Name of Vehicle."/>
                                </td>
                            </tr>
                            <tr>
                                <td>Vehicle Model</td>
                                <td>
                                    <input type="text" name="vehicle_model" id="vehicle_model" required="required" placeholder="Model of Vehicle"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Vehicle Description</td>
                                <td>
                                    <input type="text" name="vehicle_description" id="vehicle_description" required="required" placeholder="Description of Vehicle"/>
                                </td>
                            </tr>
                            <tr>

                                <td>Vehicle Type:</td>
                                <td><select name="value" id="vehicle_type_id" >
                                        <option value="">Select a Vehicle Type:</option>
                                        <option value="1">Car</option>
                                        <option value="2">Cab</option>


                                    </select></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <button  type="submit" value="Submit" name="vehicle_add" >Book</button>
                                </td>
                            </tr>
                        </table>

                    </center>
                </form>
            </div>

            <?php
            if (isset($_GET['error']))
            {
                echo "<script>alert('We do not book any task on the same date!!!! ');</script>";
            }
            ?>




    </center>
</div>