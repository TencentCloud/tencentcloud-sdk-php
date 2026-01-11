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
 * @method integer getDefinition() 获取转码模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置转码模板唯一标识。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getContainer() 获取封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。
 * @method void setContainer(string $Container) 设置封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。
 * @method string getName() 获取转码模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置转码模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() 获取视频流配置参数。
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) 设置视频流配置参数。
 * @method AudioTemplateInfoForUpdate getAudioTemplate() 获取音频流配置参数。
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) 设置音频流配置参数。
 * @method TEHDConfigForUpdate getTEHDConfig() 获取极速高清转码参数。
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) 设置极速高清转码参数。
 * @method EnhanceConfigForUpdate getEnhanceConfig() 获取音视频增强配置。
 * @method void setEnhanceConfig(EnhanceConfigForUpdate $EnhanceConfig) 设置音视频增强配置。
 * @method string getSegmentType() 获取切片类型，当 Container 为 hls 时有效，可选值：
<li>ts：ts 切片；</li>
<li>fmp4：fmp4 切片。</li>
 * @method void setSegmentType(string $SegmentType) 设置切片类型，当 Container 为 hls 时有效，可选值：
<li>ts：ts 切片；</li>
<li>fmp4：fmp4 切片。</li>
 */
class ModifyTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer 转码模板唯一标识。
     */
    public $Definition;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。
     */
    public $Container;

    /**
     * @var string 转码模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate 视频流配置参数。
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate 音频流配置参数。
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate 极速高清转码参数。
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfigForUpdate 音视频增强配置。
     */
    public $EnhanceConfig;

    /**
     * @var string 切片类型，当 Container 为 hls 时有效，可选值：
<li>ts：ts 切片；</li>
<li>fmp4：fmp4 切片。</li>
     */
    public $SegmentType;

    /**
     * @param integer $Definition 转码模板唯一标识。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Container 封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。
     * @param string $Name 转码模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate 视频流配置参数。
     * @param AudioTemplateInfoForUpdate $AudioTemplate 音频流配置参数。
     * @param TEHDConfigForUpdate $TEHDConfig 极速高清转码参数。
     * @param EnhanceConfigForUpdate $EnhanceConfig 音视频增强配置。
     * @param string $SegmentType 切片类型，当 Container 为 hls 时有效，可选值：
<li>ts：ts 切片；</li>
<li>fmp4：fmp4 切片。</li>
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
    }
}
