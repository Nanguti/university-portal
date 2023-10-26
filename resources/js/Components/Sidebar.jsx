import React from "react";

const Sidebar = () => {
    return (
        <>
            <aside id="sidebar" className="sidebar">
                <ul className="sidebar-nav" id="sidebar-nav">
                    <li className="nav-item">
                        <a
                            className="nav-link "
                            href={route("dashboard")}
                            active={route().current("dashboard")}
                        >
                            <i className="bi bi-grid" />
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li className="nav-item">
                        <a
                            className="nav-link collapsed"
                            href={route("profile.edit")}
                        >
                            <i className="bi bi-person" />
                            <span>Profile</span>
                        </a>
                    </li>
                    {/* End Profile Page Nav */}
                    <li className="nav-item">
                        <a className="nav-link collapsed" href="pages-faq.html">
                            <i className="bi bi-question-circle" />
                            <span>F.A.Q</span>
                        </a>
                    </li>
                    {/* End F.A.Q Page Nav */}
                    <li className="nav-item">
                        <a
                            className="nav-link collapsed"
                            href="pages-contact.html"
                        >
                            <i className="bi bi-envelope" />
                            <span>Contact</span>
                        </a>
                    </li>
                    {/* End Contact Page Nav */}
                    <li className="nav-item">
                        <a
                            className="nav-link collapsed"
                            href="pages-register.html"
                        >
                            <i className="bi bi-card-list" />
                            <span>Register</span>
                        </a>
                    </li>
                    {/* End Register Page Nav */}
                    <li className="nav-item">
                        <a
                            className="nav-link collapsed"
                            href="pages-login.html"
                        >
                            <i className="bi bi-box-arrow-in-right" />
                            <span>Login</span>
                        </a>
                    </li>
                    {/* End Login Page Nav */}
                    <li className="nav-item">
                        <a
                            className="nav-link collapsed"
                            href="pages-error-404.html"
                        >
                            <i className="bi bi-dash-circle" />
                            <span>Error 404</span>
                        </a>
                    </li>
                    {/* End Error 404 Page Nav */}
                    <li className="nav-item">
                        <a
                            className="nav-link collapsed"
                            href="pages-blank.html"
                        >
                            <i className="bi bi-file-earmark" />
                            <span>Blank</span>
                        </a>
                    </li>
                    {/* End Blank Page Nav */}
                </ul>
            </aside>
        </>
    );
};

export default Sidebar;
