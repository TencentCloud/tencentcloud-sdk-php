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
 * ModifyRebuildMediaTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取音画质重生模板号。
 * @method void setDefinition(integer $Definition) 设置音画质重生模板号。
 * @method string getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(string $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getName() 获取音画质重生模板名称。
 * @method void setName(string $Name) 设置音画质重生模板名称。
 * @method string getComment() 获取音画质重生模板描述。
 * @method void setComment(string $Comment) 设置音画质重生模板描述。
 * @method RebuildVideoInfo getRebuildVideoInfo() 获取音画质重生视频控制信息。
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) 设置音画质重生视频控制信息。
 * @method RebuildAudioInfo getRebuildAudioInfo() 获取音画质重生音频控制信息。
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) 设置音画质重生音频控制信息。
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() 获取输出目标视频控制信息。
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) 设置输出目标视频控制信息。
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() 获取输出目标音频控制信息。
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) 设置输出目标音频控制信息。
 * @method string getContainer() 获取输出文件封装格式，可选值：mp4、flv、hls。
 * @method void setContainer(string $Container) 设置输出文件封装格式，可选值：mp4、flv、hls。
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
 */
class ModifyRebuildMediaTemplateRequest extends AbstractModel
{
    /**
     * @var integer 音画质重生模板号。
     */
    public $Definition;

    /**
     * @var string <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

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
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo 音画质重生音频控制信息。
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream 输出目标视频控制信息。
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream 输出目标音频控制信息。
     */
    public $TargetAudioInfo;

    /**
     * @var string 输出文件封装格式，可选值：mp4、flv、hls。
     */
    public $Container;

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
     * @param integer $Definition 音画质重生模板号。
     * @param string $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Name 音画质重生模板名称。
     * @param string $Comment 音画质重生模板描述。
     * @param RebuildVideoInfo $RebuildVideoInfo 音画质重生视频控制信息。
     * @param RebuildAudioInfo $RebuildAudioInfo 音画质重生音频控制信息。
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo 输出目标视频控制信息。
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo 输出目标音频控制信息。
     * @param string $Container 输出文件封装格式，可选值：mp4、flv、hls。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
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
    }
}
