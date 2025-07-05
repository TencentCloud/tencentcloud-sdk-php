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

namespace TencentCloud\Iap\V20240713;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iap\V20240713\Models as Models;

/**
 * @method Models\CreateIAPUserOIDCConfigResponse CreateIAPUserOIDCConfig(Models\CreateIAPUserOIDCConfigRequest $req) 创建用户OIDC配置。只能创建一个用户OIDC身份提供商，并且创建用户OIDC配置之后会自动关闭用户SAML SSO身份提供商。
 * @method Models\DescribeIAPLoginSessionDurationResponse DescribeIAPLoginSessionDuration(Models\DescribeIAPLoginSessionDurationRequest $req) 查询登录会话时长
 * @method Models\DescribeIAPUserOIDCConfigResponse DescribeIAPUserOIDCConfig(Models\DescribeIAPUserOIDCConfigRequest $req) 查询用户OIDC配置
 * @method Models\DisableIAPUserSSOResponse DisableIAPUserSSO(Models\DisableIAPUserSSORequest $req) 禁用用户SSO
 * @method Models\ModifyIAPLoginSessionDurationResponse ModifyIAPLoginSessionDuration(Models\ModifyIAPLoginSessionDurationRequest $req) 修改登录会话时长
 * @method Models\UpdateIAPUserOIDCConfigResponse UpdateIAPUserOIDCConfig(Models\UpdateIAPUserOIDCConfigRequest $req) 修改用户OIDC配置
 */

class IapClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iap.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iap";

    /**
     * @var string
     */
    protected $version = "2024-07-13";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("iap")."\\"."V20240713\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
