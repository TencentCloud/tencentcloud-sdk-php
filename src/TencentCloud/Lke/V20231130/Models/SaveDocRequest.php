<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveDoc请求参数结构体
 *
 * @method string getBotBizId() 获取<p>应用ID。应用ID 获取方法参看<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">如何获取   BotBizId</a><br>导入知识库文档时，该参数填入知识库 ID。</p>
 * @method void setBotBizId(string $BotBizId) 设置<p>应用ID。应用ID 获取方法参看<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">如何获取   BotBizId</a><br>导入知识库文档时，该参数填入知识库 ID。</p>
 * @method string getFileName() 获取<p>文件名，需要包含文件扩展名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名，需要包含文件扩展名</p>
 * @method string getFileType() 获取<p>文档支持下面类型<br>pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；<br>xlsx、xls、md、txt、csv、html，单个文件不超过20MB；</p><p>图片支持下面类型：<br>jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB</p>
 * @method void setFileType(string $FileType) 设置<p>文档支持下面类型<br>pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；<br>xlsx、xls、md、txt、csv、html，单个文件不超过20MB；</p><p>图片支持下面类型：<br>jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB</p>
 * @method string getCosUrl() 获取<p>平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致</p>
 * @method void setCosUrl(string $CosUrl) 设置<p>平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致</p>
 * @method string getETag() 获取<p>ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取</p>
 * @method void setETag(string $ETag) 设置<p>ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取</p>
 * @method string getCosHash() 获取<p>cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性<br>成功上传cos后，从返回头中获取</p><p>请注意：<br>cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档</p>
 * @method void setCosHash(string $CosHash) 设置<p>cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性<br>成功上传cos后，从返回头中获取</p><p>请注意：<br>cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档</p>
 * @method string getSize() 获取<p>文件大小</p>
 * @method void setSize(string $Size) 设置<p>文件大小</p>
 * @method integer getAttrRange() 获取<p>标签适用范围，1:全部，2:按条件。默认为1。</p>
 * @method void setAttrRange(integer $AttrRange) 设置<p>标签适用范围，1:全部，2:按条件。默认为1。</p>
 * @method integer getSource() 获取<p>来源（0 从本地文档导入），默认值为0</p>
 * @method void setSource(integer $Source) 设置<p>来源（0 从本地文档导入），默认值为0</p>
 * @method string getWebUrl() 获取<p>自定义链接地址, IsRefer为true的时候，该值才有意义</p>
 * @method void setWebUrl(string $WebUrl) 设置<p>自定义链接地址, IsRefer为true的时候，该值才有意义</p>
 * @method array getAttrLabels() 获取<p>标签引用</p>
 * @method void setAttrLabels(array $AttrLabels) 设置<p>标签引用</p>
 * @method integer getReferUrlType() 获取<p>外部引用链接类型 0：系统链接 1：自定义链接<br>值为1时，WebUrl 字段不能为空，否则不生效。</p>
 * @method void setReferUrlType(integer $ReferUrlType) 设置<p>外部引用链接类型 0：系统链接 1：自定义链接<br>值为1时，WebUrl 字段不能为空，否则不生效。</p>
 * @method string getExpireStart() 获取<p>有效开始时间，unix秒级时间戳，默认为0</p>
 * @method void setExpireStart(string $ExpireStart) 设置<p>有效开始时间，unix秒级时间戳，默认为0</p>
 * @method string getExpireEnd() 获取<p>有效结束时间，unix秒级时间戳，默认为0代表永久有效</p>
 * @method void setExpireEnd(string $ExpireEnd) 设置<p>有效结束时间，unix秒级时间戳，默认为0代表永久有效</p>
 * @method boolean getIsRefer() 获取<p>是否显示引用的文档来源(false不显示 true显示）默认false</p>
 * @method void setIsRefer(boolean $IsRefer) 设置<p>是否显示引用的文档来源(false不显示 true显示）默认false</p>
 * @method integer getOpt() 获取<p>文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为2 <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板</p>
 * @method void setOpt(integer $Opt) 设置<p>文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为2 <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板</p>
 * @method string getCateBizId() 获取<p>分类ID</p>
 * @method void setCateBizId(string $CateBizId) 设置<p>分类ID</p>
 * @method boolean getIsDownload() 获取<p>是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义</p>
 * @method void setIsDownload(boolean $IsDownload) 设置<p>是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义</p>
 * @method array getDuplicateFileHandles() 获取<p>重复文档处理方式，按顺序匹配第一个满足条件的方式处理</p>
 * @method void setDuplicateFileHandles(array $DuplicateFileHandles) 设置<p>重复文档处理方式，按顺序匹配第一个满足条件的方式处理</p>
 * @method string getSplitRule() 获取<p>自定义切分规则</p><p>请求参数为一个 <strong>JSON Object</strong>，具体格式可参见接口示例值。包含以下主要字段：</p><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>xlsx_splitter</code></td><td>Object</td><td><strong>Excel（xlsx）文件切分策略配置</strong>，仅当处理 Excel 文件时有效</td></tr><tr><td><code>common_splitter</code></td><td>Object</td><td><strong>通用文件（如 txt、pdf 等）切分策略配置</strong>，按页或按标签切分</td></tr><tr><td><code>table_style</code></td><td>String</td><td>表格内容的输出格式，如 HTML 或 Markdown</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88Excel-.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>xlsx_splitter</code>（Excel 切分策略）</h2><p>用于配置 <strong>表格文件的切分方式</strong>。<br><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;xlsx_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;header_interval&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">[</span><span class="hljs-number">1</span><span class="hljs-punctuation">,</span> <span class="hljs-number">2</span><span class="hljs-punctuation">]</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;content_start&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">10</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;split_row&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">2</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>header_interval</code></td><td>Array&lt;Number&gt;</td><td>表头所在的行区间，格式为 <code>[起始行, 结束行]</code>，<strong>行号从 1 开始计数</strong>。例如 <code>[1, 2]</code> 表示第 1~2 行为表头。</td></tr><tr><td><code>content_start</code></td><td>Number</td><td><strong>表格内容的起始行号（从 1 开始）</strong>。</td></tr><tr><td><code>split_row</code></td><td>Number</td><td><strong>切分行数</strong>。</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E9.80.9A.E7.94.A8.E6.96.87.E4.BB.B6.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>common_splitter</code>（通用文件切分策略）</h2><p>用于配置 <strong>非 Excel 文件（如 TXT、PDF、DOCX 等）的切分方式</strong>，支持两种策略：<strong>按页切分（page）</strong> 或 <strong>按标识符切分（tag）</strong>。</p><p><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;common_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;page&quot;</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;page_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>    <span class="hljs-attr">&quot;chunk_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">1000</span><span class="hljs-punctuation">,</span>    <span class="hljs-attr">&quot;chunk_overlap_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">100</span>  <span class="hljs-punctuation">}</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A2">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>splitter</code></td><td>String</td><td>切分策略类型，可选值为：<code>&quot;page&quot;</code>（按页切分） 或 <code>&quot;tag&quot;</code>（按标识符切分）。</td></tr><tr><td><code>page_splitter</code></td><td>Object</td><td><strong>按页切分的配置</strong>。</td></tr><tr><td><code>page_splitter.chunk_length</code></td><td>1000</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>page_splitter.chunk_overlap_length</code></td><td>100</td><td><strong>切片重叠长度</strong>。</td></tr><tr><td><code>tag_splitter</code></td><td>Object</td><td><strong>自定义切分配置</strong>。</td></tr><tr><td><code>tag_splitter.tag</code></td><td>Array&lt;String&gt;</td><td><strong>切分标识符</strong>。</td></tr><tr><td><code>tag_splitter.chunk_length</code></td><td>Number</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>tag_splitter.chunk_overlap_length</code></td><td>Number</td><td><strong>切块重叠长度</strong>。</td></tr></tbody></table><p>???? <strong>补充说明：</strong></p><ul><li><code>splitter</code> 字段的值可以是：<ul><li><code>&quot;page&quot;</code>：只使用按页切分逻辑，此时只需要关心 <code>page_splitter</code> 相关字段。</li><li><code>&quot;tag&quot;</code>：只使用按标识符（如分号、换行等）切分逻辑，此时关注 <code>tag_splitter</code>。</li></ul></li></ul><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E8.A1.A8.E6.A0.BC.E8.BE.93.E5.87.BA.E6.A0.B7.E5.BC.8F.EF.BC.89"><code>table_style</code>（表格输出样式）</h2><p>用于指定 <strong>表格类内容（比如从 Excel 或 CSV 中提取的表格）最终以何种格式返回</strong>，方便前端展示或后续处理。</p><p><strong>类型：String</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;table_style&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;md&quot;</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A3">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>table_style</code></td><td>String</td><td>指定表格内容的输出格式。可用值：<br>• <code>&quot;html&quot;</code>：以 HTML 表格形式返回，适合网页展示。<br>• <code>&quot;md&quot;</code>：以 Markdown 表格语法返回，适合文档或 Markdown 渲染环境。</td></tr></tbody></table>
 * @method void setSplitRule(string $SplitRule) 设置<p>自定义切分规则</p><p>请求参数为一个 <strong>JSON Object</strong>，具体格式可参见接口示例值。包含以下主要字段：</p><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>xlsx_splitter</code></td><td>Object</td><td><strong>Excel（xlsx）文件切分策略配置</strong>，仅当处理 Excel 文件时有效</td></tr><tr><td><code>common_splitter</code></td><td>Object</td><td><strong>通用文件（如 txt、pdf 等）切分策略配置</strong>，按页或按标签切分</td></tr><tr><td><code>table_style</code></td><td>String</td><td>表格内容的输出格式，如 HTML 或 Markdown</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88Excel-.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>xlsx_splitter</code>（Excel 切分策略）</h2><p>用于配置 <strong>表格文件的切分方式</strong>。<br><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;xlsx_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;header_interval&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">[</span><span class="hljs-number">1</span><span class="hljs-punctuation">,</span> <span class="hljs-number">2</span><span class="hljs-punctuation">]</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;content_start&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">10</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;split_row&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">2</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>header_interval</code></td><td>Array&lt;Number&gt;</td><td>表头所在的行区间，格式为 <code>[起始行, 结束行]</code>，<strong>行号从 1 开始计数</strong>。例如 <code>[1, 2]</code> 表示第 1~2 行为表头。</td></tr><tr><td><code>content_start</code></td><td>Number</td><td><strong>表格内容的起始行号（从 1 开始）</strong>。</td></tr><tr><td><code>split_row</code></td><td>Number</td><td><strong>切分行数</strong>。</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E9.80.9A.E7.94.A8.E6.96.87.E4.BB.B6.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>common_splitter</code>（通用文件切分策略）</h2><p>用于配置 <strong>非 Excel 文件（如 TXT、PDF、DOCX 等）的切分方式</strong>，支持两种策略：<strong>按页切分（page）</strong> 或 <strong>按标识符切分（tag）</strong>。</p><p><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;common_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;page&quot;</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;page_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>    <span class="hljs-attr">&quot;chunk_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">1000</span><span class="hljs-punctuation">,</span>    <span class="hljs-attr">&quot;chunk_overlap_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">100</span>  <span class="hljs-punctuation">}</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A2">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>splitter</code></td><td>String</td><td>切分策略类型，可选值为：<code>&quot;page&quot;</code>（按页切分） 或 <code>&quot;tag&quot;</code>（按标识符切分）。</td></tr><tr><td><code>page_splitter</code></td><td>Object</td><td><strong>按页切分的配置</strong>。</td></tr><tr><td><code>page_splitter.chunk_length</code></td><td>1000</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>page_splitter.chunk_overlap_length</code></td><td>100</td><td><strong>切片重叠长度</strong>。</td></tr><tr><td><code>tag_splitter</code></td><td>Object</td><td><strong>自定义切分配置</strong>。</td></tr><tr><td><code>tag_splitter.tag</code></td><td>Array&lt;String&gt;</td><td><strong>切分标识符</strong>。</td></tr><tr><td><code>tag_splitter.chunk_length</code></td><td>Number</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>tag_splitter.chunk_overlap_length</code></td><td>Number</td><td><strong>切块重叠长度</strong>。</td></tr></tbody></table><p>???? <strong>补充说明：</strong></p><ul><li><code>splitter</code> 字段的值可以是：<ul><li><code>&quot;page&quot;</code>：只使用按页切分逻辑，此时只需要关心 <code>page_splitter</code> 相关字段。</li><li><code>&quot;tag&quot;</code>：只使用按标识符（如分号、换行等）切分逻辑，此时关注 <code>tag_splitter</code>。</li></ul></li></ul><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E8.A1.A8.E6.A0.BC.E8.BE.93.E5.87.BA.E6.A0.B7.E5.BC.8F.EF.BC.89"><code>table_style</code>（表格输出样式）</h2><p>用于指定 <strong>表格类内容（比如从 Excel 或 CSV 中提取的表格）最终以何种格式返回</strong>，方便前端展示或后续处理。</p><p><strong>类型：String</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;table_style&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;md&quot;</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A3">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>table_style</code></td><td>String</td><td>指定表格内容的输出格式。可用值：<br>• <code>&quot;html&quot;</code>：以 HTML 表格形式返回，适合网页展示。<br>• <code>&quot;md&quot;</code>：以 Markdown 表格语法返回，适合文档或 Markdown 渲染环境。</td></tr></tbody></table>
 * @method UpdatePeriodInfo getUpdatePeriodInfo() 获取<p>文档更新频率，默认值为0不更新</p>
 * @method void setUpdatePeriodInfo(UpdatePeriodInfo $UpdatePeriodInfo) 设置<p>文档更新频率，默认值为0不更新</p>
 * @method integer getEnableScope() 获取<p>文档生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效<br>默认值：应用内默认知识库为2，共享知识库为4。</p>
 * @method void setEnableScope(integer $EnableScope) 设置<p>文档生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效<br>默认值：应用内默认知识库为2，共享知识库为4。</p>
 * @method string getFileUrl() 获取<p>文件url 文件的 FileUrl、CosUrl必须提供一个，如果都提供，只使用CosUrl</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件url 文件的 FileUrl、CosUrl必须提供一个，如果都提供，只使用CosUrl</p>
 */
class SaveDocRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID。应用ID 获取方法参看<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">如何获取   BotBizId</a><br>导入知识库文档时，该参数填入知识库 ID。</p>
     */
    public $BotBizId;

    /**
     * @var string <p>文件名，需要包含文件扩展名</p>
     */
    public $FileName;

    /**
     * @var string <p>文档支持下面类型<br>pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；<br>xlsx、xls、md、txt、csv、html，单个文件不超过20MB；</p><p>图片支持下面类型：<br>jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB</p>
     */
    public $FileType;

    /**
     * @var string <p>平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致</p>
     */
    public $CosUrl;

    /**
     * @var string <p>ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取</p>
     */
    public $ETag;

    /**
     * @var string <p>cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性<br>成功上传cos后，从返回头中获取</p><p>请注意：<br>cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档</p>
     */
    public $CosHash;

    /**
     * @var string <p>文件大小</p>
     */
    public $Size;

    /**
     * @var integer <p>标签适用范围，1:全部，2:按条件。默认为1。</p>
     */
    public $AttrRange;

    /**
     * @var integer <p>来源（0 从本地文档导入），默认值为0</p>
     */
    public $Source;

    /**
     * @var string <p>自定义链接地址, IsRefer为true的时候，该值才有意义</p>
     */
    public $WebUrl;

    /**
     * @var array <p>标签引用</p>
     */
    public $AttrLabels;

    /**
     * @var integer <p>外部引用链接类型 0：系统链接 1：自定义链接<br>值为1时，WebUrl 字段不能为空，否则不生效。</p>
     */
    public $ReferUrlType;

    /**
     * @var string <p>有效开始时间，unix秒级时间戳，默认为0</p>
     */
    public $ExpireStart;

    /**
     * @var string <p>有效结束时间，unix秒级时间戳，默认为0代表永久有效</p>
     */
    public $ExpireEnd;

    /**
     * @var boolean <p>是否显示引用的文档来源(false不显示 true显示）默认false</p>
     */
    public $IsRefer;

    /**
     * @var integer <p>文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为2 <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板</p>
     */
    public $Opt;

    /**
     * @var string <p>分类ID</p>
     */
    public $CateBizId;

    /**
     * @var boolean <p>是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义</p>
     */
    public $IsDownload;

    /**
     * @var array <p>重复文档处理方式，按顺序匹配第一个满足条件的方式处理</p>
     */
    public $DuplicateFileHandles;

    /**
     * @var string <p>自定义切分规则</p><p>请求参数为一个 <strong>JSON Object</strong>，具体格式可参见接口示例值。包含以下主要字段：</p><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>xlsx_splitter</code></td><td>Object</td><td><strong>Excel（xlsx）文件切分策略配置</strong>，仅当处理 Excel 文件时有效</td></tr><tr><td><code>common_splitter</code></td><td>Object</td><td><strong>通用文件（如 txt、pdf 等）切分策略配置</strong>，按页或按标签切分</td></tr><tr><td><code>table_style</code></td><td>String</td><td>表格内容的输出格式，如 HTML 或 Markdown</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88Excel-.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>xlsx_splitter</code>（Excel 切分策略）</h2><p>用于配置 <strong>表格文件的切分方式</strong>。<br><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;xlsx_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;header_interval&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">[</span><span class="hljs-number">1</span><span class="hljs-punctuation">,</span> <span class="hljs-number">2</span><span class="hljs-punctuation">]</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;content_start&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">10</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;split_row&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">2</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>header_interval</code></td><td>Array&lt;Number&gt;</td><td>表头所在的行区间，格式为 <code>[起始行, 结束行]</code>，<strong>行号从 1 开始计数</strong>。例如 <code>[1, 2]</code> 表示第 1~2 行为表头。</td></tr><tr><td><code>content_start</code></td><td>Number</td><td><strong>表格内容的起始行号（从 1 开始）</strong>。</td></tr><tr><td><code>split_row</code></td><td>Number</td><td><strong>切分行数</strong>。</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E9.80.9A.E7.94.A8.E6.96.87.E4.BB.B6.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>common_splitter</code>（通用文件切分策略）</h2><p>用于配置 <strong>非 Excel 文件（如 TXT、PDF、DOCX 等）的切分方式</strong>，支持两种策略：<strong>按页切分（page）</strong> 或 <strong>按标识符切分（tag）</strong>。</p><p><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;common_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;page&quot;</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;page_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>    <span class="hljs-attr">&quot;chunk_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">1000</span><span class="hljs-punctuation">,</span>    <span class="hljs-attr">&quot;chunk_overlap_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">100</span>  <span class="hljs-punctuation">}</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A2">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>splitter</code></td><td>String</td><td>切分策略类型，可选值为：<code>&quot;page&quot;</code>（按页切分） 或 <code>&quot;tag&quot;</code>（按标识符切分）。</td></tr><tr><td><code>page_splitter</code></td><td>Object</td><td><strong>按页切分的配置</strong>。</td></tr><tr><td><code>page_splitter.chunk_length</code></td><td>1000</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>page_splitter.chunk_overlap_length</code></td><td>100</td><td><strong>切片重叠长度</strong>。</td></tr><tr><td><code>tag_splitter</code></td><td>Object</td><td><strong>自定义切分配置</strong>。</td></tr><tr><td><code>tag_splitter.tag</code></td><td>Array&lt;String&gt;</td><td><strong>切分标识符</strong>。</td></tr><tr><td><code>tag_splitter.chunk_length</code></td><td>Number</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>tag_splitter.chunk_overlap_length</code></td><td>Number</td><td><strong>切块重叠长度</strong>。</td></tr></tbody></table><p>???? <strong>补充说明：</strong></p><ul><li><code>splitter</code> 字段的值可以是：<ul><li><code>&quot;page&quot;</code>：只使用按页切分逻辑，此时只需要关心 <code>page_splitter</code> 相关字段。</li><li><code>&quot;tag&quot;</code>：只使用按标识符（如分号、换行等）切分逻辑，此时关注 <code>tag_splitter</code>。</li></ul></li></ul><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E8.A1.A8.E6.A0.BC.E8.BE.93.E5.87.BA.E6.A0.B7.E5.BC.8F.EF.BC.89"><code>table_style</code>（表格输出样式）</h2><p>用于指定 <strong>表格类内容（比如从 Excel 或 CSV 中提取的表格）最终以何种格式返回</strong>，方便前端展示或后续处理。</p><p><strong>类型：String</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;table_style&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;md&quot;</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A3">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>table_style</code></td><td>String</td><td>指定表格内容的输出格式。可用值：<br>• <code>&quot;html&quot;</code>：以 HTML 表格形式返回，适合网页展示。<br>• <code>&quot;md&quot;</code>：以 Markdown 表格语法返回，适合文档或 Markdown 渲染环境。</td></tr></tbody></table>
     */
    public $SplitRule;

    /**
     * @var UpdatePeriodInfo <p>文档更新频率，默认值为0不更新</p>
     */
    public $UpdatePeriodInfo;

    /**
     * @var integer <p>文档生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效<br>默认值：应用内默认知识库为2，共享知识库为4。</p>
     */
    public $EnableScope;

    /**
     * @var string <p>文件url 文件的 FileUrl、CosUrl必须提供一个，如果都提供，只使用CosUrl</p>
     */
    public $FileUrl;

    /**
     * @param string $BotBizId <p>应用ID。应用ID 获取方法参看<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">如何获取   BotBizId</a><br>导入知识库文档时，该参数填入知识库 ID。</p>
     * @param string $FileName <p>文件名，需要包含文件扩展名</p>
     * @param string $FileType <p>文档支持下面类型<br>pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；<br>xlsx、xls、md、txt、csv、html，单个文件不超过20MB；</p><p>图片支持下面类型：<br>jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB</p>
     * @param string $CosUrl <p>平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致</p>
     * @param string $ETag <p>ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取</p>
     * @param string $CosHash <p>cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性<br>成功上传cos后，从返回头中获取</p><p>请注意：<br>cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档</p>
     * @param string $Size <p>文件大小</p>
     * @param integer $AttrRange <p>标签适用范围，1:全部，2:按条件。默认为1。</p>
     * @param integer $Source <p>来源（0 从本地文档导入），默认值为0</p>
     * @param string $WebUrl <p>自定义链接地址, IsRefer为true的时候，该值才有意义</p>
     * @param array $AttrLabels <p>标签引用</p>
     * @param integer $ReferUrlType <p>外部引用链接类型 0：系统链接 1：自定义链接<br>值为1时，WebUrl 字段不能为空，否则不生效。</p>
     * @param string $ExpireStart <p>有效开始时间，unix秒级时间戳，默认为0</p>
     * @param string $ExpireEnd <p>有效结束时间，unix秒级时间戳，默认为0代表永久有效</p>
     * @param boolean $IsRefer <p>是否显示引用的文档来源(false不显示 true显示）默认false</p>
     * @param integer $Opt <p>文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为2 <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板</p>
     * @param string $CateBizId <p>分类ID</p>
     * @param boolean $IsDownload <p>是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义</p>
     * @param array $DuplicateFileHandles <p>重复文档处理方式，按顺序匹配第一个满足条件的方式处理</p>
     * @param string $SplitRule <p>自定义切分规则</p><p>请求参数为一个 <strong>JSON Object</strong>，具体格式可参见接口示例值。包含以下主要字段：</p><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>xlsx_splitter</code></td><td>Object</td><td><strong>Excel（xlsx）文件切分策略配置</strong>，仅当处理 Excel 文件时有效</td></tr><tr><td><code>common_splitter</code></td><td>Object</td><td><strong>通用文件（如 txt、pdf 等）切分策略配置</strong>，按页或按标签切分</td></tr><tr><td><code>table_style</code></td><td>String</td><td>表格内容的输出格式，如 HTML 或 Markdown</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88Excel-.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>xlsx_splitter</code>（Excel 切分策略）</h2><p>用于配置 <strong>表格文件的切分方式</strong>。<br><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;xlsx_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;header_interval&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">[</span><span class="hljs-number">1</span><span class="hljs-punctuation">,</span> <span class="hljs-number">2</span><span class="hljs-punctuation">]</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;content_start&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">10</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;split_row&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">2</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>header_interval</code></td><td>Array&lt;Number&gt;</td><td>表头所在的行区间，格式为 <code>[起始行, 结束行]</code>，<strong>行号从 1 开始计数</strong>。例如 <code>[1, 2]</code> 表示第 1~2 行为表头。</td></tr><tr><td><code>content_start</code></td><td>Number</td><td><strong>表格内容的起始行号（从 1 开始）</strong>。</td></tr><tr><td><code>split_row</code></td><td>Number</td><td><strong>切分行数</strong>。</td></tr></tbody></table><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E9.80.9A.E7.94.A8.E6.96.87.E4.BB.B6.E5.88.87.E5.88.86.E7.AD.96.E7.95.A5.EF.BC.89"><code>common_splitter</code>（通用文件切分策略）</h2><p>用于配置 <strong>非 Excel 文件（如 TXT、PDF、DOCX 等）的切分方式</strong>，支持两种策略：<strong>按页切分（page）</strong> 或 <strong>按标识符切分（tag）</strong>。</p><p><strong>类型：Object</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;common_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>  <span class="hljs-attr">&quot;splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;page&quot;</span><span class="hljs-punctuation">,</span>  <span class="hljs-attr">&quot;page_splitter&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-punctuation">{</span>    <span class="hljs-attr">&quot;chunk_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">1000</span><span class="hljs-punctuation">,</span>    <span class="hljs-attr">&quot;chunk_overlap_length&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-number">100</span>  <span class="hljs-punctuation">}</span><span class="hljs-punctuation">}</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A2">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>splitter</code></td><td>String</td><td>切分策略类型，可选值为：<code>&quot;page&quot;</code>（按页切分） 或 <code>&quot;tag&quot;</code>（按标识符切分）。</td></tr><tr><td><code>page_splitter</code></td><td>Object</td><td><strong>按页切分的配置</strong>。</td></tr><tr><td><code>page_splitter.chunk_length</code></td><td>1000</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>page_splitter.chunk_overlap_length</code></td><td>100</td><td><strong>切片重叠长度</strong>。</td></tr><tr><td><code>tag_splitter</code></td><td>Object</td><td><strong>自定义切分配置</strong>。</td></tr><tr><td><code>tag_splitter.tag</code></td><td>Array&lt;String&gt;</td><td><strong>切分标识符</strong>。</td></tr><tr><td><code>tag_splitter.chunk_length</code></td><td>Number</td><td><strong>切片最大长度</strong>。</td></tr><tr><td><code>tag_splitter.chunk_overlap_length</code></td><td>Number</td><td><strong>切块重叠长度</strong>。</td></tr></tbody></table><p>???? <strong>补充说明：</strong></p><ul><li><code>splitter</code> 字段的值可以是：<ul><li><code>&quot;page&quot;</code>：只使用按页切分逻辑，此时只需要关心 <code>page_splitter</code> 相关字段。</li><li><code>&quot;tag&quot;</code>：只使用按标识符（如分号、换行等）切分逻辑，此时关注 <code>tag_splitter</code>。</li></ul></li></ul><hr><h2 id=".3Cdx-inline-code-holder.3E.3C.2Fdx-inline-code-holder.3E.EF.BC.88.E8.A1.A8.E6.A0.BC.E8.BE.93.E5.87.BA.E6.A0.B7.E5.BC.8F.EF.BC.89"><code>table_style</code>（表格输出样式）</h2><p>用于指定 <strong>表格类内容（比如从 Excel 或 CSV 中提取的表格）最终以何种格式返回</strong>，方便前端展示或后续处理。</p><p><strong>类型：String</strong></p><p><pre><code class="language-json"><span class="hljs-attr">&quot;table_style&quot;</span><span class="hljs-punctuation">:</span> <span class="hljs-string">&quot;md&quot;</span></code></pre></p><h3 id=".E5.AD.97.E6.AE.B5.E8.AF.B4.E6.98.8E.EF.BC.9A3">字段说明：</h3><table><thead><tr><th>字段名</th><th>类型</th><th>说明</th></tr></thead><tbody><tr><td><code>table_style</code></td><td>String</td><td>指定表格内容的输出格式。可用值：<br>• <code>&quot;html&quot;</code>：以 HTML 表格形式返回，适合网页展示。<br>• <code>&quot;md&quot;</code>：以 Markdown 表格语法返回，适合文档或 Markdown 渲染环境。</td></tr></tbody></table>
     * @param UpdatePeriodInfo $UpdatePeriodInfo <p>文档更新频率，默认值为0不更新</p>
     * @param integer $EnableScope <p>文档生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效<br>默认值：应用内默认知识库为2，共享知识库为4。</p>
     * @param string $FileUrl <p>文件url 文件的 FileUrl、CosUrl必须提供一个，如果都提供，只使用CosUrl</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("CosHash",$param) and $param["CosHash"] !== null) {
            $this->CosHash = $param["CosHash"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("Opt",$param) and $param["Opt"] !== null) {
            $this->Opt = $param["Opt"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("IsDownload",$param) and $param["IsDownload"] !== null) {
            $this->IsDownload = $param["IsDownload"];
        }

        if (array_key_exists("DuplicateFileHandles",$param) and $param["DuplicateFileHandles"] !== null) {
            $this->DuplicateFileHandles = [];
            foreach ($param["DuplicateFileHandles"] as $key => $value){
                $obj = new DuplicateFileHandle();
                $obj->deserialize($value);
                array_push($this->DuplicateFileHandles, $obj);
            }
        }

        if (array_key_exists("SplitRule",$param) and $param["SplitRule"] !== null) {
            $this->SplitRule = $param["SplitRule"];
        }

        if (array_key_exists("UpdatePeriodInfo",$param) and $param["UpdatePeriodInfo"] !== null) {
            $this->UpdatePeriodInfo = new UpdatePeriodInfo();
            $this->UpdatePeriodInfo->deserialize($param["UpdatePeriodInfo"]);
        }

        if (array_key_exists("EnableScope",$param) and $param["EnableScope"] !== null) {
            $this->EnableScope = $param["EnableScope"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
