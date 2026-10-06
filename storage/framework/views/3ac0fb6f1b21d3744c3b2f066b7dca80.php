<?php $__env->startSection('content'); ?>
<?php ($approved = $appointment->status === 'confirmed'); ?>
<?php ($doctorPhone = $appointment->doctor->phone ?: $appointment->doctor->user?->phone); ?>
<h1 style="margin:0 0 10px;font-size:28px"><?php echo e($approved ? 'Appointment approved' : 'Appointment request declined'); ?></h1>
<p style="line-height:1.7;color:#59697e">
    Hi <?php echo e($appointment->patient_name); ?>,
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($approved): ?>
        Dr. <?php echo e($appointment->doctor->name); ?> has approved your appointment.
    <?php else: ?>
        Dr. <?php echo e($appointment->doctor->name); ?> is unable to accept your appointment request.
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</p>
<div style="margin:24px 0;padding:18px;border:1px solid #e5eaf1;border-radius:14px"><b>Doctor:</b> <?php echo e($appointment->doctor->name); ?><br><b>Date:</b> <?php echo e($appointment->appointment_date->format('d M Y')); ?><br><b>Time:</b> <?php echo e(substr($appointment->appointment_time, 0, 5)); ?><br><b>Status:</b> <?php echo e($approved ? 'Approved' : 'Declined'); ?></div>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($approved): ?>
<p style="line-height:1.7;color:#59697e">Please arrive a few minutes before your appointment time so your visit can begin on time.</p>
<?php else: ?>
<p style="line-height:1.7;color:#59697e">For assistance or to discuss another appointment time, please contact the doctor.</p>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($doctorPhone): ?>
<p style="line-height:1.7;color:#59697e"><b>Doctor contact:</b> <?php echo e($doctorPhone); ?></p>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<p><a href="<?php echo e(route('dashboard')); ?>" style="display:inline-block;background:#1f83fb;color:#fff;text-decoration:none;padding:14px 22px;border-radius:10px;font-weight:700">Open Dashboard</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ITprojects\New folder\resources\views/emails/appointment-status.blade.php ENDPATH**/ ?>