<?php
include("config.php");
$conn=mysqli_connect($servername,$username,$password,$dbname);
//$statements = array("I feel satisfied with my current salary.","My salary is sufficient to meet my expenses.","Raises in salary are too few and far between.","My salary does not match the amount of work I do.","I feel my salary does not suit my educational qualifications and experience","I am aware of all the benefits I am entitled to","I am satisfied with: LTC (Leave Travel Concession) benefits","I am satisfied with: Maternity leaves","I am satisfied with: Insurance benefits","I am satisfied with: Transportation allowance","I am satisfied with: Bonus ","I feel satisfied with the physical conditions (light, furniture, ventilation, noise, appearance etc.) of the library.","I am satisfied with my working hours.","I am able to do my job without feeling it is morally wrong or against my religious beliefs.","I am satisfied with the ICT infrastructure available to the staff.","I like the work I do here","I get to do a variety of things","I feel a sense of accomplishment after doing my work","I am able to be creative at work","I find my work is challenging and interestingn","The work I do is well-suited to my skills and aptitude","I feel I have too much work to do.","I feel bored and stuck at my job.","I feel my skills remain under-utilized here.","I feel most of my work is simple and routine","I have lot of free time at work.","When I do a good job, I receive the recognition for it","There are few rewards for those who work here","Initiatives are noticed and appreciated by my superiors and co-workers","I feel an important member of the library ","My supervisor offers constructive feedback on my performance ","Those who do well on the job stand a fair chance of being promoted","The promotions are done on time","There is too little chance for promotion for me here","People do not get ahead as fast here as they do in other places","Politics rather than performance determines who gets promoted","My job offers scope to realize my aspirations and ambitions ","I have adequate opportunities for enhancing my professional skills","This is a dead-end job","I get encouragement and opportunities for research and publishing","I get opportunities to develop leadership skills","Cooperative and cordial relationships exist overall within the library","My seniors are supportive towards me","I am friends with many of my colleagues 	","I feel I have to work harder at my job because of incompetence of people I work with","My juniors are cooperative","I am comfortable enough to ask my supervisors in case of work-related doubts  ","I feel my supervisor is competent and a good leader","My supervisor understands me and respects me","I feel my inputs are heard and encouraged ","I feel I am stressed at my job","I often think about work-related problems in my own time","I find it difficult to balance work life and family life","I feel stressed because work assignments are not fully explained ","I feel positive about working for this library.","I feel the commuting distance to work  is too much and is taking a toll on my health ","I feel happy to interact and help the users","I would advise my relatives and friends to take up this job","I am satisfied with the social status of  health science librarian","I think working as a librarian in a health institution is more satisfying than working in academic libraries","I think working as a librarian in government sector is better than  in private","I feel I get the chance to be ''somebody'' in the community","I feel I have a noble profession ","I feel I am contributing in building a knowledge society ","When new procedures are adopted, I feel I receive sufficient training on the job","The orientation I received prepared me well for doing this job","I feel I lack adequate training","My organization encourages me to attend seminars/workshops/conferences","My organization conducts periodic training for skill development of employees ","Communication seems good within this organization","There is too much complaining and gossiping in this library ","I feel the policies and procedures are clear and enforced consistently within the organization  ","There is no  bias in our organization ","Employee grievances are well-handled","I see myself working here in the future also","I have clearly defined responsibilities ","The opportunity for independent thought or action in my job is high","I plan and prioritize my work tasks on my own.","I rarely get opportunities to work independent of others. ","I feel secure in this job.","Lay offs and transfers are not that common in my job.","I frequently think of quitting the job due to its unsteadiness","I feel a constant risk of arbitrary termination/suspension from job","Use of computers and other modern technologies save time and effort and makes work easier. ","It has added to frustration and stress at work ","It has made the job more interesting","It has helped me devote more time to user service rather than being stuck in paperwork","It has made work mechanical and boring","It has made me isolated from others","There is too much dependency on ICT which gives me less chance to use my skills. ","I arrive on time ","I  think of ways of doing my job more effectively","I take initiatives at work" ,"I am absent from work" ,"I attend staff meetings","I meet my work deadlines");
// foreach($statements as $question){
// echo $query = "INSERT INTO questions (statement) VALUES (\"$question\");";
// echo "<br>";
// //mysqli_query($conn,$query);
// }
?>
<html>
<head>
  <title>Display BAKE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

