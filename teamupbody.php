<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"
	href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script
	src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<meta charset="utf-8">
<style>
	.picture{	
		padding:0px 10px 20px 10px;
		border:0px  solid  red;
		}
	#content{
		position:relative;		
		border:0px  solid  black;
		text-align:left;	
		}	
	#checkbox_sport_find{
		padding:0px 10px 15px 10px;
		position:absolute;
		top:-45px;
		left:0px;	
		border:0px  solid  blue;
		float:left;
		line-height:105px;
		text-align:left;
		}
	#radio_sport_create{
		padding:0px 10px 15px 10px;
		position:absolute;
		top:-45px;
		left:0px;	
		border:0px  solid  blue;
		float:left;
		line-height:105px;
		text-align:left;
		}

	.date{
		display:inline-block;
		width:93%;
		border:0px  solid  blue;	
		}

	#time_start{
		display:inline-block;
		border:0px  solid  green;	
		width:45%;	
		}
	#time_end{
		display:inline-block;
		border:0px  solid  green;	
		width:45%;
		}
	.picture_time{
		position:relative;
		border:0px  solid  green;
		display:inline-block;
		float:left;	
		}
	.font_date_time{
		font-size:30px;	
		color:rgb(66,134,245);
		border:0px  solid  red;
		}
	.name_place{
		position:relative;
		border:0px  solid  blue;
		}	
	.picture_name{	
		border:0px  solid  green;
		width:30px;
		}
	.font_name{
		position:absolute;
		float:left;
		top:-45px;
		left:40px;
		border:0px  solid  red;
		}
	.font_date_time_create{	
		color:rgb(66,134,245);
		font-size:30px;	
		}
