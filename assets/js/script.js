
function switchTab(tabName) {
    // Remove active-content class from all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.remove('active-content');
    });

    // Remove active-tab class from all tabs
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active-tab');
    });

    // Add active-content class to the contents of the selected tab
    document.querySelectorAll(`.tab-content[data-content="${tabName}"]`).forEach(content => {
        content.classList.add('active-content');
    });

    // Add active-tab class to the selected tab
    document.querySelector(`.tab[data-tab="${tabName}"]`).classList.add('active-tab');
}

// Add click event listeners to the tabs
document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', function() {
        switchTab(this.getAttribute('data-tab'));
    });
});

// Initialize the first tab as active
switchTab('recent');

async function searchBlogs() {
  const query = document.getElementById('search-bar').value;
  const response = await fetch(`search.php?query=${query}`);
  const results = await response.json();
  
  const resultsContainer = document.getElementById('search-results');
  resultsContainer.innerHTML = '';
  
  if (results.length > 0) {
    results.forEach(blog => {
      const blogPost = document.createElement('div');
      blogPost.classList.add('blog-post');
      blogPost.innerHTML = `
        <h3>${blog.title}</h3>
        <p>${blog.content}</p>
      `;
      resultsContainer.appendChild(blogPost);
    });
  } else {
    resultsContainer.innerHTML = '<p>No results found</p>';
  }
}