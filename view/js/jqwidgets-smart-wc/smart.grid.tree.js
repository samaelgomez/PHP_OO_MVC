
/* Smart HTML Elements v6.0.0 (2020-Jan) 
Copyright (c) 2011-2020 jQWidgets. 
License: https://htmlelements.com/license/ */

Smart.Utilities.Assign("Grid.Tree",class{_setRowProperty(a,b,c){const d=this,e=d.rowById[a];e&&(e[b]=c)}_setRowsProperty(a,b){const c=this,d=c._recyclingRows;c.rows.canNotify=!1;for(let c=0;c<d.length;c++){const e=d[c];e[a]=b}c.rows.canNotify=!0,c.refresh()}_applyThreeStates(a){const b=this,c=a!==b.rowHierarchy,d=c?a.children:b.rowHierarchy.filter(a=>{if(0===a.level)return a});let e=0,f=0;for(let g=0;g<d.length;g++){const h=d[g];a.checked&&(h.checked=!0),!1===h.leaf&&b._applyThreeStates(h),c&&(h.checked?e++:null===h.checked&&f++)}c&&(e===a.children.length?a.checked=!0:0==e&&0==f?a.checked=!1:b.checkBoxes.hasThreeStates?a.checked=null:a.checked=!1)}_hasThreeStates(a,b){function c(a,b){const d=a.children;for(let e=0;e<d.length;e++){const a=d[e];a.checked=b,!1===a.leaf&&c(a,b)}}const d=this;let e=a;for(a!==b&&(a.checked?a.checked=!1:a.checked=!0);e.parent;){const a=e.parent,b=a.children;let c=0,f=0;for(let a=0;a<b.length;a++)b[a].checked?c++:d.checkBoxes.hasThreeStates&&null===b[a].checked&&f++;a.checked=!(c!==a.children.length)||(0!=c||0!=f)&&!!d.checkBoxes.hasThreeStates&&null,e=a}a.leaf||c(a,a.checked)}expandRow(a){const b=this;b._setRowProperty(a,"expanded",!0)}expandAllRows(){const a=this;a._setRowsProperty("expanded",!0)}collapseAllRows(){const a=this;a._setRowsProperty("expanded",!1)}toggleRow(a){const b=this,c=b.rowById[a];c&&(c.expanded?c.expanded=!1:c.expanded=!0)}collapseRow(a){const b=this;b._setRowProperty(a,"expanded",!1)}checkRow(a){const b=this;b._setRowProperty(a,"checked",!0)}uncheckRow(a){const b=this;b._setRowProperty(a,"checked",!1)}checkAllRows(){const a=this;a._setRowsProperty("checked",!0)}uncheckAllRows(){const a=this;a._setRowsProperty("checked",!1)}});