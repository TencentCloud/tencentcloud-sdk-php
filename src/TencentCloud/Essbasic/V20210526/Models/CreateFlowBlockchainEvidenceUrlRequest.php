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
 * CreateFlowBlockchainEvidenceUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。  此接口下面信息必填。 <ul> <li>渠道应用标识:  Agent.AppId</li> <li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li> <li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li> </ul>
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。  此接口下面信息必填。 <ul> <li>渠道应用标识:  Agent.AppId</li> <li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li> <li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li> </ul>
 * @method string getFlowId() 获取合同流程ID，为32位字符串。建议开发者妥善保存此流程ID，以便于顺利进行后续操作。可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。建议开发者妥善保存此流程ID，以便于顺利进行后续操作。可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
 * @method integer getExpiredOn() 获取链接/二维码的有效截止时间，格式为unix时间戳。最长不超过 2099年12月31日（4102415999）。
默认值为有效期为当前时间后7天。
 * @method void setExpiredOn(integer $ExpiredOn) 设置链接/二维码的有效截止时间，格式为unix时间戳。最长不超过 2099年12月31日（4102415999）。
默认值为有效期为当前时间后7天。
 */
class CreateFlowBlockchainEvidenceUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。  此接口下面信息必填。 <ul> <li>渠道应用标识:  Agent.AppId</li> <li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li> <li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li> </ul>
     */
    public $Agent;

    /**
     * @var string 合同流程ID，为32位字符串。建议开发者妥善保存此流程ID，以便于顺利进行后续操作。可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
     */
    public $FlowId;

    /**
     * @var integer 链接/二维码的有效截止时间，格式为unix时间戳。最长不超过 2099年12月31日（4102415999）。
默认值为有效期为当前时间后7天。
     */
    public $ExpiredOn;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。  此接口下面信息必填。 <ul> <li>渠道应用标识:  Agent.AppId</li> <li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li> <li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li> </ul>
     * @param string $FlowId 合同流程ID，为32位字符串。建议开发者妥善保存此流程ID，以便于顺利进行后续操作。可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
     * @param integer $ExpiredOn 链接/二维码的有效截止时间，格式为unix时间戳。最长不超过 2099年12月31日（4102415999）。
默认值为有效期为当前时间后7天。
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

        if (array_key_exists("ExpiredOn",$param) and $param["ExpiredOn"] !== null) {
            $this->ExpiredOn = $param["ExpiredOn"];
        }
    }
}
