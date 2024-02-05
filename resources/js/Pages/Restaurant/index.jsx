import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import Table from '@/Components/Table';
import { Head } from '@inertiajs/react';

export default function index({ auth, paginatedRestaurant}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Restaurants</h2>}
        >
            <Head title="Restaurant" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <Table items={paginatedRestaurant.data} columns={['name']} primary='ID' action={'restaurant'}></Table>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
