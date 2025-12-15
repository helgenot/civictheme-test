// phpcs:ignoreFile
import{B as r}from"./button-M4jvQ2Xa.js";import{C as i}from"./constants-DgSegUo0.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";import"./text-icon-GyjYiuzU.js";import"./icon-DxPaYU9_.js";const m={title:"Atoms/Form Controls/Button",component:r,parameters:{layout:"centered"},argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},text:{control:{type:"text"}},type:{control:{type:"radio"},options:["primary","secondary","tertiary"]},kind:{control:{type:"radio"},options:["button","link","reset","submit"]},size:{control:{type:"radio"},options:["large","regular","small"]},icon:{control:{type:"select"},options:i.ICONS},icon_placement:{control:{type:"radio"},options:["before","after"]},icon_group_disabled:{control:{type:"boolean"}},icon_single_only:{control:{type:"boolean"}},url:{control:{type:"text"}},is_new_window:{control:{type:"boolean"}},is_disabled:{control:{type:"boolean"}},is_external:{control:{type:"boolean"}},modifier_class:{control:{type:"text"}}}},t={args:{theme:"light",type:"primary",kind:"button",size:"regular",icon:"",icon_placement:"after",icon_group_disabled:!1,icon_single_only:!1,text:"My title",url:"",is_new_window:!1,is_external:!1,is_disabled:!1,attributes:null,modifier_class:""}};var e,o,n;t.parameters={...t.parameters,docs:{...(e=t.parameters)==null?void 0:e.docs,source:{originalSource:`{
  args: {
    theme: 'light',
    type: 'primary',
    kind: 'button',
    size: 'regular',
    icon: '',
    icon_placement: 'after',
    icon_group_disabled: false,
    icon_single_only: false,
    text: 'My title',
    url: '',
    is_new_window: false,
    is_external: false,
    is_disabled: false,
    attributes: null,
    modifier_class: ''
  }
}`,...(n=(o=t.parameters)==null?void 0:o.docs)==null?void 0:n.source}}};const _=["Button"];export{t as Button,_ as __namedExportsOrder,m as default};
