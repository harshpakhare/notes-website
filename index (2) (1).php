<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href='style (2) (3).css' />
    <title>Create a Search Bar using HTML and CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
 
  </head>

  <body>
    <!-- Navbar items -->
    
    <nav>
      <div class="logo">
          bro<span>code</span>
      </div>
      <div class="menu">
          <a href="index1.php">Home</a>
          <a href="bscit.php">Notes</a>
          
        <a href="index.php">Shopping</a>
        <a href="index (2) (1).php">College List</a>
        <a href="comments.php">Comment</a>
        
      </div>
      <div class="icon">
          <ion-icon class="nav-search" name="search-outline"></ion-icon>
          
          <a href="login1.php">login</a>
      </div>
  </nav>

      <!-- search bar right align -->
      <div class="search">
        <form action="#">
          <input type="text" placeholder=" Search college" name="search" />
          <button>
            <i class="fa fa-search" style="font-size: 18px"> </i>
          </button>
        </form>
      </div>
    </div>

    <!-- logo with tag -->
    <div class="content">
      <main>
        <section>
          <h1>
            college you want ?🏰<br />
            <span class="change_content"> </span>
            <span style="margin-top: -10px"> </span>
          </h1>
        </section>
        <div class="dropdown">
          <button class="dropbtn">Select field
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="colglist.php">BSCIT</a>
            <a href="colglist.php">MSCIT</a>
            
          </div>
        </div>
      </main>

      <p></p>
    </div>
  </body>
</html>
