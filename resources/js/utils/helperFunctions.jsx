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

export function getElapsedTime(createdAt) {
    const now = new Date();
    const postDate = new Date(createdAt);
    const timeDifference = now - postDate;
    const seconds = Math.floor(timeDifference / 1000);

    if (seconds < 60) {
        return `${seconds} ${seconds === 1 ? "second" : "seconds"} ago`;
    } else if (seconds < 3600) {
        const minutes = Math.floor(seconds / 60);
        return `${minutes} ${minutes === 1 ? "minute" : "minutes"} ago`;
    } else if (seconds < 86400) {
        const hours = Math.floor(seconds / 3600);
        return `${hours} ${hours === 1 ? "hour" : "hours"} ago`;
    } else if (seconds < 604800) {
        const days = Math.floor(seconds / 86400);
        return `${days} ${days === 1 ? "day" : "days"} ago`;
    } else {
        const weeks = Math.floor(seconds / 604800);
        return `${weeks} ${weeks === 1 ? "week" : "weeks"} ago`;
    }
}
