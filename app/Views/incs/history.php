<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Shorty</th>
        <th scope="col">OriginLink</th>
        <th scope="col">IP client</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($history as $item) : ?>
    <tr>
        <th scope="row"><?= $item['id'] ?></th>
        <td><?= $item['shorty'] ?></td>
        <td><?= $item['originlink'] ?></td>
        <td><?= $item['ip_client'] ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
