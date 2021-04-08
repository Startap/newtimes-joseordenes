toggleFaqItems = function () {
  // Toggle current component's state
  console.log(this)
  this.classList.toggle('faq-opened')

  let isPanelOpened = this.classList.contains('faq-opened')
  let faqAnswerPanel = this.querySelector('.faq-answer')
  let maxHeightToSet = isPanelOpened ? faqAnswerPanel.scrollHeight : '0';

  /** Changes state of entire FAQ component */
  this.style.gap = isPanelOpened ? '15px' : '0px'
  faqAnswerPanel.style.maxHeight = maxHeightToSet + 'px';
}

setupFaqItems = function () {
  // get all .faq-card to manage accordions
  let faqItems = document.querySelectorAll('.faq-card');
  
  if (faqItems.length > 0) {
    for (let currentFaqItem of faqItems) {
      currentFaqItem.addEventListener('click', toggleFaqItems);
    }
  }
}

document.onreadystatechange = function () {
  if (document.readyState === 'complete') {
    var buttonCta = document.getElementById('btn')
    var form = document.getElementById('form')
    buttonCta?.addEventListener('click', function () {
      window.scrollTo({
          top: form.offsetHeight,
          left: 0,
          behavior: 'smooth'
      })
    })

    setupFaqItems()
  }
};
