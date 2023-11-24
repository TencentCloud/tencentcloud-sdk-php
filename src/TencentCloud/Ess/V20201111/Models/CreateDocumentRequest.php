<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateDocument请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
此接口的合同流程ID需要由[创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow)接口创建得到。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
此接口的合同流程ID需要由[创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow)接口创建得到。
 * @method string getTemplateId() 获取用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
 * @method void setTemplateId(string $TemplateId) 设置用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
 * @method array getFileNames() 获取文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。
 * @method void setFileNames(array $FileNames) 设置文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。
 * @method array getFormFields() 获取电子文档的填写控件的填充内容。具体方式可以参考[FormField](https://qian.tencent.com/developers/companyApis/dataTypes/#formfield)结构体的定义。
 * @method void setFormFields(array $FormFields) 设置电子文档的填写控件的填充内容。具体方式可以参考[FormField](https://qian.tencent.com/developers/companyApis/dataTypes/#formfield)结构体的定义。
 * @method boolean getNeedPreview() 获取是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
注: `当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知`
 * @method void setNeedPreview(boolean $NeedPreview) 设置是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
注: `当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知`
 * @method integer getPreviewType() 获取预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>
注: `1.此参数在NeedPreview 为true时有效`
`2.动态表格控件不支持H5链接方式预览`
 * @method void setPreviewType(integer $PreviewType) 设置预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>
注: `1.此参数在NeedPreview 为true时有效`
`2.动态表格控件不支持H5链接方式预览`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getClientToken() 获取已废弃字段，客户端Token，保持接口幂等性,最大长度64个字符
 * @method void setClientToken(string $ClientToken) 设置已废弃字段，客户端Token，保持接口幂等性,最大长度64个字符
 */
class CreateDocumentRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     */
    public $Operator;

    /**
     * @var string 合同流程ID，为32位字符串。
此接口的合同流程ID需要由[创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow)接口创建得到。
     */
    public $FlowId;

    /**
     * @var string 用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
     */
    public $TemplateId;

    /**
     * @var array 文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。
     */
    public $FileNames;

    /**
     * @var array 电子文档的填写控件的填充内容。具体方式可以参考[FormField](https://qian.tencent.com/developers/companyApis/dataTypes/#formfield)结构体的定义。
     */
    public $FormFields;

    /**
     * @var boolean 是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
注: `当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知`
     */
    public $NeedPreview;

    /**
     * @var integer 预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>
注: `1.此参数在NeedPreview 为true时有效`
`2.动态表格控件不支持H5链接方式预览`
     */
    public $PreviewType;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 已废弃字段，客户端Token，保持接口幂等性,最大长度64个字符
     */
    public $ClientToken;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     * @param string $FlowId 合同流程ID，为32位字符串。
此接口的合同流程ID需要由[创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow)接口创建得到。
     * @param string $TemplateId 用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
     * @param array $FileNames 文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。
     * @param array $FormFields 电子文档的填写控件的填充内容。具体方式可以参考[FormField](https://qian.tencent.com/developers/companyApis/dataTypes/#formfield)结构体的定义。
     * @param boolean $NeedPreview 是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
注: `当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知`
     * @param integer $PreviewType 预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>
注: `1.此参数在NeedPreview 为true时有效`
`2.动态表格控件不支持H5链接方式预览`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $ClientToken 已废弃字段，客户端Token，保持接口幂等性,最大长度64个字符
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
        }

        if (array_key_exists("FormFields",$param) and $param["FormFields"] !== null) {
            $this->FormFields = [];
            foreach ($param["FormFields"] as $key => $value){
                $obj = new FormField();
                $obj->deserialize($value);
                array_push($this->FormFields, $obj);
            }
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
