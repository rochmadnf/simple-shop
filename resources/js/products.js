import Card from './components/Card'

const toast = (mode, title, message) => {
  iziToast[mode]({
    title,
    message,
    position: 'topRight',
    messageColor: '#1E293B',
    timeout: 2500,
  });
};

function printCard(products) {
  if (products.length > 0) {
    // get element to show product
    const productDoc = document.getElementById('products');
    // remove skeleton
    productDoc.innerHTML = ``;

    // print product
    products.map(product => {
      productDoc.insertAdjacentHTML('beforeend', Card(product));
    });
  } else {
    toast("info", "Info", "Produk belum tersedia");
  }
}

async function getProducts() {
  // get data product
  const products = await fetch(`${location.protocol}//${location.host}/products/get`).then(res => res.json());
  printCard(products);
}
getProducts();

// search product
document.getElementById('search').addEventListener('keypress', async (e) => {
  if (e.key == "Enter") {
    const keyword = e.target.value;
    if (keyword.length < 3) {
      toast("error", "Galat", "Kata kunci harus lebih atau sama dengan 3 karakter");
    } else {
      const products = await fetch(`${location.protocol}//${location.host}/products/search?keyword=${keyword}`).then(res => res.json());
      printCard(products);
    }
  }
})

// clear search
document.getElementById('search').addEventListener('search', (e) => {
  if (e.target.value === "") {
    getProducts();
  }
})
