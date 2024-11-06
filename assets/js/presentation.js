function scrollToSection(sectionId) {
    var section = document.getElementById('data_' + sectionId);
    if (section) {
        var container = document.querySelector('.scrollable-container');
        container.scrollTop = section.offsetTop - container.offsetTop;

        // Remove highlight from previous sections
        document.querySelectorAll('.highlight').forEach(function(el) {
            el.classList.remove('highlight');
        });

        // Add highlight to the selected section
        section.classList.add('highlight');
    }
}

document.addEventListener('DOMContentLoaded', function() {
  function escapeHtml(text) {
    const map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) {
      return map[m];
    });
  }

  const urlParams = new URLSearchParams(window.location.search);
  const query = urlParams.get('query');
  const results = urlParams.get('results');

  const queryTitleElement = document.getElementById('query-title');

  console.log('Query:', query); // Debugging: Check if query is being retrieved
  console.log('Results:', results); // Debugging: Check if results are being retrieved

  // Set the search query title
  if (query) {
    const escapedQuery = escapeHtml(query);
    queryTitleElement.textContent = `Search results for: ${escapedQuery}`;
  } else {
    queryTitleElement.textContent = 'Search article';
  }

  // Display the search results
  if (results) {
    try {
      const blogs = JSON.parse(decodeURIComponent(results));

      console.log('Parsed Blogs:', blogs); // Debugging: Check if blogs are parsed correctly

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