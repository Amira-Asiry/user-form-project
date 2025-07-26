function toggleStatus(id) {
    fetch(`toggle.php?id=${id}`)
        .then(() => location.reload());
}
