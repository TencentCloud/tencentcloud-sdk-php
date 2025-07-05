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
 * CreateModifyAdminAuthorizationUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

 * @method string getAuthorizationId() 获取企业认证流Id，可以通过回调[授权书认证审核结果回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AD-%E6%8E%88%E6%9D%83%E4%B9%A6%E8%AE%A4%E8%AF%81%E5%AE%A1%E6%A0%B8%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83)得到
 * @method void setAuthorizationId(string $AuthorizationId) 设置企业认证流Id，可以通过回调[授权书认证审核结果回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AD-%E6%8E%88%E6%9D%83%E4%B9%A6%E8%AE%A4%E8%AF%81%E5%AE%A1%E6%A0%B8%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83)得到
 * @method string getEndpoint() 获取要跳转的链接类型<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li><li>**PC**： 跳转电子签web 端控制台的链接。</li></ul>
 * @method void setEndpoint(string $Endpoint) 设置要跳转的链接类型<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li><li>**PC**： 跳转电子签web 端控制台的链接。</li></ul>
 */
class CreateModifyAdminAuthorizationUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

     */
    public $Agent;

    /**
     * @var string 企业认证流Id，可以通过回调[授权书认证审核结果回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AD-%E6%8E%88%E6%9D%83%E4%B9%A6%E8%AE%A4%E8%AF%81%E5%AE%A1%E6%A0%B8%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83)得到
     */
    public $AuthorizationId;

    /**
     * @var string 要跳转的链接类型<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li><li>**PC**： 跳转电子签web 端控制台的链接。</li></ul>
     */
    public $Endpoint;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

     * @param string $AuthorizationId 企业认证流Id，可以通过回调[授权书认证审核结果回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AD-%E6%8E%88%E6%9D%83%E4%B9%A6%E8%AE%A4%E8%AF%81%E5%AE%A1%E6%A0%B8%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83)得到
     * @param string $Endpoint 要跳转的链接类型<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li><li>**PC**： 跳转电子签web 端控制台的链接。</li></ul>
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

        if (array_key_exists("AuthorizationId",$param) and $param["AuthorizationId"] !== null) {
            $this->AuthorizationId = $param["AuthorizationId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
