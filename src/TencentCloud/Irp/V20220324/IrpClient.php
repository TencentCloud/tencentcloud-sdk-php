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

namespace TencentCloud\Irp\V20220324;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Irp\V20220324\Models as Models;

/**
 * @method Models\RecommendContentResponse RecommendContent(Models\RecommendContentRequest $req) 获取推荐结果
 * @method Models\ReportActionResponse ReportAction(Models\ReportActionRequest $req) 上报行为
 * @method Models\ReportMaterialResponse ReportMaterial(Models\ReportMaterialRequest $req) 上报物料
 * @method Models\ReportPortraitResponse ReportPortrait(Models\ReportPortraitRequest $req) 上报用户画像
 */

class IrpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "irp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "irp";

    /**
     * @var string
     */
    protected $version = "2022-03-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("irp")."\\"."V20220324\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
