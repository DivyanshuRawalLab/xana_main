
function toggleInput(selectElement) {
    var inputField = document.getElementById('search_id');
    // Enable input field if an option is selected, disable otherwise
    inputField.disabled = selectElement.value === "";
}

  function handleSelection() {
    const volumeSelect = document.getElementById('volume');
    const searchInput = document.getElementById('search_id');

    if (volumeSelect.value !== "") {
      searchInput.disabled = false;
    } else {
      searchInput.disabled = true;
    }
  }

  document.addEventListener('DOMContentLoaded', (event) => {
  handleSelection();
  });




  document.addEventListener('DOMContentLoaded', function() {
  function escapeHtml(text) {
      const map = {
          '&': '&amp;',
          '<': '&lt;',
          '>': '&gt;',
          '"': '&quot;',
          "'": '&#039;'
      };
      return text.replace(/[&<>"']/g, function(m) { return map[m]; });
  }

  const urlParams = new URLSearchParams(window.location.search);
  const results = urlParams.get('results');
  const query = urlParams.get('query');

  const queryTitleElement = document.getElementById('query-title');
  const searchQueryInput = document.getElementById('search-query');

  if (query) {
      const escapedQuery = escapeHtml(query);
      queryTitleElement.textContent = escapedQuery;
      searchQueryInput.value = escapedQuery;
  } else {
      const defaultQuery = 'search article';
      queryTitleElement.textContent = defaultQuery;
      searchQueryInput.value = defaultQuery;
  }

  if (results) {
      try {
          const blogs = JSON.parse(decodeURIComponent(results));

          const resultsDiv = document.getElementById('results');
          if (blogs.length > 0) {
              blogs.forEach(blog => {
                  const articleDiv = document.createElement('div');
                  articleDiv.innerHTML = `
                      <h5>${escapeHtml(blog.title)}</h5>
                      <p>${escapeHtml(blog.content)}</p>
                      <p><em>${escapeHtml(blog.date)}</em></p>`;
                  resultsDiv.appendChild(articleDiv);
              });
          } else {
              resultsDiv.innerHTML = '<p>No results found.</p>';
          }
      } catch (e) {
          console.error('Error parsing results:', e);
          document.getElementById('results').innerHTML = '<p>Error processing results.</p>';
      }
  } else {
      document.getElementById('results').innerHTML = '<p>No results found.</p>';
  }
});

  


document.addEventListener("DOMContentLoaded", function() {
  // Initialize the first tab as active
  const recentTab = document.getElementById('recent-tab');
  const recentContent = document.getElementById('recent-content');
  const mostAccessedTab = document.getElementById('most-accessed-tab');
  const mostAccessedContent = document.getElementById('most-accessed-content');
  const sortByDropdown = document.querySelector('.dropdown-toggle');

  recentTab.classList.add('active-tab');
  recentContent.classList.add('active-content');

  // Tab switcher function
  function switchTab(event) {
    const tabId = event.target.id;
    document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active-tab'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active-content'));

    if (tabId === 'recent-tab') {
      recentTab.classList.add('active-tab');
      recentContent.classList.add('active-content');
      sortByDropdown.disabled = false; // Enable the sort dropdown
    } else if (tabId === 'most-accessed-tab') {
      mostAccessedTab.classList.add('active-tab');
      mostAccessedContent.classList.add('active-content');
      sortByDropdown.disabled = true; // Disable the sort dropdown
    }
  }

  recentTab.addEventListener('click', switchTab);
  mostAccessedTab.addEventListener('click', switchTab);
  

  // Handle volume selection
  window.handleSelection = function() {
    const searchInput = document.getElementById('search_id');
    searchInput.disabled = !document.getElementById('volume').value;
  };
});
