import { jsx, jsxs } from "react/jsx-runtime";
function Table({ items, columns, primary, action }) {
  return /* @__PURE__ */ jsx("div", { className: "relative overflow-x-auto shadow-md sm:rounded-lg", children: /* @__PURE__ */ jsxs("table", { className: "w-full text-sm text-left rtl:text-right text-gray-500", children: [
    /* @__PURE__ */ jsx("thead", { className: "text-xs text-gray-700 uppercase bg-gray-50", children: /* @__PURE__ */ jsxs("tr", { children: [
      /* @__PURE__ */ jsx("th", { scope: "col", className: "px-6 py-3", children: primary }),
      columns.map((column) => /* @__PURE__ */ jsx("th", { scope: "col", className: "px-6 py-3", children: column }, column)),
      /* @__PURE__ */ jsx("th", { scope: "col", className: "px-6 py-3", children: "Action" })
    ] }) }),
    /* @__PURE__ */ jsx("tbody", { children: items.map(
      (item) => /* @__PURE__ */ jsxs("tr", { className: "bg-white border-b", children: [
        /* @__PURE__ */ jsxs("th", { scope: "row", className: "px-6 py-4 font-medium text-gray-900 whitespace-nowrap", children: [
          "#",
          item.id
        ] }),
        columns.map(
          (column) => /* @__PURE__ */ jsx("td", { className: "px-6 py-4", children: item[column] }, column)
        )
      ] }, item.id)
    ) })
  ] }) });
}
export {
  Table as T
};
