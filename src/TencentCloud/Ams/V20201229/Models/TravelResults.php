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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出行结果
 *
 * @method string getLabel() 获取一级标签
 * @method void setLabel(string $Label) 设置一级标签
 * @method string getSubLabel() 获取二级标签
 * @method void setSubLabel(string $SubLabel) 设置二级标签
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method string getAudioRole() 获取出行音频角色
 * @method void setAudioRole(string $AudioRole) 设置出行音频角色
 * @method string getAudioText() 获取出行语音文本
 * @method void setAudioText(string $AudioText) 设置出行语音文本
 * @method float getStartTime() 获取开始时间
 * @method void setStartTime(float $StartTime) 设置开始时间
 * @method float getEndTime() 获取结束时间
 * @method void setEndTime(float $EndTime) 设置结束时间
 */
class TravelResults extends AbstractModel
{
    /**
     * @var string 一级标签
     */
    public $Label;

    /**
     * @var string 二级标签
     */
    public $SubLabel;

    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 出行音频角色
     */
    public $AudioRole;

    /**
     * @var string 出行语音文本
     */
    public $AudioText;

    /**
     * @var float 开始时间
     */
    public $StartTime;

    /**
     * @var float 结束时间
     */
    public $EndTime;

    /**
     * @param string $Label 一级标签
     * @param string $SubLabel 二级标签
     * @param string $RiskLevel 风险等级
     * @param string $AudioRole 出行音频角色
     * @param string $AudioText 出行语音文本
     * @param float $StartTime 开始时间
     * @param float $EndTime 结束时间
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("AudioRole",$param) and $param["AudioRole"] !== null) {
            $this->AudioRole = $param["AudioRole"];
        }

        if (array_key_exists("AudioText",$param) and $param["AudioText"] !== null) {
            $this->AudioText = $param["AudioText"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
