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
 * program播放配置。
 *
 * @method integer getDuration() 获取<p>program持续时间，单位毫秒，直播有效。</p>
 * @method void setDuration(integer $Duration) 设置<p>program持续时间，单位毫秒，直播有效。</p>
 * @method string getTransitionType() 获取<p>program启动方式，直播只支持Absolute，点播还支持Relative。</p>
 * @method void setTransitionType(string $TransitionType) 设置<p>program启动方式，直播只支持Absolute，点播还支持Relative。</p>
 * @method integer getStartTime() 获取<p>unix时间戳，Absolute场景下program的开始执行时间。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>unix时间戳，Absolute场景下program的开始执行时间。</p>
 * @method string getRelativePosition() 获取<p>和所选program的插入顺序关系，分After和Before。</p>
 * @method void setRelativePosition(string $RelativePosition) 设置<p>和所选program的插入顺序关系，分After和Before。</p>
 * @method string getRelativeProgramId() 获取<p>所选的插入参考program id。</p>
 * @method void setRelativeProgramId(string $RelativeProgramId) 设置<p>所选的插入参考program id。</p>
 * @method ClipRangeInfo getClipRangeConf() 获取<p>垫片配置。</p>
 * @method void setClipRangeConf(ClipRangeInfo $ClipRangeConf) 设置<p>垫片配置。</p>
 * @method string getRelativeProgramName() 获取<p>RelativeProgramName。</p>
 * @method void setRelativeProgramName(string $RelativeProgramName) 设置<p>RelativeProgramName。</p>
 */
class PlaybackInfo extends AbstractModel
{
    /**
     * @var integer <p>program持续时间，单位毫秒，直播有效。</p>
     */
    public $Duration;

    /**
     * @var string <p>program启动方式，直播只支持Absolute，点播还支持Relative。</p>
     */
    public $TransitionType;

    /**
     * @var integer <p>unix时间戳，Absolute场景下program的开始执行时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>和所选program的插入顺序关系，分After和Before。</p>
     */
    public $RelativePosition;

    /**
     * @var string <p>所选的插入参考program id。</p>
     */
    public $RelativeProgramId;

    /**
     * @var ClipRangeInfo <p>垫片配置。</p>
     */
    public $ClipRangeConf;

    /**
     * @var string <p>RelativeProgramName。</p>
     */
    public $RelativeProgramName;

    /**
     * @param integer $Duration <p>program持续时间，单位毫秒，直播有效。</p>
     * @param string $TransitionType <p>program启动方式，直播只支持Absolute，点播还支持Relative。</p>
     * @param integer $StartTime <p>unix时间戳，Absolute场景下program的开始执行时间。</p>
     * @param string $RelativePosition <p>和所选program的插入顺序关系，分After和Before。</p>
     * @param string $RelativeProgramId <p>所选的插入参考program id。</p>
     * @param ClipRangeInfo $ClipRangeConf <p>垫片配置。</p>
     * @param string $RelativeProgramName <p>RelativeProgramName。</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("TransitionType",$param) and $param["TransitionType"] !== null) {
            $this->TransitionType = $param["TransitionType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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

        if (array_key_exists("RelativeProgramName",$param) and $param["RelativeProgramName"] !== null) {
            $this->RelativeProgramName = $param["RelativeProgramName"];
        }
    }
}
