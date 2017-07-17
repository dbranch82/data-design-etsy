<!DOCTYPE html>
<html>
	<head>
		<style>h1 {text-align: center</style>
		<style> body { background-color: grey;}</style>
		<!--I made my letters pink!-->
		<style>strong, h1 { text align: center;
		color: mediumvioletred;}</style>
		<meta charset="utf-8"/>
		<title>About Mike</title>
	</head>
	<body>
		<h1 id="pageheader">Meet Mike Waters</h1>
		<img style="margin:0 auto;display:block" src="epic/image/mikefidgetspinner.jpg" alt="Mike">
		<h1>Persona</h1>
		<p><strong>Name:</strong> Mike </p>
		<p><strong>Age:</strong> 28</p>
		<p><strong>Profession :</strong> Mike makes customized fidget spinners in his spare time. He is an engineer full time.</p>
		<p><strong>Technology:</strong> Uses Mac book pro Retina when he is dealing with business or at work and a Iphone 7 plus for
			daily use.</p>
		<p><strong>Attitudes and Behaviors:</strong> Mike is ready to take his small hobby and make it into a revenue generator. He
		will be dedicating weekends and evenings to his fidget spinners. If it takes off he would be willing to quit his job and
		customize spinners full time.</p>
		<p><strong>Frustrations and Needs:</strong> Mike is looking for a place where he can display his past work and also give new
		customers a place to pick different options. He does not want a personal website to sell his product on.</p>
		<p><strong>Goals:</strong> Mike is looking to make money whilst doing something he enjoys. </p>
		<p><strong>User Story:</strong> As a user, I need to see if this site will be the appropriate place to sell my goods
		and if it will allow me to give my customers a unique experience.</p>

		<h2><strong>Use Case</strong></h2>
		<p>Mike has been looking at different websites where people can sell handmade goods.</p>
		<p>Mikes biggest sticking point is giving his customers the option of customization and also being able to show his past work.</p>
		<p>It is Thursday and Mike needs to be able to get his site up in under 30 minutes during his lunch break as he already
		has people wanting to order. The weekend is fast approaching.</p>
		<h2><strong>Interaction Flow</strong>
		</h2>
		<ul>
			<li>User will need to post items for sale by signing in, going to edit items, and listing items for sale </li>
			<li>Browser pulls up profile information and items for sale so user can post items for sale.</li>
			<li>User will need to set up different pricing for different items.</li>
			<li>Browser will pull up all items for sale in profile.</li>
		</ul>
		<h2><strong>Conceptual Model</strong></h2>
		<ul>
			<li>Profile</li>
			<li>profileId (primary key)</li>
			<li>profileEmail</li>
			<li>profilePhone</li>
			<li>profileHash</li>
			<li>profileSalt</li>
		</ul>
		<ul>
			<li>Items</li>
			<li>itemId (primary key)</li>
			<li>itemName</li>
			<li>itemPrice</li>
			<li>itemProfileId (foreign key)</li>
		</ul>
		<ul>
			<li>One profile can post multiple items 1-to-n</li>
			<li>Multiple profile can buy multiple items M-to-n</li>
			<li>One profile can check on multiple items 1-to-n</li>
		</ul>
	</body>
</html>