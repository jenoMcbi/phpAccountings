<?php

			if(isset($_POST['delete']))
			{

				$p= $_POST['p'];
				

						$query=("DELETE FROM payments where p='$p'");

						$result = sqlsrv_query( $conn, $query );



                     if(sqlsrv_has_rows($result)==1)

                    {

                    		
                    }

		    }

?>