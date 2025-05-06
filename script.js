// Smooth scroll untuk semua anchor
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      target.scrollIntoView({ behavior: 'smooth' });
      // tambahkan kilatan pada section
      target.classList.add('flash');
      target.addEventListener('animationend', () => {
        target.classList.remove('flash');
      }, { once: true });
    });
  });
  
  // Rotasi kata pada hero
  const words = ['Termurah', 'Terlengkap', 'Terjangkau', 'Terpercaya'];
  let idx = 0;
  const changingEl = document.getElementById('changing-text');
  
  setInterval(() => {
    // fade-out
    changingEl.style.opacity = '0';
    setTimeout(() => {
      // ganti teks
      idx = (idx + 1) % words.length;
      changingEl.textContent = words[idx];
      // fade-in
      changingEl.style.opacity = '1';
    }, 500); // sama dengan durasi transition di CSS
  }, 3000);   // ganti setiap 3 detik
  