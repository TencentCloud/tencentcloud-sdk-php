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
 * CreateChannelFlowEvidenceReport请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p>
 * @method UserInfo getOperator() 获取<p>暂未开放</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>暂未开放</p>
 * @method integer getReportType() 获取<p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
 * @method void setReportType(integer $ReportType) 设置<p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
 */
class CreateChannelFlowEvidenceReportRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p>
     */
    public $FlowId;

    /**
     * @var UserInfo <p>暂未开放</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var integer <p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
     */
    public $ReportType;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $FlowId <p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p>
     * @param UserInfo $Operator <p>暂未开放</p>
     * @param integer $ReportType <p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }
    }
}
