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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 说话人结果
 *
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method integer getScore() 获取分数
 * @method void setScore(integer $Score) 设置分数
 * @method float getStartTime() 获取开始时间
 * @method void setStartTime(float $StartTime) 设置开始时间
 * @method float getEndTime() 获取结束时间
 * @method void setEndTime(float $EndTime) 设置结束时间
 */
class SpeakerResult extends AbstractModel
{
    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var integer 分数
     */
    public $Score;

    /**
     * @var float 开始时间
     */
    public $StartTime;

    /**
     * @var float 结束时间
     */
    public $EndTime;

    /**
     * @param string $Label 标签
     * @param integer $Score 分数
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
