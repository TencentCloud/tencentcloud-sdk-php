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

namespace TencentCloud\Vclm\V20240523;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vclm\V20240523\Models as Models;

/**
 * @method Models\CreateAigcElementResponse CreateAigcElement(Models\CreateAigcElementRequest $req) 提交视频特效任务接口
 * @method Models\DeleteAigcElementResponse DeleteAigcElement(Models\DeleteAigcElementRequest $req) 删除主体库
 * @method Models\DescribeAigcElementResponse DescribeAigcElement(Models\DescribeAigcElementRequest $req) 提交视频特效任务接口
 * @method Models\DescribeHumanActorJobResponse DescribeHumanActorJob(Models\DescribeHumanActorJobRequest $req) 通过JobId提交请求，获取人像驱动任务的结果信息。
 * @method Models\DescribeHunyuanToVideoJobResponse DescribeHunyuanToVideoJob(Models\DescribeHunyuanToVideoJobRequest $req) 查询混元生视频任务
 * @method Models\DescribeImageToVideoGeneralJobResponse DescribeImageToVideoGeneralJob(Models\DescribeImageToVideoGeneralJobRequest $req) 查询图生视频通用能力任务接口
 * @method Models\DescribeImageToVideoJobResponse DescribeImageToVideoJob(Models\DescribeImageToVideoJobRequest $req) 用于查询视频特效任务。
 * @method Models\DescribeImageToVideoViduJobResponse DescribeImageToVideoViduJob(Models\DescribeImageToVideoViduJobRequest $req) 查询Vidu图生视频任务接口
 * @method Models\DescribeMotionControlKlingJobResponse DescribeMotionControlKlingJob(Models\DescribeMotionControlKlingJobRequest $req) 查询Kling动作控制任务
 * @method Models\DescribePortraitSingJobResponse DescribePortraitSingJob(Models\DescribePortraitSingJobRequest $req) 用于查询图片唱演任务。
支持提交音频和图片生成唱演视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\DescribeReferenceToVideoViduJobResponse DescribeReferenceToVideoViduJob(Models\DescribeReferenceToVideoViduJobRequest $req) 查询Vidu参考生视频任务接口
 * @method Models\DescribeTemplateToVideoJobResponse DescribeTemplateToVideoJob(Models\DescribeTemplateToVideoJobRequest $req) 用于查询视频特效任务。
 * @method Models\DescribeTextToVideoJobResponse DescribeTextToVideoJob(Models\DescribeTextToVideoJobRequest $req) 用于查询文生视频任务。
 * @method Models\DescribeTextToVideoViduJobResponse DescribeTextToVideoViduJob(Models\DescribeTextToVideoViduJobRequest $req) 查询Vidu文生视频任务接口
 * @method Models\DescribeVideoEditKlingJobResponse DescribeVideoEditKlingJob(Models\DescribeVideoEditKlingJobRequest $req) 查询Kling多模态编辑任务
 * @method Models\DescribeVideoExtendKlingJobResponse DescribeVideoExtendKlingJob(Models\DescribeVideoExtendKlingJobRequest $req) 查询视频延长任务
 * @method Models\DescribeVideoFaceFusionJobResponse DescribeVideoFaceFusionJob(Models\DescribeVideoFaceFusionJobRequest $req) 查询视频人脸融合任务
 * @method Models\SubmitHumanActorJobResponse SubmitHumanActorJob(Models\SubmitHumanActorJobRequest $req) 用于提交人像驱动任务
支持提交音频和图文来生成对应视频，满足动态交互、内容生产等场景需求。
 * @method Models\SubmitHunyuanToVideoJobResponse SubmitHunyuanToVideoJob(Models\SubmitHunyuanToVideoJobRequest $req) ●混元生视频接口，基于混元大模型，根据输入的文本或图片智能生成视频。

●默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\SubmitImageToVideoGeneralJobResponse SubmitImageToVideoGeneralJob(Models\SubmitImageToVideoGeneralJobRequest $req) 图生视频通用能力接口
 * @method Models\SubmitImageToVideoJobResponse SubmitImageToVideoJob(Models\SubmitImageToVideoJobRequest $req) 提交视频特效任务接口
 * @method Models\SubmitImageToVideoViduJobResponse SubmitImageToVideoViduJob(Models\SubmitImageToVideoViduJobRequest $req) 提交Vidu图生视频任务接口
 * @method Models\SubmitMotionControlKlingJobResponse SubmitMotionControlKlingJob(Models\SubmitMotionControlKlingJobRequest $req) 提交动作控制(Kling)任务并发
 * @method Models\SubmitPortraitSingJobResponse SubmitPortraitSingJob(Models\SubmitPortraitSingJobRequest $req) 用于提交图片唱演任务。
支持提交音频和图片生成唱演视频，满足社交娱乐、互动营销等场景的需求。
 * @method Models\SubmitReferenceToVideoViduJobResponse SubmitReferenceToVideoViduJob(Models\SubmitReferenceToVideoViduJobRequest $req) 提交Vidu参考生视频任务接口
 * @method Models\SubmitTemplateToVideoJobResponse SubmitTemplateToVideoJob(Models\SubmitTemplateToVideoJobRequest $req) 提交视频特效任务接口
 * @method Models\SubmitTextToVideoJobResponse SubmitTextToVideoJob(Models\SubmitTextToVideoJobRequest $req) 通过提交对视频内容的描述文本生成一个短视频。文生视频为异步处理任务，成功提交任务后返回任务的JobId。
 * @method Models\SubmitTextToVideoViduJobResponse SubmitTextToVideoViduJob(Models\SubmitTextToVideoViduJobRequest $req) 提交Vidu文生视频任务接口
 * @method Models\SubmitVideoEditKlingJobResponse SubmitVideoEditKlingJob(Models\SubmitVideoEditKlingJobRequest $req) 提交Kling多模态编辑任务
 * @method Models\SubmitVideoExtendKlingJobResponse SubmitVideoExtendKlingJob(Models\SubmitVideoExtendKlingJobRequest $req) 用于提交视频延长任务接口。
 * @method Models\SubmitVideoFaceFusionJobResponse SubmitVideoFaceFusionJob(Models\SubmitVideoFaceFusionJobRequest $req) 提交视频人脸融合任务
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
