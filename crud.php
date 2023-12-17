<?php
    class crud 
        {
            //private database object
           private $db;
           
           //constructor tp initialize private variable to the database connection
           function __construct($conn)
                {
                        $this->db = $conn;
                }

            public function insertAttendees($fname, $lname, $dob, $specialty, $email, $phone, $compName, $compAddress, $compAddress2, $compCity, $compParish, $compZip,$avatar_path)
                {
                        try 
                            {
                                //define sql statement to be executed
                                $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, specialty_id, emailaddress, contactnumber, compName, 
                                compAddress, compAddress2, compCity, compParish, compZip, avatar_path) VALUES (:fname, :lname, :dob, :specialty, :email, :phone, :compName, :compAddress, :compAddress2, :compCity, :compParish, :compZip, :avatar_path)";

                                //prepare the sql statement for execution
                               $stmt = $this-> db-> prepare($sql);

                                //bind all parameters to the actual values
                                $stmt->bindparam(':fname', $fname);
                                $stmt->bindparam(':lname', $lname);
                                $stmt->bindparam(':dob', $dob);
                                $stmt->bindparam(':specialty', $specialty);
                                $stmt->bindparam(':email', $email);
                                $stmt->bindparam(':phone', $phone);
                                $stmt->bindparam(':compName', $compName);
                                $stmt->bindparam(':compAddress', $compAddress);
                                $stmt->bindparam(':compAddress2', $compAddress2);
                                $stmt->bindparam(':compCity', $compCity);
                                $stmt->bindparam(':compParish', $compParish);
                                $stmt->bindparam(':compZip', $compZip);
                                $stmt->bindparam(':avatar_path', $avatar_path);


                                $stmt->execute();
                                return true;
                            } 
                            
                        catch (PDOException $e) 
                            {
                                echo $e->getMessage();
                                return false;
                            }
                }


            public function editAttendee($id, $fname, $lname, $dob, $specialty, $email, $phone, $compName, $compAddress, $compAddress2, $compCity, $compParish, $compZip)
                {
                    try
                        {
                            $sql = "UPDATE `attendee` SET `firstname`= :fname,`lastname`= :lname,`dateofbirth`= :dob,`specialty_id`= :specialty,
                            `emailaddress`= :email,`contactnumber`= :phone,`compName`= :compName,`compAddress`= :compAddress,`compAddress2`= :compAddress2,`compCity`= :compCity,
                            `compParish`= :compParish, `compZip`= :compZip WHERE attendee_id = :id";
        
                            $stmt = $this-> db-> prepare($sql);
        
                            //bind all parameters to the actual values
                            $stmt->bindparam(':id', $id);
                            $stmt->bindparam(':fname', $fname);
                            $stmt->bindparam(':lname', $lname);
                            $stmt->bindparam(':dob', $dob);
                            $stmt->bindparam(':specialty', $specialty);
                            $stmt->bindparam(':email', $email);
                            $stmt->bindparam(':phone', $phone);
                            $stmt->bindparam(':compName', $compName);
                            $stmt->bindparam(':compAddress', $compAddress);
                            $stmt->bindparam(':compAddress2', $compAddress2);
                            $stmt->bindparam(':compCity', $compCity);
                            $stmt->bindparam(':compParish', $compParish);
                            $stmt->bindparam(':compZip', $compZip);
        
        
                            $stmt->execute();
                            return true;
                        }

                    catch (PDOException $e) 
                        {
                            echo $e->getMessage();
                            return false;
                        }
                   
                }     


            public function getAttendees()
                {
                    try
                        {
                            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
                            $result = $this->db->query($sql);
                            return $result;
                        }

                    catch(PDOException $e) 
                        {
                            echo $e->getMessage();
                            return false;
                        }
                    
                }     

            public function getAttendeeDetails($id)
                {
                    try
                        {
                            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id = :id";
                            $stmt = $this->db->prepare($sql);
                            $stmt->bindparam(':id', $id);
                            $stmt->execute();
                            $result = $stmt->fetch();
                            return $result;
                        }

                    catch(PDOException $e) 
                        {
                            echo $e->getMessage();
                            return false;
                        }                    
                }



            public function getSpecialties()
                {
                    try
                        {
                            $sql = "SELECT * FROM `specialties`";
                            $stmt = $this->db->prepare($sql);
                            $result = $this->db->query($sql);
                            return $result;
                        }
                    catch(PDOException $e) 
                        {
                            echo $e->getMessage();
                            return false;
                        }
                    
                }


            public function getSpecialtiesById($id)
                {
                    try
                        {
                            $sql = "SELECT * FROM `specialties` where specialty_id= :id";
                            $stmt = $this->db->prepare($sql);
                            $stmt->bindparam(':id', $id);
                            $stmt->execute();
                            $result = $stmt->fetch();
                            return $result;
                        }
                    catch(PDOException $e) 
                        {
                            echo $e->getMessage();
                            return false;
                        }
                    
                }


            public function deleteAttendee($id)
                {
                        try 
                    {
                        $sql = "delete from `attendee` WHERE attendee_id = :id";
                        $stmt = $this->db->prepare($sql);
                        $stmt->bindparam(':id', $id);
                        $stmt->execute();
                        return true;
                    }

                    catch (PDOException $e) 
                    {
                        echo $e->getMessage();
                        return false;
                    }
                    
                }



        //    public function getParish()
        //         {
        //             $sql = "SELECT * FROM `attendee`";
        //             $stmt = $this->db->prepare($sql);
        //             $result = $this->db->query($sql);
        //             return $result;
        //         }
    

        }
?>