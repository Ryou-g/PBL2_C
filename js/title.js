.anim-box.fadeup.is-animated {
    animation: fadeup 1s cubic-bezier(0.33, 1, 0.68, 1) 1 forwards;
  }
   
  @keyframes fadeup {
    0% {
      transform: translateY(30px);
      opacity: 0;
    }
    80% {
      opacity: 1;
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }