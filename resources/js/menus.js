// Profile Dropdown Menu
const profileMenuBtn = document.getElementById('profile-menu-btn');
const profileMenu = document.getElementById('profile-menu');

if (profileMenuBtn && profileMenu) {
  profileMenuBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    profileMenu.classList.toggle('hidden');
  });

  // Close menu when clicking outside
  document.addEventListener('click', function(event) {
    if (!profileMenu.contains(event.target) && !profileMenuBtn.contains(event.target)) {
      profileMenu.classList.add('hidden');
    }
  });
}

// Mobile Menu
const mobileMenuBtn = document.querySelector('[commandfor="mobile-menu"]');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
  mobileMenuBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    mobileMenu.classList.toggle('hidden');
  });

  // Close menu when clicking outside
  document.addEventListener('click', function(event) {
    if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
      mobileMenu.classList.add('hidden');
    }
  });
}
