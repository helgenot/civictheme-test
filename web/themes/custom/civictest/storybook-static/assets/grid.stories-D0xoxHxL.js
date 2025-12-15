// phpcs:ignoreFile
import{D as o}from"./twig-TIIEE6v_.js";import{G as a}from"./grid-DzxOJ3hW.js";import"./_commonjsHelpers-_d1bhYXs.js";const u={title:"Base/Grid",component:a,argTypes:{items:{control:{type:"object"}},row_element:{control:{type:"text"}},row_class:{control:{type:"text"}},column_element:{control:{type:"text"}},column_class:{control:{type:"text"}},use_container:{control:{type:"boolean"}},is_fluid:{control:{type:"boolean"}},template_column_count:{control:{type:"number"}},auto_breakpoint:{control:{type:"boolean"}},fill_width:{control:{type:"boolean"}},modifier_class:{control:{type:"text"}}}},r={parameters:{layout:"centered"},args:{items:['<div class="story-placeholder" contenteditable="true">Item 1</div>','<div class="story-placeholder" contenteditable="true">Item 2</div>','<div class="story-placeholder" contenteditable="true">Item 3</div>','<div class="story-placeholder" contenteditable="true">Item 4</div>','<div class="story-placeholder" contenteditable="true">Item 5</div>','<div class="story-placeholder" contenteditable="true">Item 6</div>','<div class="story-placeholder" contenteditable="true">Item 7</div>','<div class="story-placeholder" contenteditable="true">Item 8</div>','<div class="story-placeholder" contenteditable="true">Item 9</div>','<div class="story-placeholder" contenteditable="true">Item 10</div>','<div class="story-placeholder" contenteditable="true">Item 11</div>','<div class="story-placeholder" contenteditable="true">Item 12</div>'],row_element:"div",row_class:"row",row_attributes:null,column_element:"div",column_class:"col",column_attributes:null,use_container:!1,is_fluid:!1,template_column_count:0,auto_breakpoint:!1,fill_width:!1,attributes:null,modifier_class:"row--equal-heights-content row--vertically-spaced"},render:t=>{const e={...t};return t.attributes&&typeof t.attributes=="object"&&(e.attributes=new o(Object.entries(t.attributes))),t.row_attributes&&typeof t.row_attributes=="object"&&(e.row_attributes=new o(Object.entries(t.row_attributes))),t.column_attributes&&typeof t.column_attributes=="object"&&(e.column_attributes=new o(Object.entries(t.column_attributes))),a(e)}};var l,s,n;r.parameters={...r.parameters,docs:{...(l=r.parameters)==null?void 0:l.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    items: ['<div class="story-placeholder" contenteditable="true">Item 1</div>', '<div class="story-placeholder" contenteditable="true">Item 2</div>', '<div class="story-placeholder" contenteditable="true">Item 3</div>', '<div class="story-placeholder" contenteditable="true">Item 4</div>', '<div class="story-placeholder" contenteditable="true">Item 5</div>', '<div class="story-placeholder" contenteditable="true">Item 6</div>', '<div class="story-placeholder" contenteditable="true">Item 7</div>', '<div class="story-placeholder" contenteditable="true">Item 8</div>', '<div class="story-placeholder" contenteditable="true">Item 9</div>', '<div class="story-placeholder" contenteditable="true">Item 10</div>', '<div class="story-placeholder" contenteditable="true">Item 11</div>', '<div class="story-placeholder" contenteditable="true">Item 12</div>'],
    row_element: 'div',
    row_class: 'row',
    row_attributes: null,
    column_element: 'div',
    column_class: 'col',
    column_attributes: null,
    use_container: false,
    is_fluid: false,
    template_column_count: 0,
    auto_breakpoint: false,
    fill_width: false,
    attributes: null,
    modifier_class: 'row--equal-heights-content row--vertically-spaced'
  },
  render: args => {
    // Transform object inputs to DrupalAttribute instances
    const transformedArgs = {
      ...args
    };
    if (args.attributes && typeof args.attributes === 'object') {
      transformedArgs.attributes = new DrupalAttribute(Object.entries(args.attributes));
    }
    if (args.row_attributes && typeof args.row_attributes === 'object') {
      transformedArgs.row_attributes = new DrupalAttribute(Object.entries(args.row_attributes));
    }
    if (args.column_attributes && typeof args.column_attributes === 'object') {
      transformedArgs.column_attributes = new DrupalAttribute(Object.entries(args.column_attributes));
    }
    return Component(transformedArgs);
  }
}`,...(n=(s=r.parameters)==null?void 0:s.docs)==null?void 0:n.source}}};const b=["Grid"];export{r as Grid,b as __namedExportsOrder,u as default};
