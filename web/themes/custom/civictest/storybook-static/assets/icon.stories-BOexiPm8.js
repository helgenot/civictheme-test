// phpcs:ignoreFile
import{I as a}from"./icon-DxPaYU9_.js";import{C as t}from"./constants-DgSegUo0.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";const l={title:"Base/Icon",component:a,argTypes:{symbol:{control:{type:"select"},options:t.ICONS},size:{control:{type:"radio"},options:["auto",...Object.keys(t.SCSS_VARIABLES["ct-icon-sizes-default"]),...Object.keys(t.SCSS_VARIABLES["ct-icon-sizes"])]},modifier_class:{control:{type:"text"}},assets_dir:{control:{type:"text"}}}},s={parameters:{layout:"centered"},args:{symbol:t.ICONS[0],size:"auto",modifier_class:"",attributes:null,assets_dir:"@civictheme/../assets"}};var e,o,r;s.parameters={...s.parameters,docs:{...(e=s.parameters)==null?void 0:e.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    symbol: Constants.ICONS[0],
    size: 'auto',
    modifier_class: '',
    attributes: null,
    assets_dir: '@civictheme/../assets'
  }
}`,...(r=(o=s.parameters)==null?void 0:o.docs)==null?void 0:r.source}}};const p=["Icon"];export{s as Icon,p as __namedExportsOrder,l as default};
