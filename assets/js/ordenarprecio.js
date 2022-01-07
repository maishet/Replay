let field = document.querySelector('.productos-filtrar');
let li = Array.from(field.children);
let select = document.getElementById('select');
let ar = [];

for(let i of li)
{
    const last = i.lastElementChild;
    //console.log(last);
    const x = last.querySelector('.price').innerHTML;
    //console.log(x);
    const y = Number(x);
    i.setAttribute('data-price', y);
    ar.push(i);
}

select.onchange = sortingValue;

function sortingValue()
{
    if (this.value == 'default')
    {
        while(field.firstChild){
            field.removeChild(field.firstChild);
        }
        field.append(...ar);
    }

    if (this.value == 'menorprecio')
    {
        sortElem(field, li, true);
    }
    if (this.value == 'mayorprecio')
    {
        sortElem(field, li, false);
    }
}

function sortElem(field, li, asc)
{
    let dm, sortli;
    dm = asc ? 1 : -1;
    sortli = li.sort((a, b) => {
        const ax = a.getAttribute('data-price');
        const bx = b.getAttribute('data-price');

        return ax>bx ? (1*dm) : (-1*dm);
    })
    while(field.firstChild){
        field.removeChild(field.firstChild);
    }
    field.append(...sortli);
}