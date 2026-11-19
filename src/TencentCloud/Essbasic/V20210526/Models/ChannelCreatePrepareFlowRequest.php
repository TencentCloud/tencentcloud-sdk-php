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
 * @method integer getResourceType() 获取<p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
 * @method void setResourceType(integer $ResourceType) 设置<p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
 * @method BaseFlowInfo getFlowInfo() 获取<p>要创建的合同信息</p>
 * @method void setFlowInfo(BaseFlowInfo $FlowInfo) 设置<p>要创建的合同信息</p>
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getResourceId() 获取<p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
 * @method void setResourceId(string $ResourceId) 设置<p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
 * @method CreateFlowOption getFlowOption() 获取<p>合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑</p>
 * @method void setFlowOption(CreateFlowOption $FlowOption) 设置<p>合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑</p>
 * @method array getFlowApproverList() 获取<p>已废弃，请用FlowInfo.Approvers</p>
 * @method void setFlowApproverList(array $FlowApproverList) 设置<p>已废弃，请用FlowInfo.Approvers</p>
 * @method string getFlowId() 获取<p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
 * @method void setFlowId(string $FlowId) 设置<p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
 * @method boolean getNeedPreview() 获取<p>该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL</p>
 * @method void setNeedPreview(boolean $NeedPreview) 设置<p>该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL</p>
 * @method OrganizationInfo getOrganization() 获取<p>企业机构信息，不用传</p>
 * @method void setOrganization(OrganizationInfo $Organization) 设置<p>企业机构信息，不用传</p>
 * @method UserInfo getOperator() 获取<p>操作人（用户）信息，不用传</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作人（用户）信息，不用传</p>
 * @method SignComponentConfig getSignComponentConfig() 获取<p><font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，包括</p><ul><li>签署控件 是否默认展示日期.</li></ul>
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置<p><font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，包括</p><ul><li>签署控件 是否默认展示日期.</li></ul>
 */
class ChannelCreatePrepareFlowRequest extends AbstractModel
{
    /**
     * @var integer <p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
     */
    public $ResourceType;

    /**
     * @var BaseFlowInfo <p>要创建的合同信息</p>
     */
    public $FlowInfo;

    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
     */
    public $ResourceId;

    /**
     * @var CreateFlowOption <p>合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑</p>
     */
    public $FlowOption;

    /**
     * @var array <p>已废弃，请用FlowInfo.Approvers</p>
     * @deprecated
     */
    public $FlowApproverList;

    /**
     * @var string <p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
     */
    public $FlowId;

    /**
     * @var boolean <p>该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL</p>
     * @deprecated
     */
    public $NeedPreview;

    /**
     * @var OrganizationInfo <p>企业机构信息，不用传</p>
     * @deprecated
     */
    public $Organization;

    /**
     * @var UserInfo <p>操作人（用户）信息，不用传</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var SignComponentConfig <p><font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，包括</p><ul><li>签署控件 是否默认展示日期.</li></ul>
     * @deprecated
     */
    public $SignComponentConfig;

    /**
     * @param integer $ResourceType <p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
     * @param BaseFlowInfo $FlowInfo <p>要创建的合同信息</p>
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $ResourceId <p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
     * @param CreateFlowOption $FlowOption <p>合同流程配置信息，用于配置发起合同时定制化如是否允许修改，某些按钮的隐藏等逻辑</p>
     * @param array $FlowApproverList <p>已废弃，请用FlowInfo.Approvers</p>
     * @param string $FlowId <p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
     * @param boolean $NeedPreview <p>该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL</p>
     * @param OrganizationInfo $Organization <p>企业机构信息，不用传</p>
     * @param UserInfo $Operator <p>操作人（用户）信息，不用传</p>
     * @param SignComponentConfig $SignComponentConfig <p><font color="red">此参数已经废弃，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，包括</p><ul><li>签署控件 是否默认展示日期.</li></ul>
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
