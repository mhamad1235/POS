<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>@yield('dashboard')</title>
</head>

<style>
    /* Google Fonts Import Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  overflow: hidden;
 overflow-y:scroll;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #00395d;
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #10123d;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  height: 100vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
  padding: 12px;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-content{
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  cursor: pointer;
  margin-right: 10px;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}

@media screen and (max-width: 400px){
  .sidebar{
    width: 240px;
  }
  .sidebar.close{
    width: 78px;
  }
  .sidebar .profile-details{
    width: 240px;
  }
  .sidebar.close .profile-details{
    background: none;
  }
  .sidebar.close .profile-details{
    width: 78px;
  }
  .home-section{
    left: 240px;
    width: calc(100% - 240px);
  }
  .sidebar.close ~ .home-section{
    left: 78px;
    width: calc(100% - 78px);
  }
}
</style>
<body>
  @section('nav')
    <div class="sidebar close">
      
     
        <div class="logo-details">
          <div class="home-content">
     <button style="background: none; border:none;"><i class='bx bx-menu' ></i></button> 
      
          </div>
        </div>
     
        <ul class="nav-links">
          
          @if (!Session::has('lang'))
          <li>
            <a href="/adminDashboard">
            <i class='bx bxs-dashboard bx-flip-vertical bx-flashing' style='color:#ffffff' ></i>
              <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Dashboard</a></li>
            </ul>
          </li>
          
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
              
         
          <li>
            <div class="iocn-link">
              <a href="/adminDashboard/product">
              <i class='bx bxs-cart-add' style='color:#ffffff' ></i>
                <span  class="link_name">Buy Product</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a href="/adminDashboard/product" class="link_name">Buy Product</a></li>
            </ul>
          </li>
          
          <li>
            <div class="iocn-link">
              <a  href="/adminDashboard/sell">
              <i class='bx bxs-archive-out'></i>
                <span class="link_name">Sell Product</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Sell Product</a></li>
              
            </ul>
          </li>
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
         
          <li>
            <div class="iocn-link">
              <a  href="/adminDashboard/customer">
              <i class='bx bxs-user-account'></i>
                <span class="link_name">Customer</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Customer</a></li>
              
            </ul>
          </li>
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          

          <li>
            <div class="iocn-link">
              <a  href="/company">
              <i class='bx bxs-buildings' style='color:#f1eded'  ></i>
                <span class="link_name">Company</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Company</a></li>
              
            </ul>
          </li>
          <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
          <li>
            <div class="iocn-link">
              <a  href="/productinfo">
              <i class='bx bxs-add-to-queue'></i>
                <span class="link_name">Add Product</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Add Product</a></li>
              
            </ul>
          </li>
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <!--another-->
          <li>
            <a href="/adminDashboard/cashier">
            <i class='bx bxs-user-detail'></i>
              <span class="link_name">Cashier</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Cashier</a></li>
            </ul>
          </li>
          <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
          
          <li>
            <div class="iocn-link">
              <a href="/adminDashboard/table">
              <i class='bx bxs-receipt'></i>
                <span class="link_name">All Product</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">All Product</a></li>
              
            </ul>
          </li>
         <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
        
       
          @endif
          <li>
      
            <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
          <!--another-->
          <!--anoth er-->
        <div class="profile-details">
          <div class="profile-content">
            <img src="{{url('/assets/images/logo.png')}}" alt="profileImg">
          </div>
          <div class="name-job">
          @if (!Session::has('lang'))
          <div class="profile_name">Admin</div>
          @else
          <div class="profile_name">Cashier</div>
          @endif
            <div class="job">Log out</div>
          </div>
<a href="/logout"><i class='bx bx-log-out' ></i></a>
        </div>
      </li>
    </ul>
      </div>
   
   
      <script >let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e)=>{
         let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
         arrowParent.classList.toggle("showMenu");
          });
        }
        
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("close");
        });
        </script>
</body>
</html>