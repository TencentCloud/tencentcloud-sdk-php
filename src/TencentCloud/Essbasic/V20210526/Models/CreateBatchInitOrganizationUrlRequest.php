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
 * CreateBatchInitOrganizationUrl请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.AppId 必填。
 * @method array getOperateTypes() 获取初始化操作类型
<ul>
<li>CREATE_SEAL : 创建印章</li>
<li>OPEN_AUTO_SIGN :开通企业自动签署</li>
<li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权自动签</li>
</ul>
 * @method void setOperateTypes(array $OperateTypes) 设置初始化操作类型
<ul>
<li>CREATE_SEAL : 创建印章</li>
<li>OPEN_AUTO_SIGN :开通企业自动签署</li>
<li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权自动签</li>
</ul>
 * @method array getProxyOrganizationOpenIds() 获取批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个
 * @method void setProxyOrganizationOpenIds(array $ProxyOrganizationOpenIds) 设置批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个
 * @method boolean getIsAuthorizePlatformApplication() 获取当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权自动签时传true。
![image](https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png)
 * @method void setIsAuthorizePlatformApplication(boolean $IsAuthorizePlatformApplication) 设置当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权自动签时传true。
![image](https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png)
 * @method string getAuthorizedProxyOrganizationOpenId() 获取被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权自动签时必传。



 * @method void setAuthorizedProxyOrganizationOpenId(string $AuthorizedProxyOrganizationOpenId) 设置被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权自动签时必传。
 */
class CreateBatchInitOrganizationUrlRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var array 初始化操作类型
<ul>
<li>CREATE_SEAL : 创建印章</li>
<li>OPEN_AUTO_SIGN :开通企业自动签署</li>
<li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权自动签</li>
</ul>
     */
    public $OperateTypes;

    /**
     * @var array 批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var boolean 当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权自动签时传true。
![image](https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png)
     */
    public $IsAuthorizePlatformApplication;

    /**
     * @var string 被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权自动签时必传。



     */
    public $AuthorizedProxyOrganizationOpenId;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.AppId 必填。
     * @param array $OperateTypes 初始化操作类型
<ul>
<li>CREATE_SEAL : 创建印章</li>
<li>OPEN_AUTO_SIGN :开通企业自动签署</li>
<li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权自动签</li>
</ul>
     * @param array $ProxyOrganizationOpenIds 批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个
     * @param boolean $IsAuthorizePlatformApplication 当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权自动签时传true。
![image](https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png)
     * @param string $AuthorizedProxyOrganizationOpenId 被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权自动签时必传。
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

        if (array_key_exists("OperateTypes",$param) and $param["OperateTypes"] !== null) {
            $this->OperateTypes = $param["OperateTypes"];
        }

        if (array_key_exists("ProxyOrganizationOpenIds",$param) and $param["ProxyOrganizationOpenIds"] !== null) {
            $this->ProxyOrganizationOpenIds = $param["ProxyOrganizationOpenIds"];
        }

        if (array_key_exists("IsAuthorizePlatformApplication",$param) and $param["IsAuthorizePlatformApplication"] !== null) {
            $this->IsAuthorizePlatformApplication = $param["IsAuthorizePlatformApplication"];
        }

        if (array_key_exists("AuthorizedProxyOrganizationOpenId",$param) and $param["AuthorizedProxyOrganizationOpenId"] !== null) {
            $this->AuthorizedProxyOrganizationOpenId = $param["AuthorizedProxyOrganizationOpenId"];
        }
    }
}
