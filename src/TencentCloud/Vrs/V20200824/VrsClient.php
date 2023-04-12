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

namespace TencentCloud\Vrs\V20200824;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vrs\V20200824\Models as Models;

/**
 * @method Models\CreateVRSTaskResponse CreateVRSTask(Models\CreateVRSTaskRequest $req) 本接口服务对提交音频进行声音复刻任务创建接口，异步返回复刻结果。
• 请求方法为 HTTP POST , Content-Type为"application/json; charset=utf-8"
• 签名方法参考 公共参数 中签名方法v3。
 * @method Models\DescribeVRSTaskStatusResponse DescribeVRSTaskStatus(Models\DescribeVRSTaskStatusRequest $req) 在调用声音复刻创建任务请求接口后，有回调和轮询两种方式获取识别结果。
• 当采用回调方式时，识别完成后会将结果通过 POST 请求的形式通知到用户在请求时填写的回调 URL，具体请参见 声音复刻结果回调 。
• 当采用轮询方式时，需要主动提交任务ID来轮询识别结果，共有任务成功、等待、执行中和失败四种结果，具体信息请参见下文说明。
• 请求方法为 HTTP POST , Content-Type为"application/json; charset=utf-8"
• 签名方法参考 公共参数 中签名方法v3。
 * @method Models\DetectEnvAndSoundQualityResponse DetectEnvAndSoundQuality(Models\DetectEnvAndSoundQualityRequest $req) 本接口用于检测音频的环境和音频质量。
• 请求方法为 HTTP POST , Content-Type为"application/json; charset=utf-8"
• 签名方法参考 公共参数 中签名方法v3。
 * @method Models\GetTrainingTextResponse GetTrainingText(Models\GetTrainingTextRequest $req) 本接口用于获取声音复刻训练文本信息。
 请求方法为 HTTP POST , Content-Type为"application/json; charset=utf-8"
• 签名方法参考 公共参数 中签名方法v3。
 */

class VrsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vrs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vrs";

    /**
     * @var string
     */
    protected $version = "2020-08-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("vrs")."\\"."V20200824\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
