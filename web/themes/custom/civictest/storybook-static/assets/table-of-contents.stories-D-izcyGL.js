// phpcs:ignoreFile
import{B as w}from"./basic-content-DsZIVy9E.js";import{t as x,D as T,a as k,T as b}from"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";document.addEventListener("DOMContentLoaded",()=>{function i(t){t.hasAttribute("data-table-of-contents-initialised")||(this.target=t,this.position=this.target.getAttribute("data-table-of-contents-position").trim(),this.theme=this.target.hasAttribute("data-table-of-contents-theme")?this.target.getAttribute("data-table-of-contents-theme").trim():"light",this.anchorSelector=this.target.hasAttribute("data-table-of-contents-anchor-selector")?this.target.getAttribute("data-table-of-contents-anchor-selector").trim():"h2",this.anchorScopeSelector=this.target.hasAttribute("data-table-of-contents-anchor-scope-selector")?this.target.getAttribute("data-table-of-contents-anchor-scope-selector").trim():".ct-basic-content",this.title=this.target.hasAttribute("data-table-of-contents-title")?this.target.getAttribute("data-table-of-contents-title").trim():"",this.position=["before","after","prepend","append"].indexOf(this.position.trim())>0?this.position:"before",this.theme=this.theme==="dark"?"dark":"light",this.anchorSelector=this.anchorSelector!==""?this.anchorSelector:"h2",this.anchorScopeSelector=this.anchorScopeSelector!==""?this.anchorScopeSelector:".ct-basic-content",this.init(),this.target.setAttribute("data-table-of-contents-initialised","true"))}i.prototype.init=function(){let t="";const e=this.findLinks(this.anchorSelector,this.anchorScopeSelector);e.length&&(this.title&&(t+=this.renderTitle(this.title)),t+=this.renderLinks(e),t=this.renderContainer(t,this.theme,this.position),this.place(this.target,this.position,t))},i.prototype.findLinks=function(t,e){const a=[],n=new Set;return document.querySelectorAll(e).forEach(c=>{c.querySelectorAll(t).forEach(p=>{let o=p.id||null;const u=p.innerText;if(!o||o.length===0)for(o=this.makeAnchorId(u);c.querySelectorAll(`#${o}`).length||n.has(`#${o}`);)o=`${o}-${Math.random().toString(36).substring(2,5)}`;const l=`#${o}`;n.has(l)||(a.push({title:u,url:l}),p.id=o,n.add(l))})}),a},i.prototype.renderTitle=function(t){return`<h2 class="ct-table-of-contents__title">${t}</h2>`},i.prototype.renderLinks=function(t){let e="";e+='<ul class="ct-table-of-contents__links">';for(const a in t)e+=`
      <li class="ct-table-of-contents__link-item">
        <a class="ct-table-of-contents__link" href="${t[a].url}">${t[a].title}</a>
      </li>
    `;return e+="</ul>",e},i.prototype.renderContainer=function(t,e,a){return`<div class="ct-table-of-contents ct-theme-${e} ct-table-of-contents--position-${a}">${t}</div>`},i.prototype.place=function(t,e,a){const n={before:"beforebegin",after:"afterend",prepend:"afterbegin",append:"beforeend"};t.insertAdjacentHTML(n[e],a)},i.prototype.makeAnchorId=function(t){return t.toLowerCase().replace(/(&\w+?;)/gim," ").replace(/[_.~"<>%|'!*();:@&=+$,/?%#[\]{}\n`^\\]/gim,"").replace(/(^\s+)|(\s+$)/gim,"").replace(/\s+/gm,"-")},document.querySelectorAll("[data-table-of-contents-position]").forEach(t=>{new i(t)})});k(b);b.cache(!1);const d=i=>i,_=(i={})=>{const t=x.twig({id:"/var/www/html/web/themes/custom/civictest/components_combined/02-molecules/table-of-contents/table-of-contents.twig",data:[{type:"raw",value:"",position:{start:704,end:706}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"links",match:["links"]},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"},{type:"Twig.expression.type.variable",value:"scope_selector",match:["scope_selector"]},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"},{type:"Twig.expression.type.operator.binary",value:"or",precidence:14,associativity:"leftToRight",operator:"or"}],position:{start:706,end:764},output:[{type:"raw",value:`  <div class="container">
    <div class="row">
      <div class="col-xxs-12">
        `,position:{start:765,end:852}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"links",match:["links"]}],position:{start:852,end:866},output:[{type:"raw",value:"          ",position:{start:867,end:877}},{type:"logic",token:{type:"Twig.logic.type.set",key:"theme_class",expression:[{type:"Twig.expression.type.string",value:"ct-theme-%s"},{type:"Twig.expression.type.filter",value:"format",match:["|format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"theme",match:["theme"]},{type:"Twig.expression.type.filter",value:"default",match:["|default","default"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"light"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}],position:{start:877,end:945}},position:{start:877,end:945}},{type:"raw",value:"          ",position:{start:946,end:956}},{type:"logic",token:{type:"Twig.logic.type.set",key:"position_class",expression:[{type:"Twig.expression.type.string",value:"ct-table-of-contents--position-%s"},{type:"Twig.expression.type.filter",value:"format",match:["|format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"position",match:["position"]},{type:"Twig.expression.type.filter",value:"default",match:["|default","default"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"before"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}],position:{start:956,end:1053}},position:{start:956,end:1053}},{type:"raw",value:"          ",position:{start:1054,end:1064}},{type:"logic",token:{type:"Twig.logic.type.set",key:"modifier_class",expression:[{type:"Twig.expression.type.string",value:"%s %s %s"},{type:"Twig.expression.type.filter",value:"format",match:["|format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"theme_class",match:["theme_class"]},{type:"Twig.expression.type.comma"},{type:"Twig.expression.type.variable",value:"position_class",match:["position_class"]},{type:"Twig.expression.type.comma"},{type:"Twig.expression.type.variable",value:"modifier_class",match:["modifier_class"]},{type:"Twig.expression.type.filter",value:"default",match:["|default","default"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:""},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}],position:{start:1064,end:1165}},position:{start:1064,end:1165}},{type:"raw",value:`
          <div class="ct-table-of-contents `,position:{start:1166,end:1210}},{type:"output",position:{start:1210,end:1230},stack:[{type:"Twig.expression.type.variable",value:"modifier_class",match:["modifier_class"],position:{start:1210,end:1230}}]},{type:"raw",value:'" ',position:{start:1230,end:1232}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"attributes",match:["attributes"]},{type:"Twig.expression.type.test",filter:"defined"},{type:"Twig.expression.type.variable",value:"attributes",match:["attributes"]},{type:"Twig.expression.type.test",filter:"null",modifier:"not"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],position:{start:1232,end:1289},output:[{type:"output_whitespace_both",position:{start:1289,end:1307},stack:[{type:"Twig.expression.type.variable",value:"attributes",match:["attributes"],position:{start:1289,end:1307}}]}]},position:{open:{start:1232,end:1289},close:{start:1307,end:1318}}},{type:"raw",value:`>
            `,position:{start:1318,end:1332}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"title",match:["title"]}],position:{start:1332,end:1346},output:[{type:"raw",value:'              <h2 class="ct-table-of-contents__title">',position:{start:1347,end:1401}},{type:"output",position:{start:1401,end:1412},stack:[{type:"Twig.expression.type.variable",value:"title",match:["title"],position:{start:1401,end:1412}}]},{type:"raw",value:`</h2>
            `,position:{start:1412,end:1430}}]},position:{open:{start:1332,end:1346},close:{start:1430,end:1441}}},{type:"raw",value:"            ",position:{start:1442,end:1454}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"links",match:["links"]}],position:{start:1454,end:1468},output:[{type:"raw",value:`              <ul class="ct-table-of-contents__links">
                `,position:{start:1469,end:1540}},{type:"logic",token:{type:"Twig.logic.type.for",keyVar:null,valueVar:"link",expression:[{type:"Twig.expression.type.variable",value:"links",match:["links"]}],position:{start:1540,end:1563},output:[{type:"raw",value:`                  <li class="ct-table-of-contents__link-item">
                    <a class="ct-table-of-contents__link" href="`,position:{start:1564,end:1691}},{type:"output",position:{start:1691,end:1705},stack:[{type:"Twig.expression.type.variable",value:"link",match:["link"],position:{start:1691,end:1705}},{type:"Twig.expression.type.key.period",position:{start:1691,end:1705},key:"url"}]},{type:"raw",value:'">',position:{start:1705,end:1707}},{type:"output",position:{start:1707,end:1723},stack:[{type:"Twig.expression.type.variable",value:"link",match:["link"],position:{start:1707,end:1723}},{type:"Twig.expression.type.key.period",position:{start:1707,end:1723},key:"title"}]},{type:"raw",value:`</a>
                  </li>
                `,position:{start:1723,end:1768}}]},position:{open:{start:1540,end:1563},close:{start:1768,end:1780}}},{type:"raw",value:`              </ul>
            `,position:{start:1781,end:1813}}]},position:{open:{start:1454,end:1468},close:{start:1813,end:1824}}},{type:"raw",value:`          </div>
        `,position:{start:1825,end:1850}}]},position:{open:{start:852,end:866},close:{start:1850,end:1860}}},{type:"logic",token:{type:"Twig.logic.type.else",match:["else"],position:{start:1850,end:1860},output:[{type:"raw",value:`          <div
            data-table-of-contents-theme="`,position:{start:1861,end:1918}},{type:"output",position:{start:1918,end:1929},stack:[{type:"Twig.expression.type.variable",value:"theme",match:["theme"],position:{start:1918,end:1929}}]},{type:"raw",value:`"
            data-table-of-contents-title="`,position:{start:1929,end:1973}},{type:"output",position:{start:1973,end:1984},stack:[{type:"Twig.expression.type.variable",value:"title",match:["title"],position:{start:1973,end:1984}}]},{type:"raw",value:`"
            data-table-of-contents-anchor-selector="`,position:{start:1984,end:2038}},{type:"output",position:{start:2038,end:2059},stack:[{type:"Twig.expression.type.variable",value:"anchor_selector",match:["anchor_selector"],position:{start:2038,end:2059}}]},{type:"raw",value:`"
            data-table-of-contents-anchor-scope-selector="`,position:{start:2059,end:2119}},{type:"output",position:{start:2119,end:2139},stack:[{type:"Twig.expression.type.variable",value:"scope_selector",match:["scope_selector"],position:{start:2119,end:2139}}]},{type:"raw",value:`"
            data-table-of-contents-position="`,position:{start:2139,end:2186}},{type:"output",position:{start:2186,end:2200},stack:[{type:"Twig.expression.type.variable",value:"position",match:["position"],position:{start:2186,end:2200}}]},{type:"raw",value:`"
          >`,position:{start:2200,end:2226}},{type:"logic",token:{type:"Twig.logic.type.block",blockName:"content_block",position:{start:2226,end:2253},output:[{type:"raw",value:"",position:{start:2254,end:2268}},{type:"output_whitespace_both",position:{start:2268,end:2283},stack:[{type:"Twig.expression.type.variable",value:"content",match:["content"],position:{start:2268,end:2283}}]},{type:"raw",value:"",position:{start:2283,end:2296}}]},position:{open:{start:2226,end:2253},close:{start:2296,end:2312}}},{type:"raw",value:`</div>
        `,position:{start:2313,end:2338}}]},position:{open:{start:1850,end:1860},close:{start:2338,end:2349}}},{type:"raw",value:`      </div>
    </div>
  </div>
`,position:{start:2350,end:2383}}]},position:{open:{start:706,end:764},close:{start:2383,end:2394}}}],precompiled:!0});t.options.allowInlineIncludes=!0;try{let e=i.defaultAttributes?i.defaultAttributes:[];return Array.isArray(e)||(e=Object.entries(e)),d(t.render({attributes:new T(e),...i}))}catch(e){return d("An error occurred whilst rendering /var/www/html/web/themes/custom/civictest/components_combined/02-molecules/table-of-contents/table-of-contents.twig: "+e.toString())}},H={title:"Molecules/Table Of Contents",component:_,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},title:{control:{type:"text"}},anchor_selector:{control:{type:"text"}},scope_selector:{control:{type:"text"}},position:{control:{type:"radio"},options:["before","after","prepend","append"]},modifier_class:{control:{type:"text"}}}},s={args:{theme:"light",title:"On this page",links:[{title:"Link 1",url:"/"},{title:"Link 2",url:"/"},{title:"Link 3",url:"/"}],position:"before",modifier_class:"",attributes:null}},r={parameters:{layout:"centered"},args:{theme:"light",title:"On this page",anchor_selector:"h2",scope_selector:".ct-basic-content",position:"before",content:w({content:`
      <h2>Heading 2 - 1</h2>
      <p>Ex cillum irure id occaecat aliquip in cillum aute occaecat ullamco in dolore nulla et veniam sed consectetur ut excepteur eu eiusmod excepteur nulla id mollit veniam deserunt ea nostrud.</p>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
      <p>Consectetur veniam exercitation voluptate reprehenderit in esse est magna minim sunt cupidatat reprehenderit ut pariatur cillum do aute adipisicing commodo voluptate quis in tempor eu irure velit esse non dolore officia sit cupidatat officia fugiat mollit eu.</p>
      <h2>Heading 2 - 2</h2>
      <p>Est incididunt irure eu elit eiusmod incididunt occaecat labore aute in ad non irure sunt ad ut nostrud commodo do fugiat fugiat tempor occaecat mollit sunt in id sed commodo enim occaecat eu proident nostrud fugiat cupidatat.</p>
      <h2>Heading 2 - 3</h2>
      <p>Nulla sed cupidatat irure quis veniam ut in in pariatur do minim adipisicing minim exercitation magna eiusmod culpa tempor.</p>
    `}),modifier_class:"",attributes:null}};var m,y,h;s.parameters={...s.parameters,docs:{...(m=s.parameters)==null?void 0:m.docs,source:{originalSource:`{
  args: {
    theme: 'light',
    title: 'On this page',
    links: [{
      title: 'Link 1',
      url: '/'
    }, {
      title: 'Link 2',
      url: '/'
    }, {
      title: 'Link 3',
      url: '/'
    }],
    position: 'before',
    modifier_class: '',
    attributes: null
  }
}`,...(h=(y=s.parameters)==null?void 0:y.docs)==null?void 0:h.source}}};var g,f,v;r.parameters={...r.parameters,docs:{...(g=r.parameters)==null?void 0:g.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: 'On this page',
    anchor_selector: 'h2',
    scope_selector: '.ct-basic-content',
    position: 'before',
    content: BasicContent({
      content: \`
      <h2>Heading 2 - 1</h2>
      <p>Ex cillum irure id occaecat aliquip in cillum aute occaecat ullamco in dolore nulla et veniam sed consectetur ut excepteur eu eiusmod excepteur nulla id mollit veniam deserunt ea nostrud.</p>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
      <p>Consectetur veniam exercitation voluptate reprehenderit in esse est magna minim sunt cupidatat reprehenderit ut pariatur cillum do aute adipisicing commodo voluptate quis in tempor eu irure velit esse non dolore officia sit cupidatat officia fugiat mollit eu.</p>
      <h2>Heading 2 - 2</h2>
      <p>Est incididunt irure eu elit eiusmod incididunt occaecat labore aute in ad non irure sunt ad ut nostrud commodo do fugiat fugiat tempor occaecat mollit sunt in id sed commodo enim occaecat eu proident nostrud fugiat cupidatat.</p>
      <h2>Heading 2 - 3</h2>
      <p>Nulla sed cupidatat irure quis veniam ut in in pariatur do minim adipisicing minim exercitation magna eiusmod culpa tempor.</p>
    \`
    }),
    modifier_class: '',
    attributes: null
  }
}`,...(v=(f=r.parameters)==null?void 0:f.docs)==null?void 0:v.source}}};const L=["TableOfContents","TableOfContentsAutomatic"];export{s as TableOfContents,r as TableOfContentsAutomatic,L as __namedExportsOrder,H as default};
