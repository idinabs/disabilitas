<link rel='stylesheet'  href='{{ asset('css/main.css') }}' />

<div class="accessibility">
  <div class="accessibility-img-alt-description"></div>
  <div class="accessibility-index-tooltip" id="accessibilityTriggerButtonTt" style="top: 387.188px; transform: translateX(-50%); left: 20.7265px; opacity: 1; display: none;">Sarana</div>
  <div class="accessibility-menu">
      <div class="accessibility-menu-container" aria-hidden="true">
          <div class="accessibility-menu-header">
              <h3 tabindex="0">Sarana</h3>
              <button type="button" class="accessibility-menu-close-trigger"><i class="accessibility i-cancel"></i></button>
          </div>
          <div class="accessibility-menu-body">
              <div class="accessibility-layout-features">
                  <div class="pl-2 py-2 bg-grey rounded shadow-sm border-bottom">
                      <a href="#" class="audio-link" style="font-family: 'PT Sans',sans-serif;font-weight: normal;font-style: normal;font-size: 14px;">
                          <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier">
                                  <path d="M9.66984 13.9219C8.92984 13.9219 8.33984 14.5219 8.33984 15.2619C8.33984 16.0019 8.93984 16.5919 9.66984 16.5919C10.4098 16.5919 11.0098 15.9919 11.0098 15.2619C11.0098 14.5219 10.4098 13.9219 9.66984 13.9219Z"
                                  fill="#2C65E1"></path>
                                  <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM17.12 9.8C17.12 10.41 16.86 10.95 16.42 11.27C16.14 11.47 15.8 11.58 15.44 11.58C15.23 11.58 15.02 11.54 14.8 11.47L12.51 10.71C12.5 10.71 12.48 10.7 12.47 10.69V15.25C12.47 16.79 11.21 18.05 9.67 18.05C8.13 18.05 6.87 16.79 6.87 15.25C6.87 13.71 8.13 12.45 9.67 12.45C10.16 12.45 10.61 12.59 11.01 12.8V8.63V8.02C11.01 7.41 11.27 6.87 11.71 6.55C12.16 6.23 12.75 6.15 13.33 6.35L15.62 7.11C16.48 7.4 17.13 8.3 17.13 9.2V9.8H17.12Z"
                                  fill="#2C65E1"></path>
                              </g>
                          </svg>
                          <span style="position: absolute; top: 50px; margin-left: 8px">Versi Audio</span>
                      </a>
                  </div>
              </div>
              <div class="accessibility-features">
                  <div class="accessibility-features-row">
                      <div class="accessibility-feature monochrome">
                          <button type="button" data-feature="accessibility-monochrome" onclick="toggleFeature('accessibility-monochrome')"><i class="accessibility i-monochrome"></i><span>Skala Abu-abu</span></button>
                      </div>
                      <div class="accessibility-feature dark-contrast">
                          <button type="button" data-feature="accessibility-dark-contrast" onclick="toggleFeature('accessibility-dark-contrast')"><i class="accessibility i-dark-contrast"></i><span>Warna / Klise</span></button>
                      </div>
                  </div>
                  <div class="accessibility-features-row">
                      <div class="accessibility-feature decrease-font-size">
                          <button type="button" data-feature="decrease-font-size" onclick="decreaseFontSize()"><i class="accessibility i-decrease-font-size"></i><span>Perkecil Teks</span></button>
                      </div>
                      <div class="accessibility-feature increase-font-size">
                          <button type="button" data-feature="increase-font-size" onclick="increaseFontSize()"><i class="accessibility i-increase-font-size"></i><span>Perbesar Teks</span></button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="accessibility-menu-footer">
              <div class="accessibility-footer-features">
                  <div class="accessibility-feature reset">
                      <button type="button" data-feature="reset" onclick="reset()"><i class="accessibility i-reset"></i><span>Mengatur Ulang</span></button>
                  </div>
              </div>
          </div>
      </div>
      <button type="button" aria-labelledby="accessibilityTriggerButtonTt" role="button" class="accessibility-menu-trigger accessibility-tooltip-element"><i class="accessibility i-accessibility"></i></button>
  </div>
</div>

<script>
var accessibilityElement = document.querySelector('.accessibility');

accessibilityElement.addEventListener('click', function(event) {
    if (event.target.classList.contains('accessibility-menu-close-trigger')) {
        var menuElement = document.querySelector('.accessibility-menu');
        menuElement.classList.remove('accessibility-menu-opened');
    } else {
        var menuElement = document.querySelector('.accessibility-menu');
        if (!menuElement.classList.contains('accessibility-menu-opened')) {
            menuElement.classList.add('accessibility-menu-opened');
        }
    }
});

