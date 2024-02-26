<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Enroll;

class EnrollController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Enroll';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Enroll());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('regno', __('Regno'));
        $grid->column('phone', __('Phone'));
        $grid->column('gender', __('Gender'));
        $grid->column('idno', __('Idno'));
        $grid->column('birthdate', __('Birthdate'));
        $grid->column('country', __('Country'));
        $grid->column('county', __('County'));
        $grid->column('level', __('Level'));
        $grid->column('faculty', __('Faculty'));
        $grid->column('course_d', __('Course d'));
        $grid->column('yearofenroll', __('Yearofenroll'));
        $grid->column('admletter', __('Admletter'));
        $grid->column('passport', __('Passport'));
        $grid->column('resultsslip', __('Resultsslip'));
        $grid->column('kcseliving', __('Kcseliving'));
        $grid->column('scannedid', __('Scannedid'));
        $grid->column('birthcert', __('Birthcert'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Enroll::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('regno', __('Regno'));
        $show->field('phone', __('Phone'));
        $show->field('gender', __('Gender'));
        $show->field('idno', __('Idno'));
        $show->field('birthdate', __('Birthdate'));
        $show->field('country', __('Country'));
        $show->field('county', __('County'));
        $show->field('level', __('Level'));
        $show->field('faculty', __('Faculty'));
        $show->field('course_d', __('Course d'));
        $show->field('yearofenroll', __('Yearofenroll'));
        $show->field('admletter', __('Admletter'));
        $show->field('passport', __('Passport'));
        $show->field('resultsslip', __('Resultsslip'));
        $show->field('kcseliving', __('Kcseliving'));
        $show->field('scannedid', __('Scannedid'));
        $show->field('birthcert', __('Birthcert'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Enroll());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('regno', __('Regno'));
        $form->phonenumber('phone', __('Phone'));
        $form->checkbox('Gender','gender')->options([1 => 'Male', 2 => 'Female']);
        $form->text('idno', __('Idno'));
        $form->date('Birthdate','birthdate')->format('d-m-Y');
        $form->text('country', __('Country'));
        $form->text('county', __('County'));

        $form->radio('Level','level')->options(['1' => ' Master', '2' => ' Degree','3' => ' Diploma', '4' => 'Certificate']);
        $form->checkbox('Faculty','faculty')->options(['1' => ' BIT', '2' => ' BCOM','3' => ' BAIR', '4' => 'BEDA']);
        $form->checkbox('Course d','course_d')->options(['1' => ' 4 Years', '2' => ' 3 Years','3' => ' 1 Year']);


        //file or image upload
       
        $form->file('Yearofenroll', 'yearofenroll')->rules('mimes: pdf, png ,jpg,xlsx');
        $form->file('Admletter', 'admletter')->rules('mimes: pdf, png ,jpg,xlsx');
        $form->file('Passport', 'passport')->rules('mimes: pdf, png ,jpg,xlsx');
        $form->file('Resultsslip', 'resultsslip')->rules('mimes: pdf, png ,jpg,xlsx');
        $form->file('Kcseliving', 'kcseliving')->rules('mimes: pdf, png ,jpg,xlsx');
        $form->file('Scannedid', 'scannedid')->rules('mimes: pdf, png ,jpg,xlsx');
        $form->file('Birthcert', 'birthcert')->rules('mimes: pdf, png ,jpg,xlsx');


        return $form;
    }
}
