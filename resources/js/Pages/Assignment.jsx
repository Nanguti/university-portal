import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
const Assignment = ({ auth, assignments }) => {
    console.log(assignments);
    return (
        <>
            <AuthenticatedLayout
                user={auth.user}
                header={
                    <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                        Assignments
                    </h2>
                }
            ></AuthenticatedLayout>
        </>
    );
};

export default Assignment;
