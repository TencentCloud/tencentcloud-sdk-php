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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * program播放配置请求。
 *
 * @method string getTransitionType() 获取program启动方式，直播只支持Absolute，点播还支持Relative。PlaybackMode类型为Linear的VOD支持Absolute和Relative。PlaybackMode类型为Loop的VOD只支持Relative
 * @method void setTransitionType(string $TransitionType) 设置program启动方式，直播只支持Absolute，点播还支持Relative。PlaybackMode类型为Linear的VOD支持Absolute和Relative。PlaybackMode类型为Loop的VOD只支持Relative
 * @method integer getStartTime() 获取unix时间戳，absolute场景下program的开始执行时间。最多大于当前90天（7776000）。
 * @method void setStartTime(integer $StartTime) 设置unix时间戳，absolute场景下program的开始执行时间。最多大于当前90天（7776000）。
 * @method integer getDuration() 获取program持续时间，单位毫秒，直播有效。支持600000-86400000。默认600000。
 * @method void setDuration(integer $Duration) 设置program持续时间，单位毫秒，直播有效。支持600000-86400000。默认600000。
 * @method string getRelativePosition() 获取和所选program的插入顺序关系，分After和Before。
 * @method void setRelativePosition(string $RelativePosition) 设置和所选program的插入顺序关系，分After和Before。
 * @method string getRelativeProgramId() 获取所选的插入参考program id。
 * @method void setRelativeProgramId(string $RelativeProgramId) 设置所选的插入参考program id。
 * @method ClipRangeInfo getClipRangeConf() 获取垫片配置。
 * @method void setClipRangeConf(ClipRangeInfo $ClipRangeConf) 设置垫片配置。
 */
class PlaybackInfoReq extends AbstractModel
{
    /**
     * @var string program启动方式，直播只支持Absolute，点播还支持Relative。PlaybackMode类型为Linear的VOD支持Absolute和Relative。PlaybackMode类型为Loop的VOD只支持Relative
     */
    public $TransitionType;

    /**
     * @var integer unix时间戳，absolute场景下program的开始执行时间。最多大于当前90天（7776000）。
     */
    public $StartTime;

    /**
     * @var integer program持续时间，单位毫秒，直播有效。支持600000-86400000。默认600000。
     */
    public $Duration;

    /**
     * @var string 和所选program的插入顺序关系，分After和Before。
     */
    public $RelativePosition;

    /**
     * @var string 所选的插入参考program id。
     */
    public $RelativeProgramId;

    /**
     * @var ClipRangeInfo 垫片配置。
     */
    public $ClipRangeConf;

    /**
     * @param string $TransitionType program启动方式，直播只支持Absolute，点播还支持Relative。PlaybackMode类型为Linear的VOD支持Absolute和Relative。PlaybackMode类型为Loop的VOD只支持Relative
     * @param integer $StartTime unix时间戳，absolute场景下program的开始执行时间。最多大于当前90天（7776000）。
     * @param integer $Duration program持续时间，单位毫秒，直播有效。支持600000-86400000。默认600000。
     * @param string $RelativePosition 和所选program的插入顺序关系，分After和Before。
     * @param string $RelativeProgramId 所选的插入参考program id。
     * @param ClipRangeInfo $ClipRangeConf 垫片配置。
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
        if (array_key_exists("TransitionType",$param) and $param["TransitionType"] !== null) {
            $this->TransitionType = $param["TransitionType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RelativePosition",$param) and $param["RelativePosition"] !== null) {
            $this->RelativePosition = $param["RelativePosition"];
        }

        if (array_key_exists("RelativeProgramId",$param) and $param["RelativeProgramId"] !== null) {
            $this->RelativeProgramId = $param["RelativeProgramId"];
        }

        if (array_key_exists("ClipRangeConf",$param) and $param["ClipRangeConf"] !== null) {
            $this->ClipRangeConf = new ClipRangeInfo();
            $this->ClipRangeConf->deserialize($param["ClipRangeConf"]);
        }
    }
}
