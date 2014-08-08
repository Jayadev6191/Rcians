
<script type="text/x-handlebars-template" id="mealListTmpl">
	<ul>
		<li>{{meal}}</li>
	</ul>
</script>

<div class="box1 effect8 ">
    <h3>Choose your meals</h3>
    <div class="form-group">
        <button type="button" class="btn btn-danger" id="submit_meal">Go</button>
        <input type="text" class="form-control" name="mealname" id="meal_name" placeholder="Enter your favourite food"></input>
    </div>
    
    <div class="selected_choices"></div>
    <!-- <div style="overflow: hidden; padding-right: .5em;">
       <input type="text" name="term" style="width: 100%;" />
    </div> -->
    <div>
        
    </div>
</div>
<div id="meals_container" class="container box effect8">
  <div class="form-group">
        <button type="button" class="btn btn-danger" style="float: right" id="submit_meal">Go</button>
        <input type="text" class="form-control" name="mealname" id="meal_name" placeholder="Enter your favourite food"></input>
    </div>
</div>
<script type="text/javascript" src="public/js/meals.js"></script>
