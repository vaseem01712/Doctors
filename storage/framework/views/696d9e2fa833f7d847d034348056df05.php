<?php $__env->startSection('content'); ?>
<h1 style="margin:0 0 10px;font-size:28px">Appointment received</h1>
<p style="line-height:1.7;color:#59697e">Hi <?php echo e($appointment->patient_name); ?>, your appointment request has been received.</p>
<div style="margin:24px 0;padding:18px;border:1px solid #e5eaf1;border-radius:14px"><b>Doctor:</b> <?php echo e($appointment->doctor->name); ?><br><b>Date:</b> <?php echo e($appointment->appointment_date->format('d M Y')); ?><br><b>Time:</b> <?php echo e(substr($appointment->appointment_time,0,5)); ?><br><b>Status:</b> <?php echo e(ucfirst($appointment->status)); ?></div>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($accessUrl): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isNewPatient): ?>
        <p style="line-height:1.7;color:#59697e">Since this is your first appointment, please set your password to access your dashboard.</p>
        <p><a href="<?php echo e($accessUrl); ?>" style="display:inline-block;background:#1f83fb;color:#fff;text-decoration:none;padding:14px 22px;border-radius:10px;font-weight:700">Set Your Password</a></p>
    <?php else: ?>
        <p style="line-height:1.7;color:#59697e">Use the secure link below to access your account (you can set a new password if you've forgotten it).</p>
        <p><a href="<?php echo e($accessUrl); ?>" style="display:inline-block;background:#1f83fb;color:#fff;text-decoration:none;padding:14px 22px;border-radius:10px;font-weight:700">Access Your Account</a></p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php else: ?>
    <p style="line-height:1.7;color:#59697e">Please sign in to your dashboard for future updates.</p>
    <p><a href="<?php echo e(route('dashboard')); ?>" style="display:inline-block;background:#1f83fb;color:#fff;text-decoration:none;padding:14px 22px;border-radius:10px;font-weight:700">Open Dashboard</a></p>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ITprojects\New folder\resources\views\emails\appointment-confirmation.blade.php ENDPATH**/ ?>