</style>
</head>
<body>
	<div data-role="page" id="find_index">
		<div class="ui-btn-active" data-role="header">
			<h1>Find Events</h1>
		</div>

		<div class="ui-body-c" data-role="header">
			<h1>Events type</h1>			
		</div>
		
		<div data-role="content" >
			<div id="content" >
				<br/>
				
				<img src="badminton.png" class="picture" width=80px;>
				<img src="basketball.png" class="picture" width=80px;>
				<img src="football.png" class="picture" width=80px;>
				<img src="pingpong.png" class="picture" width=80px;>
				 
				<img src="tennis.png" class="picture" width=80px;>
				<img src="cycling.png" class="picture" width=80px;>
				<img src="squash.png" class="picture" width=80px;>
				<img src="cricket.png" class="picture" width=80px;>
				
				<img src="running.png" class="picture" width=80px;>
				<img src="pool.png" class="picture" width=80px;>
				<img src="vollyball.png" class="picture" width=80px;>&nbsp;&nbsp;
				<img src="more.png" class="picture" width=80px;>
				
				<div >
					<form method="post" action="/demo/sport_find.php">
						<div data-role="content" id="checkbox_sport_find">     
							<br/>
							<label for ="badminton" >Badminton</label>       
							<input type="checkbox" data-mini="true" data-role="none" value="badminton" id="badminton" name="sport_find">       
							<label for="basketball">&nbsp;Basketball</label>
							<input type="checkbox" value="basketball" data-role="none" id="basketball" name="sport_find">
							<label for="football">&nbsp;&nbsp;Football&nbsp;</label>
							<input type="checkbox" value="football" data-role="none" id="football" name="sport_find">
							<label for="pingpong">&nbsp;&nbsp;&nbsp;Pingpong&nbsp;</label>
							<input type="checkbox" value="pingpong" data-role="none" id="pingpong" name="sport_find"> 
							<label for ="tennis" >&nbsp;&nbsp;&nbsp;&nbsp;Tennis&nbsp;&nbsp;&nbsp;</label>       
							<input type="checkbox" data-mini="true" data-role="none" value="tennis" id="tennis" name="sport_find">       
							<label for="cycling">&nbsp;&nbsp;&nbsp;Cycling&nbsp;&nbsp;&nbsp;</label>
							<input type="checkbox" value="cycling" data-role="none" id="cycling" name="sport_find">
							<label for="squash">&nbsp;&nbsp;&nbsp;Squash&nbsp;&nbsp;</label>
							<input type="checkbox" value="squash" data-role="none" id="squash" name="sport_find">
							<label for="cricket">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cricket&nbsp;&nbsp;&nbsp;</label>
							<input type="checkbox" value="cricket" data-role="none" id="cricket" name="sport_find"> 
							<label for ="running" >&nbsp;&nbsp;&nbsp;Running&nbsp;&nbsp;</label>       
							<input type="checkbox" data-mini="true" data-role="none" value="badminton" id="badminton" name="sport_find">  
							<label for ="pool" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pool&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>       
							<input type="checkbox" data-mini="true" data-role="none" value="badminton" id="badminton" name="sport_find">  
							<label for ="vollyball" >&nbsp;&nbsp;&nbsp;Vollyball&nbsp;</label>       
							<input type="checkbox" data-mini="true" data-role="none" value="badminton" id="badminton" name="sport_find"> 
						</div>
						<br/>
						<br/>
						<div class="picture_time">
							<img src="date_time.png" width="30px" height="30px">  
							<span class="font_date_time">&nbsp;&nbsp;Date and Time</span>          
						</div>
						  
						<div id="date_time_find">
							<span class="date">											
							<br/>
								<input type="date" name="date_event" id="date_event" width=60px;>
							</span>
							<br/>
							<br/>
							<span class="time">	
								<span id="time_start">
									<input type="time" name="time_start" />				
								</span>
								<span>~</span>
								<span id="time_end">
									<input type="time" name="time_end" />
								</span>
							</span>						 
						</div>
						<input type="submit" data-inline="true" value="Search">
					</form>        
				</div>         
			</div>
        </div>
        <br/>  

		<div data-role="footer" data-position="fixed" data-id="footernav"
			data-theme="c">
			<div data-role="navbar">
				<ul>
					<li><a href="#" class="ui-btn-active ui-state-persist" data-icon="home">Find Events</a></li>
					<li><a href="#create_index" data-icon="arrow-r">Create Events</a></li>
					<li><a href="#friend_index" data-icon="home">Friends</a></li>
					<li><a href="#login_index" data-icon="home">Profile</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div data-role="page" id="create_index">
		<div data-role="header" data-position="fixed" data-id="headernav"
			data-theme="b">
			<h1>Create an Event</h1>
		</div>
		<div data-role="header" data-id="headernav" data-theme="c">
			<h1>Events type</h1>			
		</div>

		<div data-role="content" >
			<div id="content" >
			<br/>			
			
			<img src="badminton.png" class="picture" width=80px;>
			<img src="basketball.png" class="picture" width=80px;>
			<img src="football.png" class="picture" width=80px;>
			<img src="pingpong.png" class="picture" width=80px;>
			 
			<img src="tennis.png" class="picture" width=80px;>
			<img src="cycling.png" class="picture" width=80px;>
			<img src="squash.png" class="picture" width=80px;>
			<img src="cricket.png" class="picture" width=80px;>
			
			<img src="running.png" class="picture" width=80px;>
			<img src="pool.png" class="picture" width=80px;>
			<img src="vollyball.png" class="picture" width=80px;>&nbsp;&nbsp;
			<img src="more.png" class="picture" width=80px;>
			
				<div >
					<form method="post" action="/demo/sport_create.php">
						<div id="radio_sport_create">    
							<br/>
							<label for ="badminton" >Badminton</label>       
							<input type="radio" data-mini="true" data-role="none" value="badminton" id="badminton" name="sport_create">       
							<label for="basketball">&nbsp;Basketball</label>
							<input type="radio" value="basketball" data-role="none" id="basketball" name="sport_create">
							<label for="football">&nbsp;&nbsp;Football&nbsp;</label>
							<input type="radio" value="football" data-role="none" id="football" name="sport_create">
							<label for="pingpong">&nbsp;&nbsp;&nbsp;Pingpong&nbsp;</label>
							<input type="radio" value="pingpong" data-role="none" id="pingpong" name="sport_create"> 
							<label for ="tennis" >&nbsp;&nbsp;&nbsp;&nbsp;Tennis&nbsp;&nbsp;&nbsp;</label>       
							<input type="radio" data-mini="true" data-role="none" value="tennis" id="tennis" name="sport_create">       
							<label for="cycling">&nbsp;&nbsp;&nbsp;Cycling&nbsp;&nbsp;&nbsp;</label>
							<input type="radio" value="cycling" data-role="none" id="cycling" name="sport_create">
							<label for="squash">&nbsp;&nbsp;&nbsp;Squash&nbsp;&nbsp;</label>
							<input type="radio" value="squash" data-role="none" id="squash" name="sport_create">
							<label for="cricket">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cricket&nbsp;&nbsp;&nbsp;</label>
							<input type="radio" value="cricket" data-role="none" id="cricket" name="sport_create"> 
							<label for ="running" >&nbsp;&nbsp;&nbsp;Running&nbsp;&nbsp;</label>       
							<input type="radio" data-mini="true" data-role="none" value="running" id="running" name="sport_create">  
							<label for ="pool" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pool&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>       
							<input type="radio" data-mini="true" data-role="none" value="pool" id="pool" name="sport_create">  
							<label for ="vollyball" >&nbsp;&nbsp;&nbsp;Vollyball&nbsp;</label>       
							<input type="radio" data-mini="true" data-role="none" value="vollyball" id="vollyball" name="sport_create">  
						</div>
						<div>
							<br/>
							<br/>
							<img src="name.png" class="picture_name" width="30px" height="30px">  
							<input type = "text" name ="name_event" class ="font_name" placeholder="Giving an event name..">
							<img src="name.png" class="picture_name" width="30px" height="30px"> 
							<input type = "text" name ="name_place" class ="font_name" placeholder="Sports Location..">
							<img src="participant.png" class="picture_name" width="30px" height="30px">
							<input type = "text" name ="number_participant" class ="font_name" placeholder="Number of participants..">
							<br/>
							<img src="date_time.png" class="picture_name" width="30px" height="30px">  
							<span class="font_date_time_create">&nbsp;Date and Time</span>
							<span class="date">	
								<input type="date" name="date_event" id="date_event" width=60px;>
							</span>
							<br/>
							<br/>
							<span class="time">	
								<span id="time_start">
									<input type="time" name="time_start" />				
								</span>
								<span>~</span>
								<span id="time_end">
									<input type="time" name="time_end" />
								</span>
							</span>
							<br/> 
							<br/>							
						</div>
						<input type="submit" data-inline="true" value="Create">
					</form>        
				</div>         
			</div>
        </div>
        <br/>

		<div data-role="footer" data-position="fixed" data-id="footernav"
			data-theme="c">
			<div data-role="navbar">
				<ul>
					<li><a href="#find_index" data-icon="home">Find Events</a></li>
					<li><a href="#" class="ui-btn-active ui-state-persist" data-icon="arrow-r">Create Events</a></li>
					<li><a href="#friend_index" data-icon="home">Friends</a></li>
					<li><a href="#login_index" data-icon="home">Profile</a></li>
				</ul>
			</div>
		</div>
	</div>


	<div data-role="page" id="friend_index">
		<div data-role="header" data-position="fixed" data-id="headernav"
			data-theme="b">
			<h1>Friends</h1>

		</div>

		<div data-role="content">
			
		</div>

		<div data-role="footer" data-position="fixed" data-id="footernav"
			data-theme="c">
			<div data-role="navbar">
				<ul>
					<li><a href="#find_index" data-icon="home">Find Events</a></li>
					<li><a href="#create_index" data-icon="arrow-r">Create Events</a></li>
					<li><a href="#" class="ui-btn-active ui-state-persist"
							data-icon="home">Friends</a></li>
					<li><a href="#login_index" data-icon="home">Profile</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div data-role="page" id="login_index">
		<div data-role="header" data-position="fixed" data-id="headernav"
			data-theme="b">
			<h1>TeamUp Login</h1>
		</div>
		<div data-role="content">
			<form method="post" action="login_process.php">
				<div data-role="fieldcontain">
					<br> <br> <br>
					
					<label for="account">Account：</label>
					<input type="text" data-inline="true" name="account" id="account">
					<br> <br>
				
					<label for="password">Password：</label>
					<input type="password" data-inline="true" name="password"
						id="password">
					<br> <br>
				</div>
				<a href="#find_index" data-role="button" data-inline="true">submit</a>
				<a href="#register_index" data-role="button" data-inline="true">register</a>
				<input type="reset" data-inline="true" value="reset">
			</form>
		</div>

		<div data-role="footer" data-position="fixed" data-id="footernav"
			data-theme="c">
			<div data-role="navbar">
				<ul>
					<li><a href="#find_index" data-icon="home">Find Events</a></li>
					<li><a href="#create_index" data-icon="arrow-r">Create Events</a></li>
					<li><a href="#friend_index" data-icon="home">Friends</a></li>
					<li><a href="#" class="ui-btn-active ui-state-persist"
							data-icon="home">Profile</a></li>
				</ul>
			</div>
		</div>

	</div>

	

	<div data-role="page" id="register_index">
		<div data-role="header" data-theme="b">
			<h1>TeamUp Profile</h1>
		</div>
		<div data-role="content">
			<form method="post" action="demoform.asp">
				<div data-role="fieldcontain">
					<label for="firstname">First Name：</label>
					<input type="text" name="firstname" id="firstname">
					<br> <br>
					<label for="lastname">Last Name：</label>
					<input type="text" name="lastname" id="lastname">
					<br> <br>
					<legend>gender：</legend>
					<label for="male">male</label>
					<input type="radio" name="gender" id="male" value="male">
					<label for="female">female</label>
					<input type="radio" name="gender" id="female" value="female">
					<br> <br> <br>
					<label for="info">personal Introducation：</label>
					<textarea name="addinfo" id="info"></textarea>
					<br> <br>
					<label for="sportstype">Favorite Sports: </label>
					<select name="sportstype" id="sportstype" multiple="multiple"
						data-native-menu="false">
						<option value="soccer">soccer</option>
						<option value="football">football</option>
						<option value="rugby">rugby</option>
						<option value="rugby">tennis</option>
						<option value="rugby">table tennis</option>
						<option value="rugby">badminton</option>
						<option value="rugby">basketball</option>
						<option value="rugby">volleyball</option>
						<option value="rugby">ice hockey</option>
						<option value="rugby">squash</option>
						<option value="rugby">hockey ball</option>
						<option value="rugby">golf</option>
					</select> <br> <br>
					<legend>Occupation：</legend>
					<label for="student">student</label>
					<input type="radio" name="occupation" id="student" value="student">
					<label for="staff">staff</label>
					<input type="radio" name="occupation" id="staff" value="staff">
				</div>
				<br> <br>
				<a href="#login_index" data-role="button" data-inline="true">Submit</a>
				<input type="reset" data-inline="true" value="reset">
			</form>
		</div>
	</div>

</body>
</html>

