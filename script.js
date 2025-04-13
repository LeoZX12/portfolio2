document.addEventListener('DOMContentLoaded', function() {
    // Header hide/show on scroll
    let lastScroll = 0;
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', function() {
      const currentScroll = window.pageYOffset;
      
      if (currentScroll <= 0) {
        header.classList.remove('hidden');
        return;
      }
      
      if (currentScroll > lastScroll && !header.classList.contains('hidden')) {
        header.classList.add('hidden');
      } else if (currentScroll < lastScroll && header.classList.contains('hidden')) {
        header.classList.remove('hidden');
      }
      
      lastScroll = currentScroll;
    });
  
    // Animate elements on scroll
    const animateOnScroll = function() {
      const elements = document.querySelectorAll('.animate-on-scroll, .project-card, .skill-item, .certifications-list, .contact-info, .contact-form, .footer');
      
      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (elementPosition < windowHeight - 100) {
          element.classList.add('visible');
        }
      });
    };
  
    // Initialize animations
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
  
    // Animate skill bars when they come into view
    const skillBars = document.querySelectorAll('.skill-level');
    
    const animateSkillBars = () => {
      skillBars.forEach(bar => {
        const level = bar.getAttribute('data-level');
        const rect = bar.getBoundingClientRect();
        const isVisible = (rect.top <= window.innerHeight && rect.bottom >= 0);
        
        if (isVisible && !bar.classList.contains('animated')) {
          bar.style.width = level + '%';
          // Add animation class after the bar fills
          setTimeout(() => {
            bar.classList.add('animated');
          }, 1500);
        }
      });
    };
  
    // Initialize skill bar animation
    animateSkillBars();
    window.addEventListener('scroll', animateSkillBars);
  
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  
    // Project card hover effect
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        if (this.classList.contains('visible')) {
          this.style.transform = 'translateY(-10px) scale(1.02)';
        }
      });
      
      card.addEventListener('mouseleave', function() {
        if (this.classList.contains('visible')) {
          this.style.transform = 'translateY(0) scale(1)';
        }
      });
    });
  
    // Form button ripple effect
    const formButton = document.querySelector('.form-button');
    if (formButton) {
      formButton.addEventListener('click', function(e) {
        e.preventDefault();
        // Show ripple effect
        this.classList.add('active');
        setTimeout(() => {
          this.classList.remove('active');
        }, 500);
        
        // Form submission would go here
        alert('Message sent! (This is a demo)');
      });
    }
  });