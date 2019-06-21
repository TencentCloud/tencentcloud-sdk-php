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

namespace TencentCloud\Cms\V20190321;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cms\V20190321\Models as Models;

/**
* @method Models\AudioModerationResponse AudioModeration(Models\AudioModerationRequest $req) 音频内容检测（Audio Moderation, AM）服务使用了波形分析、声纹分析等技术，能识别涉黄、涉政、涉恐等违规音频，同时支持用户配置音频黑库，打击自定义的违规内容。
* @method Models\CreateTextSampleResponse CreateTextSample(Models\CreateTextSampleRequest $req) 新增文本类型样本库
* @method Models\DeleteTextSampleResponse DeleteTextSample(Models\DeleteTextSampleRequest $req) 删除文字样本库，暂时只支持单个删除
* @method Models\DescribeModerationOverviewResponse DescribeModerationOverview(Models\DescribeModerationOverviewRequest $req) 根据日期，渠道和服务类型查询识别结果概览数据
* @method Models\DescribeTextSampleResponse DescribeTextSample(Models\DescribeTextSampleRequest $req) 支持批量查询文字样本库
* @method Models\ImageModerationResponse ImageModeration(Models\ImageModerationRequest $req) 图片内容检测服务（Image Moderation, IM）能自动扫描图片，识别涉黄、涉恐、涉政、涉毒等有害内容，同时支持用户配置图片黑名单，打击自定义的违规图片。
* @method Models\TextModerationResponse TextModeration(Models\TextModerationRequest $req) 文本内容检测（Text Moderation）服务使用了深度学习技术，识别涉黄、涉政、涉恐等有害内容，同时支持用户配置词库，打击自定义的违规文本。
* @method Models\VideoModerationResponse VideoModeration(Models\VideoModerationRequest $req) 视频内容检测（Video Moderation, VM）服务能识别涉黄、涉政、涉恐等违规视频，同时支持用户配置视频黑库，打击自定义的违规内容。
 */

class CmsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cms.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("cms")."\\"."V20190321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
