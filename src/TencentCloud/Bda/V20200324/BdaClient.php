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

namespace TencentCloud\Bda\V20200324;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bda\V20200324\Models as Models;

/**
 * @method Models\CreateSegmentationTaskResponse CreateSegmentationTask(Models\CreateSegmentationTaskRequest $req) 本接口为人像分割在线处理接口组中的提交任务接口，可以对提交的资源进行处理视频流/图片流识别视频作品中的人像区域，进行一键抠像、背景替换、人像虚化等后期处理。
 * @method Models\DescribeSegmentationTaskResponse DescribeSegmentationTask(Models\DescribeSegmentationTaskRequest $req) 可以查看单条任务的处理情况，包括处理状态，处理结果。
 * @method Models\SegmentCustomizedPortraitPicResponse SegmentCustomizedPortraitPic(Models\SegmentCustomizedPortraitPicRequest $req) 在前后景分割的基础上优化多分类分割，支持对头发、五官等的分割，既作为换发型、挂件等底层技术，也可用于抠人头、抠人脸等玩法
 * @method Models\SegmentPortraitPicResponse SegmentPortraitPic(Models\SegmentPortraitPicRequest $req) 即二分类人像分割，识别传入图片中人体的完整轮廓，进行抠像。
 * @method Models\TerminateSegmentationTaskResponse TerminateSegmentationTask(Models\TerminateSegmentationTaskRequest $req) 终止指定视频人像分割处理任务
 */

class BdaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bda.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bda";

    /**
     * @var string
     */
    protected $version = "2020-03-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("bda")."\\"."V20200324\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
