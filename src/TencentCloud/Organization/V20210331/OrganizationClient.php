<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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

namespace TencentCloud\Organization\V20210331;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Organization\V20210331\Models as Models;

/**
 * @method Models\BindOrganizationMemberAuthAccountResponse BindOrganizationMemberAuthAccount(Models\BindOrganizationMemberAuthAccountRequest $req) 绑定组织成员和子账号的授权关系
 * @method Models\CreateOrganizationMemberResponse CreateOrganizationMember(Models\CreateOrganizationMemberRequest $req) 创建组织成员
 */

class OrganizationClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "organization.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "organization";

    /**
     * @var string
     */
    protected $version = "2021-03-31";

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
        $respClass = "TencentCloud"."\\".ucfirst("organization")."\\"."V20210331\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
