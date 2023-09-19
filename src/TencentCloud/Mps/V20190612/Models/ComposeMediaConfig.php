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
 * 视频编辑/合成任务 信息。

关于 轨道、元素、时间轴 关系示意图：

![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/EditMedia-Compose-Track-Item.png)
 *
 * @method ComposeTargetInfo getTargetInfo() 获取合成目标视频信息。
 * @method void setTargetInfo(ComposeTargetInfo $TargetInfo) 设置合成目标视频信息。
 * @method ComposeCanvas getCanvas() 获取合成目标视频的画布信息。
 * @method void setCanvas(ComposeCanvas $Canvas) 设置合成目标视频的画布信息。
 * @method array getStyles() 获取全局样式，和轨道 Tracks 配合使用，用于定于样式，如字幕样式。
 * @method void setStyles(array $Styles) 设置全局样式，和轨道 Tracks 配合使用，用于定于样式，如字幕样式。
 * @method array getTracks() 获取用于描述合成视频的轨道列表，包括：视频、音频、图片、文字等元素组成的多个轨道信息。关于轨道和时间：
<ul><li>轨道时间轴即为目标视频时间轴。</li><li>时间轴上相同时间点的不同轨道上的元素会重叠：</li><ul><li>视频、图片、文字：按轨道顺序进行图像的叠加，轨道顺序靠前的在上面。</li><li>音频 ：进行混音。</li></ul></ul>注意：同一轨道中各个元素（除字幕元素外）的轨道时间不能重叠。
 * @method void setTracks(array $Tracks) 设置用于描述合成视频的轨道列表，包括：视频、音频、图片、文字等元素组成的多个轨道信息。关于轨道和时间：
<ul><li>轨道时间轴即为目标视频时间轴。</li><li>时间轴上相同时间点的不同轨道上的元素会重叠：</li><ul><li>视频、图片、文字：按轨道顺序进行图像的叠加，轨道顺序靠前的在上面。</li><li>音频 ：进行混音。</li></ul></ul>注意：同一轨道中各个元素（除字幕元素外）的轨道时间不能重叠。
 */
class ComposeMediaConfig extends AbstractModel
{
    /**
     * @var ComposeTargetInfo 合成目标视频信息。
     */
    public $TargetInfo;

    /**
     * @var ComposeCanvas 合成目标视频的画布信息。
     */
    public $Canvas;

    /**
     * @var array 全局样式，和轨道 Tracks 配合使用，用于定于样式，如字幕样式。
     */
    public $Styles;

    /**
     * @var array 用于描述合成视频的轨道列表，包括：视频、音频、图片、文字等元素组成的多个轨道信息。关于轨道和时间：
<ul><li>轨道时间轴即为目标视频时间轴。</li><li>时间轴上相同时间点的不同轨道上的元素会重叠：</li><ul><li>视频、图片、文字：按轨道顺序进行图像的叠加，轨道顺序靠前的在上面。</li><li>音频 ：进行混音。</li></ul></ul>注意：同一轨道中各个元素（除字幕元素外）的轨道时间不能重叠。
     */
    public $Tracks;

    /**
     * @param ComposeTargetInfo $TargetInfo 合成目标视频信息。
     * @param ComposeCanvas $Canvas 合成目标视频的画布信息。
     * @param array $Styles 全局样式，和轨道 Tracks 配合使用，用于定于样式，如字幕样式。
     * @param array $Tracks 用于描述合成视频的轨道列表，包括：视频、音频、图片、文字等元素组成的多个轨道信息。关于轨道和时间：
<ul><li>轨道时间轴即为目标视频时间轴。</li><li>时间轴上相同时间点的不同轨道上的元素会重叠：</li><ul><li>视频、图片、文字：按轨道顺序进行图像的叠加，轨道顺序靠前的在上面。</li><li>音频 ：进行混音。</li></ul></ul>注意：同一轨道中各个元素（除字幕元素外）的轨道时间不能重叠。
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
        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = new ComposeTargetInfo();
            $this->TargetInfo->deserialize($param["TargetInfo"]);
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new ComposeCanvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("Styles",$param) and $param["Styles"] !== null) {
            $this->Styles = [];
            foreach ($param["Styles"] as $key => $value){
                $obj = new ComposeStyles();
                $obj->deserialize($value);
                array_push($this->Styles, $obj);
            }
        }

        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = [];
            foreach ($param["Tracks"] as $key => $value){
                $obj = new ComposeMediaTrack();
                $obj->deserialize($value);
                array_push($this->Tracks, $obj);
            }
        }
    }
}
