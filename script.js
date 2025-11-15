// Stats data
const bookData = {
  labels: ["SS", "CoS", "PoA", "GoF", "OotP", "HBP", "DH"],
  datasets: [
    {
      label: "Climax Day",
      data: [10.1, 16.4, 23.4, 12.3, 13.7, 14.7, 30.1],
      backgroundColor: "rgba(211, 166, 37, 0.8)",
    },
    {
      label: "Diagon Alley",
      data: [5.9, 4.7, 6.6, 0, 0, 2.6, 2.7],
      backgroundColor: "rgba(148, 107, 45, 0.8)",
    },
    {
      label: "Dumbledores Office",
      data: [0, 1.3, 0, 4.1, 5.5, 16.6, 4.4],
      backgroundColor: "rgba(14, 26, 64, 0.8)",
    },
    {
      label: "Dursleys",
      data: [15.6, 7.5, 6.9, 4.7, 6.3, 2.8, 5.5],
      backgroundColor: "rgba(93, 93, 93, 0.8)",
    },
    {
      label: "Forbidden Forest",
      data: [3.4, 2.6, 0, 0.4, 3.9, 0, 3.7],
      backgroundColor: "rgba(26, 71, 42, 0.8)",
    },
    {
      label: "Grimmauld Place",
      data: [0, 0, 0, 0, 13.2, 0, 8.8],
      backgroundColor: "rgba(26, 71, 42, 0.6)",
    },
    {
      label: "Hogsmeade",
      data: [0, 0, 4.6, 2.7, 3.2, 2.3, 2.9],
      backgroundColor: "rgba(236, 185, 57, 0.8)",
    },
    {
      label: "Hogwarts Express",
      data: [4.7, 0, 3.0, 0.7, 1.5, 3.2, 0],
      backgroundColor: "rgba(116, 0, 1, 0.8)",
    },
    {
      label: "Memories",
      data: [0, 1.7, 0, 1.8, 1.0, 7.4, 3.9],
      backgroundColor: "rgba(14, 26, 64, 0.6)",
    },
    {
      label: "Ministry of Magic",
      data: [0, 0, 0, 0, 9.7, 0, 3.5],
      backgroundColor: "rgba(93, 93, 93, 0.6)",
    },
    {
      label: "Quidditch",
      data: [2.7, 1.5, 3.3, 1.1, 0.6, 0.8, 0],
      backgroundColor: "rgba(211, 166, 37, 0.6)",
    },
    {
      label: "The Burrow",
      data: [0, 5.4, 0, 4.7, 0, 8.9, 12.3],
      backgroundColor: "rgba(236, 185, 57, 0.6)",
    },
  ],
};

const seriesData = {
  labels: ["SS", "CoS", "PoA", "GoF", "OotP", "HBP", "DH", "ALL"],
  datasets: [
    {
      label: "Climax Day",
      data: [0.73, 1.34, 2.27, 2.13, 3.21, 2.3, 5.6, 17.6],
      backgroundColor: "rgba(211, 166, 37, 0.8)",
    },
    {
      label: "Diagon Alley",
      data: [0.43, 0.38, 0.64, 0, 0, 0.41, 0.5, 2.36],
      backgroundColor: "rgba(148, 107, 45, 0.8)",
    },
    {
      label: "Dumbledores Office",
      data: [0, 0.11, 0, 0.71, 1.29, 2.6, 0.82, 5.54],
      backgroundColor: "rgba(14, 26, 64, 0.8)",
    },
    {
      label: "Dursleys",
      data: [1.13, 0.61, 0.67, 0.82, 1.48, 0.44, 1.02, 6.16],
      backgroundColor: "rgba(93, 93, 93, 0.8)",
    },
    {
      label: "Forbidden Forest",
      data: [0.24, 0.21, 0, 0.08, 0.91, 0, 0.68, 2.13],
      backgroundColor: "rgba(26, 71, 42, 0.8)",
    },
    {
      label: "Grimmauld Place",
      data: [0, 0, 0, 0, 3.09, 0, 1.64, 4.73],
      backgroundColor: "rgba(26, 71, 42, 0.6)",
    },
    {
      label: "Hogsmeade",
      data: [0, 0, 0.44, 0.47, 0.75, 0.37, 0.53, 2.56],
      backgroundColor: "rgba(236, 185, 57, 0.8)",
    },
    {
      label: "Hogwarts Express",
      data: [0.33, 0, 0.29, 0.12, 0.35, 0.5, 0, 1.6],
      backgroundColor: "rgba(116, 0, 1, 0.8)",
    },
    {
      label: "Memories",
      data: [0, 0.14, 0, 0.3, 0.24, 1.16, 0.73, 2.57],
      backgroundColor: "rgba(14, 26, 64, 0.6)",
    },
    {
      label: "Ministry of Magic",
      data: [0, 0, 0, 0, 2.27, 0, 0.65, 2.92],
      backgroundColor: "rgba(93, 93, 93, 0.6)",
    },
    {
      label: "Quidditch",
      data: [0.2, 0.12, 0.32, 0.18, 0.14, 0.12, 0, 1.08],
      backgroundColor: "rgba(211, 166, 37, 0.6)",
    },
    {
      label: "The Burrow",
      data: [0, 0.44, 0, 0.82, 0, 1.4, 2.3, 4.96],
      backgroundColor: "rgba(236, 185, 57, 0.6)",
    },
  ],
};

