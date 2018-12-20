<?php

session_start();

if(isset($_POST['username'])){
	if($_POST['username'] == 'bdaddy4' and $_POST['password'] == 'americanpie'){
		$_SESSION['username'] = 'bdaddy4';
		echo "Login Good : ";
	}
	else{
		echo "Invalid Login";
	}
}

if(isset($_POST['emailto'])){
	// the message
	$msg = "Password Reminder\nYour password is : americanpie";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail($_POST['emailto'],"BigDaddyCakes Password Reminder",$msg);

}

if(isset($_SESSION['username'])){
	echo "<a href='pages/d21nudh2ud2j1d2dassd0821dx.php'>Go To My Secret Recipes</a>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>BigDaddyCakes</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a id='top' class='jump'></a>
		<header>
			<h1>BigDaddyCakes</h1>
			<h4>
				An incredible cake-making website straight out of the 90's.
			</h4>
		</header>
		<form method="POST">
			<input type="text" name="username" placeholder='Username'>
			<input type="text" name="password" placeholder='Password'>
			<input type="submit" value="Login">
		</form>
		<img src="http://worldartsme.com/images/cake-clipart-1.jpg" width="20%"/>
		<nav>
			<h1>Recipes</h1>
			<div id='links'>
				<a href="#chocolate">Chocolate</a>
				<a href="#vanilla">Vanilla</a>
				<a href="#angel">Angel Food</a>
				<a href="#velvet">Red Velvet</a>
				<a href="#island">Islander</a>
			</div>
		</nav>
		<div id="chocolate">
		<h2>Chocolate</h2>
		<h4>Posted by bdaddy4 12/16/2018</h4>
		<pre>
The Best Chocolate Cake Recipe - A one bowl chocolate cake recipe that is quick, easy, and delicious! Updated with gluten-free, dairy-free, and egg-free options!
PRINT RECIPE
4.82 from 2220 votes
Did you make this recipe?
Leave a review »
Ingredients
2 cups all-purpose flour
2 cups sugar
3/4 cup unsweetened cocoa powder
2 teaspoons baking powder
1 1/2 teaspoons baking soda
1 teaspoon salt
1 teaspoon espresso powder
1 cup milk buttermilk, almond, or coconut milk
1/2 cup vegetable canola oil, or melted coconut oil
2 large eggs
2 teaspoons vanilla extract
1 cup boiling water
Chocolate Buttercream Frosting Recipe
Directions

Preheat oven to 350º F. Prepare two 9-inch cake pans by spraying with baking spray or buttering and lightly flouring.

For the chocolate cake:
Add flour, sugar, cocoa, baking powder, baking soda, salt and espresso powder to a large bowl or the bowl of a stand mixer. Whisk through to combine or, using your paddle attachment, stir through flour mixture until combined well.
Add milk, vegetable oil, eggs, and vanilla to flour mixture and mix together on medium speed until well combined. Reduce speed and carefully add boiling water to the cake batter until well combined.
Distribute cake batter evenly between the two prepared cake pans. Bake for 30-35 minutes, until a toothpick or cake tester inserted in the center of the chocolate cake comes out clean.

Remove from the oven and allow to cool for about 10 minutes, remove from the pan and cool completely.
Frost cake with Chocolate Buttercream Frosting.
Notes
The cake batter will be very thin after adding the boiling water. This is correct and results in the most delicious and moist chocolate cake I've ever tasted! xo

Freezer Friendly

Let the baked cake layers cool completely. Wrap them well with plastic wrap and then with foil. Put each layer into a freezer bag and freeze up to 2 months. To serve, thaw in the refrigerator overnight. The next day, the layers are ready to fill and frost.
		</pre>
		</div>
		<div id="vanilla">
		<h2>Vanilla</h2>
		<h4>Posted by bdaddy4 12/17/2018</h4>
		<pre>
This Classic Vanilla Cake pairs fluffy vanilla cake layers with a silky vanilla buttercream. The perfect cake for birthdays, weddings, or any occasion! | livforcake.com
4.52 from 97 votes
 PRINT
Vanilla Cake with Vanilla Buttercream
This Classic Vanilla Cake pairs fluffy vanilla cake layers with a silky vanilla buttercream. The perfect cake for birthdays, weddings, or any occasion!

 Course Dessert
 Type Cake
 Keyword Vanilla cake
 Prep Time 2 hours
 Cook Time 35 minutes
 Total Time 2 hours 35 minutes
 Servings 12
  694 kcal
 Author Olivia

Report this ad
 
INGREDIENTS
Vanilla Cake:
2 1/4 cups all-purpose flour
2 1/4 tsp baking powder
3/4 tsp salt
3/4 cup unsalted butter room temperature
1 1/2 cup granulated sugar
3 large eggs room temperature
1 1/2 tsp vanilla
1 cup buttermilk or whole milk, room temperature
Vanilla Buttercream:
6 large egg whites
1 1/2 cups granulated sugar
2 cups unsalted butter room temperature
2 tsp vanilla
Assembly:
confetti sprinkles
nonpareils
US Customary - Metric
INSTRUCTIONS
Vanilla Cake:
Preheat oven to 350F. Grease and flour two 8" cake rounds and line with parchment.

In a medium bowl, whisk flour, baking powder, and salt until well combined. Set aside.

Using a stand mixer fitted with a paddle attachment, cream butter and sugar on med-high until pale and fluffy (approx 3mins). Reduce speed and add eggs one at a time fully incorporating after each addition. Add vanilla. 

Alternate adding flour mixture and buttermilk, beginning and ending with flour (3 additions of flour and 2 of milk). Fully incorporating after each addition.

Bake for 30-35mins or until a toothpick inserted into the center comes out mostly clean.

Place cakes on wire rack to cool for 10mins then turn out onto wire rack. 

Vanilla Buttercream:
Place egg whites and sugar into the bowl of a stand mixer, whisk until combined.*

Place bowl over a double boiler on the stove and whisk constantly until the mixture is hot and no longer grainy to the touch (approx. 3mins). Or registers 160F on a candy thermometer.

Place bowl on your stand mixer and whisk on med-high until the meringue is stiff and cooled (the bowl is no longer warm to the touch (approx. 5-10mins)).

Switch to paddle attachment. Slowly add cubed butter and mix until smooth.**

Add vanilla and whip until smooth.

Assembly:
Place one layer of cake on a cake stand or serving plate. Top with approximately 1 cup of buttercream. Repeat with remaining layer and crumb coat the cake. Chill for 20mins.

Frost the top and sides of the cake and smooth with a bench scraper.

If desired, use a decorating comb to give texture to the sides.***

Mix confetti and nonpareils in a small bowl. Press sprinkles gently along the bottom of the cake and sprinkle along the top. For the speckled sides, I grabbed a pinch of sprinkles and tossed them randomly at the sides.

Pipe rosettes using a 1M tip with remainder of frosting.

NOTES
* Ensure there is NO trace of egg yolks in your whites and that your mixer bowl and whisk is completely grease free or your meringue won't stiffen.
** The buttercream may look like it's curdled at some point. Keep mixing until it is completely smooth.
		</pre>
		</div>
		<div id="angel">
		<h2>Angel Food Cake</h2>
		<h4>Posted by bdaddy4 12/18/2018</h4>
		<pre>
Ingredients
1 3/4 cups sugar

1/4 teaspoon salt

1 cup cake flour, sifted

12 egg whites (the closer to room temperature the better)

1/3 cup warm water

1 teaspoon orange extract, or extract of your choice

1 1/2 teaspoons cream of tartar


Directions

WATCH	Watch how to make this recipe.
Preheat oven to 350 degrees F.
In a food processor spin sugar about 2 minutes until it is superfine. Sift half of the sugar with the salt the cake flour, setting the remaining sugar aside.
In a large bowl, use a balloon whisk to thoroughly combine egg whites, water, orange extract, and cream of tartar. After 2 minutes, switch to a hand mixer. Slowly sift the reserved sugar, beating continuously at medium speed. Once you have achieved medium peaks, sift enough of the flour mixture in to dust the top of the foam. Using a spatula fold in gently. Continue until all of the flour mixture is incorporated.
Carefully spoon mixture into an ungreased tube pan. Bake for 35 minutes before checking for doneness with a wooden skewer. (When inserted halfway between the inner and outer wall, the skewer should come out dry).
Cool upside down on cooling rack for at least an hour before removing from pan.
Cook’s Note
Since they're easier to separate use the freshest eggs you can get.
		</pre>
		</div>
		<div id="velvet">
		<h2>Red Velvet</h2>
		<h4>Posted by bdaddy4 12/19/2018</h4>
		<pre>
Ingredients
Vegetable oil for the pans

2 1/2 cups all-purpose flour

1 1/2 cups sugar

1 teaspoon baking soda

1 teaspoon fine salt

1 teaspoon cocoa powder

1 1/2 cups vegetable oil

1 cup buttermilk, at room temperature

2 large eggs, at room temperature

2 tablespoons red food coloring (1 ounce)

1 teaspoon white distilled vinegar

1 teaspoon vanilla extract

Cream Cheese Frosting, recipe follows

Crushed pecans, for garnish

Cream Cheese Frosting:
1 pound cream cheese, softened

4 cups sifted confectioners' sugar

2 sticks unsalted butter (1 cup), softened

1 teaspoon vanilla extract


Directions

WATCH	Watch how to make this recipe.
Preheat the oven to 350 degrees F. Lightly oil and flour three 9 by 1 1/2-inch round cake pans.
In a large bowl, sift together the flour, sugar, baking soda, salt, and cocoa powder. In another large bowl, whisk together the oil, buttermilk, eggs, food coloring, vinegar, and vanilla.
Using a standing mixer, mix the dry ingredients into the wet ingredients until just combined and a smooth batter is formed.
Divide the cake batter evenly among the prepared cake pans. Place the pans in the oven evenly spaced apart. Bake, rotating the pans halfway through the cooking, until the cake pulls away from the side of the pans, and a toothpick inserted in the center of the cakes comes out clean, about 30 minutes.
Remove the cakes from the oven and run a knife around the edges to loosen them from the sides of the pans. One at a time, invert the cakes onto a plate and then re-invert them onto a cooling rack, rounded-sides up. Let cool completely.
Frost the cake. Place 1 layer, rounded-side down, in the middle of a rotating cake stand. Using a palette knife or offset spatula spread some of the Cream Cheese Frosting over the top of the cake. (Spread enough frosting to make a 1/4 to 1/2-inch layer.) Carefully set another layer on top, rounded-side down, and repeat. Top with the remaining layer and cover the entire cake with the remaining frosting. Sprinkle the top with the pecans.
Cream Cheese Frosting:
In a standing mixer fitted with the paddle attachment, or with a hand-held electric mixer in a large bowl, mix the cream cheese, sugar, and butter on low speed until incorporated. Increase the speed to high, and mix until light and fluffy, about 5 minutes. (Occasionally turn the mixer off, and scrape the down the sides of the bowl with a rubber spatula.)
Reduce the speed of the mixer to low. Add the vanilla, raise the speed to high and mix briefly until fluffy (scrape down the bowl occasionally). Store in the refrigerator until somewhat stiff, before using. May be stored in the refrigerator for 3 days.
		</pre>
		</div>
		<div id="island">
			<h2>Islander</h2>
			<p>This recipe is SECRET. Sign in above to view it.</p>
		</div>
	</body>
	<footer>
		<span>Copyright BigDaddy</span>
		<span>2018</span><br>
		<p>Forgot Password?</p>
		<form method="POST">
			<input type="hidden" name="emailto" value="bigdaddyman@myemailserver.com">
			<input type="submit" value="Send Password Reminder">
		</form>
	</footer>
</html>