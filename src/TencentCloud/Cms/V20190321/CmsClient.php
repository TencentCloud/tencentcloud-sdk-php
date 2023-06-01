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
 * @method Models\CreateKeywordsSamplesResponse CreateKeywordsSamples(Models\CreateKeywordsSamplesRequest $req) 创建关键词接口
 * @method Models\DeleteLibSamplesResponse DeleteLibSamples(Models\DeleteLibSamplesRequest $req) 删除关键词接口
 * @method Models\DescribeKeywordsLibsResponse DescribeKeywordsLibs(Models\DescribeKeywordsLibsRequest $req) 获取用户词库列表
 * @method Models\DescribeLibSamplesResponse DescribeLibSamples(Models\DescribeLibSamplesRequest $req) 获取关键词接口
 * @method Models\ImageModerationResponse ImageModeration(Models\ImageModerationRequest $req) 图片内容检测服务（Image Moderation, IM）能自动扫描图片，识别涉黄、涉恐、涉政、涉毒等有害内容，同时支持用户配置图片黑名单，打击自定义的违规图片。
 * @method Models\TextModerationResponse TextModeration(Models\TextModerationRequest $req) 文本内容检测（Text Moderation）服务使用了深度学习技术，识别涉黄、涉政、涉恐等有害内容，同时支持用户配置词库，打击自定义的违规文本。
 */

class CmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cms";

    /**
     * @var string
     */
    protected $version = "2019-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("cms")."\\"."V20190321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
