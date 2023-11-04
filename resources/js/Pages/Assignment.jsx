import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
const Assignment = ({ auth, assignments }) => {
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
                        Assignments
                    </h2>
                }
            >
                <Head title="Student Assignments" />

                <main id="main" className="main">
                    <div className="pagetitle">
                        <h1>Assignments</h1>
                        <nav>
                            <ol className="breadcrumb">
                                <li className="breadcrumb-item">
                                    <Link href={route("dashboard")}>Home</Link>
                                </li>
                                <li className="breadcrumb-item active">
                                    Assignments
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
                                            Advanced Content
                                        </h5>

                                        <div className="list-group">
                                            {assignments.map((assignment) => (
                                                <Link
                                                    key={assignment.id}
                                                    href={route(
                                                        "assignment.details"
                                                    )}
                                                    className="list-group-item list-group-item-action"
                                                >
                                                    <div className="d-flex w-100 justify-content-between">
                                                        <h5 className="mb-1">
                                                            {
                                                                assignment.unit
                                                                    .name
                                                            }
                                                        </h5>
                                                        <small className="text-muted">
                                                            Due Date :{" "}
                                                            {formatDate(
                                                                assignment.due_date
                                                            )}
                                                        </small>
                                                    </div>
                                                    <p className="mb-1">
                                                        {assignment.name}
                                                    </p>
                                                    <small className="text-muted">
                                                        {
                                                            assignment.instructions
                                                        }
                                                    </small>
                                                </Link>
                                            ))}
                                        </div>
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

export default Assignment;
