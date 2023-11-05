import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
const AssignmentDetail = ({ auth, assignment }) => {
    function formatDate(dateTimeString) {
        const originalDate = new Date(dateTimeString);
        return originalDate.toLocaleString("en-US", {
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
        });
    }
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

                    <section className="section">
                        <div className="row">
                            <div className="col-lg-12">
                                <div className="card">
                                    <div className="card-body">
                                        <h5 className="card-title">
                                            {assignment.unit.name}
                                        </h5>
                                        {assignment.name}
                                        <p>
                                            Instructions:{" "}
                                            {assignment.instructions}
                                        </p>
                                        Due Date:{" "}
                                        {formatDate(assignment.due_date)}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </AuthenticatedLayout>
        </>
    );
};

export default AssignmentDetail;
