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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTemplates请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method string getTemplateId() 获取合同模板ID，为32位字符串。

可以通过<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateConsoleLoginUrl" target="_blank">生成子客登录链接</a>登录企业控制台, 在企业模板中得到合同模板ID。

[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)
 * @method void setTemplateId(string $TemplateId) 设置合同模板ID，为32位字符串。

可以通过<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateConsoleLoginUrl" target="_blank">生成子客登录链接</a>登录企业控制台, 在企业模板中得到合同模板ID。

[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)
 * @method integer getContentType() 获取查询模板的内容

<ul><li>**0**：（默认）模板列表及详情</li>
<li>**1**：仅模板列表, 不会返回模板中的签署控件, 填写控件, 参与方角色列表等信息</li></ul>
 * @method void setContentType(integer $ContentType) 设置查询模板的内容

<ul><li>**0**：（默认）模板列表及详情</li>
<li>**1**：仅模板列表, 不会返回模板中的签署控件, 填写控件, 参与方角色列表等信息</li></ul>
 * @method array getTemplateIds() 获取合同模板ID数组，每一个合同模板ID为32位字符串,  最多支持100个模板的批量查询。

注意: 
1.` 此参数TemplateIds与TemplateId互为独立，若两者均传入，以TemplateId为准。`
2. `请确保每个模板均正确且属于当前企业，若有任一模板不存在，则返回错误。`
4. `若传递此参数，分页参数(Limit,Offset)无效`


[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)

 * @method void setTemplateIds(array $TemplateIds) 设置合同模板ID数组，每一个合同模板ID为32位字符串,  最多支持100个模板的批量查询。

注意: 
1.` 此参数TemplateIds与TemplateId互为独立，若两者均传入，以TemplateId为准。`
2. `请确保每个模板均正确且属于当前企业，若有任一模板不存在，则返回错误。`
4. `若传递此参数，分页参数(Limit,Offset)无效`


[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)

 * @method integer getLimit() 获取指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为100。`
 * @method void setLimit(integer $Limit) 设置指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为100。`
 * @method integer getOffset() 获取查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
 * @method string getTemplateName() 获取模糊搜索的模板名称，注意是模板名的连续部分，长度不能超过200，可支持由中文、字母、数字和下划线组成字符串。
 * @method void setTemplateName(string $TemplateName) 设置模糊搜索的模板名称，注意是模板名的连续部分，长度不能超过200，可支持由中文、字母、数字和下划线组成字符串。
 * @method string getChannelTemplateId() 获取对应第三方应用平台企业的模板ID，通过此值可以搜索由第三方应用平台模板ID下发或领取得到的子客模板列表。
 * @method void setChannelTemplateId(string $ChannelTemplateId) 设置对应第三方应用平台企业的模板ID，通过此值可以搜索由第三方应用平台模板ID下发或领取得到的子客模板列表。
 * @method boolean getQueryAllComponents() 获取返回控件的范围, 是只返回发起方自己的还是所有参与方的

<ul><li>**false**：（默认）只返回发起方控件</li>
<li>**true**：返回所有参与方(包括发起方和签署方)控件</li></ul>
 * @method void setQueryAllComponents(boolean $QueryAllComponents) 设置返回控件的范围, 是只返回发起方自己的还是所有参与方的

<ul><li>**false**：（默认）只返回发起方控件</li>
<li>**true**：返回所有参与方(包括发起方和签署方)控件</li></ul>
 * @method boolean getWithPreviewUrl() 获取是否获取模板预览链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接,  有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。

 * @method void setWithPreviewUrl(boolean $WithPreviewUrl) 设置是否获取模板预览链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接,  有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。

 * @method boolean getWithPdfUrl() 获取是否获取模板的PDF文件链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PdfUrl，为模板PDF文件链接，有效期5分钟, 可以用于将PDF文件下载到本地

注: `此功能需要开通功能白名单【第三方应用集成企业获取模板PDF下载链接】，使用前请联系对接的客户经理沟通。`
 * @method void setWithPdfUrl(boolean $WithPdfUrl) 设置是否获取模板的PDF文件链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PdfUrl，为模板PDF文件链接，有效期5分钟, 可以用于将PDF文件下载到本地

注: `此功能需要开通功能白名单【第三方应用集成企业获取模板PDF下载链接】，使用前请联系对接的客户经理沟通。`
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method string getUserFlowTypeId() 获取用户合同类型id
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置用户合同类型id
 */
class DescribeTemplatesRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string 合同模板ID，为32位字符串。

可以通过<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateConsoleLoginUrl" target="_blank">生成子客登录链接</a>登录企业控制台, 在企业模板中得到合同模板ID。

