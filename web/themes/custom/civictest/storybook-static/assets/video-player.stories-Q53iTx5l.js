// phpcs:ignoreFile
import"./button-M4jvQ2Xa.js";import"./iframe-GH4Va2EQ.js";import"./link-D7RSp3dh.js";import"./basic-content-DsZIVy9E.js";import{C as v}from"./video-player-DAppjMxJ.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";import"./text-icon-GyjYiuzU.js";import"./icon-DxPaYU9_.js";import"./video-QezuaFAT.js";const P={title:"Molecules/Video Player",component:v,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},sources:{control:{type:"array"}},poster:{control:{type:"text"}},embedded_source:{control:{type:"text"}},raw_source:{control:{type:"text"}},title:{control:{type:"text"}},width:{control:{type:"text"}},height:{control:{type:"text"}},transcript_link:{control:{type:"object"}},transcript_content:{control:{type:"text"}},transcript_expand_text:{control:{type:"text"}},transcript_collapse_text:{control:{type:"text"}},vertical_spacing:{control:{type:"radio"},options:["none","top","bottom","both"]},modifier_class:{control:{type:"text"}}}},e={parameters:{layout:"centered"},args:{theme:"light",title:"",width:"550",height:"400",sources:[{url:"demo/videos/demo.webm",type:"video/webm"},{url:"demo/videos/demo.mp4",type:"video/mp4"},{url:"demo/videos/demo.avi",type:"video/avi"}],poster:"demo/videos/demo_poster.png",embedded_source:"",raw_source:"",transcript_link:{text:"View transcript",title:"Open transcription in a new window",url:"https://example.com",is_new_window:!0,is_external:!1,attributes:null},vertical_spacing:"none",attributes:null,modifier_class:""}},t={parameters:{layout:"centered"},args:{theme:"light",title:"Test video",width:"550",height:"400",sources:null,poster:"",embedded_source:"https://www.youtube.com/embed/C0DPdy98e4c",raw_source:"",transcript_link:{text:"View transcript",title:"Open transcription in a new window",url:"https://example.com",is_new_window:!0,is_external:!1,attributes:null},vertical_spacing:"none",attributes:null,modifier_class:""}},r={parameters:{layout:"centered"},args:{theme:"light",title:"",width:"550",height:"400",sources:null,poster:"",embedded_source:"",raw_source:'<iframe allowfullscreen="" frameborder="0" height="400" src="https://www.youtube.com/embed/C0DPdy98e4c" width="550"></iframe>',transcript_link:{text:"View transcript",title:"Open transcription in a new window",url:"https://example.com",is_new_window:!0,is_external:!1,attributes:null},vertical_spacing:"none",attributes:null,modifier_class:""}},n={parameters:{layout:"padded"},decorators:[h=>`<div class="story-container"><div class="story-container__content">${h()}</div></div>`],args:{theme:"light",title:"",width:"550",height:"400",sources:[{url:"demo/videos/demo.mp4",type:"video/mp4"}],poster:"demo/videos/demo_poster.png",transcript_content:"Reprehenderit sed irure dolor nisi ut consectetur exercitation aliquip commodo mollit velit est voluptate ut sint cillum est dolor ullamco reprehenderit in.",transcript_expand_text:"Show transcript",transcript_collapse_text:"Hide transcript",vertical_spacing:"none",attributes:null,modifier_class:""}};var o,i,s;e.parameters={...e.parameters,docs:{...(o=e.parameters)==null?void 0:o.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: '',
    width: '550',
    height: '400',
    sources: [{
      url: 'demo/videos/demo.webm',
      type: 'video/webm'
    }, {
      url: 'demo/videos/demo.mp4',
      type: 'video/mp4'
    }, {
      url: 'demo/videos/demo.avi',
      type: 'video/avi'
    }],
    poster: 'demo/videos/demo_poster.png',
    embedded_source: '',
    raw_source: '',
    transcript_link: {
      text: 'View transcript',
      title: 'Open transcription in a new window',
      url: 'https://example.com',
      is_new_window: true,
      is_external: false,
      attributes: null
    },
    vertical_spacing: 'none',
    attributes: null,
    modifier_class: ''
  }
}`,...(s=(i=e.parameters)==null?void 0:i.docs)==null?void 0:s.source}}};var a,c,l;t.parameters={...t.parameters,docs:{...(a=t.parameters)==null?void 0:a.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: 'Test video',
    width: '550',
    height: '400',
    sources: null,
    poster: '',
    embedded_source: 'https://www.youtube.com/embed/C0DPdy98e4c',
    raw_source: '',
    transcript_link: {
      text: 'View transcript',
      title: 'Open transcription in a new window',
      url: 'https://example.com',
      is_new_window: true,
      is_external: false,
      attributes: null
    },
    vertical_spacing: 'none',
    attributes: null,
    modifier_class: ''
  }
}`,...(l=(c=t.parameters)==null?void 0:c.docs)==null?void 0:l.source}}};var d,p,m;r.parameters={...r.parameters,docs:{...(d=r.parameters)==null?void 0:d.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: '',
    width: '550',
    height: '400',
    sources: null,
    poster: '',
    embedded_source: '',
    raw_source: '<iframe allowfullscreen="" frameborder="0" height="400" src="https://www.youtube.com/embed/C0DPdy98e4c" width="550"></iframe>',
    transcript_link: {
      text: 'View transcript',
      title: 'Open transcription in a new window',
      url: 'https://example.com',
      is_new_window: true,
      is_external: false,
      attributes: null
    },
    vertical_spacing: 'none',
    attributes: null,
    modifier_class: ''
  }
}`,...(m=(p=r.parameters)==null?void 0:p.docs)==null?void 0:m.source}}};var u,w,_;n.parameters={...n.parameters,docs:{...(u=n.parameters)==null?void 0:u.docs,source:{originalSource:`{
  parameters: {
    layout: 'padded'
  },
  decorators: [Story => \`<div class="story-container"><div class="story-container__content">\${Story()}</div></div>\`],
  args: {
    theme: 'light',
    title: '',
    width: '550',
    height: '400',
    sources: [{
      url: 'demo/videos/demo.mp4',
      type: 'video/mp4'
    }],
    poster: 'demo/videos/demo_poster.png',
    transcript_content: 'Reprehenderit sed irure dolor nisi ut consectetur exercitation aliquip commodo mollit velit est voluptate ut sint cillum est dolor ullamco reprehenderit in.',
    transcript_expand_text: 'Show transcript',
    transcript_collapse_text: 'Hide transcript',
    vertical_spacing: 'none',
    attributes: null,
    modifier_class: ''
  }
}`,...(_=(w=n.parameters)==null?void 0:w.docs)==null?void 0:_.source}}};const T=["Sources","EmbeddedSource","RawSources","TranscriptBlock"];export{t as EmbeddedSource,r as RawSources,e as Sources,n as TranscriptBlock,T as __namedExportsOrder,P as default};
