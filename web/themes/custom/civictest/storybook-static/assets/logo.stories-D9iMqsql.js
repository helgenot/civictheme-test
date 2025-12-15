// phpcs:ignoreFile
import{L as l}from"./logo-CE2MLVbd.js";import{L as p}from"./logo.stories.data-AkRuSnMq.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";import"./image-fkxJlKYo.js";import"./constants-DgSegUo0.js";const k={title:"Molecules/Logo",component:l,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},type:{control:{type:"radio"},options:["default","stacked","inline","inline-stacked"]},logos:{control:{type:"object"}},url:{control:{type:"text"}},title:{control:{type:"text"}},modifier_class:{control:{type:"text"}}}},o={parameters:{layout:"centered"},args:p.args("light")},r={parameters:{layout:"centered",backgrounds:{default:"Dark"}},args:p.args("dark")};var e,t,a;o.parameters={...o.parameters,docs:{...(e=o.parameters)==null?void 0:e.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: LogoData.args('light')
}`,...(a=(t=o.parameters)==null?void 0:t.docs)==null?void 0:a.source}}};var s,n,c;r.parameters={...r.parameters,docs:{...(s=r.parameters)==null?void 0:s.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered',
    backgrounds: {
      default: 'Dark'
    }
  },
  args: LogoData.args('dark')
}`,...(c=(n=r.parameters)==null?void 0:n.docs)==null?void 0:c.source}}};const L=["Logo","LogoDark"];export{o as Logo,r as LogoDark,L as __namedExportsOrder,k as default};
