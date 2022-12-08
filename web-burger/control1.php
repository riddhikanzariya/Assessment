<?php
ob_start();
include_once 'Model-burger.php';

class MyControl extends Model
{
    public function __construct()
    {
        parent ::__construct();
        session_start();
        $url =$_SERVER ['PATH_INFO'];
        $data =$this->selectAll("country");
      
       // echo $url;
        switch ($url)
        {
            case '/index';
            include_once 'header1.php';
            include_once 'Home.php';
           $data =$this->selectAll("country");
            //insert data
            if(isset ($_POST['submit']))
            {
                $name=$_POST['name'];
                $phone =$_POST['phone'];
                $emailid =$_POST['emailid'];
                $password =$_POST['password'];
                $gender =$_POST['gender'];
                $dateofbirth =$_POST['dateofbirth'];
                $country =$_POST['country'];
                $hobbies =$_POST['hobbies'];
               $h = implode(",",$hobbies);
                $eductionqulification =$_POST['educationqulification'];
                $address =$_POST['address'];


                $data = array('name'=>$name,
                              'phone'=>$phone,
                              'emailid'=>$emailid,
                              'password'=>$password,
                              'gender'=>$gender,
                              'dateofbirth'=>$dateofbirth,
                              'country'=>$country,
                              'hobbies'=>$h,
                              'eductionqulification'=>$eductionqulification,
                              'address'=>$address);
                            //  print_r($data);exit;
                            //    echo json_encode($data); exit;    //API create karva
                $this->InsertData("register",$data);
            }
            include_once 'register.php';
            include_once 'footer1.php';

            break;
            

            case '/login':
                include_once 'header1.php';
                if(isset($_POST['login']))
                {
                  
                    $email =$_POST['emailid'];
                    $password =$_POST['password'];
                    $where = array('emailid'=>$email,'password'=>$password);
                    $odata =$this->select_where('register',$where);
                    $alldata =$odata->fetch_object();
                    // echo $alldata->status;exit;
                    if($alldata->status == 'block')
                    {
                        echo "<script>alert('You are blocked! Please contact to admin!');</script>";
                    }
                    else{
                    $where =array('emailid'=>$email,'password'=>$password);
                    $fdata =$this->select_where('register',$where);
                    $g =$fdata->num_rows;
                    if($g>0)
                    {
                        $e =$fdata->fetch_object();
                        $em =$e->emailid;
                        //echo $em; exit;
                        $_SESSION['user']= $e->id;
                        $_SESSION['name']= $e->name;
                        //echo $_SESSION['name']; exit;
                        if(isset($_POST['remember']))
                        {
                            setcookie('email',$email,time()+3600);
                            setcookie('password',$password,time()+3600);
                        }
                                         
                        header('location:product'); 
                    }
                
                    else 
                    {
                        echo "<script>alert('Invalid data !');</script>";
                    }
                }
                }
                include_once 'login-burger.php';
                include_once 'footer1.php';
                break;

                //forgot
                case '/forgot':
                     include_once 'header1.php';
                     if(isset($_POST['emailid']))
                     {
                         $forgot =$_POST['emailid'];
                         $where=array('emailid'=>$forgot);
                        //  print_r($where);exit;
                         $odata =$this->select_where('register',$where);
                         $alldata =$odata->fetch_object();
                         echo $alldata->password;exit;
                         header('location:login');
                        }
                        else 
                        {
                           echo "<script>alert('Invalid password !');</script>";
                        }
                    include_once 'forgot_pssword.php'; 
                    include_once 'footer1.php';
                    break;
                    

                    //change password

                    case '/change':
                        include_once 'header1.php';
                        if(isset($_POST['change']))
                        {
                            $emailid=$_POST['emailid'];
                            $oldpassword=$_POST['Oldpassword'];
                            $newpassword=$_POST['newpassword'];
                              
                             $data =array('password'=>$newpassword);
                             $where =array('emailid'=>$emailid , 'password'=>$oldpassword);
                             $odata =$this->select_where('register',$where);
                             $alldata =$odata->fetch_object();
                             
                             $this->updatedata('register',$data,$where);


                            //header('location:login');              
                        }
                        else 
                        {
                            echo "<script>alert('Not enter new password !');</script>";  
                        }
                        include_once 'changepassword.php';
                        include_once 'footer1.php';  
                    break;    

                //profile
                case '/profile' :
                    include_once 'header1.php';
                    if(isset($_GET['emailid']))
                    {
                        $ema =$_GET['emailid'];
                        $where=array('emailid'=>$ema);
                        $odata =$this->select_where('register',$where);
                        $alldata =$odata->fetch_object();
                    }
                    include_once 'profile-burger.php';
                    include_once 'footer1.php';
                    break;


                    case '/product' :
                        include_once 'header1.php';
                        if(isset($_SESSION['name']))
                        {
                        $allpro = $this->selectAll('product');
                        if(isset($_POST['addtocart']))
                        {
                            $uid= $_SESSION['user'];
                            $pid= $_POST['pid'];
                            $qty= $_POST['qty'];

                            $data= array('user_id'=>$uid,'pro_id'=>$pid,'qty'=>$qty);
                            $pro_data=$this->InsertData('cart',$data);
                            echo "<script>alert('data added in cart successfully !');</script>";
                        }
                        include_once 'product.php';
                        include_once 'footer1.php';
                        }
                        else 
                        {
                            header('location:login');
                        }
                        break;

                    case '/logout' :
                        session_destroy();
                        header('location:login');
                    break;     
                    
                    //join
                    case '/showcart' :
                        include_once 'header1.php';
                        $cart= $this->Join_Two('cart','product','cart.pro_id=product.pro_id');
                        include_once 'showcart.php';
                        include_once 'footer1.php';
                    break;   
                    
                    //paytm
                    case '/paytm-payment' :
                        include_once 'header1.php';
                        $paytm = $this->Join_Two('cart','product','cart.pro_id=product.pro_id');
                        include_once 'paytm-payment.php';
                        include_once 'footer1.php';
                    break;   
                    
                    //about
                    case '/about' :
                          include_once 'header1.php';
                         
                         
                            $allab = $this->selectAll('about');
                         
                        include_once 'about.php';
                        include_once 'footer1.php'; 
                    break;  
                    
                    //contact
                    case '/contact':
                        include_once 'header1.php';
                        if(isset($_POST['Send']))
                        {
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $subject=$_POST['subject'];
                            $phone=$_POST['phone'];
                            $data =array( 'name'=>$name,
                                          'email'=>$email,
                                          'subject'=>$subject,
                                           'phonenumber'=>$phone);
                                        //  print_r($data); exit;
                        $this->InsertData("contact",$data);

                  
                        }
                        else 
                        {
                           // echo "<script>alert('Invalid data !');</script>";
                           
                        }
                        include_once 'contact.php';
                        include_once 'footer1.php';

                    break;    
        }
    }
}
$obj = new  MyControl;
ob_flush();
