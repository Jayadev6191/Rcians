<!DOCTYPE html>
<html lang="en">

<body>
<script type="text/javascript" src="public/js/meals.js"></script>
<script type="text/x-handlebars-template" id="mealListTmpl">
	<ul>
		<li>{{meal}}</li>
	</ul>
</script>

<div id="meals_container">
  <h3>Choose your meals</h3>
	<div class="form-group">
		<button type="button" class="btn btn-danger" style="float: right" id="submit_meal">Go</button>
	    <input type="text" class="form-control" id="meal_name" placeholder="Enter your favourite food"></input>
	</div>
	
	<div class="selected_choices"></div>
    <!-- <div style="overflow: hidden; padding-right: .5em;">
       <input type="text" name="term" style="width: 100%;" />
    </div> -->
	<div>
		
	</div>
</div>

</body>
</html>