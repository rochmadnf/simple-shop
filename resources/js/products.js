import Card from './components/Card'

async function getProducts() {
  // get data product
  const products = await fetch(`${location.protocol}//${location.host}/getData`).then(res => res.json());

  // get element to show product
  const productDoc = document.getElementById('products');
  // remove skeleton
  productDoc.innerHTML = ``;

  // print product
  products.map(product => {
    productDoc.insertAdjacentHTML('beforeend', Card(product));
  })
}


getProducts();