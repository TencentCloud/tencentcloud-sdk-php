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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getMemBeginTime() 获取当前音节语音起始时间点，单位为ms
 * @method void setMemBeginTime(integer $MemBeginTime) 设置当前音节语音起始时间点，单位为ms
 * @method integer getMemEndTime() 获取当前音节语音终止时间点，单位为ms
 * @method void setMemEndTime(integer $MemEndTime) 设置当前音节语音终止时间点，单位为ms
 * @method float getPronAccuracy() 获取音节发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
 * @method void setPronAccuracy(float $PronAccuracy) 设置音节发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
 * @method boolean getDetectedStress() 获取当前音节是否检测为重音
 * @method void setDetectedStress(boolean $DetectedStress) 设置当前音节是否检测为重音
 * @method string getPhone() 获取当前音节
 * @method void setPhone(string $Phone) 设置当前音节
 * @method boolean getStress() 获取当前音节是否应为重音
 * @method void setStress(boolean $Stress) 设置当前音节是否应为重音
 */

/**
 *单音节评价结果
 */
class PhoneInfo extends AbstractModel
{
    /**
     * @var integer 当前音节语音起始时间点，单位为ms
     */
    public $MemBeginTime;

    /**
     * @var integer 当前音节语音终止时间点，单位为ms
     */
    public $MemEndTime;

    /**
     * @var float 音节发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
     */
    public $PronAccuracy;

    /**
     * @var boolean 当前音节是否检测为重音
     */
    public $DetectedStress;

    /**
     * @var string 当前音节
     */
    public $Phone;

    /**
     * @var boolean 当前音节是否应为重音
     */
    public $Stress;
    /**
     * @param integer $MemBeginTime 当前音节语音起始时间点，单位为ms
     * @param integer $MemEndTime 当前音节语音终止时间点，单位为ms
     * @param float $PronAccuracy 音节发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
     * @param boolean $DetectedStress 当前音节是否检测为重音
     * @param string $Phone 当前音节
     * @param boolean $Stress 当前音节是否应为重音
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MemBeginTime",$param) and $param["MemBeginTime"] !== null) {
            $this->MemBeginTime = $param["MemBeginTime"];
        }

        if (array_key_exists("MemEndTime",$param) and $param["MemEndTime"] !== null) {
            $this->MemEndTime = $param["MemEndTime"];
        }

        if (array_key_exists("PronAccuracy",$param) and $param["PronAccuracy"] !== null) {
            $this->PronAccuracy = $param["PronAccuracy"];
        }

        if (array_key_exists("DetectedStress",$param) and $param["DetectedStress"] !== null) {
            $this->DetectedStress = $param["DetectedStress"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Stress",$param) and $param["Stress"] !== null) {
            $this->Stress = $param["Stress"];
        }
    }
}
