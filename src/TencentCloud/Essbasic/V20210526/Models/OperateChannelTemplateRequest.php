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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateChannelTemplate请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>第三方平台子客企业中的员工标识: Agent.AppId</li>
</ul>
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>第三方平台子客企业中的员工标识: Agent.AppId</li>
</ul>
 * @method string getOperateType() 获取操作类型，
<ul>
<li>查询:"SELECT"</li>
<li>删除:"DELETE"</li>
<li>更新:"UPDATE"</li>
</ul>
 * @method void setOperateType(string $OperateType) 设置操作类型，
<ul>
<li>查询:"SELECT"</li>
<li>删除:"DELETE"</li>
<li>更新:"UPDATE"</li>
</ul>
 * @method string getTemplateId() 获取合同模板ID，为32位字符串。此处为第三方应用平台模板库模板ID，非子客模板ID。
 * @method void setTemplateId(string $TemplateId) 设置合同模板ID，为32位字符串。此处为第三方应用平台模板库模板ID，非子客模板ID。
 * @method string getProxyOrganizationOpenIds() 获取第三方平台子客企业的唯一标识，长度不能超过64，只能由字母和数字组成。开发者可自定义此字段的值，并需要保存此 ID 以便进行后续操作。

一个第三方平台子客企业主体与子客企业 ProxyOrganizationOpenId 是一一对应的，不可更改，不可重复使用。例如，可以使用企业名称的哈希值，或者社会统一信用代码的哈希值，或者随机哈希值。
 * @method void setProxyOrganizationOpenIds(string $ProxyOrganizationOpenIds) 设置第三方平台子客企业的唯一标识，长度不能超过64，只能由字母和数字组成。开发者可自定义此字段的值，并需要保存此 ID 以便进行后续操作。

一个第三方平台子客企业主体与子客企业 ProxyOrganizationOpenId 是一一对应的，不可更改，不可重复使用。例如，可以使用企业名称的哈希值，或者社会统一信用代码的哈希值，或者随机哈希值。
 * @method string getAuthTag() 获取模板可见性, 
<ul>
<li>全部可见-"all"</li>
<li>部分可见-"part"</li>
</ul>
 * @method void setAuthTag(string $AuthTag) 设置模板可见性, 
<ul>
<li>全部可见-"all"</li>
<li>部分可见-"part"</li>
</ul>
 * @method integer getAvailable() 获取当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。
<ul>
<li>若此字段值为0，则不会修改模板Available</li>
<li>1为启用模板</li>
<li>2为停用模板</li>
</ul>
启用后模板可以正常领取。
停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。
如果Available更新失败，会直接返回错误。
 * @method void setAvailable(integer $Available) 设置当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。
<ul>
<li>若此字段值为0，则不会修改模板Available</li>
<li>1为启用模板</li>
<li>2为停用模板</li>
</ul>
启用后模板可以正常领取。
停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。
如果Available更新失败，会直接返回错误。
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class OperateChannelTemplateRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>第三方平台子客企业中的员工标识: Agent.AppId</li>
</ul>
     */
    public $Agent;

    /**
     * @var string 操作类型，
<ul>
<li>查询:"SELECT"</li>
<li>删除:"DELETE"</li>
<li>更新:"UPDATE"</li>
</ul>
     */
    public $OperateType;

    /**
     * @var string 合同模板ID，为32位字符串。此处为第三方应用平台模板库模板ID，非子客模板ID。
     */
    public $TemplateId;

    /**
     * @var string 第三方平台子客企业的唯一标识，长度不能超过64，只能由字母和数字组成。开发者可自定义此字段的值，并需要保存此 ID 以便进行后续操作。

一个第三方平台子客企业主体与子客企业 ProxyOrganizationOpenId 是一一对应的，不可更改，不可重复使用。例如，可以使用企业名称的哈希值，或者社会统一信用代码的哈希值，或者随机哈希值。
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var string 模板可见性, 
<ul>
<li>全部可见-"all"</li>
<li>部分可见-"part"</li>
</ul>
     */
    public $AuthTag;

    /**
     * @var integer 当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。
<ul>
<li>若此字段值为0，则不会修改模板Available</li>
<li>1为启用模板</li>
<li>2为停用模板</li>
</ul>
启用后模板可以正常领取。
停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。
如果Available更新失败，会直接返回错误。
     */
    public $Available;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>第三方平台子客企业中的员工标识: Agent.AppId</li>
</ul>
     * @param string $OperateType 操作类型，
<ul>
<li>查询:"SELECT"</li>
<li>删除:"DELETE"</li>
<li>更新:"UPDATE"</li>
</ul>
     * @param string $TemplateId 合同模板ID，为32位字符串。此处为第三方应用平台模板库模板ID，非子客模板ID。
     * @param string $ProxyOrganizationOpenIds 第三方平台子客企业的唯一标识，长度不能超过64，只能由字母和数字组成。开发者可自定义此字段的值，并需要保存此 ID 以便进行后续操作。

一个第三方平台子客企业主体与子客企业 ProxyOrganizationOpenId 是一一对应的，不可更改，不可重复使用。例如，可以使用企业名称的哈希值，或者社会统一信用代码的哈希值，或者随机哈希值。
     * @param string $AuthTag 模板可见性, 
<ul>
<li>全部可见-"all"</li>
<li>部分可见-"part"</li>
</ul>
     * @param integer $Available 当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。
<ul>
<li>若此字段值为0，则不会修改模板Available</li>
<li>1为启用模板</li>
<li>2为停用模板</li>
</ul>
启用后模板可以正常领取。
停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。
如果Available更新失败，会直接返回错误。
     * @param UserInfo $Operator 暂未开放
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

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ProxyOrganizationOpenIds",$param) and $param["ProxyOrganizationOpenIds"] !== null) {
            $this->ProxyOrganizationOpenIds = $param["ProxyOrganizationOpenIds"];
        }

        if (array_key_exists("AuthTag",$param) and $param["AuthTag"] !== null) {
            $this->AuthTag = $param["AuthTag"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
