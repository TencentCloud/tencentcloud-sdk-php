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
 * 视频编辑/合成任务 字幕元素信息。
 *
 * @method string getStyleId() 获取字幕样式，Styles 列表中对应的 Subtitle样式的 ID。
 * @method void setStyleId(string $StyleId) 设置字幕样式，Styles 列表中对应的 Subtitle样式的 ID。
 * @method string getText() 获取字幕文本。
 * @method void setText(string $Text) 设置字幕文本。
 * @method ComposeTrackTime getTrackTime() 获取元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。	
 * @method void setTrackTime(ComposeTrackTime $TrackTime) 设置元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。	
 */
class ComposeSubtitleItem extends AbstractModel
{
    /**
     * @var string 字幕样式，Styles 列表中对应的 Subtitle样式的 ID。
     */
    public $StyleId;

    /**
     * @var string 字幕文本。
     */
    public $Text;

    /**
     * @var ComposeTrackTime 元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。	
     */
    public $TrackTime;

    /**
     * @param string $StyleId 字幕样式，Styles 列表中对应的 Subtitle样式的 ID。
     * @param string $Text 字幕文本。
     * @param ComposeTrackTime $TrackTime 元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。	
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
        if (array_key_exists("StyleId",$param) and $param["StyleId"] !== null) {
            $this->StyleId = $param["StyleId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TrackTime",$param) and $param["TrackTime"] !== null) {
            $this->TrackTime = new ComposeTrackTime();
            $this->TrackTime->deserialize($param["TrackTime"]);
        }
    }
}
