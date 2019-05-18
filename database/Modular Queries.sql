select * from employee;
select * from tenant;
select * from concern;


#Creating employee account
INSERT INTO `marthagoshen`.`employee` 
	(`email`, `firstname`, `lastname`, `position`) 
		VALUES 
			('leasing.m@marthaservices.com', 'shawn', 'mendes', 'leasing manager');
            
#Creating tenant account
INSERT INTO `marthagoshen`.`tenant` 
	(`email`, `firstname`, `lastname`, `unit`) 
		VALUES ('#@marthservices.com', '#', '#', '5LM-E');

#Delete Account; Kung nagkamali
DELETE FROM `marthagoshen`.`tenant` WHERE (`id` = '#value');

#activate
UPDATE `marthagoshen`.`tenant` 
	SET `status` = 'active' 
		WHERE (`id` = '#') and (`status` = 'deactivated');

#deactivated
UPDATE `marthagoshen`.`tenant` 
	SET `status` = 'deactivated' 
		WHERE (`id` = '#') and (`status` = 'active');


#Reset employee password; changed the '#' value
UPDATE `marthagoshen`.`employee`
	SET `password` = 'reset' 
		WHERE (`empid` = '#');



#Deactivate account; change values
UPDATE `marthagoshen`.`employee` 
	SET `status` = 'deactivated' 
		WHERE (`empid` = '#value');

#Activate account; change values
UPDATE `marthagoshen`.`employee` 
	SET `status` = 'active' 
		WHERE (`empid` = '#value');
        
#change name of account of employee by admin
UPDATE `marthagoshen`.`employee` 
	SET `firstname` = '#value', `lastname` = '#value' 
		WHERE (`empid` = '#value');
        

#TENANT: change new password
UPDATE `marthagoshen`.`tenant` 
	SET `password` = '#value' 
		WHERE (`id` = '#value');
        
#EMPLOYEE: change pass
UPDATE `marthagoshen`.`employee` 
	SET `password` = '#value' 
		WHERE (`empid` = '#value');



