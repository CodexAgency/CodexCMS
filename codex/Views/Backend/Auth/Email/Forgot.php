<?php $this->extend('Backend/Email/Layout') ?>
<?= $this->section('container') ?>
<?php if (service('request')->getLocale() === 'it'): ?>
<div class="header">
    <h1>Activate your account</h1>
</div>
<div class="content">
    <p>
        Someone requested a password reset at this email address for <?= base_url() ?>
        To reset the password use this code or URL and follow the instructions.
        If you did not request a password reset, you can safely ignore this email.
    </p>
</div>
<div class="code">
    Your Code: <?= $hash ?>
</div>
<div class="cta">
    <a class="btn" href="<?= base_url('/auth/reset-password') . '?token=' . $hash  ?>">
        Reset Password
    </a>.
</div>

<?php else: ?>

<div class="header">
    <h1>Activate your account</h1>
</div>
<div class="content">
    <p>
        Someone requested a password reset at this email address for <?= base_url() ?>
        To reset the password use this code or URL and follow the instructions.
        If you did not request a password reset, you can safely ignore this email.
    </p>
</div>
<div class="code">
    Your Code: <?= $hash ?>
</div>
<div class="cta">
    <a class="btn" href="<?= base_url('/auth/reset-password') . '?token=' . $hash  ?>">
        Reset Password
    </a>.
</div>
<?php endif;?>

<?php $this->endSection()?>