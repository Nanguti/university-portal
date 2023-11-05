import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Link, Head } from "@inertiajs/react";

const Grades = ({ auth, results }) => {
    function formatDate(dateTimeString) {
        const originalDate = new Date(dateTimeString);
        return originalDate.toLocaleString("en-US", {
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
        });
    }
    return (
        <>
            <AuthenticatedLayout
                user={auth.user}
                header={
                    <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                        Grades
                    </h2>
                }
            >
                <Head title="Grades" />
                <main id="main" className="main">
                    <div className="pagetitle">
                        <h1>Grades</h1>
                        <nav>
                            <ol className="breadcrumb">
                                <li className="breadcrumb-item">
                                    <Link href={route("dashboard")}>Home</Link>
                                </li>
                                <li className="breadcrumb-item active">
                                    Grades
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div className="card">
                        <div className="card-body">
                            <h5 className="card-title">Units and Marks</h5>
                            {/* Table with hoverable rows */}
                            <table className="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Unit Code</th>
                                        <th scope="col">Unit Name</th>
                                        <th scope="col">Total Marks</th>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Last Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {results.map((res) => (
                                        <tr key={res.id}>
                                            <th scope="row">{res.id}</th>
                                            <td>{res.unit.code}</td>
                                            <td>{res.unit.name}</td>
                                            <td>{res.total_marks}</td>
                                            <td>{res.remarks}</td>
                                            <td>
                                                {formatDate(res.updated_at)}
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                            {/* End Table with hoverable rows */}
                        </div>
                    </div>
                </main>
            </AuthenticatedLayout>
        </>
    );
};

export default Grades;
