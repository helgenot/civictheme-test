// phpcs:ignoreFile
import{C as B}from"./layout-BM0Mq5wj.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";const t={args:()=>({content_top:'<div class="story-placeholder" contenteditable="true">content_top</div>',sidebar_top_left:'<div class="story-placeholder" contenteditable="true">sidebar_top_left</div>',sidebar_top_right:'<div class="story-placeholder" contenteditable="true">sidebar_top_right</div>',content:'<div class="story-placeholder" contenteditable="true">content</div>',sidebar_bottom_left:'<div class="story-placeholder" contenteditable="true">sidebar_bottom_left</div>',sidebar_bottom_right:'<div class="story-placeholder" contenteditable="true">sidebar_bottom_right</div>',content_bottom:'<div class="story-placeholder" contenteditable="true">content_bottom</div>',sidebar_top_left_attributes:null,sidebar_top_right_attributes:null,content_attributes:null,sidebar_bottom_left_attributes:null,sidebar_bottom_right_attributes:null,hide_sidebar_left:!1,hide_sidebar_right:!1,is_contained:!1,vertical_spacing:"none",attributes:null,modifier_class:""})},N={title:"Base/Layout",component:B,argTypes:{content_top:{control:{type:"text"}},sidebar_top_left:{control:{type:"text"}},sidebar_top_right:{control:{type:"text"}},content:{control:{type:"text"}},sidebar_bottom_left:{control:{type:"text"}},sidebar_bottom_right:{control:{type:"text"}},content_bottom:{control:{type:"text"}},hide_sidebar_left:{control:{type:"boolean"}},hide_sidebar_right:{control:{type:"boolean"}},is_contained:{control:{type:"boolean"}},vertical_spacing:{control:{type:"radio"},options:["none","top","bottom","both"]},modifier_class:{control:{type:"text"}}}},e={parameters:{layout:"padded"},args:t.args()},a={parameters:{layout:"padded"},args:{...t.args(),sidebar_top_right:"",sidebar_bottom_left:"",sidebar_bottom_right:""}},o={parameters:{layout:"padded"},args:{...t.args(),sidebar_top_left:"",sidebar_top_right:"",sidebar_bottom_right:""}},r={parameters:{layout:"padded"},args:{...t.args(),sidebar_top_left:"",sidebar_bottom_left:"",sidebar_bottom_right:""}},s={parameters:{layout:"padded"},args:{...t.args(),sidebar_top_left:"",sidebar_top_right:"",sidebar_bottom_left:""}},d={parameters:{layout:"padded"},args:{...t.args(),sidebar_top_left:"",sidebar_top_right:"",sidebar_bottom_left:"",sidebar_bottom_right:""}};var i,n,_;e.parameters={...e.parameters,docs:{...(i=e.parameters)==null?void 0:i.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  args: LayoutData.args()
}`,...(_=(n=e.parameters)==null?void 0:n.docs)==null?void 0:_.source}}};var p,l,b;a.parameters={...a.parameters,docs:{...(p=a.parameters)==null?void 0:p.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  args: {
    ...LayoutData.args(),
    sidebar_top_right: '',
    sidebar_bottom_left: '',
    sidebar_bottom_right: ''
  }
}`,...(b=(l=a.parameters)==null?void 0:l.docs)==null?void 0:b.source}}};var c,m,u;o.parameters={...o.parameters,docs:{...(c=o.parameters)==null?void 0:c.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  args: {
    ...LayoutData.args(),
    sidebar_top_left: '',
    sidebar_top_right: '',
    sidebar_bottom_right: ''
  }
}`,...(u=(m=o.parameters)==null?void 0:m.docs)==null?void 0:u.source}}};var g,y,h;r.parameters={...r.parameters,docs:{...(g=r.parameters)==null?void 0:g.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  args: {
    ...LayoutData.args(),
    sidebar_top_left: '',
    sidebar_bottom_left: '',
    sidebar_bottom_right: ''
  }
}`,...(h=(y=r.parameters)==null?void 0:y.docs)==null?void 0:h.source}}};var f,L,v;s.parameters={...s.parameters,docs:{...(f=s.parameters)==null?void 0:f.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  args: {
    ...LayoutData.args(),
    sidebar_top_left: '',
    sidebar_top_right: '',
    sidebar_bottom_left: ''
  }
}`,...(v=(L=s.parameters)==null?void 0:L.docs)==null?void 0:v.source}}};var S,x,D;d.parameters={...d.parameters,docs:{...(S=d.parameters)==null?void 0:S.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  args: {
    ...LayoutData.args(),
    sidebar_top_left: '',
    sidebar_top_right: '',
    sidebar_bottom_left: '',
    sidebar_bottom_right: ''
  }
}`,...(D=(x=d.parameters)==null?void 0:x.docs)==null?void 0:D.source}}};const E=["Layout","LayoutTopLeftSidebar","LayoutBottomLeftSidebar","LayoutTopRightSidebar","LayoutBottomRightSidebar","LayoutNoSidebars"];export{e as Layout,o as LayoutBottomLeftSidebar,s as LayoutBottomRightSidebar,d as LayoutNoSidebars,a as LayoutTopLeftSidebar,r as LayoutTopRightSidebar,E as __namedExportsOrder,N as default};
