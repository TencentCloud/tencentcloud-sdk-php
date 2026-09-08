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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 说话人结果
 *
 * @method string getLabel() 获取<p>标签</p>
 * @method void setLabel(string $Label) 设置<p>标签</p>
 * @method integer getScore() 获取<p>得分</p>
 * @method void setScore(integer $Score) 设置<p>得分</p>
 * @method float getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(float $StartTime) 设置<p>开始时间</p>
 * @method float getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(float $EndTime) 设置<p>结束时间</p>
 */
class SpeakerResults extends AbstractModel
{
    /**
     * @var string <p>标签</p>
     */
    public $Label;

    /**
     * @var integer <p>得分</p>
     */
    public $Score;

    /**
     * @var float <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var float <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @param string $Label <p>标签</p>
     * @param integer $Score <p>得分</p>
     * @param float $StartTime <p>开始时间</p>
     * @param float $EndTime <p>结束时间</p>
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
