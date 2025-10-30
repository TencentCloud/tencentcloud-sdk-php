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
 * ModifyExtendedService请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
 * @method string getServiceType() 获取  扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
 * @method void setServiceType(string $ServiceType) 设置  扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
 * @method string getOperate() 获取操作类型
<ul>
<li>OPEN : 开通</li>
<li>CLOSE : 关闭</li>
</ul>
 * @method void setOperate(string $Operate) 设置操作类型
<ul>
<li>OPEN : 开通</li>
<li>CLOSE : 关闭</li>
</ul>
 * @method string getEndpoint() 获取链接跳转类型，支持以下类型
<ul>
<li>WEIXINAPP : 短链直接跳转到电子签小程序  (默认值)</li>
<li>APP : 第三方APP或小程序跳转电子签小程序</li>
<li>WEIXIN_QRCODE_URL：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
</ul>
 * @method void setEndpoint(string $Endpoint) 设置链接跳转类型，支持以下类型
<ul>
<li>WEIXINAPP : 短链直接跳转到电子签小程序  (默认值)</li>
<li>APP : 第三方APP或小程序跳转电子签小程序</li>
<li>WEIXIN_QRCODE_URL：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
</ul>
 */
class ModifyExtendedServiceRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
     */
    public $Agent;

    /**
     * @var string   扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
     */
    public $ServiceType;

    /**
     * @var string 操作类型
<ul>
<li>OPEN : 开通</li>
<li>CLOSE : 关闭</li>
</ul>
     */
    public $Operate;

    /**
     * @var string 链接跳转类型，支持以下类型
<ul>
<li>WEIXINAPP : 短链直接跳转到电子签小程序  (默认值)</li>
<li>APP : 第三方APP或小程序跳转电子签小程序</li>
<li>WEIXIN_QRCODE_URL：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
</ul>
     */
    public $Endpoint;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
     * @param string $ServiceType   扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
     * @param string $Operate 操作类型
<ul>
<li>OPEN : 开通</li>
<li>CLOSE : 关闭</li>
</ul>
     * @param string $Endpoint 链接跳转类型，支持以下类型
<ul>
<li>WEIXINAPP : 短链直接跳转到电子签小程序  (默认值)</li>
<li>APP : 第三方APP或小程序跳转电子签小程序</li>
<li>WEIXIN_QRCODE_URL：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
</ul>
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

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
