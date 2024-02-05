import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import Table from '@/Components/Table';
import { Head } from '@inertiajs/react';

export default function index({ auth, paginatedData}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cloudflare</h2>}
        >
            <Head title="Cloudflare" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <Table items={paginatedData.data} columns={['mail_sender', 'mail_subject', 'mail_date', 'subject', 'amount', 'pocket']} primary='ID'></Table>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