[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)
     */
    public $TemplateId;

    /**
     * @var integer 查询模板的内容

<ul><li>**0**：（默认）模板列表及详情</li>
<li>**1**：仅模板列表, 不会返回模板中的签署控件, 填写控件, 参与方角色列表等信息</li></ul>
     */
    public $ContentType;

    /**
     * @var array 合同模板ID数组，每一个合同模板ID为32位字符串,  最多支持100个模板的批量查询。

注意: 
1.` 此参数TemplateIds与TemplateId互为独立，若两者均传入，以TemplateId为准。`
2. `请确保每个模板均正确且属于当前企业，若有任一模板不存在，则返回错误。`
4. `若传递此参数，分页参数(Limit,Offset)无效`


[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)

     */
    public $TemplateIds;

    /**
     * @var integer 指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为100。`
     */
    public $Limit;

    /**
     * @var integer 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
     */
    public $Offset;

    /**
     * @var string 模糊搜索的模板名称，注意是模板名的连续部分，长度不能超过200，可支持由中文、字母、数字和下划线组成字符串。
     */
    public $TemplateName;

    /**
     * @var string 对应第三方应用平台企业的模板ID，通过此值可以搜索由第三方应用平台模板ID下发或领取得到的子客模板列表。
     */
    public $ChannelTemplateId;

    /**
     * @var boolean 返回控件的范围, 是只返回发起方自己的还是所有参与方的

<ul><li>**false**：（默认）只返回发起方控件</li>
<li>**true**：返回所有参与方(包括发起方和签署方)控件</li></ul>
     */
    public $QueryAllComponents;

    /**
     * @var boolean 是否获取模板预览链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接,  有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。

     */
    public $WithPreviewUrl;

    /**
     * @var boolean 是否获取模板的PDF文件链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PdfUrl，为模板PDF文件链接，有效期5分钟, 可以用于将PDF文件下载到本地

注: `此功能需要开通功能白名单【第三方应用集成企业获取模板PDF下载链接】，使用前请联系对接的客户经理沟通。`
     */
    public $WithPdfUrl;

    /**
     * @var UserInfo 操作者的信息
     * @deprecated
     */
    public $Operator;

    /**
     * @var string 用户合同类型id
     */
    public $UserFlowTypeId;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param string $TemplateId 合同模板ID，为32位字符串。

可以通过<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateConsoleLoginUrl" target="_blank">生成子客登录链接</a>登录企业控制台, 在企业模板中得到合同模板ID。

[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)
     * @param integer $ContentType 查询模板的内容

<ul><li>**0**：（默认）模板列表及详情</li>
<li>**1**：仅模板列表, 不会返回模板中的签署控件, 填写控件, 参与方角色列表等信息</li></ul>
     * @param array $TemplateIds 合同模板ID数组，每一个合同模板ID为32位字符串,  最多支持100个模板的批量查询。

注意: 
1.` 此参数TemplateIds与TemplateId互为独立，若两者均传入，以TemplateId为准。`
2. `请确保每个模板均正确且属于当前企业，若有任一模板不存在，则返回错误。`
4. `若传递此参数，分页参数(Limit,Offset)无效`


[点击查看模板Id在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/e988be12bf28a89b4716aed4502c2e02.png)

     * @param integer $Limit 指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为100。`
     * @param integer $Offset 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
     * @param string $TemplateName 模糊搜索的模板名称，注意是模板名的连续部分，长度不能超过200，可支持由中文、字母、数字和下划线组成字符串。
     * @param string $ChannelTemplateId 对应第三方应用平台企业的模板ID，通过此值可以搜索由第三方应用平台模板ID下发或领取得到的子客模板列表。
     * @param boolean $QueryAllComponents 返回控件的范围, 是只返回发起方自己的还是所有参与方的

<ul><li>**false**：（默认）只返回发起方控件</li>
<li>**true**：返回所有参与方(包括发起方和签署方)控件</li></ul>
     * @param boolean $WithPreviewUrl 是否获取模板预览链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接,  有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。

     * @param boolean $WithPdfUrl 是否获取模板的PDF文件链接。

<ul><li>**false**：不获取（默认）</li>
<li>**true**：获取</li></ul>

设置为true之后， 返回参数PdfUrl，为模板PDF文件链接，有效期5分钟, 可以用于将PDF文件下载到本地

注: `此功能需要开通功能白名单【第三方应用集成企业获取模板PDF下载链接】，使用前请联系对接的客户经理沟通。`
     * @param UserInfo $Operator 操作者的信息
     * @param string $UserFlowTypeId 用户合同类型id
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("ChannelTemplateId",$param) and $param["ChannelTemplateId"] !== null) {
            $this->ChannelTemplateId = $param["ChannelTemplateId"];
        }

        if (array_key_exists("QueryAllComponents",$param) and $param["QueryAllComponents"] !== null) {
            $this->QueryAllComponents = $param["QueryAllComponents"];
        }

        if (array_key_exists("WithPreviewUrl",$param) and $param["WithPreviewUrl"] !== null) {
            $this->WithPreviewUrl = $param["WithPreviewUrl"];
        }

        if (array_key_exists("WithPdfUrl",$param) and $param["WithPdfUrl"] !== null) {
            $this->WithPdfUrl = $param["WithPdfUrl"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }
    }
}