<style>
th{
	text-align: center;
}
</style>

<script>
function showCount(type,sno) {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                var str = xmlhttp.responseText.split(",");
	                console.log(str[0] + "," + str[1]);
	                document.getElementById(str[0]).innerHTML = str[1];
	            }
	        }
	        xmlhttp.open("GET", "counting.php?for=" + type + "&sno=" + sno, true);
	        xmlhttp.send();
	    }
</script>
</head>
<body>
	<div class="container-fluid">
<?php
$query = "SELECT * FROM questions";

$res = mysqli_query($conn,$query);

$num_rows = mysqli_num_rows($res);


//Print table headers
echo "<br><table class='table table-hover' border='2'><tr>";
				
echo "<th>Sno</th>";
echo "<th>Statement</th>";
//echo "<th></th>";
echo "<th colspan='3' align='center' style='background-color:green'>SA</th>";

echo "<th colspan='3'>A</th>";

echo "<th colspan='3' style='background-color:orange'>N</th>";

echo "<th colspan='3'>D</th>";

echo "<th colspan='3' style='background-color:green'>SD</th>";

// echo "<th></th>";
// echo "<th></th>";
// echo "<th>A</th>";
// echo "<th></th>";
// echo "<th></th>";

// echo "<th>N</th>";
// echo "<th></th>";
// echo "<th></th>";

// echo "<th>D</th>";
// echo "<th></th>";
// echo "<th></th>";

// echo "<th>SD</th>";
echo "</tr>";
$i = 0;

//echo "<td>"  . "<span id='upvote$id' class='down' onclick='showCount($id)'><i class='fa fa-caret-up'></i></span></td>"; 

while($i < $num_rows){

	$row = mysqli_fetch_assoc($res);
	echo "<tr>";
	$sno = $row['Sno'];
	echo "<td>" . $row['Sno'] . "</td>";
	echo "<td style='text-align:left;'>" . $row['Statement'] . "</td>";
	echo "<td id='SA-down-$sno' onclick=\"showCount('SA-down',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/bubbles-flat-style/512/Less-20.png'></td><td style='background:#bcbcbc'><span id='SA-$sno' style='font-size: 18px;'>" . $row['SA'] . "</span></td>" . "<td id='SA-up-$sno' onclick=\"showCount('SA-up',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/add-circle-green-20.png'></td>";
	echo "<td id='A-down-$sno' onclick=\"showCount('A-down',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/bubbles-flat-style/512/Less-20.png'></td><td style='background:#bcbcbc'><span id='A-$sno' style='font-size: 18px;'>" . $row['A'] . "</span></td>" . "<td id='A-up' onclick=\"showCount('A-up',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/add-circle-green-20.png'></td>";
	echo "<td id='N-down-$sno' onclick=\"showCount('N-down',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/bubbles-flat-style/512/Less-20.png'></td><td style='background:#bcbcbc'><span id='N-$sno' style='font-size: 18px;'>" . $row['N'] . "</span></td>" . "<td id='N-up' onclick=\"showCount('N-up',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/add-circle-green-20.png'></td>";
	echo "<td id='D-down-$sno' onclick=\"showCount('D-down',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/bubbles-flat-style/512/Less-20.png'></td><td style='background:#bcbcbc'><span id='D-$sno' style='font-size: 18px;'>" . $row['D'] . "</span></td>" . "<td id='D-up' onclick=\"showCount('D-up',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/add-circle-green-20.png'></td>";
	echo "<td id='SD-down-$sno' onclick=\"showCount('SD-down',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/bubbles-flat-style/512/Less-20.png'></td><td style='background:#bcbcbc'><span id='SD-$sno' style='font-size: 18px;'>" . $row['SD'] . "</span></td>" . "<td id='SD-up' onclick=\"showCount('SD-up',$sno)\" style='cursor:pointer;'><img height='15' src='https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/add-circle-green-20.png'></td>";
	echo "</tr>";
	$i++;
}
?>
</div>