<?php $__env->startSection('title', 'Calendar Basic'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/calendar.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Calendar<span>Basic</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">User</li>
	<li class="breadcrumb-item active">Calendar Basic</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="calendar-wrap">
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header">
                  <h5>Basic</h5>
                  <span>This is the basic example having navigation button to navigate next and previous months and today button. This basic example lists all the events on the calendar.</span>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="cal-basic"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5>Basic Views</h5>
                  <span>This is the basic example having navigation buttons as well as month, week and day views. In this example the option to change your view to a basicWeek or basicDay view. In the Basic Week or Basic Day View events are listed all together.</span>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="cal-basic-view"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5>Agenda Views</h5>
                  <span>The following example demonstrates agenda views and the defaultView option is set to agendaWeek.</span>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="cal-agenda-view"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(route('/')); ?>/assets/js/jquery.ui.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/calendar/moment.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/calendar/fullcalendar.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/calendar/fullcalendar-custom.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webiotspc/Documents/Poco-Laravel/laravel/template/resources/views/new_apps/calendar.blade.php ENDPATH**/ ?>