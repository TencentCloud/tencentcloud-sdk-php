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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 轨道元素信息。
 *
 * @method string getType() 获取元素类型。取值有：
<li>Video：视频元素。</li>
<li>Audio：音频元素。</li>
<li>Image：图片元素。</li>
<li>Transition：转场元素。</li>
<li>Subtitle：字幕元素。</li>
<li>Empty：空白元素。</li>
 * @method void setType(string $Type) 设置元素类型。取值有：
<li>Video：视频元素。</li>
<li>Audio：音频元素。</li>
<li>Image：图片元素。</li>
<li>Transition：转场元素。</li>
<li>Subtitle：字幕元素。</li>
<li>Empty：空白元素。</li>
 * @method ComposeVideoItem getVideo() 获取视频元素，当 Type = Video 时有效。
 * @method void setVideo(ComposeVideoItem $Video) 设置视频元素，当 Type = Video 时有效。
 * @method ComposeAudioItem getAudio() 获取音频元素，当 Type = Audio 时有效。
 * @method void setAudio(ComposeAudioItem $Audio) 设置音频元素，当 Type = Audio 时有效。
 * @method ComposeImageItem getImage() 获取图片元素，当 Type = Image 时有效。
 * @method void setImage(ComposeImageItem $Image) 设置图片元素，当 Type = Image 时有效。
 * @method ComposeTransitionItem getTransition() 获取转场元素，当 Type = Transition 时有效。
 * @method void setTransition(ComposeTransitionItem $Transition) 设置转场元素，当 Type = Transition 时有效。
 * @method ComposeSubtitleItem getSubtitle() 获取字幕元素，当 Type = Subtitle 是有效。
 * @method void setSubtitle(ComposeSubtitleItem $Subtitle) 设置字幕元素，当 Type = Subtitle 是有效。
 * @method ComposeEmptyItem getEmpty() 获取空白元素，当 Type = Empty 时有效。用于时间轴的占位。
 * @method void setEmpty(ComposeEmptyItem $Empty) 设置空白元素，当 Type = Empty 时有效。用于时间轴的占位。
 */
class ComposeMediaItem extends AbstractModel
{
    /**
     * @var string 元素类型。取值有：
<li>Video：视频元素。</li>
<li>Audio：音频元素。</li>
<li>Image：图片元素。</li>
<li>Transition：转场元素。</li>
<li>Subtitle：字幕元素。</li>
<li>Empty：空白元素。</li>
     */
    public $Type;

    /**
     * @var ComposeVideoItem 视频元素，当 Type = Video 时有效。
     */
    public $Video;

    /**
     * @var ComposeAudioItem 音频元素，当 Type = Audio 时有效。
     */
    public $Audio;

    /**
     * @var ComposeImageItem 图片元素，当 Type = Image 时有效。
     */
    public $Image;

    /**
     * @var ComposeTransitionItem 转场元素，当 Type = Transition 时有效。
     */
    public $Transition;

    /**
     * @var ComposeSubtitleItem 字幕元素，当 Type = Subtitle 是有效。
     */
    public $Subtitle;

    /**
     * @var ComposeEmptyItem 空白元素，当 Type = Empty 时有效。用于时间轴的占位。
     */
    public $Empty;

    /**
     * @param string $Type 元素类型。取值有：
<li>Video：视频元素。</li>
<li>Audio：音频元素。</li>
<li>Image：图片元素。</li>
<li>Transition：转场元素。</li>
<li>Subtitle：字幕元素。</li>
<li>Empty：空白元素。</li>
     * @param ComposeVideoItem $Video 视频元素，当 Type = Video 时有效。
     * @param ComposeAudioItem $Audio 音频元素，当 Type = Audio 时有效。
     * @param ComposeImageItem $Image 图片元素，当 Type = Image 时有效。
     * @param ComposeTransitionItem $Transition 转场元素，当 Type = Transition 时有效。
     * @param ComposeSubtitleItem $Subtitle 字幕元素，当 Type = Subtitle 是有效。
     * @param ComposeEmptyItem $Empty 空白元素，当 Type = Empty 时有效。用于时间轴的占位。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new ComposeVideoItem();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = new ComposeAudioItem();
            $this->Audio->deserialize($param["Audio"]);
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ComposeImageItem();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Transition",$param) and $param["Transition"] !== null) {
            $this->Transition = new ComposeTransitionItem();
            $this->Transition->deserialize($param["Transition"]);
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new ComposeSubtitleItem();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }

        if (array_key_exists("Empty",$param) and $param["Empty"] !== null) {
            $this->Empty = new ComposeEmptyItem();
            $this->Empty->deserialize($param["Empty"]);
        }
    }
}
