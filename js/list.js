var table = document.querySelector('[table-js]')
var item, qtd, price, dateIn

function getSend(){
    this.item = document.querySelector('[item-name]').value
    this.qtd = document.querySelector('[item-qtd]').value
    this.price = document.querySelector('[item-price]').value
    this.dateIn = document.querySelector('[item-date]').value
    if(this.item != "" && this.qtd != "" && this.price != "" && this.dateIn != ""){
        var id = [0001, 0002, 0003, 0004, 0005]
        var tr = document.createElement('tr')
        var tableContent = `
                        <td>${id[0]}</td>
                        <td>${item}</td>
                        <td>${qtd}</td>
                        <td>R$ ${price}</td>
                        <td>${dateIn}</td>
                        <td><a href="#">Mais +</a></td>
        `

        table.appendChild(tr)
        tr.innerHTML = tableContent
    } else {
        alert('Preencha todos os campos!')
    }
}