window.addEventListener('DOMContentLoaded', (event) => {
    var allElements = document.querySelectorAll('*');

    allElements.forEach(function(element) {
        element.classList.add('hover-audio');
    });

    var beritaContent = document.querySelectorAll('.the_content_wrapper_berita');
    
    beritaContent.forEach(function(element) {
        var allElements = Array.from(document.querySelectorAll('*')).filter(function(el) {
            return !el.closest('.the_content_wrapper_berita');
        });

        allElements.forEach(function(allElement) {
            allElement.classList.add('hover-audio');
        });

        var div = document.createElement("div");
        div.className = "px-1 py-1 bg-grey rounded shadow-sm show-audio";
        
        var a = document.createElement("a");
        a.href = "#";
        a.className = "generate-audio";
        
        var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("width", "24px");
        svg.setAttribute("height", "24px");
        svg.setAttribute("viewBox", "0 0 24 24");
        svg.setAttribute("fill", "none");
        
        var path1 = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path1.setAttribute("d", "M9.66984 13.9219C8.92984 13.9219 8.33984 14.5219 8.33984 15.2619C8.33984 16.0019 8.93984 16.5919 9.66984 16.5919C10.4098 16.5919 11.0098 15.9919 11.0098 15.2619C11.0098 14.5219 10.4098 13.9219 9.66984 13.9219Z");
        path1.setAttribute("fill", "#2C65E1");
        
        var path2 = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path2.setAttribute("d", "M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM17.12 9.8C17.12 10.41 16.86 10.95 16.42 11.27C16.14 11.47 15.8 11.58 15.44 11.58C15.23 11.58 15.02 11.54 14.8 11.47L12.51 10.71C12.5 10.71 12.48 10.7 12.47 10.69V15.25C12.47 16.79 11.21 18.05 9.67 18.05C8.13 18.05 6.87 16.79 6.87 15.25C6.87 13.71 8.13 12.45 9.67 12.45C10.16 12.45 10.61 12.59 11.01 12.8V8.63V8.02C11.01 7.41 11.27 6.87 11.71 6.55C12.16 6.23 12.75 6.15 13.33 6.35L15.62 7.11C16.48 7.4 17.13 8.3 17.13 9.2V9.8H17.12Z");
        path2.setAttribute("fill", "#2C65E1");

        svg.appendChild(path1);
        svg.appendChild(path2);
        
        a.appendChild(svg);

        var span = document.createElement("span");
        span.style.position = "absolute";
        span.style.marginLeft = "8px";
        span.innerText  = "Versi Audio";

        a.appendChild(span);

        div.appendChild(a);
        element.prepend(div);

        a.addEventListener('click', function(event) {
            event.preventDefault(); 

            var headings = this.parentNode.parentNode.querySelectorAll('p');

            headings.forEach(function(heading) {
                var text = heading.innerText;

                utterance = new SpeechSynthesisUtterance();
                utterance.text = text;
                speechSynthesis.speak(utterance);
            });
        });
    });
});

document.addEventListener('mouseover', function(event) {
    var target = event.target;
    if (target.classList.contains('hover-audio')) {
        var text = target.innerText;

        if (speechSynthesis.speaking) {
            speechSynthesis.cancel();
        }

        utterance = new SpeechSynthesisUtterance();
        utterance.text = text;
        speechSynthesis.speak(utterance);  
    }
});