let chart;
let currentView = "book";
let activeCategories = new Set(bookData.datasets.map((d) => d.label));

// Initialize
document.addEventListener("DOMContentLoaded", function () {
  initChart();
  buildTable();

  // Mark all category filters as active
  document.querySelectorAll(".category-filter").forEach((btn) => {
    btn.classList.add("active");
  });
});

function initChart() {
  const ctx = document.getElementById("mainChart").getContext("2d");
  const data = currentView === "book" ? bookData : seriesData;

  chart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: data.labels,
      datasets: data.datasets.filter((d) => activeCategories.has(d.label)),
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: "bottom",
          labels: {
            color: getComputedStyle(document.body).getPropertyValue("color"),
            font: { size: 12, family: "Lora" },
            padding: 15,
          },
        },
        title: {
          display: true,
          text:
            currentView === "book"
              ? "Percentage of Each Book"
              : "Percentage of Entire Series",
          color: "#D3A625",
          font: { size: 20, family: "Cinzel", weight: "bold" },
        },
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            color: getComputedStyle(document.body).getPropertyValue("color"),
            callback: function (value) {
              return value + "%";
            },
          },
          grid: { color: "rgba(211, 166, 37, 0.1)" },
        },
        x: {
          ticks: {
            color: getComputedStyle(document.body).getPropertyValue("color"),
          },
          grid: { display: false },
        },
      },
    },
  });
}

function switchChart(view) {
  currentView = view;

  document
    .getElementById("bookBtn")
    .classList.toggle("active", view === "book");
  document
    .getElementById("seriesBtn")
    .classList.toggle("active", view === "series");

  chart.destroy();
  initChart();

  // 🔥 Rebuild table to match chart view
  buildTable();
}

function toggleCategory(category) {
  const btn = event.target;
  if (activeCategories.has(category)) {
    activeCategories.delete(category);
    btn.classList.remove("active");
  } else {
    activeCategories.add(category);
    btn.classList.add("active");
  }

  chart.destroy();
  initChart();
}

function buildTable() {
  const headerRow = document.getElementById("tableHeader");
  const tbody = document.getElementById("tableBody");

  const data = currentView === "book" ? bookData : seriesData;

  const labels = data.labels;
  const categories = data.datasets.map((d) => d.label);

  // Build header row dynamically
  headerRow.innerHTML = `
    <th class="px-6 py-4 text-left elegant-font sticky-col">Book</th>
    ${categories
      .map(
        (c) => `
      <th class="px-6 py-4 text-right elegant-font">${c}</th>
    `
      )
      .join("")}
  `;

  // Build table body
  tbody.innerHTML = labels
    .map((label, rowIndex) => {
      const rowData = data.datasets.map((ds) => ds.data[rowIndex] ?? 0);

      return `
        <tr style="background: ${
          rowIndex % 2 === 0 ? "rgba(211, 166, 37, 0.05)" : "transparent"
        }">
          <td class="px-6 py-4 font-semibold sticky-col">
            ${labelToBookName(label)}
          </td>

          ${rowData
            .map(
              (v) => `
            <td class="px-6 py-4 text-right">${v}%</td>
          `
            )
            .join("")}
        </tr>
      `;
    })
    .join("");

  // Reinitialize sorting (if using a sortable library)
  if (typeof sorttable !== "undefined") {
    sorttable.makeSortable(document.getElementById("dataTable"));
  }
}

