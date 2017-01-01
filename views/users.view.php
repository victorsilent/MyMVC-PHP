<ul>
  <?php foreach ($users as $user): ?>
    <li><?= $user->name ?></li>
  <?php endforeach; ?>
</ul>

<h1>Submit</h1>
<form method="POST" action="/users">
  <input name="name" type="text">
  <button type="submit">Enviar</button>
</form>