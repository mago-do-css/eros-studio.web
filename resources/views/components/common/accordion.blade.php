@props([
'icon'=>'',
'title',
'text',
'key'=>1,
])
<div class="accordion-container">
    <button class="flex items-center" onclick="openAccordion({{ $key }})">
        <span id="icon={{ $key }}">
            <svg width="77" height="78" viewBox="0 0 77 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="path-{{$key}}" d="M34.4 77.2V42.4H0V34.8H34.4V0H42.4V34.8H77V42.4H42.4V77.2H34.4Z" fill="white"/>
            </svg> 
        </span>
        <h4>{{ $title }}</h4>
    </button>
    <div id="accordion-{{$key }}" class="accordion-content">
        <p>
            {{ $text }}
        </p>
    </div>
</div>
<script type="text/javascript" >
    function openAccordion(key) {
        
        let accordionSelected = document.getElementById('accordion-' + key); 
        let icon = document.getElementById('icon-' + key);
        let path = document.getElementById('path-' + key);

        accordionSelected.classList.toggle("accordion-opened");

        //verifica se o accordion esta aberto
        if (accordionSelected.classList.contains("accordion-opened")) {
            // Ícone de '-'
            path.setAttribute("d", "M0 34.8H77V42.4H0V34.8Z"); 
        } else {
            // Ícone de '+'
            path.setAttribute("d", "M34.4 77.2V42.4H0V34.8H34.4V0H42.4V34.8H77V42.4H42.4V77.2H34.4Z");
        }
    }
</script>
