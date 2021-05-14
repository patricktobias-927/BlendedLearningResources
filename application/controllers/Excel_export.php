<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
 
 function index()
 {
  $this->load->model("excel_export_model");
//   $data["employee_data"] = $this->excel_export_model->fetch_data();
//   $this->load->view("bulk_upload_of_students", $data);
 }

 function action()
 {
  $this->load->model("excel_export_model");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("respondent_number", "phoenix_student_code", "first_name", "middle_name", "last_name", "birth_date", "gender", "grade_level", "section_Name", "section_Code", "school_Code", "respondent_number1", "grade_level1", "section1", "batch1", "testing_date1", "assessment_1", "respondent_number2", "grade_level2", "section2", "batch2", "testing_date2", "assessment_2","respondent_number3", "grade_level3", "section3", "batch3", "testing_date3", "assessment_3", "respondent_number4", "grade_level4", "section4", "batch4", "testing_date4", "assessment_4","respondent_number5", "grade_level5", "section5", "batch5", "testing_date5", "assessment_5","respondent_number6", "grade_level6", "section6", "batch6", "testing_date6", "assessment_6", "respondent_number7", "grade_level7", "section7", "batch7", "testing_date7", "assessment_7", "respondent_number8", "grade_level8", "section8", "batch8", "testing_date8", "assessment_8", "respondent_number9", "grade_level9", "section9", "batch9", "testing_date9", "assessment_9");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  // $data = $this->excel_export_model->fetch_data();

  $excel_row = 2;
$respondent_number = "1234567890";
$phoenix_code = "P123456789";
$firstname = "Patrick Maine";
$middlename = "Cruz";
$lastname = "Tobias";
$birthdate = "21-07-1996";
$gender = "Male";
$gradelevel = "Grade 6";
$section_name = "Affinity";
$section_code = "AF";
$schoolname = "University";
$respondentnumber = "123456";
$GradeLevel = "Grade 5";
$Section_Code = "SH";
$Batch1 = "Batch 1";
$Testingdate1 = "21-07-2021";
$Assessment_type1 = "Asssessment1";


  // foreach($data as
  // {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $respondent_number);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $phoenix_code);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $firstname);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $middlename);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $lastname);
   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $birthdate);
   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $gender);
   $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $gradelevel);
   $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $section_name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $section_code);
   $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $schoolname);
   $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $respondentnumber);
   $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $GradeLevel);
   $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $Section_Code);
   $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $Batch1);
   $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $Testingdate1);
   $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $Assessment_type1);
   
  // }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Upload_template.xls"');
  $object_writer->save('php://output');
 }

 
 
}