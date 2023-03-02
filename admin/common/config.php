<?php
	class config
	{
		var $demo;

		public function __construct()
		{
			$this->config=mysqli_connect("localhost","root","","fire");
		}

		public function insertProduct($name,$price,$p_photo,$file_type,$tmp_loc,$description)
    	{
        	$insertmenus = mysqli_query($this->config, "INSERT INTO `products`(`name`, `price`, `photo`, `description`) VALUES ('$name','$price','$p_photo','$description')");
    	}

    	public function selectProduct()
		{
			$result= mysqli_query($this->config,"SELECT * FROM `products`");
			return $result;
		}
		public function deletePorduct($id)
	    {
	        $deletePorduct= mysqli_query($this->config, "DELETE FROM `products` WHERE id='".$id."'");
	    }
	    public function insertOrder($name,$email,$phone,$address,$pname,$price)
		{
			$statement=mysqli_query($this->config,"INSERT INTO `orders`(`name`, `email`, `phone`, `address`, `price`, `pname`) VALUES ('$name','$email','$phone','$address','$price','$pname')");
		}
		public function selectOrder()
		{
			$result= mysqli_query($this->config,"SELECT * FROM `orders`");
			return $result;
		}
		public function deleteOrders($id)
	    {
	        $deletePorduct= mysqli_query($this->config, "DELETE FROM `orders` WHERE id='".$id."'");
	    }
	    public function selectContact()
		{
			$result= mysqli_query($this->config,"SELECT * FROM `contacts`");
			return $result;
		}
		public function insertContact($name,$email,$website,$subject,$message)
    	{
        	$insertmenus = mysqli_query($this->config, "INSERT INTO `contacts`(`name`, `email`, `website`, `subject`, `message`) VALUES ('$name','$email','$website','$subject','$message')");
    	}
    	public function deleteContacts($id)
	    {
	        $deletePorduct= mysqli_query($this->config, "DELETE FROM `contacts` WHERE id='".$id."'");
	    }
	    public function insertNOC($b_usages,$b_name,$b_floor,$p_area,$p_id,$height,$area,$total,$b_address,$landmark,$lside,$rside,$fside,$bside,$basement,$floor_number,$floor_area,$o_name,$o_number,$o_city,$o_address,$o_landmark,$o_state,$name,$city,$contact,$address,$landmartk,$state,$email,$p_document,$file_types,$tmp_locs,$p_photo,$file_type,$tmp_loc,$type)
    	{
        	$insertmenus = mysqli_query($this->config, "INSERT INTO `noc`(`b_usages`, `b_name`, `b_floor`, `p_area`, `p_id`, `height`, `area`, `total`,`b_address`, `landmark`, `lside`, `rside`, `fside`, `bside`, `basement`, `floor_number`, `floor_area`, `o_name`, `o_number`, `o_city`, `o_address`, `o_landmark`, `o_state`, `name`, `city`, `contact`, `address`, `landmartk`, `state`, `email`, `document`, `photo`,`type`) VALUES ('$b_usages','$b_name','$b_floor','$p_area','$p_id','$height','$area','$total','$b_address','$landmark','$lside','$rside','$fside','$bside','$basement','$floor_number','$floor_area','$o_name','$o_number','$o_city','$o_address','$o_landmark','$o_state','$name','$city','$contact','$address','$landmartk','$state','$email','$p_document','$p_photo','$type')");
    	}
    	public function selectNOC()
		{
			$result= mysqli_query($this->config,"SELECT * FROM `noc`");
			return $result;
		}
		public function deleteNOC($id)
	    {
	        $deletePorduct= mysqli_query($this->config, "DELETE FROM `noc` WHERE id='".$id."'");
	    }

	}