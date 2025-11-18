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
 * ChannelCreatePrepareFlow请求参数结构体
 *
 * @method integer getResourceType() 获取资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件（默认值）</li>
<li> **3**：草稿</li>
</ul>
 * @method void setResourceType(integer $ResourceType) 设置资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件（默认值）</li>
<li> **3**：草稿</li>
</ul>
 * @method BaseFlowInfo getFlowInfo() 获取要创建的合同信息
 * @method void setFlowInfo(BaseFlowInfo $FlowInfo) 设置要创建的合同信息
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
 * @method string getResourceId() 获取资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
<li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
 * @method void setResourceId(string $ResourceId) 设置资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
<li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
 * @method CreateFlowOption getFlowOption() 获取合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑
 * @method void setFlowOption(CreateFlowOption $FlowOption) 设置合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑
 * @method array getFlowApproverList() 获取已废弃，请用FlowInfo.Approvers
 * @method void setFlowApproverList(array $FlowApproverList) 设置已废弃，请用FlowInfo.Approvers
 * @method string getFlowId() 获取合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接
注: `该参数必须是一个待发起审核的合同id，并且还未审核通过`
 * @method void setFlowId(string $FlowId) 设置合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接
注: `该参数必须是一个待发起审核的合同id，并且还未审核通过`
 * @method boolean getNeedPreview() 获取该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
 * @method void setNeedPreview(boolean $NeedPreview) 设置该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
 * @method OrganizationInfo getOrganization() 获取企业机构信息，不用传
 * @method void setOrganization(OrganizationInfo $Organization) 设置企业机构信息，不用传
 * @method UserInfo getOperator() 获取操作人（用户）信息，不用传
 * @method void setOperator(UserInfo $Operator) 设置操作人（用户）信息，不用传
 * @method SignComponentConfig getSignComponentConfig() 获取<font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font>
签署控件的配置信息，用在嵌入式发起的页面配置，包括

- 签署控件 是否默认展示日期.
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置<font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font>
签署控件的配置信息，用在嵌入式发起的页面配置，包括

- 签署控件 是否默认展示日期.
 */
class ChannelCreatePrepareFlowRequest extends AbstractModel
{
    /**
     * @var integer 资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件（默认值）</li>
<li> **3**：草稿</li>
</ul>
     */
    public $ResourceType;

    /**
     * @var BaseFlowInfo 要创建的合同信息
     */
    public $FlowInfo;

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
     * @var string 资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
<li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
     */
    public $ResourceId;

    /**
     * @var CreateFlowOption 合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑
     */
    public $FlowOption;

    /**
     * @var array 已废弃，请用FlowInfo.Approvers
     * @deprecated
     */
    public $FlowApproverList;

    /**
     * @var string 合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接
注: `该参数必须是一个待发起审核的合同id，并且还未审核通过`
     */
    public $FlowId;

    /**
     * @var boolean 该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
     * @deprecated
     */
    public $NeedPreview;

    /**
     * @var OrganizationInfo 企业机构信息，不用传
     * @deprecated
     */
    public $Organization;

    /**
     * @var UserInfo 操作人（用户）信息，不用传
     * @deprecated
     */
    public $Operator;

    /**
     * @var SignComponentConfig <font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font>
签署控件的配置信息，用在嵌入式发起的页面配置，包括

- 签署控件 是否默认展示日期.
     * @deprecated
     */
    public $SignComponentConfig;

    /**
     * @param integer $ResourceType 资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件（默认值）</li>
<li> **3**：草稿</li>
</ul>
     * @param BaseFlowInfo $FlowInfo 要创建的合同信息
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param string $ResourceId 资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
<li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
     * @param CreateFlowOption $FlowOption 合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑
     * @param array $FlowApproverList 已废弃，请用FlowInfo.Approvers
     * @param string $FlowId 合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接
注: `该参数必须是一个待发起审核的合同id，并且还未审核通过`
     * @param boolean $NeedPreview 该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
     * @param OrganizationInfo $Organization 企业机构信息，不用传
     * @param UserInfo $Operator 操作人（用户）信息，不用传
     * @param SignComponentConfig $SignComponentConfig <font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font>
签署控件的配置信息，用在嵌入式发起的页面配置，包括

- 签署控件 是否默认展示日期.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("FlowInfo",$param) and $param["FlowInfo"] !== null) {
            $this->FlowInfo = new BaseFlowInfo();
            $this->FlowInfo->deserialize($param["FlowInfo"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FlowOption",$param) and $param["FlowOption"] !== null) {
            $this->FlowOption = new CreateFlowOption();
            $this->FlowOption->deserialize($param["FlowOption"]);
        }

        if (array_key_exists("FlowApproverList",$param) and $param["FlowApproverList"] !== null) {
            $this->FlowApproverList = [];
            foreach ($param["FlowApproverList"] as $key => $value){
                $obj = new CommonFlowApprover();
                $obj->deserialize($value);
                array_push($this->FlowApproverList, $obj);
            }
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("SignComponentConfig",$param) and $param["SignComponentConfig"] !== null) {
            $this->SignComponentConfig = new SignComponentConfig();
            $this->SignComponentConfig->deserialize($param["SignComponentConfig"]);
        }
    }
}
