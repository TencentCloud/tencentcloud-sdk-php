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
 * @method Agent getAgent() 获取<p>应用相关信息。 此接口Agent.AppId 必填。</p>
 * @method void setAgent(Agent $Agent) 设置<p>应用相关信息。 此接口Agent.AppId 必填。</p>
 * @method array getOperateTypes() 获取<p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>OPEN_AUTO_SIGN :开通企业授权签署</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权“授权签”</li></ul></p>
 * @method void setOperateTypes(array $OperateTypes) 设置<p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>OPEN_AUTO_SIGN :开通企业授权签署</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权“授权签”</li></ul></p>
 * @method array getProxyOrganizationOpenIds() 获取<p>批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个</p>
 * @method void setProxyOrganizationOpenIds(array $ProxyOrganizationOpenIds) 设置<p>批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个</p>
 * @method boolean getIsAuthorizePlatformApplication() 获取<p>当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权【授权签】时传true。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png" alt="image"></p>
 * @method void setIsAuthorizePlatformApplication(boolean $IsAuthorizePlatformApplication) 设置<p>当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权【授权签】时传true。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png" alt="image"></p>
 * @method string getAuthorizedProxyOrganizationOpenId() 获取<p>被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权【授权签】时必传。</p>
 * @method void setAuthorizedProxyOrganizationOpenId(string $AuthorizedProxyOrganizationOpenId) 设置<p>被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权【授权签】时必传。</p>
 */
class CreateBatchInitOrganizationUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>应用相关信息。 此接口Agent.AppId 必填。</p>
     */
    public $Agent;

    /**
     * @var array <p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>OPEN_AUTO_SIGN :开通企业授权签署</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权“授权签”</li></ul></p>
     */
    public $OperateTypes;

    /**
     * @var array <p>批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个</p>
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var boolean <p>当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权【授权签】时传true。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png" alt="image"></p>
     */
    public $IsAuthorizePlatformApplication;

    /**
     * @var string <p>被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权【授权签】时必传。</p>
     */
    public $AuthorizedProxyOrganizationOpenId;

    /**
     * @param Agent $Agent <p>应用相关信息。 此接口Agent.AppId 必填。</p>
     * @param array $OperateTypes <p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>OPEN_AUTO_SIGN :开通企业授权签署</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业或应用平台方授权“授权签”</li></ul></p>
     * @param array $ProxyOrganizationOpenIds <p>批量操作的企业列表在第三方平台的企业Id列表，即ProxyOrganizationOpenId列表,最大支持50个</p>
     * @param boolean $IsAuthorizePlatformApplication <p>当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且是给应用平台方授权【授权签】时传true。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/f9aba7c999a6d79ada20b4384520e120.png" alt="image"></p>
     * @param string $AuthorizedProxyOrganizationOpenId <p>被授权的合作方企业在第三方平台子客企业标识，即ProxyOrganizationOpenId，当操作类型包含 PARTNER_AUTO_SIGN_AUTH 且要进行合作方企业授权【授权签】时必传。</p>
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
