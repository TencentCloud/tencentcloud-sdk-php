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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频轨道上的音频片段信息。
 *
 * @method string getSourceType() 获取音频素材来源类型。取值有：
<ul>
<li>VOD ：素材来源 VOD 。</li>
<li>CME ：视频来源 CME 。</li>
</ul>
 * @method void setSourceType(string $SourceType) 设置音频素材来源类型。取值有：
<ul>
<li>VOD ：素材来源 VOD 。</li>
<li>CME ：视频来源 CME 。</li>
</ul>
 * @method string getSourceMedia() 获取音频片段的媒体素材来源，可以是：
<li>VOD 的媒体文件 ID 。</li>
<li>CME 的素材 ID 。</li>
 * @method void setSourceMedia(string $SourceMedia) 设置音频片段的媒体素材来源，可以是：
<li>VOD 的媒体文件 ID 。</li>
<li>CME 的素材 ID 。</li>
 * @method float getSourceMediaStartTime() 获取音频片段取自素材文件的起始时间，单位为秒。0 表示从素材开始位置截取。默认为0。
 * @method void setSourceMediaStartTime(float $SourceMediaStartTime) 设置音频片段取自素材文件的起始时间，单位为秒。0 表示从素材开始位置截取。默认为0。
 * @method float getDuration() 获取音频片段的时长，单位为秒。默认和素材本身长度一致，表示截取全部素材。
 * @method void setDuration(float $Duration) 设置音频片段的时长，单位为秒。默认和素材本身长度一致，表示截取全部素材。
 */
class AudioTrackItem extends AbstractModel
{
    /**
     * @var string 音频素材来源类型。取值有：
<ul>
<li>VOD ：素材来源 VOD 。</li>
<li>CME ：视频来源 CME 。</li>
</ul>
     */
    public $SourceType;

    /**
     * @var string 音频片段的媒体素材来源，可以是：
<li>VOD 的媒体文件 ID 。</li>
<li>CME 的素材 ID 。</li>
     */
    public $SourceMedia;

    /**
     * @var float 音频片段取自素材文件的起始时间，单位为秒。0 表示从素材开始位置截取。默认为0。
     */
    public $SourceMediaStartTime;

    /**
     * @var float 音频片段的时长，单位为秒。默认和素材本身长度一致，表示截取全部素材。
     */
    public $Duration;

    /**
     * @param string $SourceType 音频素材来源类型。取值有：
<ul>
<li>VOD ：素材来源 VOD 。</li>
<li>CME ：视频来源 CME 。</li>
</ul>
     * @param string $SourceMedia 音频片段的媒体素材来源，可以是：
<li>VOD 的媒体文件 ID 。</li>
<li>CME 的素材 ID 。</li>
     * @param float $SourceMediaStartTime 音频片段取自素材文件的起始时间，单位为秒。0 表示从素材开始位置截取。默认为0。
     * @param float $Duration 音频片段的时长，单位为秒。默认和素材本身长度一致，表示截取全部素材。
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceMedia",$param) and $param["SourceMedia"] !== null) {
            $this->SourceMedia = $param["SourceMedia"];
        }

        if (array_key_exists("SourceMediaStartTime",$param) and $param["SourceMediaStartTime"] !== null) {
            $this->SourceMediaStartTime = $param["SourceMediaStartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
