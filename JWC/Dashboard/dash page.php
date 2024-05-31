<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>JWC</title> 
	<link rel="stylesheet"
		href="style.css"> 
	<link rel="stylesheet"
		href="responsive.css"> 
</head> 
<body> 
    
    <!-- for header part -->
    <header> 
  
        <div class="logosec"> 
            <div class="logo"><img src="https://jhbchildwelfare.org.za/wp-content/uploads/2024/03/Website-JCW-Main-Logo-2024-300x120.jpg" style="width: 150px;"></div> 
            <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" 
                id="menuicn" 
                alt="menu-icon"> 
        </div> 
  
        <div class="searchbar"> 
            <input type="text" 
                   placeholder="Search"> 
            <div class="searchbtn"> 
              <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" 
                    alt="search-icon"> 
              </div> 
        </div> 
  
        <div class="message"> 
            <div class="circle"></div> 
            <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" 
                 class="icn" 
                 alt=""> 
            <div class="dp"> 
              <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" 
                    alt="dp"> 
              </div> 
        </div> 
  
    </header> 
  
    <div class="main-container"> 
        <div class="navcontainer"> 
            <nav class="nav"> 
                <div class="nav-upper-options"> 
                    <div class="nav-option option1"> 
                        <h3>Dashboard</h3> 
                    </div> 
  
                    <a href="../Home page/index.php"><div class="option2 nav-option">  
                        <h3>Home</h3>
                    </div></a> 
  
                    <a href ="document.txt" download><div class="nav-option option3">
                        <h3> Reports</h3> 
                    </div></a>   
  
                    <a href="../Donate/donate.php"><div class="nav-option option4"> 
                        <h3> Donate</h3> 
                    </div></a> 
  
                    <div class="nav-option option5"> 
                        <h3> Profile</h3> 
                    </div> 
  
                    <div class="nav-option option6"> 
                        <h3> Settings</h3> 
                    </div> 
  
                    <a href="../login page/Login page.php"><div class="nav-option logout"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" 
                            alt="logout"> 
                        <h3>Logout</h3> 
                    </div></a> 
  
                </div> 
            </nav> 
        </div> 
        <div class="main"> 
  
            <div class="searchbar2"> 
                <input type="text" 
                       name="" 
                       id="" 
                       placeholder="Search"> 
                <div class="searchbtn"> 
                  <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" 
                        alt="search-button"> 
                  </div> 
            </div> 
  
            <div class="box-container"> 
  
                <div class="box box1"> 
                    <div class="text"> 
                        <h2 class="topic-heading">R100 000</h2> 
                        <h2 class="topic">Donated this Month</h2> 
                    </div> 
                </div> 
  
                <div class="box box2"> 
                    <div class="text"> 
                        <h2 class="topic-heading">2000</h2> 
                        <h2 class="topic">Children Fed</h2> 
                    </div>  
                </div> 
  
                <div class="box box3"> 
                    <div class="text"> 
                        <h2 class="topic-heading">800</h2> 
                        <h2 class="topic">Children Sheltered</h2> 
                    </div> 
                </div> 
  
                <div class="box box4"> 
                    <div class="text"> 
                        <h2 class="topic-heading">70</h2> 
                        <h2 class="topic">Published</h2> 
                    </div> 
                </div> 
            </div> 
  
            <div class="report-container"> 
                <div class="report-header"> 
                    <h1 class="recent-Articles" style="color:  #004496";>Donation History</h1> 
                    <button class="view">View All</button> 
                </div> 
  
                <div class="report-body"> 
                    <div class="report-topic-heading"> 
                        <h3 class="t-op">Date</h3> 
                        <h3 class="t-op">Amount</h3> 
                        <h3 class="t-op">Transaction</h3>  
                    </div> 
  
                    <div class="items"> 
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">19/02/2024</h3> 
                            <h3 class="t-op-nextlvl">R100</h3> 
                            <h3 class="t-op-nextlvl">**56</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">19/03/2024</h3> 
                            <h3 class="t-op-nextlvl">R100</h3> 
                            <h3 class="t-op-nextlvl">**56</h3> 
                        </div> 
  
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    <script src="main.js"></script>
</html>
