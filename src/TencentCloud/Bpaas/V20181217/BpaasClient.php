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

namespace TencentCloud\Bpaas\V20181217;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bpaas\V20181217\Models as Models;

/**
 * @method Models\GetBpaasApproveDetailResponse GetBpaasApproveDetail(Models\GetBpaasApproveDetailRequest $req) 查看审批详情
 * @method Models\OutApproveBpaasApplicationResponse OutApproveBpaasApplication(Models\OutApproveBpaasApplicationRequest $req) 外部审批申请单
 */

class BpaasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bpaas.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bpaas";

    /**
     * @var string
     */
    protected $version = "2018-12-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("bpaas")."\\"."V20181217\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
