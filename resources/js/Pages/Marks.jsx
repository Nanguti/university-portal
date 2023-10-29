import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Link } from "@inertiajs/react";
const Marks = ({ auth, marks }) => {
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
                        Marks
                    </h2>
                }
            >
                <main id="main" className="main">
                    <div className="pagetitle">
                        <h1>Marks</h1>
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
                                        <th scope="col">Unit</th>
                                        <th scope="col">Component</th>
                                        <th scope="col">Semester</th>
                                        <th scope="col">Score</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Last Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {marks.map((mks) => (
                                        <tr>
                                            <th scope="row">{mks.id}</th>
                                            <td>{mks.unit.name}</td>
                                            <td>{mks.component_name}</td>
                                            <td>{mks.semester}</td>
                                            <td>{mks.score}</td>
                                            <td>{mks.comment}</td>
                                            <td>
                                                {formatDate(mks.updated_at)}
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

export default Marks;