function labelToBookName(code) {
  const names = {
    SS: "Sorcerer's Stone",
    CoS: "Chamber of Secrets",
    PoA: "Prisoner of Azkaban",
    GoF: "Goblet of Fire",
    OotP: "Order of the Phoenix",
    HBP: "Half-Blood Prince",
    DH: "Deathly Hallows",
  };
  return names[code] || code;
}

document.querySelectorAll("table.sortable th").forEach((th, index) => {
  th.addEventListener("click", () => {
    sortTable(index);
  });
});

function sortTable(columnIndex) {
  const table = document.getElementById("dataTable");
  const tbody = table.querySelector("tbody");
  const rows = Array.from(tbody.querySelectorAll("tr"));

  const isNumeric = columnIndex > 0;

  const sorted = rows.sort((a, b) => {
    const A = a.children[columnIndex].innerText.replace("%", "");
    const B = b.children[columnIndex].innerText.replace("%", "");

    return isNumeric ? parseFloat(A) - parseFloat(B) : A.localeCompare(B);
  });

  rows.reverseSort = !rows.reverseSort;
  if (rows.reverseSort) sorted.reverse();

  tbody.innerHTML = "";
  sorted.forEach((row) => tbody.appendChild(row));
}

function toggleTheme() {
  const body = document.body;
  const icon = document.getElementById("themeIcon");

  if (body.classList.contains("light")) {
    body.classList.remove("light");
    body.classList.add("dark");
    icon.textContent = "☀️";
  } else {
    body.classList.remove("dark");
    body.classList.add("light");
    icon.textContent = "🌙";
  }

  // Update chart colors
  if (chart) {
    chart.options.plugins.legend.labels.color =
      getComputedStyle(body).getPropertyValue("color");
    chart.options.scales.y.ticks.color =
      getComputedStyle(body).getPropertyValue("color");
    chart.options.scales.x.ticks.color =
      getComputedStyle(body).getPropertyValue("color");
    chart.update();
  }
}

function toggleFilters() {
  const panel = document.getElementById("filterPanel");
  panel.classList.toggle("hidden");
}

function toggleAllBooks() {
  const allChecked = document.getElementById("allBooks").checked;
  document.querySelectorAll(".book-filter").forEach((cb) => {
    cb.checked = allChecked;
  });
}

function generateChapter() {
  const selectedBooks = Array.from(
    document.querySelectorAll(".book-filter:checked")
  ).map((cb) => parseInt(cb.value));
  let filteredChapters = chapterinfo;

  if (selectedBooks.length > 0) {
    filteredChapters = chapterinfo.filter((ch) =>
      selectedBooks.includes(ch[1])
    );
  }

  if (filteredChapters.length === 0) {
    document.getElementById("chapterResult").innerHTML = `
                    <div class="text-center p-8 rounded-lg" style="background: rgba(211, 166, 37, 0.1);">
                        <p class="text-xl">⚠️ Please select at least one book!</p>
                    </div>
                `;
    return;
  }

  const randomChapter =
    filteredChapters[Math.floor(Math.random() * filteredChapters.length)];

  document.getElementById("chapterResult").innerHTML = `
                <div class="chapter-result text-center p-8 rounded-lg" style="background: rgba(211, 166, 37, 0.1);">
                    ${
                      selectedBooks.length > 0
                        ? `<p class="text-sm opacity-75 mb-4 italic">Filtering books: ${selectedBooks.join(
                            ", "
                          )}</p>`
                        : ""
                    }
                    <div class="hp-font text-3xl mb-4" style="color: var(--gryffindor-gold);">
                        Book ${randomChapter[1]}: ${randomChapter[0]}
                    </div>
                    <h3 class="elegant-font text-4xl mb-6">
                        Chapter ${randomChapter[3]}: ${randomChapter[4]}
                    </h3>
                    <img src="chapterart/${
                      randomChapter[2]
                    }.jpg" alt="Chapter ${randomChapter[3]}" 
                         class="mx-auto rounded-lg shadow-2xl" 
                         style="max-width: 300px; width: 100%;"
                         onerror="this.style.display='none'">
                </div>
            `;
}

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});
