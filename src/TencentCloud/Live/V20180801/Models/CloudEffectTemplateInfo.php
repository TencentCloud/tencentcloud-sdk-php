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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云端特效模板信息。
 *
 * @method string getTemplateId() 获取<p>特效模板ID。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>特效模板ID。</p>
 * @method string getTemplateName() 获取<p>特效模板名称。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>特效模板名称。</p>
 * @method string getVideoUrl() 获取<p>模板预览URL。</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>模板预览URL。</p>
 * @method string getCoverImageUrl() 获取<p>模板封面图片URL。</p>
 * @method void setCoverImageUrl(string $CoverImageUrl) 设置<p>模板封面图片URL。</p>
 * @method string getVideoRatio() 获取<p>模板视频宽高比。</p>
 * @method void setVideoRatio(string $VideoRatio) 设置<p>模板视频宽高比。</p>
 */
class CloudEffectTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>特效模板ID。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>特效模板名称。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>模板预览URL。</p>
     */
    public $VideoUrl;

    /**
     * @var string <p>模板封面图片URL。</p>
     */
    public $CoverImageUrl;

    /**
     * @var string <p>模板视频宽高比。</p>
     */
    public $VideoRatio;

    /**
     * @param string $TemplateId <p>特效模板ID。</p>
     * @param string $TemplateName <p>特效模板名称。</p>
     * @param string $VideoUrl <p>模板预览URL。</p>
     * @param string $CoverImageUrl <p>模板封面图片URL。</p>
     * @param string $VideoRatio <p>模板视频宽高比。</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("CoverImageUrl",$param) and $param["CoverImageUrl"] !== null) {
            $this->CoverImageUrl = $param["CoverImageUrl"];
        }

        if (array_key_exists("VideoRatio",$param) and $param["VideoRatio"] !== null) {
            $this->VideoRatio = $param["VideoRatio"];
        }
    }
}
