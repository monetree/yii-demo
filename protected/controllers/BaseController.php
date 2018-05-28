<?php

class BaseController extends Controller
{
			public function actionai(){
					extract($_POST);
					if(isset($check)){
						$update = "update user set name='$name' where email='$email'";
						$done=Yii::app()->db->createCommand($update)->execute();
						if($done){
							$this->redirect(['Base/ai']);
						}
					}
					if(isset($submit)){
					$data = array(
						'name'=>$name,
						'email'=>$email,
						'password'=>$password
					);
					$sql="insert into user(name,email,password) values('$name','$email','$password')";
					$qry=Yii::app()->db->createCommand($sql)->execute();
					if($qry){
						$this->redirect(['Base/ai']);
					}
				}else{
					$data['ai'] = array(
						'name'=>'Artificial Inteligence'
					);
					// Yii::app()->session['sessid'] = 1255;
					// unset(Yii::app()->session['userid']);
					$records = "select * from user";
					$data['row']=Yii::app()->db->createCommand($records)->execute();
					$data['rs']=Yii::app()->db->createCommand($records)->queryAll();
					$this->render('ai',$data);
			}
			}


			public function actiondel(){
				$id=$_GET['id'];
				$delete = "delete from user where id=$id";
				$yes = Yii::app()->db->createCommand($delete)->execute();
				if($yes){
						$this->redirect(['Base/ai']);
				}
			}

}
?>
