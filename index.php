<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}
h1{
	text-align: center;
	background-color: blue;
	color: white;
	font-family: Italic;
	padding: 20px;
	border: 5px solid pink;
}
a{
	text-decoration:none;
	color: white;
	transition: 0.6s ease;
}
p{
	text-align: center;
	background-color: blue;
	color: white;
	font-family: Italic;
	padding: 10px;
	border: 5px solid pink;
}
.outer-grid{
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid{
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
@media screen and (max-width: 800px){
	.inner-grid{
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px){
	.inner-grid{
		flex: 100%;
		max-width: 100%;
	}
}
</style>
<body>
<h1>MY PERSONAL PHOTO ALBUM</h1>
<div class ="outer-grid">
<div class ="inner-grid">
<a href ="homi3.html">
<img src="image.jpg">
<p>ELEMENTARY DAYS</p>
<img src="e6.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="homi2.html">
<img src="image.jpg">
<p>HIGH SCHOOL DAYS</p>
<img src="h6.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="homi4.html">
<img src="image.jpg">
<p>SENIOR HIGH SCHOOL DAYS</p>
<img src="s7.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="homi5.html">
<img src="image.jpg">
<p>COLLEGE DAYS</p>
<img src="c6.JPEG" height="222">
</div>
</div>
</body>
</html>