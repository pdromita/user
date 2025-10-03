<h1>Gestione utenti - Home modulo</h1>
<p>Benvenuto nel modulo utenti.</p>
<p>Puoi effettuare le seguenti operazioni:</p>

<ul>
<li><?= \yii\helpers\Html::a('Login', ['login']) ?></li>
<li><?= \yii\helpers\Html::a('Registrazione', ['signup']) ?></li>
<li><?= \yii\helpers\Html::a('Reset password', ['request-password-reset']) ?></li>
<li><?= \yii\helpers\Html::a('Lista utenti', ['listuser']) ?></li>
</ul>
