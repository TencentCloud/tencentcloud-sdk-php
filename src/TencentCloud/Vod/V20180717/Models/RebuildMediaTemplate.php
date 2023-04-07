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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音画质重生模板详情。
 *
 * @method integer getDefinition() 获取音画质重生模板号。
 * @method void setDefinition(integer $Definition) 设置音画质重生模板号。
 * @method string getType() 获取模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getName() 获取音画质重生模板名称。
 * @method void setName(string $Name) 设置音画质重生模板名称。
 * @method string getComment() 获取音画质重生模板描述。
 * @method void setComment(string $Comment) 设置音画质重生模板描述。
 * @method RebuildVideoInfo getRebuildVideoInfo() 获取音画质重生视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) 设置音画质重生视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildAudioInfo getRebuildAudioInfo() 获取音画质重生音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) 设置音画质重生音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() 获取输出视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) 设置输出视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() 获取输出音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) 设置输出音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainer() 获取封装格式。可选值：mp4、hls。默认是 mp4。
 * @method void setContainer(string $Container) 设置封装格式。可选值：mp4、hls。默认是 mp4。
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class RebuildMediaTemplate extends AbstractModel
{
    /**
     * @var integer 音画质重生模板号。
     */
    public $Definition;

    /**
     * @var string 模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 音画质重生模板名称。
     */
    public $Name;

    /**
     * @var string 音画质重生模板描述。
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo 音画质重生视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo 音画质重生音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream 输出视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream 输出音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAudioInfo;

    /**
     * @var string 封装格式。可选值：mp4、hls。默认是 mp4。
     */
    public $Container;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     */
    public $RemoveAudio;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 音画质重生模板号。
     * @param string $Type 模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $Name 音画质重生模板名称。
     * @param string $Comment 音画质重生模板描述。
     * @param RebuildVideoInfo $RebuildVideoInfo 音画质重生视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildAudioInfo $RebuildAudioInfo 音画质重生音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo 输出视频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo 输出音频控制信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Container 封装格式。可选值：mp4、hls。默认是 mp4。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("RebuildVideoInfo",$param) and $param["RebuildVideoInfo"] !== null) {
            $this->RebuildVideoInfo = new RebuildVideoInfo();
            $this->RebuildVideoInfo->deserialize($param["RebuildVideoInfo"]);
        }

        if (array_key_exists("RebuildAudioInfo",$param) and $param["RebuildAudioInfo"] !== null) {
            $this->RebuildAudioInfo = new RebuildAudioInfo();
            $this->RebuildAudioInfo->deserialize($param["RebuildAudioInfo"]);
        }

        if (array_key_exists("TargetVideoInfo",$param) and $param["TargetVideoInfo"] !== null) {
            $this->TargetVideoInfo = new RebuildMediaTargetVideoStream();
            $this->TargetVideoInfo->deserialize($param["TargetVideoInfo"]);
        }

        if (array_key_exists("TargetAudioInfo",$param) and $param["TargetAudioInfo"] !== null) {
            $this->TargetAudioInfo = new RebuildMediaTargetAudioStream();
            $this->TargetAudioInfo->deserialize($param["TargetAudioInfo"]);
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
