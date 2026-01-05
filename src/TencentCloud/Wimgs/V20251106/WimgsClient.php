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

namespace TencentCloud\Wimgs\V20251106;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wimgs\V20251106\Models as Models;

/**
 * @method Models\SearchByTextResponse SearchByText(Models\SearchByTextRequest $req) 文搜图接口，本服务将针对您输入的搜索关键词，检索并以JSON形式返回相关图片的标题、宽高、缩略图、内容来源url等信息。
 */

class WimgsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wimgs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wimgs";

    /**
     * @var string
     */
    protected $version = "2025-11-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("wimgs")."\\"."V20251106\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
