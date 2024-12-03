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
 * @method Models\ConfirmVideoTranslateJobResponse ConfirmVideoTranslateJob(Models\ConfirmVideoTranslateJobRequest $req) 确认视频转译结果
 * @method Models\DescribeImageAnimateJobResponse DescribeImageAnimateJob(Models\DescribeImageAnimateJobRequest $req) 用于查询图片跳舞任务。图片跳舞能力支持舞蹈动作结合图片生成跳舞视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\DescribePortraitSingJobResponse DescribePortraitSingJob(Models\DescribePortraitSingJobRequest $req) 用于查询图片唱演任务。
支持提交音频和图片生成唱演视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\DescribeVideoStylizationJobResponse DescribeVideoStylizationJob(Models\DescribeVideoStylizationJobRequest $req) 用于查询视频风格化任务。视频风格化支持将输入视频生成特定风格的视频。生成后的视频画面风格多样、流畅自然，能够满足社交娱乐、互动营销、视频素材制作等场景的需求。
 * @method Models\DescribeVideoTranslateJobResponse DescribeVideoTranslateJob(Models\DescribeVideoTranslateJobRequest $req) 查询视频转译任务
 * @method Models\SubmitImageAnimateJobResponse SubmitImageAnimateJob(Models\SubmitImageAnimateJobRequest $req) 用于提交图片跳舞任务。图片跳舞能力支持舞蹈动作结合图片生成跳舞视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\SubmitPortraitSingJobResponse SubmitPortraitSingJob(Models\SubmitPortraitSingJobRequest $req) 用于提交图片唱演任务。
支持提交音频和图片生成唱演视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\SubmitVideoStylizationJobResponse SubmitVideoStylizationJob(Models\SubmitVideoStylizationJobRequest $req) 用于提交视频风格化任务。支持将输入视频生成特定风格的视频。生成后的视频画面风格多样、流畅自然，能够满足社交娱乐、互动营销、视频素材制作等场景的需求。
 * @method Models\SubmitVideoTranslateJobResponse SubmitVideoTranslateJob(Models\SubmitVideoTranslateJobRequest $req) ###### 支持音色种别列表
| 音色名称                 | 性别 | 音色ID |音色试听ID |
| ------------------------ | ---- | ------ |------ |
| Florian Multilingual     | 男   | 701001 |
| Seraphina                | 女   | 701002 |
| Ada Multilingual         | 女   | 701003 |
| Ollie Multilingual       | 男   | 701004 |
| Ava Multilingual         | 女   | 701005 |
| Andrew Multilingual      | 男   | 701006 |
| Emma Multilingual        | 女   | 701007 |
| Brian Multilingual       | 男   | 701008 |
| Jenny Multilingual       | 女   | 701009 |
| Ryan Multilingual        | 男   | 701010 |
| Adam Multilingual        | 男   | 701011 |
| AlloyTurbo Multilingual  | 男   | 701012 |
| Amanda Multilingual      | 女   | 701013 |
| Brandon Multilingual     | 男   | 701014 |
| Christopher Multilingual | 男   | 701015 |
| Cora Multilingual        | 女   | 701016 |
| Davis Multilingual       | 男   | 701017 |
| Derek Multilingual       | 男   | 701018 |
| Dustin Multilingual      | 男   | 701019 |
| Evelyn Multilingual      | 女   | 701020 |
| Lewis Multilingual       | 男   | 701021 |
| Lola Multilingual        | 女   | 701022 |
| Nancy Multilingual       | 女   | 701023 |
| NovaTurbo Multilingual   | 女   | 701024 |
| Phoebe Multilingual      | 女   | 701025 |
| Samuel Multilingual      | 男   | 701026 |
| Serena Multilingual      | 女   | 701027 |
| Steffan Multilingual     | 男   | 701028 |
| Arabella Multilingual    | 女   | 701029 |
| Isidora Multilingual     | 女   | 701030 |
| Tristan Multilingual     | 男   | 701031 |
| Ximena Multilingual      | 女   | 701032 |
| Remy Multilingual        | 男   | 701033 |
| Vivienne Multilingual    | 女   | 701034 |
| Lucien Multilingual      | 男   | 701035 |
| Alessio Multilingual     | 男   | 701036 |
| Giuseppe Multilingual    | 男   | 701037 |
| Isabella Multilingual    | 女   | 701038 |
| Marcello Multilingual    | 男   | 701039 |
| Masaru Multilingual      | 男   | 701040 |
| Hyunsu Multilingual      | 男   | 701041 |
| Macerio Multilingual     | 男   | 701042 |
| Thalita Multilingual     | 女   | 701043 |
| 晓辰 多语言              | 女   | 701044 |
| 晓晓 多语言              | 女   | 701045 |
| 晓宇 多语言              | 女   | 701046 |
| 云逸 多语言              | 男   | 701047 |
| Yunfan Multilingual      | 男   | 701048 |
| Yunxiao Multilingual     | 男   | 701049 |
| 晓晓 方言                | 女   | 701050 |
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
