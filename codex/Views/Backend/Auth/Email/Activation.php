<?php $this->extend('Backend/Email/Layout') ?>
<?= $this->section('container') ?>
<?php if (service('request')->getLocale() === 'it'): ?>
<div class="header">
    <h1>Attiva il tuo account</h1>
</div>
<div class="content">
    <p>Questa è l'eamil per l'attivazione del tuo account su <?= base_url() ?>. Per attivare il tuo account usa
        questo URL. Se non ti sei registrato su questo sito web, puoi tranquillamente ignorare questa email.</p>
</div>

<div class="cta">
    <a class="btn" href="<?= base_url('auth/activate-account') . '?token=' . $hash ?>">
        Attiva account
    </a>
</div>

<?php else: ?>

<div class="header">
    <h1>Activate your account</h1>
</div>
<div class="content">
    <p>This is activation email for your account on <?= base_url() ?>. To activate your account use this URL. If you
        did not registered on this website, you can safely ignore this email.</p>
</div>
<div class="cta">
    <a class="btn" href="<?= base_url('auth/activate-account') . '?token=' . $hash ?>">
        Activate account
    </a>.
</div>
<?php endif;?>

<?php $this->endSection()?>