document.querySelector('.audio-link').addEventListener('click', function(event) {
    event.preventDefault();

    var clearfixElements = document.querySelectorAll('.vc-text-audio .vc_gitem-col');
    
    clearfixElements.forEach(function(element) {
        if (element.children[0].classList.contains("hover-audio")) {
            if (speechSynthesis.speaking) {
                speechSynthesis.cancel();
            }

            var allElements = document.querySelectorAll('*');

            allElements.forEach(function(allElement) {
                allElement.classList.remove('hover-audio');
            });
        } else {
            var allElements = document.querySelectorAll('*');

            allElements.forEach(function(allElement) {
                allElement.classList.add('hover-audio');
            });
        }
    });

    var beritaContent = document.querySelectorAll('.the_content_wrapper_berita');
    
    beritaContent.forEach(function(element) {
        if (element.children[0].classList.contains("show-audio")) {
            if (speechSynthesis.speaking) {
                speechSynthesis.cancel();
            }

            var allElements = Array.from(document.querySelectorAll('*')).filter(function(el) {
                return !el.closest('.the_content_wrapper_berita');
            });

            allElements.forEach(function(allElement) {
                allElement.classList.remove('hover-audio');
            });

            var audioDiv = element.children[0];
            element.removeChild(audioDiv);
        } else {
            var allElements = Array.from(document.querySelectorAll('*')).filter(function(el) {
                return !el.closest('.the_content_wrapper_berita');
            });

            allElements.forEach(function(allElement) {
                allElement.classList.add('hover-audio');
            });

            var div = document.createElement("div");
            div.className = "px-1 py-1 bg-grey rounded shadow-sm show-audio";
            
            var a = document.createElement("a");
            a.href = "#";
            a.className = "generate-audio";
            
            var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute("width", "24px");
            svg.setAttribute("height", "24px");
            svg.setAttribute("viewBox", "0 0 24 24");
            svg.setAttribute("fill", "none");
            
            var path1 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path1.setAttribute("d", "M9.66984 13.9219C8.92984 13.9219 8.33984 14.5219 8.33984 15.2619C8.33984 16.0019 8.93984 16.5919 9.66984 16.5919C10.4098 16.5919 11.0098 15.9919 11.0098 15.2619C11.0098 14.5219 10.4098 13.9219 9.66984 13.9219Z");
            path1.setAttribute("fill", "#2C65E1");
            
            var path2 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path2.setAttribute("d", "M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM17.12 9.8C17.12 10.41 16.86 10.95 16.42 11.27C16.14 11.47 15.8 11.58 15.44 11.58C15.23 11.58 15.02 11.54 14.8 11.47L12.51 10.71C12.5 10.71 12.48 10.7 12.47 10.69V15.25C12.47 16.79 11.21 18.05 9.67 18.05C8.13 18.05 6.87 16.79 6.87 15.25C6.87 13.71 8.13 12.45 9.67 12.45C10.16 12.45 10.61 12.59 11.01 12.8V8.63V8.02C11.01 7.41 11.27 6.87 11.71 6.55C12.16 6.23 12.75 6.15 13.33 6.35L15.62 7.11C16.48 7.4 17.13 8.3 17.13 9.2V9.8H17.12Z");
            path2.setAttribute("fill", "#2C65E1");
    
            svg.appendChild(path1);
            svg.appendChild(path2);
            
            a.appendChild(svg);

            var span = document.createElement("span");
            span.style.position = "absolute";
            span.style.marginLeft = "8px";
            span.innerText  = "Versi Audio";

            a.appendChild(span);
    
            div.appendChild(a);
            element.prepend(div);
    
            a.addEventListener('click', function(event) {
                event.preventDefault(); 
    
                var headings = this.parentNode.parentNode.querySelectorAll('p');
    
                headings.forEach(function(heading) {
                    var text = heading.innerText;
    
                    utterance = new SpeechSynthesisUtterance();
                    utterance.text = text;
                    speechSynthesis.speak(utterance);
                });
            });
        }
    });
});

function addActivatedClass(feature) {
    const featureButton = document.querySelector(`.accessibility-feature button[data-feature="${feature}"]`);
    featureButton.parentElement.classList.add('accessibility-feature-activated');
}

function removeActivatedClass() {
    const featureButtons = document.querySelectorAll('.accessibility-feature button');
    featureButtons.forEach(button => {
        button.parentElement.classList.remove('accessibility-feature-activated');
    });
}

function toggleFeature(feature) {
  const body = document.body;

  if (body.classList.contains(feature)) {
    body.classList.remove(feature);
    removeActivatedClass(); 
  } else {
    const classes = Array.from(body.classList).filter(className => className.startsWith('accessibility-'));

    classes.forEach(className => {
        body.classList.remove(className);
        removeActivatedClass(); 
    });

    body.classList.add(feature);
    addActivatedClass(feature);
  }
}

function decreaseFontSize() {
     var elements = document.querySelectorAll("body *");
    for (var i = 0; i < elements.length; i++) {
        var fontSize = window.getComputedStyle(elements[i], null).getPropertyValue('font-size');
        var currentSize = parseFloat(fontSize);
        var newSize = currentSize - 1;
        if (newSize >= 14) {
            elements[i].style.fontSize = newSize + 'px';
        }
    }
}

function increaseFontSize() {
     var elements = document.querySelectorAll("body *");
    for (var i = 0; i < elements.length; i++) {
        var fontSize = window.getComputedStyle(elements[i], null).getPropertyValue('font-size');
        var currentSize = parseFloat(fontSize);
        var newSize = currentSize + 1;
        if (newSize <= 21) {
            elements[i].style.fontSize = newSize + 'px';
        }
    }
}

function reset() {
    var elements = document.querySelectorAll("body *");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.fontSize = '14px';
    }
    document.body.classList.remove("accessibility-monochrome", "accessibility-dark-contrast");

    removeActivatedClass();
}
</script>