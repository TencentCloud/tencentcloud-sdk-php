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

namespace TencentCloud\Car\V20220110;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Car\V20220110\Models as Models;

/**
 * @method Models\ApplyConcurrentResponse ApplyConcurrent(Models\ApplyConcurrentRequest $req) 本接口用于申请并发。接口超时时间：20秒。
 * @method Models\CreateSessionResponse CreateSession(Models\CreateSessionRequest $req) 本接口用于创建会话。接口超时时间：5秒。
 * @method Models\DescribeConcurrentCountResponse DescribeConcurrentCount(Models\DescribeConcurrentCountRequest $req) 获取并发计数
 * @method Models\DestroySessionResponse DestroySession(Models\DestroySessionRequest $req) 销毁会话。如果该会话开启了云端推流，那么销毁会话时会结束云端推流。
 * @method Models\StartPublishStreamResponse StartPublishStream(Models\StartPublishStreamRequest $req) 开始云端推流。云端推流 codec 根据客户端（SDK）能力来自动选择，默认优先顺序为 H265、H264、VP8、VP9。
 * @method Models\StartPublishStreamWithURLResponse StartPublishStreamWithURL(Models\StartPublishStreamWithURLRequest $req) 开始云端推流到指定URL。云端推流 codec 根据客户端（SDK）能力来自动选择，默认优先顺序为 H265、H264、VP8、VP9。该推流方式需要单独计费，详细计费方式请查看[指定地址推流费用说明](https://cloud.tencent.com/document/product/1547/72168#98ac188a-d122-4caf-88be-05268ecefdf6)
 * @method Models\StopPublishStreamResponse StopPublishStream(Models\StopPublishStreamRequest $req) 停止云端推流
 */

class CarClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "car.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "car";

    /**
     * @var string
     */
    protected $version = "2022-01-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("car")."\\"."V20220110\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
