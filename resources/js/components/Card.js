const Card = (product) => {
  const imageList = [
    'https://www.kedasbeautymember.com/img/serum.adf9b938.png',
    'https://www.kedasbeautymember.com/img/soap.30d14d9f.png',
    'https://www.kedasbeautymember.com/img/gold_jelly.d0083ac8.png',
    'https://www.kedasbeautymember.com/img/scrub.6beaf93b.png'
  ];

  const toRupiah = (num) => {
    return num.toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('');
  }

  return `<div class="card">
              <div class="card-img">
                  <img src="${imageList[product.id - 1]}" alt="${product.name}">
              </div>
              <div class="card-body">
                  <div class="card-title">${product.name}</div>
                  <div class="card-price">Rp${toRupiah(product.price)}</div>
                  <div class="card-buttons">
                      <button class="btn btn-outline btn-outline-primary">Beli Langsung</button>
                      <button class="btn btn-primary">+ Keranjang</button>
                  </div>
              </div>
          </div>`
}

export default Card;