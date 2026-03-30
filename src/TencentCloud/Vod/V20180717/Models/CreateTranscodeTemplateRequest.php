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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTranscodeTemplate请求参数结构体
 *
 * @method string getContainer() 获取<p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
 * @method void setContainer(string $Container) 设置<p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getName() 获取<p>转码模板名称，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>转码模板名称，长度限制：64 个字符。</p>
 * @method string getComment() 获取<p>模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息，长度限制：256 个字符。</p>
 * @method integer getRemoveVideo() 获取<p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置<p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
 * @method integer getRemoveAudio() 获取<p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置<p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
 * @method VideoTemplateInfo getVideoTemplate() 获取<p>视频流配置参数，当 RemoveVideo 为 0，该字段必填。</p>
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) 设置<p>视频流配置参数，当 RemoveVideo 为 0，该字段必填。</p>
 * @method AudioTemplateInfo getAudioTemplate() 获取<p>音频流配置参数，当 RemoveAudio 为 0，该字段必填。</p>
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) 设置<p>音频流配置参数，当 RemoveAudio 为 0，该字段必填。</p>
 * @method TEHDConfig getTEHDConfig() 获取<p>极速高清转码参数。</p>
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) 设置<p>极速高清转码参数。</p>
 * @method EnhanceConfig getEnhanceConfig() 获取<p>音视频增强配置。</p>
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) 设置<p>音视频增强配置。</p>
 * @method string getSegmentType() 获取<p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
 * @method void setSegmentType(string $SegmentType) 设置<p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
 * @method string getStdExtInfo() 获取<p>扩展参数。</p>
 * @method void setStdExtInfo(string $StdExtInfo) 设置<p>扩展参数。</p>
 */
class CreateTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
     */
    public $Container;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>转码模板名称，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var integer <p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
     */
    public $RemoveVideo;

    /**
     * @var integer <p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo <p>视频流配置参数，当 RemoveVideo 为 0，该字段必填。</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo <p>音频流配置参数，当 RemoveAudio 为 0，该字段必填。</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig <p>极速高清转码参数。</p>
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>音视频增强配置。</p>
     */
    public $EnhanceConfig;

    /**
     * @var string <p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
     */
    public $SegmentType;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $StdExtInfo;

    /**
     * @param string $Container <p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Name <p>转码模板名称，长度限制：64 个字符。</p>
     * @param string $Comment <p>模板描述信息，长度限制：256 个字符。</p>
     * @param integer $RemoveVideo <p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
     * @param integer $RemoveAudio <p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>默认值：0。
     * @param VideoTemplateInfo $VideoTemplate <p>视频流配置参数，当 RemoveVideo 为 0，该字段必填。</p>
     * @param AudioTemplateInfo $AudioTemplate <p>音频流配置参数，当 RemoveAudio 为 0，该字段必填。</p>
     * @param TEHDConfig $TEHDConfig <p>极速高清转码参数。</p>
     * @param EnhanceConfig $EnhanceConfig <p>音视频增强配置。</p>
     * @param string $SegmentType <p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
     * @param string $StdExtInfo <p>扩展参数。</p>
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
