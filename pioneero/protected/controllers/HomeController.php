<?php

class HomeController extends Controller
{
        //public $layout='';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
           
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->renderPartial('index');
	}
        public function actionAboutus()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->renderPartial('aboutus',array('class'=>'act'));
	}
        public function actionRegister()
        {
            if(isset($_GET['test']))
            {
                $_POST=array('interest'=>1,
                             'firstname'=>'TSN',
                             'secondname'=>'Raju',
                             'loc'=>'500018',
                             'primary_email'=>'touchwithraju@gmail.com',
                             'register_password'=>'12345',
                             'register'=>'xxx'
                             );
            }
            if(isset($_POST['register']))
            {
               $users=new Users();
               $users->attributes=array('first_name'=>$_POST['firstname'],'last_name'=>$_POST['secondname'],
                                        'email'=>$_POST['primary_email'],'zip'=>$_POST['loc'],'password'=>$_POST['register_password'],'status'=>1,'ip_address'=>$_SERVER['REMOTE_ADDR']);
               $result=$users->forgot($_POST['primary_email']);
               if(empty($result)){
               if($users->save()){
                echo $users->id;
                $UsersInterests=new UsersInterests();
                $UsersInterests->attributes=array('users_id'=>$users->id,'interests_id'=>$_POST['interest']);
                $UsersInterests->save();

                Yii::app()->user->setFlash('register','Thank you for Registering');
                $this->redirect(array('home/register'));
                exit();
               }
               }else{
                Yii::app()->user->setFlash('register_error','Email Already Exists. Please Choose Another One');
                Yii::app()->user->setFlash('register_values',$_POST);
                $this->redirect(array('home/register'));
               }
            }

            $this->renderPartial('register');
        }
        public function actionForgotpassword()
        {
            if(isset($_POST['forgot_email']))
            {
               $users=new Users();
               $result=$users->forgot($_POST['forgot_email']);
               if(!empty($result))
               {
                   $email['message']="Dear ". $result['last_name'].",<br><br>Your Password-".$result['password']."<br><br>Thanking You<br>Pioneero Team";
                   $email['subject']="Pioneero-Forgot Password";
                   $email['from']="info@pioneero.com";
                   $email['from_name']="Pioneero";
                   $email['to']=$_POST['forgot_email'];

                    $mail=new SendEmail;
                    $mail->send($email);

                  Yii::app()->user->setFlash('forgot_success','Password has been Sent to your Email');
                 
                  $this->redirect(array('home/forgotpassword'));
               }else{
                   Yii::app()->user->setFlash('forgot_failure','Invalid Email');
                   $this->redirect(array('home/forgotpassword'));
               }
            }
            $this->renderPartial('forgot_password');
        }
        public function actionJoin()
        {

            /*$_POST['email']='rajutsn@gmail.edu';
            $_POST['type']='register';
           */ if(isset($_POST['type']))
            {
               $model=new Requests();
               $model->attributes=array('email'=>$_POST['email'],'type'=>$_POST['type'],'ip_address'=>$_SERVER['REMOTE_ADDR']);
                if($model->save()){
                   if($_POST['type']=='register' || $_POST['type']=='resend' )
                   {
                          $link=Yii::app()->createAbsoluteUrl('home/register');
                          $email['message']="Dear Subscriber,<br><br>Please <a href =".$link.">Click here</a> to continue Registration(or copy and paste the below web-page link into your browser)<br>
                              <a href=".$link.">".$link."</a><br><br>Thanking You<br>Pioneero Team";
                          $email['subject']="Pioneero Registration Activation Link";
                          $email['from']="info@pioneero.com";
                          $email['from_name']="Pioneero";
                          $email['to']=$_POST['email'];

                          $mail=new SendEmail;
                          $mail->send($email);

                   }
                       ////'register','resend','join'
                    $array=$_POST;
                    $array['status']='Success';
                }else{
                    $array['status']='Fail';
                }
                echo json_encode($array);
            }
        }
        public function actionSend()
        {
            $user = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('users u')
                    ->where('email=:email and password=:password', array(':email'=>'rajutsn@gmail.com',':password'=>'khammam'))
                    ->queryRow();
            print_r($user);
        }
        public function actionLogin()
        {
            if(isset($_POST['email'])&& isset($_POST['password']))
            {
               $users=new Users();
               $result=$users->auth($_POST['email'],$_POST['password']);
               if(!empty($result))
               {
                   echo "Successfully Logged In";exit();
                   //$this->redirect('account');
               }else{
                   Yii::app()->user->setFlash('login','Invalid Email or Password');
                   $this->redirect(array('home/login'));
               }
            }
            $this->renderPartial('login');

        }




}