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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmbedWebUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br><br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br><br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getEmbedType() 获取<p>WEB嵌入资源类型，支持以下类型</p><p>枚举值：</p><ul><li><p>CREATE_SEAL： 生成创建印章的嵌入页面</p></li><li><p>CREATE_TEMPLATE： 生成创建模板的嵌入页面</p></li><li><p>MODIFY_TEMPLATE： 生成编辑模板的嵌入页面</p></li><li><p>CREATE_CONTRACT_DRAFT_COOPEDIT： 生成创建起草合同的嵌入页面</p></li><li><p>PREVIEW_TEMPLATE： 生成预览模板的嵌入页面</p></li><li><p>PREVIEW_SEAL_LIST： 生成预览印章列表的嵌入页面</p></li><li><p>PREVIEW_SEAL_DETAIL： 生成预览印章详情的嵌入页面</p></li><li><p>EXTEND_SERVICE： 生成高级签署能力的嵌入页面</p></li><li><p>PREVIEW_FLOW： 生成预览合同的嵌入页面（支持移动端）</p></li><li><p>PREVIEW_FLOW_DETAIL： 生成查看合同详情的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_TEMPLATE： 生成应用模板库管理的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_COMPONENT： 生成应用模板控件管理的嵌入页面（仅支持PC端）</p><p>注意： 不同的嵌入类型，操作人需要的权限项不同（权限配置可参考<a href="https://qian.tencent.com/document/61355">权限配置</a>）。 <table border="1"> <thead> <tr><th>EmbedType</th><th>权限</th></tr> </thead>      <tbody>  <tr><th>CREATE_SEAL</th><th>印章管理-添加印章</th></tr> <tr><th>CREATE_TEMPLATE</th><th>模板管理-创建模板</th></tr> <tr><th>MODIFY_TEMPLATE</th><th>模板管理-编辑模板</th></tr> <tr><th>CREATE_CONTRACT_DRAFT_COOPEDIT</th><th>合同管理-起草合同</th></tr> <tr><th>PREVIEW_TEMPLATE</th><th>拥有下面三种权限的一种就行<br> 模板管理-查询模板（本企业全部模板）<br> 模板管理-查询模板（本部门全部模板）<br> 模板管理-查询模板（本人创建模板）</th></tr> <tr><th>PREVIEW_SEAL_LIST</th><th>印章管理</th></tr> <tr><th>PREVIEW_SEAL_DETAIL</th><th>印章管理</th></tr> <tr><th>EXTEND_SERVICE</th><th>无要求</th></tr> <tr><th>PREVIEW_FLOW</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>PREVIEW_FLOW_DETAIL</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>CHANNEL_TEMPLATE</th><th>开发者中心-应用模板库管理</th></tr> <tr><th>CHANNEL_COMPONENT</th><th>开发者中心-应用模板控件管理</th></tr> </tbody>  </table></p></li></ul>
 * @method void setEmbedType(string $EmbedType) 设置<p>WEB嵌入资源类型，支持以下类型</p><p>枚举值：</p><ul><li><p>CREATE_SEAL： 生成创建印章的嵌入页面</p></li><li><p>CREATE_TEMPLATE： 生成创建模板的嵌入页面</p></li><li><p>MODIFY_TEMPLATE： 生成编辑模板的嵌入页面</p></li><li><p>CREATE_CONTRACT_DRAFT_COOPEDIT： 生成创建起草合同的嵌入页面</p></li><li><p>PREVIEW_TEMPLATE： 生成预览模板的嵌入页面</p></li><li><p>PREVIEW_SEAL_LIST： 生成预览印章列表的嵌入页面</p></li><li><p>PREVIEW_SEAL_DETAIL： 生成预览印章详情的嵌入页面</p></li><li><p>EXTEND_SERVICE： 生成高级签署能力的嵌入页面</p></li><li><p>PREVIEW_FLOW： 生成预览合同的嵌入页面（支持移动端）</p></li><li><p>PREVIEW_FLOW_DETAIL： 生成查看合同详情的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_TEMPLATE： 生成应用模板库管理的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_COMPONENT： 生成应用模板控件管理的嵌入页面（仅支持PC端）</p><p>注意： 不同的嵌入类型，操作人需要的权限项不同（权限配置可参考<a href="https://qian.tencent.com/document/61355">权限配置</a>）。 <table border="1"> <thead> <tr><th>EmbedType</th><th>权限</th></tr> </thead>      <tbody>  <tr><th>CREATE_SEAL</th><th>印章管理-添加印章</th></tr> <tr><th>CREATE_TEMPLATE</th><th>模板管理-创建模板</th></tr> <tr><th>MODIFY_TEMPLATE</th><th>模板管理-编辑模板</th></tr> <tr><th>CREATE_CONTRACT_DRAFT_COOPEDIT</th><th>合同管理-起草合同</th></tr> <tr><th>PREVIEW_TEMPLATE</th><th>拥有下面三种权限的一种就行<br> 模板管理-查询模板（本企业全部模板）<br> 模板管理-查询模板（本部门全部模板）<br> 模板管理-查询模板（本人创建模板）</th></tr> <tr><th>PREVIEW_SEAL_LIST</th><th>印章管理</th></tr> <tr><th>PREVIEW_SEAL_DETAIL</th><th>印章管理</th></tr> <tr><th>EXTEND_SERVICE</th><th>无要求</th></tr> <tr><th>PREVIEW_FLOW</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>PREVIEW_FLOW_DETAIL</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>CHANNEL_TEMPLATE</th><th>开发者中心-应用模板库管理</th></tr> <tr><th>CHANNEL_COMPONENT</th><th>开发者中心-应用模板控件管理</th></tr> </tbody>  </table></p></li></ul>
 * @method string getBusinessId() 获取<p>WEB嵌入的业务资源ID</p><p>当EmbedType取值</p><ul><li>为PREVIEW_SEAL_DETAIL，必填，取值为印章id。</li><li>为CREATE_TEMPLATE，非必填，取值为资源id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模板id。</li><li>为CREATE_CONTRACT_DRAFT_COOPEDIT，非必填，取值为资源 id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id。</li></ul><p>注意：</p><ol><li>CREATE_TEMPLATE中的BusinessId仅支持PDF文件类型， 如果您的文件不是PDF， 请使用接口<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi">创建文件转换任务</a> 和<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/GetTaskResultApi">查询转换任务状态</a> 来进行转换成PDF资源。</li><li>CREATE_CONTRACT_DRAFT_COOPEDIT中的BusinessId仅支持DOC 和 DOCX 的文件，并且大小不能超过 10M。</li></ol>
 * @method void setBusinessId(string $BusinessId) 设置<p>WEB嵌入的业务资源ID</p><p>当EmbedType取值</p><ul><li>为PREVIEW_SEAL_DETAIL，必填，取值为印章id。</li><li>为CREATE_TEMPLATE，非必填，取值为资源id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模板id。</li><li>为CREATE_CONTRACT_DRAFT_COOPEDIT，非必填，取值为资源 id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id。</li></ul><p>注意：</p><ol><li>CREATE_TEMPLATE中的BusinessId仅支持PDF文件类型， 如果您的文件不是PDF， 请使用接口<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi">创建文件转换任务</a> 和<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/GetTaskResultApi">查询转换任务状态</a> 来进行转换成PDF资源。</li><li>CREATE_CONTRACT_DRAFT_COOPEDIT中的BusinessId仅支持DOC 和 DOCX 的文件，并且大小不能超过 10M。</li></ol>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br><br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br><br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method ReviewerInfo getReviewer() 获取<p>抄送方信息</p>
 * @method void setReviewer(ReviewerInfo $Reviewer) 设置<p>抄送方信息</p>
 * @method EmbedUrlOption getOption() 获取<p>个性化参数，用于控制页面展示内容</p>
 * @method void setOption(EmbedUrlOption $Option) 设置<p>个性化参数，用于控制页面展示内容</p>
 * @method string getUserData() 获取<ul> <li>目前仅支持EmbedType=CREATE_TEMPLATE时传入</li> <li>指定后，创建，编辑，删除模板时，回调都会携带该userData</li> <li>支持的格式：json字符串的BASE64编码字符串</li> <li>示例：<ul>                  <li>json字符串：{"ComeFrom":"xxx"}，BASE64编码：eyJDb21lRnJvbSI6Inh4eCJ9</li>                  <li>eyJDb21lRnJvbSI6Inh4eCJ9，为符合要求的userData数据格式</li> </ul> </li> </ul>
 * @method void setUserData(string $UserData) 设置<ul> <li>目前仅支持EmbedType=CREATE_TEMPLATE时传入</li> <li>指定后，创建，编辑，删除模板时，回调都会携带该userData</li> <li>支持的格式：json字符串的BASE64编码字符串</li> <li>示例：<ul>                  <li>json字符串：{"ComeFrom":"xxx"}，BASE64编码：eyJDb21lRnJvbSI6Inh4eCJ9</li>                  <li>eyJDb21lRnJvbSI6Inh4eCJ9，为符合要求的userData数据格式</li> </ul> </li> </ul>
 * @method string getApplicationId() 获取<p>第三方应用号ID</p><p>当EmbedType取以下值时，该字段生效</p><ul><li>CHANNEL_TEMPLATE：生成指定应用的模板库管理页面</li><li>CHANNEL_COMPONENT：生成指定应用的控件管理页面</li></ul>
 * @method void setApplicationId(string $ApplicationId) 设置<p>第三方应用号ID</p><p>当EmbedType取以下值时，该字段生效</p><ul><li>CHANNEL_TEMPLATE：生成指定应用的模板库管理页面</li><li>CHANNEL_COMPONENT：生成指定应用的控件管理页面</li></ul>
 */
class CreateEmbedWebUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br><br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>WEB嵌入资源类型，支持以下类型</p><p>枚举值：</p><ul><li><p>CREATE_SEAL： 生成创建印章的嵌入页面</p></li><li><p>CREATE_TEMPLATE： 生成创建模板的嵌入页面</p></li><li><p>MODIFY_TEMPLATE： 生成编辑模板的嵌入页面</p></li><li><p>CREATE_CONTRACT_DRAFT_COOPEDIT： 生成创建起草合同的嵌入页面</p></li><li><p>PREVIEW_TEMPLATE： 生成预览模板的嵌入页面</p></li><li><p>PREVIEW_SEAL_LIST： 生成预览印章列表的嵌入页面</p></li><li><p>PREVIEW_SEAL_DETAIL： 生成预览印章详情的嵌入页面</p></li><li><p>EXTEND_SERVICE： 生成高级签署能力的嵌入页面</p></li><li><p>PREVIEW_FLOW： 生成预览合同的嵌入页面（支持移动端）</p></li><li><p>PREVIEW_FLOW_DETAIL： 生成查看合同详情的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_TEMPLATE： 生成应用模板库管理的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_COMPONENT： 生成应用模板控件管理的嵌入页面（仅支持PC端）</p><p>注意： 不同的嵌入类型，操作人需要的权限项不同（权限配置可参考<a href="https://qian.tencent.com/document/61355">权限配置</a>）。 <table border="1"> <thead> <tr><th>EmbedType</th><th>权限</th></tr> </thead>      <tbody>  <tr><th>CREATE_SEAL</th><th>印章管理-添加印章</th></tr> <tr><th>CREATE_TEMPLATE</th><th>模板管理-创建模板</th></tr> <tr><th>MODIFY_TEMPLATE</th><th>模板管理-编辑模板</th></tr> <tr><th>CREATE_CONTRACT_DRAFT_COOPEDIT</th><th>合同管理-起草合同</th></tr> <tr><th>PREVIEW_TEMPLATE</th><th>拥有下面三种权限的一种就行<br> 模板管理-查询模板（本企业全部模板）<br> 模板管理-查询模板（本部门全部模板）<br> 模板管理-查询模板（本人创建模板）</th></tr> <tr><th>PREVIEW_SEAL_LIST</th><th>印章管理</th></tr> <tr><th>PREVIEW_SEAL_DETAIL</th><th>印章管理</th></tr> <tr><th>EXTEND_SERVICE</th><th>无要求</th></tr> <tr><th>PREVIEW_FLOW</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>PREVIEW_FLOW_DETAIL</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>CHANNEL_TEMPLATE</th><th>开发者中心-应用模板库管理</th></tr> <tr><th>CHANNEL_COMPONENT</th><th>开发者中心-应用模板控件管理</th></tr> </tbody>  </table></p></li></ul>
     */
    public $EmbedType;

    /**
     * @var string <p>WEB嵌入的业务资源ID</p><p>当EmbedType取值</p><ul><li>为PREVIEW_SEAL_DETAIL，必填，取值为印章id。</li><li>为CREATE_TEMPLATE，非必填，取值为资源id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模板id。</li><li>为CREATE_CONTRACT_DRAFT_COOPEDIT，非必填，取值为资源 id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id。</li></ul><p>注意：</p><ol><li>CREATE_TEMPLATE中的BusinessId仅支持PDF文件类型， 如果您的文件不是PDF， 请使用接口<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi">创建文件转换任务</a> 和<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/GetTaskResultApi">查询转换任务状态</a> 来进行转换成PDF资源。</li><li>CREATE_CONTRACT_DRAFT_COOPEDIT中的BusinessId仅支持DOC 和 DOCX 的文件，并且大小不能超过 10M。</li></ol>
     */
    public $BusinessId;

    /**
     * @var Agent <p>代理企业和员工的信息。<br><br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var ReviewerInfo <p>抄送方信息</p>
     */
    public $Reviewer;

    /**
     * @var EmbedUrlOption <p>个性化参数，用于控制页面展示内容</p>
     */
    public $Option;

    /**
     * @var string <ul> <li>目前仅支持EmbedType=CREATE_TEMPLATE时传入</li> <li>指定后，创建，编辑，删除模板时，回调都会携带该userData</li> <li>支持的格式：json字符串的BASE64编码字符串</li> <li>示例：<ul>                  <li>json字符串：{"ComeFrom":"xxx"}，BASE64编码：eyJDb21lRnJvbSI6Inh4eCJ9</li>                  <li>eyJDb21lRnJvbSI6Inh4eCJ9，为符合要求的userData数据格式</li> </ul> </li> </ul>
     */
    public $UserData;

    /**
     * @var string <p>第三方应用号ID</p><p>当EmbedType取以下值时，该字段生效</p><ul><li>CHANNEL_TEMPLATE：生成指定应用的模板库管理页面</li><li>CHANNEL_COMPONENT：生成指定应用的控件管理页面</li></ul>
     */
    public $ApplicationId;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br><br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $EmbedType <p>WEB嵌入资源类型，支持以下类型</p><p>枚举值：</p><ul><li><p>CREATE_SEAL： 生成创建印章的嵌入页面</p></li><li><p>CREATE_TEMPLATE： 生成创建模板的嵌入页面</p></li><li><p>MODIFY_TEMPLATE： 生成编辑模板的嵌入页面</p></li><li><p>CREATE_CONTRACT_DRAFT_COOPEDIT： 生成创建起草合同的嵌入页面</p></li><li><p>PREVIEW_TEMPLATE： 生成预览模板的嵌入页面</p></li><li><p>PREVIEW_SEAL_LIST： 生成预览印章列表的嵌入页面</p></li><li><p>PREVIEW_SEAL_DETAIL： 生成预览印章详情的嵌入页面</p></li><li><p>EXTEND_SERVICE： 生成高级签署能力的嵌入页面</p></li><li><p>PREVIEW_FLOW： 生成预览合同的嵌入页面（支持移动端）</p></li><li><p>PREVIEW_FLOW_DETAIL： 生成查看合同详情的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_TEMPLATE： 生成应用模板库管理的嵌入页面（仅支持PC端）</p></li><li><p>CHANNEL_COMPONENT： 生成应用模板控件管理的嵌入页面（仅支持PC端）</p><p>注意： 不同的嵌入类型，操作人需要的权限项不同（权限配置可参考<a href="https://qian.tencent.com/document/61355">权限配置</a>）。 <table border="1"> <thead> <tr><th>EmbedType</th><th>权限</th></tr> </thead>      <tbody>  <tr><th>CREATE_SEAL</th><th>印章管理-添加印章</th></tr> <tr><th>CREATE_TEMPLATE</th><th>模板管理-创建模板</th></tr> <tr><th>MODIFY_TEMPLATE</th><th>模板管理-编辑模板</th></tr> <tr><th>CREATE_CONTRACT_DRAFT_COOPEDIT</th><th>合同管理-起草合同</th></tr> <tr><th>PREVIEW_TEMPLATE</th><th>拥有下面三种权限的一种就行<br> 模板管理-查询模板（本企业全部模板）<br> 模板管理-查询模板（本部门全部模板）<br> 模板管理-查询模板（本人创建模板）</th></tr> <tr><th>PREVIEW_SEAL_LIST</th><th>印章管理</th></tr> <tr><th>PREVIEW_SEAL_DETAIL</th><th>印章管理</th></tr> <tr><th>EXTEND_SERVICE</th><th>无要求</th></tr> <tr><th>PREVIEW_FLOW</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>PREVIEW_FLOW_DETAIL</th><th>是否是当前合同的参与方，或者发起方企业的法人、超管、合同管理员</th></tr> <tr><th>CHANNEL_TEMPLATE</th><th>开发者中心-应用模板库管理</th></tr> <tr><th>CHANNEL_COMPONENT</th><th>开发者中心-应用模板控件管理</th></tr> </tbody>  </table></p></li></ul>
     * @param string $BusinessId <p>WEB嵌入的业务资源ID</p><p>当EmbedType取值</p><ul><li>为PREVIEW_SEAL_DETAIL，必填，取值为印章id。</li><li>为CREATE_TEMPLATE，非必填，取值为资源id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模板id。</li><li>为CREATE_CONTRACT_DRAFT_COOPEDIT，非必填，取值为资源 id。*资源Id获取可使用接口[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)*</li><li>为PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id。</li></ul><p>注意：</p><ol><li>CREATE_TEMPLATE中的BusinessId仅支持PDF文件类型， 如果您的文件不是PDF， 请使用接口<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi">创建文件转换任务</a> 和<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/GetTaskResultApi">查询转换任务状态</a> 来进行转换成PDF资源。</li><li>CREATE_CONTRACT_DRAFT_COOPEDIT中的BusinessId仅支持DOC 和 DOCX 的文件，并且大小不能超过 10M。</li></ol>
     * @param Agent $Agent <p>代理企业和员工的信息。<br><br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param ReviewerInfo $Reviewer <p>抄送方信息</p>
     * @param EmbedUrlOption $Option <p>个性化参数，用于控制页面展示内容</p>
     * @param string $UserData <ul> <li>目前仅支持EmbedType=CREATE_TEMPLATE时传入</li> <li>指定后，创建，编辑，删除模板时，回调都会携带该userData</li> <li>支持的格式：json字符串的BASE64编码字符串</li> <li>示例：<ul>                  <li>json字符串：{"ComeFrom":"xxx"}，BASE64编码：eyJDb21lRnJvbSI6Inh4eCJ9</li>                  <li>eyJDb21lRnJvbSI6Inh4eCJ9，为符合要求的userData数据格式</li> </ul> </li> </ul>
     * @param string $ApplicationId <p>第三方应用号ID</p><p>当EmbedType取以下值时，该字段生效</p><ul><li>CHANNEL_TEMPLATE：生成指定应用的模板库管理页面</li><li>CHANNEL_COMPONENT：生成指定应用的控件管理页面</li></ul>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("EmbedType",$param) and $param["EmbedType"] !== null) {
            $this->EmbedType = $param["EmbedType"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = new ReviewerInfo();
            $this->Reviewer->deserialize($param["Reviewer"]);
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new EmbedUrlOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
