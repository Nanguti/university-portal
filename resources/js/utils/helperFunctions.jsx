export function formatDate(dateTimeString) {
    const originalDate = new Date(dateTimeString);
    return originalDate.toLocaleString("en-US", {
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
        hour: "2-digit",
        minute: "2-digit",
    });
}
