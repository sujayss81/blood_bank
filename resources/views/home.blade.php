<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/style.css' )}}">
    <script src="{{ asset('bootstrap/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js' )}}"></script>   
</head>
<body>
    <!-- head logo -->
    <div class="jumbotron-fluid">
        <h1 class="display-4 text-center">Blood Bank</h1>
    </div>
    <!------------------------------------------------------------------------------------->
    <!-- Navbar with login register buttons -->
    <nav class="navbar navbar-light navbar-expand sticky-top bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="btn-group ">
                <!-- <button class="btn  rounded" type="submit">Register</button> -->
                <form>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button class="btn  rounded" type="submit"><span>Login</span></button
                </form>
            </div>
        </div>
     </nav>
    <!------------------------------------------------------------------------------------->
  <!--   <div id="carousel-container float-left">
        <div id="my-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                    <ol class="carousel-indicators">
                        <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#my-slider" data-slide-to="1"></li>
                        <li data-target="#my-slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-item active">
                          <img class="d-block w-100" src=" https://gkdutta.files.wordpress.com/2016/10/happy-national-voluntary-blood-donation-day-2015.jpg?w=1000 " alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="http://blogspay.com/wp-content/uploads/2018/06/blood1-1200x548-1170x534.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://s3-ap-northeast-1.amazonaws.com/assets-eaglenews/2018/06/34607760_2511106552248072_8929599705487245312_n.jpg" alt="Third slide">
                    </div>
            </div>
            <a class="carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#my-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> -->
<!-- ------------------------------------------------------------------------------ -->
    
    <!-- <div class="container-fluid col-8 float-left">
        <img src="https://scx1.b-cdn.net/csz/news/800/2019/4-blood.jpg" width="900" height="600">
        
    </div> -->


<!-- ------------------------------------------------------------------------------------ -->
        <!-- <img src="https://scx1.b-cdn.net/csz/news/800/2019/4-blood.jpg" width="900" height="600"> -->
    
    <div class="container-fluid col-4 float-right">
        <form>
            <h1>Register with us</h1>
            <h5>Happy donating</h5>
            <div class="form-row">
            <div class="form-col">
            <input type="text" name="fname" class="form-control" id="margin_spacer" placeholder="First Name">
            </div>
            <div class="form-col">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" id="margin_spacer">
            </div>
            </div>
            <div class="form-row">
                <!-- <div class="form-col"> -->
                <textarea  rows="4" cols="30" placeholder="Address" id="margin_spacer" class="form-control"></textarea>
                <!-- </div> -->
            </div>
            <div class="form-row">
                <!-- <div class="form-col"> -->
                <input type="number" name="contact" placeholder="Mobile Number" id="margin_spacer" class="form-control">
                <!-- </div> -->
            </div>
            <div class="form-row">
                <!-- <div class="form-col"> -->
                <input type="password" name="user_password" placeholder="New Password" id="margin_spacer" class="form-control">
                <!-- </div> -->
            </div>
            <h6>Date of Birth</h6>
            <div class="form-row">
            <div class="form-col">
            <select class="form-control" id="margin_spacer">
                <option>Day</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
            </div>
            <div class="form-col">
                <select class="form-control" id="margin_spacer">
                    <option>Month</option>
                    <option>Janaury</option>
                    <option>Febraury</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
            </div>
            <div class="form-col">
                <select class="form-control" id="margin_spacer">
                    <option>Year</option>
                    <option>1920</option>
                    <option>1921</option>
                    <option>1922</option>
                    <option>1923</option>
                    <option>1924</option>
                    <option>1925</option>
                    <option>1926</option>
                    <option>1927</option>
                    <option>1928</option>
                    <option>1929</option>
                    <option>1930</option>
                    <option>1931</option>
                    <option>1932</option>
                    <option>1933</option>
                    <option>1934</option>
                    <option>1935</option>
                    <option>1936</option>
                    <option>1937</option>
                    <option>1938</option>
                    <option>1939</option>
                    <option>1940</option>
                    <option>1941</option>
                    <option>1942</option>
                    <option>1943</option>
                    <option>1944</option>
                    <option>1945</option>
                    <option>1946</option>
                    <option>1947</option>
                    <option>1948</option>
                    <option>1949</option>
                    <option>1950</option>
                    <option>1951</option>
                    <option>1952</option>
                    <option>1953</option>
                    <option>1954</option>
                    <option>1955</option>
                    <option>1956</option>
                    <option>1957</option>
                    <option>1958</option>
                    <option>1959</option>
                    <option>1960</option>
                    <option>1961</option>
                    <option>1962</option>
                    <option>1963</option>
                    <option>1964</option>
                    <option>1965</option>
                    <option>1966</option>
                    <option>1967</option>
                    <option>1968</option>
                    <option>1969</option>
                    <option>1970</option>
                    <option>1971</option>
                    <option>1972</option>
                    <option>1973</option>
                    <option>1974</option>
                    <option>1975</option>
                    <option>1976</option>
                    <option>1977</option>
                    <option>1978</option>
                    <option>1979</option>
                    <option>1980</option>
                    <option>1981</option>
                    <option>1982</option>
                    <option>1983</option>
                    <option>1984</option>
                    <option>1985</option>
                    <option>1986</option>
                    <option>1987</option>
                    <option>1988</option>
                    <option>1989</option>
                    <option>1990</option>
                    <option>1991</option>
                    <option>1992</option>
                    <option>1993</option>
                    <option>1994</option>
                    <option>1995</option>
                    <option>1996</option>
                    <option>1997</option>
                    <option>1998</option>
                    <option>1999</option>
                    <option>2000</option>
                    <option>2001</option>
                    <option>2002</option>
                    <option>2003</option>
                    <option>2004</option>
                    <option>2005</option>
                    <option>2006</option>
                    <option>2007</option>
                    <option>2008</option>
                    <option>2009</option>
                    <option>2010</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                </select>
            </div>
        </div>
        <h6>Gender</h6>
        <div class="form-row">
            <div class="form-col" id="margin_spacer">
                <input type="radio" name="gender">
                <label for="male">Male</label>
            </div>
            <div class="form-col" id="margin_spacer">
                <input type="radio" name="gender">
                <label for="female">Female</label>
            </div>
            <div class="form-col" id="margin_spacer">
                <input type="radio" name="gender">
                <label for="other">Other</label>
            </div>
        </div>
        <hr>
        <input type="submit" name="Register" value="Register" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
