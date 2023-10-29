import { Link } from "@inertiajs/react";
const Sidebar = () => {
    return (
        <>
            <aside id="sidebar" className="sidebar">
                <ul className="sidebar-nav" id="sidebar-nav">
                    <li className="nav-item">
                        <Link
                            className="nav-link "
                            href={route("dashboard")}
                            active={route().current("dashboard")}
                        >
                            <i className="bi bi-grid" />
                            <span>Dashboard</span>
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link
                            className="nav-link collapsed"
                            href={route("profile.edit")}
                        >
                            <i className="bi bi-person" />
                            <span>Profile</span>
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link
                            className="nav-link collapsed"
                            href={route("student.marks")}
                        >
                            <i className="bi bi-check-all" />
                            <span>Marks</span>
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link
                            className="nav-link collapsed"
                            href={route("student.grades")}
                        >
                            <i className="bi bi-card-list" />
                            <span>Grades</span>
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link
                            className="nav-link collapsed"
                            href={route("student.award")}
                        >
                            <i className="bi bi-award-fill" />
                            <span>Award</span>
                        </Link>
                    </li>
                </ul>
            </aside>
        </>
    );
};

export default Sidebar;
