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

namespace TencentCloud\Vclm\V20240523;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vclm\V20240523\Models as Models;

/**
 * @method Models\CheckAnimateImageJobResponse CheckAnimateImageJob(Models\CheckAnimateImageJobRequest $req) 检查图片跳舞输入图
 * @method Models\DescribeImageAnimateJobResponse DescribeImageAnimateJob(Models\DescribeImageAnimateJobRequest $req) 用于查询图片跳舞任务。图片跳舞能力支持舞蹈动作结合图片生成跳舞视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\DescribePortraitSingJobResponse DescribePortraitSingJob(Models\DescribePortraitSingJobRequest $req) 用于查询图片唱演任务。
支持提交音频和图片生成唱演视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\DescribeTemplateToVideoJobResponse DescribeTemplateToVideoJob(Models\DescribeTemplateToVideoJobRequest $req) 用于查询视频特效任务。
 * @method Models\DescribeVideoStylizationJobResponse DescribeVideoStylizationJob(Models\DescribeVideoStylizationJobRequest $req) 用于查询视频风格化任务。视频风格化支持将输入视频生成特定风格的视频。生成后的视频画面风格多样、流畅自然，能够满足社交娱乐、互动营销、视频素材制作等场景的需求。
 * @method Models\SubmitImageAnimateJobResponse SubmitImageAnimateJob(Models\SubmitImageAnimateJobRequest $req) 用于提交图片跳舞任务。图片跳舞能力支持舞蹈动作结合图片生成跳舞视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\SubmitPortraitSingJobResponse SubmitPortraitSingJob(Models\SubmitPortraitSingJobRequest $req) 用于提交图片唱演任务。
支持提交音频和图片生成唱演视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\SubmitTemplateToVideoJobResponse SubmitTemplateToVideoJob(Models\SubmitTemplateToVideoJobRequest $req) 提交视频特效任务接口
 * @method Models\SubmitVideoStylizationJobResponse SubmitVideoStylizationJob(Models\SubmitVideoStylizationJobRequest $req) 用于提交视频风格化任务。支持将输入视频生成特定风格的视频。生成后的视频画面风格多样、流畅自然，能够满足社交娱乐、互动营销、视频素材制作等场景的需求。
 */

class VclmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vclm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vclm";

    /**
     * @var string
     */
    protected $version = "2024-05-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("vclm")."\\"."V20240523\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
