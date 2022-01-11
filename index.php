<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
      <?php 
           
	<form method="POST">
			<label>Name</label>
            <input type="text" name="name"><br><br>
			<label>Reg No.</label>
            <input type="text" name="regno"><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>

            class StudentParent{
            	public $stdName;
            	public $stdRegNum;

            	function __construct($name, $regnum) {
            		$this->stdName = $name;
            		$this->stdRegNum = $regnum;
			  	}

			  	
            }

           
             ?>

</body>
</html>