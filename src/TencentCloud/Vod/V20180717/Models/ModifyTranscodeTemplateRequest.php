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
 * ModifyTranscodeTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取<p>转码模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>转码模板唯一标识。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getContainer() 获取<p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
 * @method void setContainer(string $Container) 设置<p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
 * @method string getName() 获取<p>转码模板名称，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>转码模板名称，长度限制：64 个字符。</p>
 * @method string getComment() 获取<p>模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息，长度限制：256 个字符。</p>
 * @method integer getRemoveVideo() 获取<p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置<p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
 * @method integer getRemoveAudio() 获取<p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置<p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() 获取<p>视频流配置参数。</p>
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) 设置<p>视频流配置参数。</p>
 * @method AudioTemplateInfoForUpdate getAudioTemplate() 获取<p>音频流配置参数。</p>
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) 设置<p>音频流配置参数。</p>
 * @method TEHDConfigForUpdate getTEHDConfig() 获取<p>极速高清转码参数。</p>
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) 设置<p>极速高清转码参数。</p>
 * @method EnhanceConfigForUpdate getEnhanceConfig() 获取<p>音视频增强配置。</p>
 * @method void setEnhanceConfig(EnhanceConfigForUpdate $EnhanceConfig) 设置<p>音视频增强配置。</p>
 * @method string getSegmentType() 获取<p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>
 * @method void setSegmentType(string $SegmentType) 设置<p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>
 * @method string getStdExtInfo() 获取<p>扩展参数。</p>
 * @method void setStdExtInfo(string $StdExtInfo) 设置<p>扩展参数。</p>
 */
class ModifyTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>转码模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
     */
    public $Container;

    /**
     * @var string <p>转码模板名称，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var integer <p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate <p>视频流配置参数。</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate <p>音频流配置参数。</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate <p>极速高清转码参数。</p>
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfigForUpdate <p>音视频增强配置。</p>
     */
    public $EnhanceConfig;

    /**
     * @var string <p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>
     */
    public $SegmentType;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $StdExtInfo;

    /**
     * @param integer $Definition <p>转码模板唯一标识。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Container <p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
     * @param string $Name <p>转码模板名称，长度限制：64 个字符。</p>
     * @param string $Comment <p>模板描述信息，长度限制：256 个字符。</p>
     * @param integer $RemoveVideo <p>是否去除视频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
     * @param integer $RemoveAudio <p>是否去除音频数据，可选值：</p><li>0：保留</li><li>1：去除</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate <p>视频流配置参数。</p>
     * @param AudioTemplateInfoForUpdate $AudioTemplate <p>音频流配置参数。</p>
     * @param TEHDConfigForUpdate $TEHDConfig <p>极速高清转码参数。</p>
     * @param EnhanceConfigForUpdate $EnhanceConfig <p>音视频增强配置。</p>
     * @param string $SegmentType <p>切片类型，当 Container 为 hls 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
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
            $this->VideoTemplate = new VideoTemplateInfoForUpdate();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfoForUpdate();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfigForUpdate();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfigForUpdate();
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
