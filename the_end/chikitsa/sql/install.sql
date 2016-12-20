CREATE TABLE IF NOT EXISTS %dbprefix%appointments ( appointment_id int(11) NOT NULL AUTO_INCREMENT,appointment_date date NOT NULL,end_date date NULL DEFAULT NULL,start_time time NOT NULL,end_time time NOT NULL,title varchar(150) NOT NULL,patient_id int(11) NOT NULL,userid int(11) NOT NULL,status varchar(255) NOT NULL, visit_id int(11) NOT NULL DEFAULT 0,PRIMARY KEY (appointment_id));
CREATE TABLE IF NOT EXISTS %dbprefix%appointment_log ( appointment_id int(11) NOT NULL,change_date_time varchar(255) NOT NULL,start_time time NOT NULL,from_time time NOT NULL,to_time time NOT NULL,old_status varchar(255) NOT NULL,status varchar(255) NOT NULL,name varchar(255) NOT NULL);
CREATE TABLE IF NOT EXISTS %dbprefix%contacts ( contact_id int(11) NOT NULL AUTO_INCREMENT, first_name varchar(50) DEFAULT NULL, middle_name varchar(50) DEFAULT NULL, last_name varchar(50) NOT NULL, display_name varchar(255) NOT NULL, phone_number varchar(15) NOT NULL, email varchar(150) NOT NULL, contact_image varchar(255) NOT NULL DEFAULT 'images/Profile.png', type varchar(50) NOT NULL, address_line_1 varchar(150) NOT NULL, address_line_2 varchar(150) NOT NULL, city varchar(50) NOT NULL, state varchar(50) NOT NULL, postal_code varchar(50) NOT NULL, country varchar(50) NOT NULL, PRIMARY KEY (`contact_id`) );
CREATE TABLE IF NOT EXISTS %dbprefix%contact_details ( contact_detail_id int(11) NOT NULL AUTO_INCREMENT, contact_id int(11) NOT NULL, type varchar(50) NOT NULL, detail varchar(150) NOT NULL, PRIMARY KEY (contact_detail_id) );
CREATE TABLE IF NOT EXISTS %dbprefix%menu_access ( id int(11) NOT NULL AUTO_INCREMENT, menu_name varchar(50) NOT NULL, category_name varchar(50) NOT NULL, allow tinyint(1), PRIMARY KEY (id) );
CREATE TABLE IF NOT EXISTS %dbprefix%patient ( patient_id int(11) NOT NULL AUTO_INCREMENT, contact_id int(11) NOT NULL, patient_since date NOT NULL, display_id varchar(12) NOT NULL, followup_date date NOT NULL, reference_by varchar(255) NOT NULL, gender VARCHAR(10) , dob DATE ,PRIMARY KEY (patient_id) );
CREATE TABLE IF NOT EXISTS %dbprefix%clinic ( clinic_id int(11) NOT NULL, start_time varchar(10) NOT NULL, end_time varchar(10) NOT NULL, time_interval decimal(11,2) NOT NULL DEFAULT '0.50', clinic_name varchar(50), tag_line VARCHAR(100), clinic_address VARCHAR(500), landline VARCHAR(50), mobile VARCHAR(50), email VARCHAR(50), facebook VARCHAR(50), twitter VARCHAR(50), google_plus VARCHAR(50), next_followup_days int(11) NOT NULL DEFAULT '15' );
CREATE TABLE IF NOT EXISTS %dbprefix%invoice ( invoice_id INT(11) NOT NULL AUTO_INCREMENT , static_prefix VARCHAR( 10 ) NOT NULL , left_pad INT(11) NOT NULL , next_id INT(11) NOT NULL , currency_symbol VARCHAR(10) NOT NULL, currency_postfix char(10) NOT NULL DEFAULT '/-', PRIMARY KEY ( invoice_id ) );
CREATE TABLE IF NOT EXISTS %dbprefix%visit ( visit_id int(11) NOT NULL AUTO_INCREMENT, patient_id int(11) NOT NULL, userid int(11) NOT NULL, notes text NOT NULL, type varchar(50) NOT NULL, visit_date varchar(60) NOT NULL, visit_time varchar(50), PRIMARY KEY (`visit_id`) );
CREATE TABLE IF NOT EXISTS %dbprefix%bill (bill_id int(11) NOT NULL AUTO_INCREMENT, bill_date date NOT NULL,patient_id int(11) NOT NULL,visit_id int(11) NOT NULL,total_amount decimal(10,0) NOT NULL,due_amount decimal(11,2) NOT NULL,PRIMARY KEY (bill_id));
CREATE TABLE IF NOT EXISTS %dbprefix%bill_detail (bill_detail_id int(11) NOT NULL AUTO_INCREMENT,bill_id int(11) NOT NULL,particular varchar(50) NOT NULL, amount decimal(10,2) NOT NULL, quantity int(11) NOT NULL, mrp decimal(10,2) NOT NULL, type varchar(25) NOT NULL, purchase_id int(11), PRIMARY KEY (bill_detail_id));
CREATE TABLE IF NOT EXISTS %dbprefix%payment ( payment_id int(11) NOT NULL AUTO_INCREMENT, bill_id int(11) NOT NULL, pay_date date NOT NULL, pay_mode varchar(50) NOT NULL, pay_amount decimal(10,0) NOT NULL, cheque_no varchar(50) NOT NULL, PRIMARY KEY (payment_id) );
CREATE TABLE IF NOT EXISTS %dbprefix%users ( userid int(11) NOT NULL AUTO_INCREMENT, name varchar(255) DEFAULT NULL, username varchar(16) DEFAULT NULL, password varchar(255) NOT NULL, level varchar(15) NOT NULL,is_active INT(1) NOT NULL DEFAULT '1', PRIMARY KEY (userid), UNIQUE KEY username (username) );
CREATE TABLE IF NOT EXISTS %dbprefix%todos ( id_num int(11) NOT NULL AUTO_INCREMENT, userid int(11) DEFAULT '0', todo varchar(250) DEFAULT NULL, done int(11) DEFAULT '0', add_date datetime DEFAULT NULL, done_date datetime DEFAULT NULL, PRIMARY KEY (id_num));
CREATE TABLE IF NOT EXISTS %dbprefix%version (current_version varchar(11) NOT NULL);
CREATE TABLE IF NOT EXISTS %dbprefix%data (ck_data_id int(11) NOT NULL AUTO_INCREMENT,ck_key varchar(50) NOT NULL DEFAULT '',ck_value varchar(100) NOT NULL DEFAULT '',PRIMARY KEY (ck_data_id));
CREATE TABLE IF NOT EXISTS %dbprefix%payment_transaction ( transaction_id  int(11) NOT NULL AUTO_INCREMENT,bill_id int(11),patient_id int(11) NOT NULL,visit_id int(11) NOT NULL, amount decimal(11,2) NOT NULL,payment_type varchar(50) NOT NULL,PRIMARY KEY (transaction_id));
INSERT INTO %dbprefix%version (current_version) VALUES ('0.2.4');
INSERT INTO %dbprefix%users (userid, name, username,password,level) VALUES (1, 'Administrator', 'admin','YWRtaW4=','Administrator');
INSERT INTO %dbprefix%data (ck_key, ck_value) VALUES ('default_language', 'english');
INSERT INTO %dbprefix%data (ck_key, ck_value) VALUES ('default_timezone', 'UTC');
INSERT INTO %dbprefix%data (ck_key, ck_value) VALUES ('default_timeformate', 'h:i A');
INSERT INTO %dbprefix%data (ck_key, ck_value) VALUES ('default_dateformate', 'd-m-Y');
CREATE TABLE IF NOT EXISTS %dbprefix%modules ( module_id int(11) NOT NULL AUTO_INCREMENT, module_name varchar(50) UNIQUE NOT NULL, module_display_name varchar(50) NOT NULL, module_description varchar(150) NOT NULL, module_status int(1) NOT NULL, PRIMARY KEY (module_id) );
CREATE TABLE IF NOT EXISTS %dbprefix%user_categories ( id int(11) NOT NULL AUTO_INCREMENT,  category_name varchar(50), PRIMARY KEY (id) );
INSERT INTO %dbprefix%user_categories (category_name) VALUES ('Administrator');
INSERT INTO %dbprefix%user_categories (category_name) VALUES ('Doctor');
INSERT INTO %dbprefix%user_categories (category_name) VALUES ('Receptionist');
CREATE TABLE IF NOT EXISTS %dbprefix%navigation_menu ( id int(11) NOT NULL AUTO_INCREMENT, menu_name varchar(250) UNIQUE, parent_name varchar(250) NOT NULL,menu_order int(11) NOT NULL,menu_url varchar(500), menu_icon varchar(100), menu_text varchar(200),required_module VARCHAR(25) NULL, PRIMARY KEY (id) );
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('patients','',100, 'patient/index', 'fa-users', 'Patients','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('all_patients', 'patients', '0', 'patient/index', NULL, 'All Patients', NULL);
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('new_inquiry', 'patients', '200', 'patient/new_inquiry_report', NULL, 'New Inquiries', NULL);
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('appointments','', 200,'appointment/index', 'fa-calendar', 'Appointments','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('reports', '', 400,'#', 'fa-line-chart', 'Reports','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('administration', '', 500,'#', 'fa-cog', 'Administration','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('modules', '', 600,'module/index', 'fa-shopping-cart', 'Modules','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('appointment report', 'reports',100, 'appointment/appointment_report', '', 'Appointment Report','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('bill report', 'reports', 300,'patient/bill_detail_report', '', 'Bill Detail Report','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('clinic detail', 'administration', 100,'settings/clinic', '', 'Clinic Detail','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('invoice setting', 'administration',200, 'settings/invoice', '', 'Invoice','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('users', 'administration', 300,'admin/users', '', 'Users','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('setting', 'administration', 500,'settings/change_settings', '', 'Setting','');
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('payment', '', 300,'payment/index', 'fa-money', 'Payments','');
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'patients','Doctor',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'all_patients','Doctor',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'new_inquiry','Doctor',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'appointments','Doctor',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'reports','Doctor',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'patients','Receptionist',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'all_patients','Receptionist',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'new_inquiry','Receptionist',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'appointments','Receptionist',1);
INSERT INTO %dbprefix%menu_access(menu_name,category_name,allow) VALUES ( 'appointment report','Doctor',1);
CREATE OR REPLACE VIEW %dbprefix%view_contact_email AS SELECT contact_id,detail email FROM %dbprefix%contact_details WHERE type = 'email';
CREATE OR REPLACE VIEW %dbprefix%view_email AS SELECT contact_id,group_concat(detail) AS emails FROM %dbprefix%contact_details WHERE type = 'email' GROUP BY contact_id;
CREATE OR REPLACE VIEW %dbprefix%view_patient AS SELECT patient.patient_id,patient.patient_since, patient.display_id,patient.gender,patient.dob, patient.reference_by, patient.followup_date,contacts.display_name,contacts.contact_id,contacts.first_name,contacts.middle_name,contacts.last_name,contacts.phone_number,contacts.email FROM %dbprefix%patient as patient LEFT JOIN %dbprefix%contacts as contacts ON patient.contact_id = contacts.contact_id;
CREATE OR REPLACE VIEW %dbprefix%view_bill_detail_report AS SELECT bill.bill_id,bill.bill_date,bill.visit_id,bill_detail.particular,bill_detail.amount,visit.userid,CONCAT(view_patient.first_name,' ',view_patient.middle_name, ' ',view_patient.last_name) as patient_name,view_patient.display_id,bill_detail.type FROM %dbprefix%bill as bill LEFT JOIN %dbprefix%bill_detail as bill_detail ON bill_detail.bill_id = bill.bill_id LEFT JOIN %dbprefix%visit as visit ON visit.visit_id = bill.visit_id LEFT JOIN %dbprefix%view_patient as view_patient ON view_patient.patient_id =bill.patient_id;
CREATE OR REPLACE VIEW %dbprefix%view_visit_treatments AS SELECT visit.visit_id,bill_detail.particular,bill_detail.type FROM %dbprefix%visit AS visit LEFT JOIN %dbprefix%bill AS bill ON bill.visit_id = visit.visit_id LEFT JOIN %dbprefix%bill_detail AS bill_detail ON bill_detail.bill_id = bill.bill_id;		
CREATE OR REPLACE VIEW %dbprefix%view_visit AS SELECT visit.visit_id,visit.visit_date,visit.visit_time,visit.type,visit.notes,visit.userid,users.name,visit.patient_id,bill.bill_id,bill.total_amount,bill.due_amount FROM %dbprefix%visit as visit INNER JOIN %dbprefix%users as users ON users.userid = visit.userid INNER JOIN %dbprefix%bill as bill ON bill.visit_id = visit.visit_id ORDER BY patient_id,visit_date,visit_time;
CREATE OR REPLACE VIEW %dbprefix%view_payment AS SELECT payment.payment_id,payment.bill_id,payment.pay_date,payment.pay_mode,payment.cheque_no,payment.pay_amount,bill.bill_date,bill.patient_id,patient.display_id,contacts.first_name,contacts.middle_name,contacts.last_name FROM %dbprefix%payment AS payment	INNER JOIN %dbprefix%bill as bill ON payment.bill_id = bill.bill_id INNER JOIN %dbprefix%patient as patient ON patient.patient_id = bill.patient_id INNER JOIN %dbprefix%contacts as contacts ON contacts.contact_id = patient.contact_id;
INSERT INTO %dbprefix%navigation_menu (menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('backup', 'administration', '600', 'settings/backup', NULL, 'Backup', NULL);
CREATE TABLE IF NOT EXISTS %dbprefix%receipt_template (template_id int(11) NOT NULL AUTO_INCREMENT,template text NOT NULL,is_default int(1) NOT NULL,template_name varchar(25) NOT NULL,PRIMARY KEY (template_id));
ALTER TABLE %dbprefix%bill_detail ADD item_id INT NULL AFTER bill_detail_id;
ALTER TABLE %dbprefix%receipt_template ADD type VARCHAR(15) NULL;
UPDATE %dbprefix%receipt_template SET type = 'bill' WHERE template_id = 1;
ALTER TABLE %dbprefix%clinic ADD PRIMARY KEY(clinic_id);
INSERT INTO %dbprefix%clinic (clinic_id,start_time,end_time,time_interval,clinic_name,tag_line,clinic_address,landline,mobile,email,facebook,twitter, google_plus,next_followup_days) VALUES ('1', '09:00', '18:00', '0.50', 'Chikitsa', 'Patient Management Software', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15');
ALTER TABLE %dbprefix%clinic ADD clinic_logo VARCHAR(255) NULL ;
INSERT INTO %dbprefix%invoice (invoice_id,static_prefix,left_pad,next_id,currency_symbol,currency_postfix) VALUES (1, '', '3', 1, 'Rs.', '');
ALTER TABLE %dbprefix%modules ADD module_version VARCHAR(10) NULL;
UPDATE %dbprefix%receipt_template SET template = '<h1 style="text-align:center;">[clinic_name]</h1><h2 style="text-align:center;">[tag_line]</h2><p style="text-align:center;">[clinic_address]</p><span class="contact">	<p style="text-align: center;">		<b style="line-height: 1.42857143;">Landline : </b><span style="line-height: 1.42857143;">[landline]</span>  		<b style="line-height: 1.42857143;">Mobile : </b><span style="line-height: 1.42857143;">[mobile]</span>  		<b style="line-height: 1.42857143;">Email : </b><span style="text-align: center;"> [email]</span>	</p></span><hr id="null"><h3 style="text-align: center;"><u style="text-align: center;">RECEIPT</u></h3><span style="text-align: left;"><b>Date : </b>[bill_date]</span><span style="float: right;"><b>Receipt Number :</b> [bill_id]</span><p style="text-align: left;"><b style="text-align: left;">Patient Name: </b><span style="text-align: left;">[patient_name]<br></span></p><hr id="null" style="text-align: left;">Received fees for Professional services and other charges of our:<p><br></p><table style="width: 100%;margin-top: 25px;margin-bottom: 25px;border-collapse: collapse;border:1px solid black;">	<thead>		<tr>			<td style="width: 400px;text-align: left;padding:5px;border:1px solid black;">				<b style="width: 400px;text-align: left;">Item</b>			</td>			<td style="padding:5px;border:1px solid black;">				<b>Quantity</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>M.R.P.</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>Amount</b>			</td>		</tr>	</thead>	<tbody>		[col:particular|quantity|mrp|amount]		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Previous Due</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[previous_due]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Discount</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[discount]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Total</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[total]</strong></td>		</tr>				<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Paid Amount</td>			<td style="text-align:right;padding:5px;border:1px solid black;">[paid_amount]</td>		</tr>	</tbody></table>Received with Thanks,<p>For [clinic_name]</p><p><br></p><p><br></p><p>Signature</p>' WHERE template_id = 1;
ALTER TABLE %dbprefix%version ADD id INT NOT NULL AUTO_INCREMENT FIRST , ADD PRIMARY KEY (id) ;
CREATE TABLE IF NOT EXISTS  %dbprefix%followup ( id int(11) NOT NULL,userid int(11) NOT NULL,patient_id int(11) NOT NULL,followup_date date NOT NULL);
CREATE OR REPLACE VIEW %dbprefix%view_report AS SELECT appointment.appointment_id,appointment.patient_id,CONCAT(IFNULL(view_patient.first_name,''),' ',IFNULL(view_patient.middle_name,''), ' ',IFNULL(view_patient.last_name,'')) as patient_name,appointment.userid,users.name doctor_name,appointment.appointment_date,min(appointment.start_time) as appointment_time,max(CASE appointment_log.status WHEN 'Waiting' THEN appointment_log.from_time END) as waiting_in,(max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END) - max(CASE appointment_log.status WHEN 'Waiting' THEN appointment_log.from_time END)) as waiting_duration, max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END) as consultation_in,max(CASE appointment_log.status WHEN 'Complete' THEN appointment_log.from_time END) as consultation_out, (max(CASE appointment_log.status WHEN 'Complete' THEN appointment_log.from_time END) - max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END)) as consultation_duration, max(CASE appointment_log.old_status WHEN 'Consultation' THEN timediff(appointment_log.to_time,appointment_log.from_time) END) as waiting_out, max(bill.total_amount) as collection_amount FROM  %dbprefix%appointments as appointment LEFT JOIN %dbprefix%view_patient as view_patient ON appointment.patient_id = view_patient.patient_id 	   LEFT JOIN %dbprefix%bill as bill ON appointment.visit_id = bill.visit_id 	   LEFT JOIN %dbprefix%appointment_log as appointment_log ON appointment.appointment_id = appointment_log.appointment_id	   LEFT JOIN %dbprefix%users AS users ON users.userid = appointment.userid GROUP BY appointment.appointment_id,patient_name;
ALTER TABLE %dbprefix%followup ADD PRIMARY KEY (id) ;
UPDATE %dbprefix%version SET current_version='0.2.7';
CREATE TABLE %dbprefix%bill_payment_r (bill_payment_id INT(11) NOT NULL AUTO_INCREMENT , bill_id INT(11) NOT NULL , payment_id INT(11) NOT NULL , PRIMARY KEY (bill_payment_id));
ALTER TABLE %dbprefix%bill_payment_r ADD adjust_amount DECIMAL(11) NULL AFTER payment_id;
INSERT INTO %dbprefix%bill_payment_r (bill_id,payment_id,adjust_amount) SELECT bill_id,payment_id,pay_amount FROM %dbprefix%payment;
ALTER TABLE %dbprefix%payment CHANGE bill_id patient_id INT(11) NOT NULL;
UPDATE %dbprefix%payment AS payment SET patient_id = (SELECT bill.patient_id FROM %dbprefix%bill AS bill INNER JOIN %dbprefix%bill_payment_r AS bill_payment_r ON bill_payment_r.bill_id = bill.bill_id WHERE bill_payment_r.payment_id = payment.payment_id );
CREATE OR REPLACE VIEW %dbprefix%view_payment AS SELECT DISTINCT payment.payment_id,payment.pay_date,payment.pay_mode,payment.cheque_no,payment.pay_amount,patient.patient_id,patient.display_id,contacts.first_name,contacts.middle_name,contacts.last_name   FROM %dbprefix%payment AS payment	       INNER JOIN %dbprefix%patient as patient ON patient.patient_id = payment.patient_id 	   INNER JOIN %dbprefix%contacts as contacts ON contacts.contact_id = patient.contact_id;
CREATE OR REPLACE VIEW %dbprefix%view_bill AS SELECT bill.bill_id AS bill_id,        bill.bill_date AS bill_date,	   bill.visit_id AS visit_id,	   users.name AS doctor_name,	   visit.userid AS userid,	   patient.patient_id AS patient_id,	   patient.display_id AS display_id,	   contacts.first_name AS first_name,	   contacts.middle_name AS middle_name,	   contacts.last_name AS last_name,	   bill.total_amount AS total_amount,	   bill.due_amount AS due_amount,	   SUM(payment.pay_amount) AS pay_amount   FROM %dbprefix%bill AS bill        join %dbprefix%visit AS visit ON bill.visit_id = visit.visit_id  	   join %dbprefix%users As users on visit.userid = users.userid 	   join %dbprefix%patient AS patient on bill.patient_id = patient.patient_id 	   INNER JOIN %dbprefix%bill_payment_r AS bill_payment_r ON bill_payment_r.bill_id = bill.bill_id	   join %dbprefix%payment AS payment on payment.payment_id = bill_payment_r.payment_id 	   join %dbprefix%contacts AS contacts on contacts.contact_id = patient.contact_id GROUP BY bill.bill_id,users.name,visit.userid, patient.patient_id;
UPDATE %dbprefix%version SET current_version='0.2.8';
ALTER TABLE %dbprefix%appointment_log ADD appointment_log_id INT NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY ( appointment_log_id ) ;
UPDATE %dbprefix%appointment_log SET old_status = 'Appointment' WHERE old_status = 'Appointments';
CREATE OR REPLACE VIEW %dbprefix%view_report AS SELECT appointment.appointment_id, appointment.patient_id, CONCAT(IFNULL(view_patient.first_name,''),' ',IFNULL(view_patient.middle_name,''), ' ',IFNULL(view_patient.last_name,'')) as patient_name, appointment.userid,		users.name doctor_name,		appointment.appointment_date,		min(appointment.start_time) as appointment_time,		max(CASE appointment_log.status WHEN 'Waiting' THEN appointment_log.from_time END) as waiting_in,		max(CASE appointment_log.old_status WHEN 'Consultation' THEN timediff(appointment_log.from_time,appointment_log.to_time) END) as waiting_out,		TIMEDIFF((max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END)),(max(CASE appointment_log.status WHEN 'Waiting' THEN appointment_log.from_time END))) as waiting_duration, 		max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END) as consultation_in,		max(CASE appointment_log.status WHEN 'Complete' THEN appointment_log.from_time END) as consultation_out,		TIMEDIFF((max(CASE appointment_log.status WHEN 'Complete' THEN appointment_log.from_time END)),(max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END))) as consultation_duration,		max(bill.total_amount) as collection_amount  FROM  %dbprefix%appointments as appointment         LEFT JOIN %dbprefix%view_patient as view_patient ON appointment.patient_id = view_patient.patient_id		LEFT JOIN %dbprefix%bill as bill ON appointment.visit_id = bill.visit_id 	   	LEFT JOIN %dbprefix%appointment_log as appointment_log ON appointment.appointment_id = appointment_log.appointment_id	   		LEFT JOIN %dbprefix%users AS users ON users.userid = appointment.userid   GROUP BY appointment.appointment_id,patient_name;
UPDATE %dbprefix%version SET current_version='0.2.9';
INSERT INTO %dbprefix%receipt_template (template_id,template,is_default,template_name,type) VALUES (1, '<h1 style="text-align:center;">[clinic_name]</h1><h2 style="text-align:center;">[tag_line]</h2><p style="text-align:center;">[clinic_address]</p><span class="contact">	<p style="text-align: center;">	<b style="line-height: 1.42857143;">Landline : </b><span style="line-height: 1.42857143;">[landline]</span>  		<b style="line-height: 1.42857143;">Mobile : </b><span style="line-height: 1.42857143;">[mobile]</span>  		<b style="line-height: 1.42857143;">Email : </b><span style="text-align: center;"> [email]</span>	</p></span><hr id="null"><h3 style="text-align: center;"><u style="text-align: center;">RECEIPT</u></h3><span style="text-align: left;"><b>Date : </b>[bill_date] [bill_time]</span><span style="float: right;"><b>Receipt Number :</b> [bill_id]</span><p style="text-align: left;"><b style="text-align: left;">Patient Name: </b><span style="text-align: left;">[patient_name]<br></span></p><hr id="null" style="text-align: left;">Received fees for Professional services and other charges of our:<p><br></p><table style="width: 100%;margin-top: 25px;margin-bottom: 25px;border-collapse: collapse;border:1px solid black;">	<thead>		<tr>			<td style="width: 400px;text-align: left;padding:5px;border:1px solid black;">				<b style="width: 400px;text-align: left;">Item</b>			</td>			<td style="padding:5px;border:1px solid black;">				<b>Quantity</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>M.R.P.</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>Amount</b>			</td>	</tr>	</thead>	<tbody>		[col:particular|quantity|mrp|amount]		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Previous Due</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[previous_due]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Total</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[total]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Paid Amount</td>			<td style="text-align:right;padding:5px;border:1px solid black;">[paid_amount]</td>		</tr>	</tbody></table>Received with Thanks,<p>For [clinic_name]</p><p><br></p><p><br></p><p>Signature</p>', 1, 'Main','bill');
ALTER TABLE %dbprefix%bill ADD bill_time TIME NULL AFTER bill_date;
UPDATE %dbprefix%version SET current_version='0.3.0';
CREATE OR REPLACE VIEW %dbprefix%view_report AS SELECT appointment.appointment_id, appointment.patient_id, CONCAT(IFNULL(view_patient.first_name,''),' ',IFNULL(view_patient.middle_name,''), ' ',IFNULL(view_patient.last_name,'')) as patient_name, appointment.userid,		users.name doctor_name,		appointment.appointment_date,		min(appointment.start_time) as appointment_time,		max(CASE appointment_log.status WHEN 'Waiting' THEN appointment_log.from_time END) as waiting_in,		max(CASE appointment_log.old_status WHEN 'Consultation' THEN timediff(appointment_log.from_time,appointment_log.to_time) END) as waiting_out,		TIMEDIFF((max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END)),(max(CASE appointment_log.status WHEN 'Waiting' THEN appointment_log.from_time END))) as waiting_duration, 		max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END) as consultation_in,		max(CASE appointment_log.status WHEN 'Complete' THEN appointment_log.from_time END) as consultation_out,		TIMEDIFF((max(CASE appointment_log.status WHEN 'Complete' THEN appointment_log.from_time END)),(max(CASE appointment_log.status WHEN 'Consultation' THEN appointment_log.from_time END))) as consultation_duration,		max(bill.total_amount) as collection_amount  FROM  %dbprefix%appointments as appointment         LEFT JOIN %dbprefix%view_patient as view_patient ON appointment.patient_id = view_patient.patient_id		LEFT JOIN %dbprefix%bill as bill ON appointment.visit_id = bill.visit_id 	   	LEFT JOIN %dbprefix%appointment_log as appointment_log ON appointment.appointment_id = appointment_log.appointment_id	   		LEFT JOIN %dbprefix%users AS users ON users.userid = appointment.userid   GROUP BY appointment.appointment_id,patient_name;
ALTER TABLE %dbprefix%patient CHANGE display_id display_id VARCHAR( 12 ) NULL ;
CREATE OR REPLACE VIEW %dbprefix%view_bill AS SELECT bill.bill_id AS bill_id,        bill.bill_date AS bill_date,	   bill.visit_id AS visit_id,	   users.name AS doctor_name,	   visit.userid AS userid,	   patient.patient_id AS patient_id,	   patient.display_id AS display_id,	   contacts.first_name AS first_name,	   contacts.middle_name AS middle_name,	   contacts.last_name AS last_name,	   bill.total_amount AS total_amount,	   bill.due_amount AS due_amount,	   SUM(bill_payment_r.adjust_amount) AS pay_amount   FROM %dbprefix%bill AS bill        join %dbprefix%visit AS visit ON bill.visit_id = visit.visit_id  	   join %dbprefix%users As users on visit.userid = users.userid 	   join %dbprefix%patient AS patient on bill.patient_id = patient.patient_id 	   INNER JOIN %dbprefix%bill_payment_r AS bill_payment_r ON bill_payment_r.bill_id = bill.bill_id	   join %dbprefix%payment AS payment on payment.payment_id = bill_payment_r.payment_id 	   join %dbprefix%contacts AS contacts on contacts.contact_id = patient.contact_id GROUP BY bill.bill_id,users.name,visit.userid, patient.patient_id;
UPDATE %dbprefix%version SET current_version='0.3.1';
UPDATE %dbprefix%navigation_menu SET menu_order = '200' WHERE menu_name ='patients';
UPDATE %dbprefix%navigation_menu SET menu_order = '100' WHERE menu_name ='appointments';
ALTER TABLE %dbprefix%users ADD contact_id INT( 11 ) NULL;
UPDATE %dbprefix%version SET current_version='0.3.2';
ALTER TABLE %dbprefix%users ADD contact_id INT( 11 ) NULL ;
ALTER TABLE %dbprefix%users CHANGE username username VARCHAR( 25 ) DEFAULT NULL ;
INSERT INTO %dbprefix%navigation_menu (menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('new_patient', 'patients', '100', 'patient/insert/', NULL, 'Add Patient', NULL);
ALTER TABLE  %dbprefix%visit ADD patient_notes TEXT NULL;
CREATE OR REPLACE VIEW %dbprefix%view_visit AS SELECT visit.visit_id,visit.visit_date,visit.visit_time,visit.type,visit.notes,visit.patient_notes,visit.userid,users.name,visit.patient_id,bill.bill_id,bill.total_amount,bill.due_amount FROM %dbprefix%visit as visit INNER JOIN %dbprefix%users as users ON users.userid = visit.userid INNER JOIN %dbprefix%bill as bill ON bill.visit_id = visit.visit_id ORDER BY patient_id,visit_date,visit_time;
UPDATE %dbprefix%version SET current_version='0.3.3';
UPDATE %dbprefix%version SET current_version='0.3.4';
ALTER TABLE  %dbprefix%data CHANGE  ck_value  ck_value VARCHAR( 500 );
ALTER TABLE %dbprefix%followup CHANGE id id INT(11) NOT NULL AUTO_INCREMENT;
UPDATE %dbprefix%version SET current_version='0.3.5';
INSERT INTO %dbprefix%menu_access (id, menu_name, category_name,allow) VALUES (NULL, 'bill report', 'Doctor', '1');
UPDATE %dbprefix%version SET current_version='0.3.6';
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('working_days','administration',200, 'settings/working_days',NULL, 'Working Days',NULL);
INSERT INTO %dbprefix%navigation_menu(menu_name,parent_name,menu_order,menu_url,menu_icon,menu_text,required_module) VALUES ('all_users', 'users', '100', 'admin/users', NULL, 'All Users', NULL);
UPDATE %dbprefix%navigation_menu SET parent_name = 'users' WHERE menu_name = "categories";
UPDATE %dbprefix%navigation_menu SET menu_text = 'User Categories' WHERE menu_name = "categories";
UPDATE %dbprefix%navigation_menu SET parent_name = 'users' WHERE menu_name = "menu_access";
UPDATE %dbprefix%navigation_menu SET menu_url = '#' WHERE menu_name = "users";	
CREATE TABLE IF NOT EXISTS %dbprefix%working_days (uid int(11) NOT NULL AUTO_INCREMENT,working_date date NOT NULL,working_status varchar(15) NOT NULL, working_reason varchar(50) NULL, PRIMARY KEY (uid));
INSERT INTO %dbprefix%data (ck_key, ck_value) VALUES ( 'working_days', '7,1,2,3,4,5,6');
ALTER TABLE %dbprefix%appointments ADD appointment_reason VARCHAR(100) NULL AFTER visit_id;
ALTER TABLE %dbprefix%appointment_log ADD appointment_reason VARCHAR(100) NULL AFTER name;
ALTER TABLE %dbprefix%patient CHANGE reference_by reference_by VARCHAR( 255 ) NULL;
ALTER TABLE %dbprefix%visit ADD appointment_reason VARCHAR(100) NULL AFTER patient_notes;
UPDATE %dbprefix%version SET current_version='0.3.7';
