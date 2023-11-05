import { Link } from "@inertiajs/react";
import React, { useEffect, useState } from "react";
const Sidebar = () => {
    const [pathname, setPathname] = useState(window.location.pathname);

    useEffect(() => {
        const handleLocationChange = () => {
            setPathname(window.location.pathname);
        };

        window.addEventListener("popstate", handleLocationChange);

        return () => {
            window.removeEventListener("popstate", handleLocationChange);
        };
    }, []);
    return (
        <>
            <aside id="sidebar" className="sidebar">
                <ul className="sidebar-nav" id="sidebar-nav">
                    <li className="nav-item">
                        <Link
                            className={`nav-link collapsed ${
                                pathname === "/" ? "active-sidebar-link" : ""
                            }`}
                            href={route("dashboard")}
                        >
                            <i className="bi bi-grid" />
                            <span>Dashboard</span>
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link
                            className={`nav-link collapsed ${
                                pathname === "/profile"
                                    ? "active-sidebar-link"
                                    : ""
                            }`}
                            href={route("profile.edit")}
                        >
                            <i className="bi bi-person" />
                            <span>Profile</span>
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link
                            className={`nav-link collapsed ${
                                pathname === "/marks"
                                    ? "active-sidebar-link"
                                    : ""
                            }`}
                            href={route("student.marks")}
                        >
                            <i className="bi bi-check-all" />
                            <span>Marks</span>
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link
                            className={`nav-link collapsed ${
                                pathname === "/grades"
                                    ? "active-sidebar-link"
                                    : ""
                            }`}
                            href={route("student.grades")}
                        >
                            <i className="bi bi-card-list" />
                            <span>Grades</span>
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link
                            className={`nav-link collapsed ${
                                pathname === "/award"
                                    ? "active-sidebar-link"
                                    : ""
                            }`}
                            href={route("student.award")}
                        >
                            <i className="bi bi-award-fill" />
                            <span>Award</span>
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link
                            className={`nav-link collapsed ${
                                pathname === "/assignment"
                                    ? "active-sidebar-link"
                                    : ""
                            }`}
                            href={route("student.assignment")}
                        >
                            <i className="bi bi-patch-question-fill" />
                            <span>Assignments</span>
                        </Link>
                    </li>
                </ul>
            </aside>
        </>
    );
};

export default Sidebar;
