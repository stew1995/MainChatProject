<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 12/08/2017
 * Time: 11:01
 */

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/calender.css">
</head>
<body>

<div class="row">
    <div class="col-6 col-md-4 calenderFormContainor">

        <div class="col-md-12 inputContanor">
            <h2>Create Event....</h2>
            <form class="">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <!--Title-->
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control form-control-sm" id="inlineFormInputName2" placeholder="Title of event">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Summary"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputAddress" class="col-form-label">Address</label>
                        <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Address">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label   for="inputAddress" class="col-form-label">Start: </label>
                        <input type="datetime-local" class="form-control form-control-sm" id="inputStart" placeholder="Start Date">
                    </div>
                    <div class="form-group col-md-6">
                        <label  for="inputAddress" class="col-form-label">End: </label>
                        <input type="datetime-local" class="form-control form-control-sm" id="inputEnd">
                    </div>
                </div>

                <form-row>
                    <div class="form-group col-md-12">
                        <label class="sr-only" for="inlineFormInputGroup">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Email of User">
                            <div class="input-group-addon">+</div>
                        </div>
                    </div>
                </form-row>
                <form-row>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect2">Emails added</label>
                        <select multiple class="form-control form-control-sm" id="exampleFormControlSelect2">

                        </select>
                    </div>
                </form-row>
                <div class="form-row">
                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Recurrence</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">
                    <option selected>Choose...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">5</option>
                    <option value="3">6</option>
                    <option value="3">7</option>
                </select>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <div class="col-12 col-md-8">

        <!--Calender embed-->
        <iframe src="https://calendar.google.com/calendar/embed?src=swflack%40gmail.com&ctz=Europe/London" style="border: 0" width="900" height="800" frameborder="0" scrolling="no"></iframe>
    </div>

</div>




<script src="js/mapjs.js"></script>

</body>
</head>
</html>

