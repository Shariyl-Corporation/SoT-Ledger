import { jsxs, jsx } from "react/jsx-runtime";
import { A as Authenticated } from "./AuthenticatedLayout-P2tPN35U.js";
import { T as Table } from "./Table-qfffU3gV.js";
import { Head } from "@inertiajs/react";
import "react";
import "./ApplicationLogo-DRETeZBQ.js";
import "@headlessui/react";
function index({ auth, paginatedData }) {
  return /* @__PURE__ */ jsxs(
    Authenticated,
    {
      user: auth.user,
      header: /* @__PURE__ */ jsx("h2", { className: "font-semibold text-xl text-gray-800 leading-tight", children: "Cloudflare" }),
      children: [
        /* @__PURE__ */ jsx(Head, { title: "Cloudflare" }),
        /* @__PURE__ */ jsx("div", { className: "py-12", children: /* @__PURE__ */ jsx("div", { className: "max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6", children: /* @__PURE__ */ jsx(Table, { items: paginatedData.data, columns: ["mail_sender", "mail_subject", "mail_date", "subject", "amount", "pocket"], primary: "ID" }) }) })
      ]
    }
  );
}
export {
  index as default
};
