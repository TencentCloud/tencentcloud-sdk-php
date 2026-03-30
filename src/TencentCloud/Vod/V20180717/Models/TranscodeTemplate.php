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
 * 转码模板详情
 *
 * @method string getDefinition() 获取<p>转码模板唯一标识。</p>
 * @method void setDefinition(string $Definition) 设置<p>转码模板唯一标识。</p>
 * @method string getContainer() 获取<p>封装格式，取值：mp4、flv、hls、mp3、flac、ogg。</p>
 * @method void setContainer(string $Container) 设置<p>封装格式，取值：mp4、flv、hls、mp3、flac、ogg。</p>
 * @method string getName() 获取<p>转码模板名称。</p>
 * @method void setName(string $Name) 设置<p>转码模板名称。</p>
 * @method string getComment() 获取<p>模板描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息。</p>
 * @method string getType() 获取<p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置<p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
 * @method integer getRemoveVideo() 获取<p>是否去除视频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置<p>是否去除视频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
 * @method integer getRemoveAudio() 获取<p>是否去除音频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置<p>是否去除音频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
 * @method VideoTemplateInfo getVideoTemplate() 获取<p>视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。</p>
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) 设置<p>视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。</p>
 * @method AudioTemplateInfo getAudioTemplate() 获取<p>音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。</p>
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) 设置<p>音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。</p>
 * @method TEHDConfig getTEHDConfig() 获取<p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) 设置<p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EnhanceConfig getEnhanceConfig() 获取<p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) 设置<p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerType() 获取<p>封装格式过滤条件，可选值：</p><li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li><li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
 * @method void setContainerType(string $ContainerType) 设置<p>封装格式过滤条件，可选值：</p><li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li><li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getSegmentType() 获取<p>切片类型，仅当 Container 为 hls 时有效。</p>
 * @method void setSegmentType(string $SegmentType) 设置<p>切片类型，仅当 Container 为 hls 时有效。</p>
 * @method string getStdExtInfo() 获取<p>扩展参数。</p>
 * @method void setStdExtInfo(string $StdExtInfo) 设置<p>扩展参数。</p>
 */
class TranscodeTemplate extends AbstractModel
{
    /**
     * @var string <p>转码模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var string <p>封装格式，取值：mp4、flv、hls、mp3、flac、ogg。</p>
     */
    public $Container;

    /**
     * @var string <p>转码模板名称。</p>
     */
    public $Name;

    /**
     * @var string <p>模板描述信息。</p>
     */
    public $Comment;

    /**
     * @var string <p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var integer <p>是否去除视频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>是否去除音频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo <p>视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo <p>音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig <p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnhanceConfig;

    /**
     * @var string <p>封装格式过滤条件，可选值：</p><li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li><li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
     */
    public $ContainerType;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>切片类型，仅当 Container 为 hls 时有效。</p>
     */
    public $SegmentType;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $StdExtInfo;

    /**
     * @param string $Definition <p>转码模板唯一标识。</p>
     * @param string $Container <p>封装格式，取值：mp4、flv、hls、mp3、flac、ogg。</p>
     * @param string $Name <p>转码模板名称。</p>
     * @param string $Comment <p>模板描述信息。</p>
     * @param string $Type <p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
     * @param integer $RemoveVideo <p>是否去除视频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
     * @param integer $RemoveAudio <p>是否去除音频数据，取值：</p><li>0：保留；</li><li>1：去除。</li>
     * @param VideoTemplateInfo $VideoTemplate <p>视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。</p>
     * @param AudioTemplateInfo $AudioTemplate <p>音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。</p>
     * @param TEHDConfig $TEHDConfig <p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EnhanceConfig $EnhanceConfig <p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerType <p>封装格式过滤条件，可选值：</p><li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li><li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $SegmentType <p>切片类型，仅当 Container 为 hls 时有效。</p>
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

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
