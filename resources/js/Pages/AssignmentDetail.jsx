import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
const AssignmentDetail = ({ auth, assignment }) => {
    console.log(assignment);
    return (
        <>
            <AuthenticatedLayout
                user={auth.user}
                header={
                    <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                        Assignments Details
                    </h2>
                }
            >
                <Head title="Student Assignments Details" />

                <main id="main" className="main">
                    <div className="pagetitle">
                        <h1>Assignments</h1>
                        <nav>
                            <ol className="breadcrumb">
                                <li className="breadcrumb-item">
                                    <Link href={route("dashboard")}>Home</Link>
                                </li>
                                <li className="breadcrumb-item">
                                    <Link href={route("student.assignment")}>
                                        Assignments
                                    </Link>
                                </li>
                                <li className="breadcrumb-item active">
                                    Assignments Details
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <section className="section"></section>
                </main>
            </AuthenticatedLayout>
        </>
    );
};

export default AssignmentDetail;
