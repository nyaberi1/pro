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
        $form->text('gender', __('Gender'));
        $form->text('idno', __('Idno'));
        $form->text('birthdate', __('Birthdate'));
        $form->text('country', __('Country'));
        $form->text('county', __('County'));
        $form->text('level', __('Level'));
        $form->text('faculty', __('Faculty'));
        $form->text('course_d', __('Course d'));
        $form->text('yearofenroll', __('Yearofenroll'));
        $form->text('admletter', __('Admletter'));
        $form->text('passport', __('Passport'));
        $form->text('resultsslip', __('Resultsslip'));
        $form->text('kcseliving', __('Kcseliving'));
        $form->text('scannedid', __('Scannedid'));
        $form->text('birthcert', __('Birthcert'));

        return $form;
    }
}
