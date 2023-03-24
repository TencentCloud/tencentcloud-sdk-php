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
 * 点播转直播播放信息。
 *
 * @method string getStatus() 获取点播转直播项目运行状态，取值有：
<li> Working : 运行中；</li>
<li> Idle: 空闲状态。</li>
 * @method void setStatus(string $Status) 设置点播转直播项目运行状态，取值有：
<li> Working : 运行中；</li>
<li> Idle: 空闲状态。</li>
 * @method string getCurrentSourceId() 获取当前播放的输入源 Id。
 * @method void setCurrentSourceId(string $CurrentSourceId) 设置当前播放的输入源 Id。
 * @method float getCurrentSourcePosition() 获取当前播放的输入源的播放位置，单位：秒。
 * @method void setCurrentSourcePosition(float $CurrentSourcePosition) 设置当前播放的输入源的播放位置，单位：秒。
 * @method float getCurrentSourceDuration() 获取当前播放的输入源时长，单位：秒。
 * @method void setCurrentSourceDuration(float $CurrentSourceDuration) 设置当前播放的输入源时长，单位：秒。
 * @method array getDestinationStatusSet() 获取输出源状态信息。
 * @method void setDestinationStatusSet(array $DestinationStatusSet) 设置输出源状态信息。
 * @method integer getLoopCount() 获取已经循环播放的次数。
 * @method void setLoopCount(integer $LoopCount) 设置已经循环播放的次数。
 */
class MediaCastPlayInfo extends AbstractModel
{
    /**
     * @var string 点播转直播项目运行状态，取值有：
<li> Working : 运行中；</li>
<li> Idle: 空闲状态。</li>
     */
    public $Status;

    /**
     * @var string 当前播放的输入源 Id。
     */
    public $CurrentSourceId;

    /**
     * @var float 当前播放的输入源的播放位置，单位：秒。
     */
    public $CurrentSourcePosition;

    /**
     * @var float 当前播放的输入源时长，单位：秒。
     */
    public $CurrentSourceDuration;

    /**
     * @var array 输出源状态信息。
     */
    public $DestinationStatusSet;

    /**
     * @var integer 已经循环播放的次数。
     */
    public $LoopCount;

    /**
     * @param string $Status 点播转直播项目运行状态，取值有：
<li> Working : 运行中；</li>
<li> Idle: 空闲状态。</li>
     * @param string $CurrentSourceId 当前播放的输入源 Id。
     * @param float $CurrentSourcePosition 当前播放的输入源的播放位置，单位：秒。
     * @param float $CurrentSourceDuration 当前播放的输入源时长，单位：秒。
     * @param array $DestinationStatusSet 输出源状态信息。
     * @param integer $LoopCount 已经循环播放的次数。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentSourceId",$param) and $param["CurrentSourceId"] !== null) {
            $this->CurrentSourceId = $param["CurrentSourceId"];
        }

        if (array_key_exists("CurrentSourcePosition",$param) and $param["CurrentSourcePosition"] !== null) {
            $this->CurrentSourcePosition = $param["CurrentSourcePosition"];
        }

        if (array_key_exists("CurrentSourceDuration",$param) and $param["CurrentSourceDuration"] !== null) {
            $this->CurrentSourceDuration = $param["CurrentSourceDuration"];
        }

        if (array_key_exists("DestinationStatusSet",$param) and $param["DestinationStatusSet"] !== null) {
            $this->DestinationStatusSet = [];
            foreach ($param["DestinationStatusSet"] as $key => $value){
                $obj = new MediaCastDestinationStatus();
                $obj->deserialize($value);
                array_push($this->DestinationStatusSet, $obj);
            }
        }

        if (array_key_exists("LoopCount",$param) and $param["LoopCount"] !== null) {
            $this->LoopCount = $param["LoopCount"];
        }
    }
}
