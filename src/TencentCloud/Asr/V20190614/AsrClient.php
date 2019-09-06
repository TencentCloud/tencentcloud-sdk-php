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

namespace TencentCloud\Asr\V20190614;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Asr\V20190614\Models as Models;

/**
* @method Models\CreateRecTaskResponse CreateRecTask(Models\CreateRecTaskRequest $req) 本接口服务对录音时长1小时以内的录音文件进行识别，异步返回识别全部结果。
<br>• 支持回调或轮询的方式获取结果，轮询方式请参考“录音文件识别结果查询”。
<br>• 支持语音 URL 和本地语音文件两种请求方式。
<br>• 接口是 HTTP RESTful 形式

在使用该接口前，需要在 [语音识别控制台](https://console.cloud.tencent.com/asr) 开通服务，并进入 [API 密钥管理页面](https://console.cloud.tencent.com/cam/capi) 新建密钥，<br>生成 AppID、SecretID 和 SecretKey ，用于 API 调用时生成签名，签名将用来进行接口鉴权。
* @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口需要配合录音文件识别请求接口使用，单独使用无效。在调用录音文件识别接口后，可以在本接口传入TaskID来轮询识别结果。
* @method Models\SentenceRecognitionResponse SentenceRecognition(Models\SentenceRecognitionRequest $req) 本接口用于对60秒之内的短音频文件进行识别。
<br>•   支持中文普通话、英语、粤语和带有一定方言口音的中文普通话识别。
<br>•   支持本地语音文件上传和语音URL上传两种请求方式。
<br>•   音频格式支持wav、mp3；采样率支持8000Hz或者16000Hz；采样精度支持16bits；声道支持单声道。
<br>•   当音频文件通过请求中body内容上传时，请求大小不能超过600KB；当音频以URL方式传输时，音频时长不可超过60s。
<br>•   所有请求参数放在POST请求的body中，编码类型采用x-www-form-urlencoded，参数进行urlencode编码后传输。
 */

class AsrClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "asr.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-06-14";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("asr")."\\"."V20190614\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
