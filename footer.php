
<footer class="bg-dark text-white py-3">
  <div class="container text-center">
    <p class="mb-0 text-center" >&copy; 2025 SCI. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelectorAll('.dropdown').forEach(function (dropdown) {
    dropdown.addEventListener('mouseover', function () {
      const menu = this.querySelector('.dropdown-menu');
      const toggle = this.querySelector('.dropdown-toggle');
      toggle.classList.add('show');
      menu.classList.add('show');
    });
    dropdown.addEventListener('mouseout', function () {
      const menu = this.querySelector('.dropdown-menu');
      const toggle = this.querySelector('.dropdown-toggle');
      toggle.classList.remove('show');
      menu.classList.remove('show');
    });
  });
</script>
</body>
</html>
