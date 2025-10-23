// Call this before reload
function showToastAndReload(message, type = "success") {
    localStorage.setItem("toast", JSON.stringify({ message, type }));
    location.reload();
}

// Then, after reload
document.addEventListener("DOMContentLoaded", () => {
    const toastData = localStorage.getItem("toast");
    if (toastData) {
        const { message, type } = JSON.parse(toastData);
        showToast(message, type);
        localStorage.removeItem("toast");
    }
});
