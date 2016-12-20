ALTER TABLE %dbprefix%version ADD id INT NOT NULL AUTO_INCREMENT FIRST , ADD PRIMARY KEY (id) ;
ALTER TABLE %dbprefix%modules ADD module_version VARCHAR(10) NULL;
UPDATE %dbprefix%receipt_template SET template = '<h1 style="text-align:center;">[clinic_name]</h1><h2 style="text-align:center;">[tag_line]</h2><p style="text-align:center;">[clinic_address]</p><span class="contact">	<p style="text-align: center;">		<b style="line-height: 1.42857143;">Landline : </b><span style="line-height: 1.42857143;">[landline]</span>  		<b style="line-height: 1.42857143;">Mobile : </b><span style="line-height: 1.42857143;">[mobile]</span>  		<b style="line-height: 1.42857143;">Email : </b><span style="text-align: center;"> [email]</span>	</p></span><hr id="null"><h3 style="text-align: center;"><u style="text-align: center;">RECEIPT</u></h3><span style="text-align: left;"><b>Date : </b>[bill_date]</span><span style="float: right;"><b>Receipt Number :</b> [bill_id]</span><p style="text-align: left;"><b style="text-align: left;">Patient Name: </b><span style="text-align: left;">[patient_name]<br></span></p><hr id="null" style="text-align: left;">Received fees for Professional services and other charges of our:<p><br></p><table style="width: 100%;margin-top: 25px;margin-bottom: 25px;border-collapse: collapse;border:1px solid black;">	<thead>		<tr>			<td style="width: 400px;text-align: left;padding:5px;border:1px solid black;">				<b style="width: 400px;text-align: left;">Item</b>			</td>			<td style="padding:5px;border:1px solid black;">				<b>Quantity</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>M.R.P.</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>Amount</b>			</td>		</tr>	</thead>	<tbody>		[col:particular|quantity|mrp|amount]		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Previous Due</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[previous_due]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Discount</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[discount]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Total</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[total]</strong></td>		</tr>				<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Paid Amount</td>			<td style="text-align:right;padding:5px;border:1px solid black;">[paid_amount]</td>		</tr>	</tbody></table>Received with Thanks,<p>For [clinic_name]</p><p><br></p><p><br></p><p>Signature</p>' WHERE template_id = 1;
CREATE OR REPLACE VIEW %dbprefix%view_bill AS SELECT bill.bill_id AS bill_id, bill.bill_date AS bill_date,bill.visit_id AS visit_id,users.name AS doctor_name,visit.userid AS userid,patient.patient_id AS patient_id,patient.display_id AS display_id,contacts.first_name AS first_name,contacts.middle_name AS middle_name,contacts.last_name AS last_name,bill.total_amount AS total_amount,bill.due_amount AS due_amount,payment.pay_amount AS pay_amount FROM %dbprefix%bill AS bill join %dbprefix%visit AS visit ON bill.visit_id = visit.visit_id  join %dbprefix%users users on visit.userid = users.userid join %dbprefix%patient AS patient on bill.patient_id = patient.patient_id join %dbprefix%payment payment on payment.bill_id = bill.bill_id join %dbprefix%contacts AS contacts on contacts.contact_id = patient.contact_id;
UPDATE %dbprefix%version SET current_version='0.2.2';
