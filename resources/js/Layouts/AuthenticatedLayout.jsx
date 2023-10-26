import { useState } from "react";
import Header from "@/Components/Header";
import { Link } from "@inertiajs/react";
import Sidebar from "../Components/Sidebar";
import Footer from "../Components/Footer";

export default function Authenticated({ user, header, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] =
        useState(false);

    return (
        <>
            <Header user={user} header={header}></Header>;
            <Sidebar />
            {children}
            <Footer />
        </>
    );
}
