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
 * DescribeChannelSealPolicyWorkflowUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId
第三方平台子客企业和员工必须已经经过实名认证
 * @method string getWorkflowInstanceId() 获取用印审批单的ID，可通过用印[申请回调](https://qian.tencent.com/developers/partner/callback_types_seals#%E4%B8%89-%E7%94%A8%E5%8D%B0%E7%94%B3%E8%AF%B7%E5%AE%A1%E6%89%B9%E7%8A%B6%E6%80%81%E9%80%9A%E7%9F%A5)获取。
 * @method void setWorkflowInstanceId(string $WorkflowInstanceId) 设置用印审批单的ID，可通过用印[申请回调](https://qian.tencent.com/developers/partner/callback_types_seals#%E4%B8%89-%E7%94%A8%E5%8D%B0%E7%94%B3%E8%AF%B7%E5%AE%A1%E6%89%B9%E7%8A%B6%E6%80%81%E9%80%9A%E7%9F%A5)获取。
 * @method string getEndpoint() 获取生成链接的类型：
生成链接的类型
<ul><li>**LongLink**：(默认)长链接，H5跳转到电子签小程序链接，链接有效期为1年</li>
<li>**ShortLink**：H5跳转到电子签小程序链接，一般用于发送短信中带的链接，打开后进入腾讯电子签小程序，链接有效期为7天</li>
<li>**App**：第三方APP或小程序跳转电子签小程序链接，一般用于贵方小程序或者APP跳转过来，打开后进入腾讯电子签小程序，链接有效期为1年</li></ul>
 * @method void setEndpoint(string $Endpoint) 设置生成链接的类型：
生成链接的类型
<ul><li>**LongLink**：(默认)长链接，H5跳转到电子签小程序链接，链接有效期为1年</li>
<li>**ShortLink**：H5跳转到电子签小程序链接，一般用于发送短信中带的链接，打开后进入腾讯电子签小程序，链接有效期为7天</li>
<li>**App**：第三方APP或小程序跳转电子签小程序链接，一般用于贵方小程序或者APP跳转过来，打开后进入腾讯电子签小程序，链接有效期为1年</li></ul>
 */
class DescribeChannelSealPolicyWorkflowUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string 用印审批单的ID，可通过用印[申请回调](https://qian.tencent.com/developers/partner/callback_types_seals#%E4%B8%89-%E7%94%A8%E5%8D%B0%E7%94%B3%E8%AF%B7%E5%AE%A1%E6%89%B9%E7%8A%B6%E6%80%81%E9%80%9A%E7%9F%A5)获取。
     */
    public $WorkflowInstanceId;

    /**
     * @var string 生成链接的类型：
生成链接的类型
<ul><li>**LongLink**：(默认)长链接，H5跳转到电子签小程序链接，链接有效期为1年</li>
<li>**ShortLink**：H5跳转到电子签小程序链接，一般用于发送短信中带的链接，打开后进入腾讯电子签小程序，链接有效期为7天</li>
<li>**App**：第三方APP或小程序跳转电子签小程序链接，一般用于贵方小程序或者APP跳转过来，打开后进入腾讯电子签小程序，链接有效期为1年</li></ul>
     */
    public $Endpoint;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。

渠道应用标识: Agent.AppId
第三方平台子客企业标识: Agent.ProxyOrganizationOpenId
第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId
第三方平台子客企业和员工必须已经经过实名认证
     * @param string $WorkflowInstanceId 用印审批单的ID，可通过用印[申请回调](https://qian.tencent.com/developers/partner/callback_types_seals#%E4%B8%89-%E7%94%A8%E5%8D%B0%E7%94%B3%E8%AF%B7%E5%AE%A1%E6%89%B9%E7%8A%B6%E6%80%81%E9%80%9A%E7%9F%A5)获取。
     * @param string $Endpoint 生成链接的类型：
生成链接的类型
<ul><li>**LongLink**：(默认)长链接，H5跳转到电子签小程序链接，链接有效期为1年</li>
<li>**ShortLink**：H5跳转到电子签小程序链接，一般用于发送短信中带的链接，打开后进入腾讯电子签小程序，链接有效期为7天</li>
<li>**App**：第三方APP或小程序跳转电子签小程序链接，一般用于贵方小程序或者APP跳转过来，打开后进入腾讯电子签小程序，链接有效期为1年</li></ul>
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

        if (array_key_exists("WorkflowInstanceId",$param) and $param["WorkflowInstanceId"] !== null) {
            $this->WorkflowInstanceId = $param["WorkflowInstanceId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
