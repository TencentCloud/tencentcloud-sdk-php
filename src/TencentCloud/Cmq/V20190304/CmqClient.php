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

namespace TencentCloud\Cmq\V20190304;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cmq\V20190304\Models as Models;

/**
 * @method Models\DescribeQueueDetailResponse DescribeQueueDetail(Models\DescribeQueueDetailRequest $req) 枚举队列列表
 * @method Models\DescribeTopicDetailResponse DescribeTopicDetail(Models\DescribeTopicDetailRequest $req) 查询主题详情
 */

class CmqClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cmq.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cmq";

    /**
     * @var string
     */
    protected $version = "2019-03-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("cmq")."\\"."V20190304\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
