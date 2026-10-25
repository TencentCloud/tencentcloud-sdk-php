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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测趋势点
 *
 * @method string getTime() 获取<p>时间桶，格式 yyyy-MM-dd HH:mm:ss</p>
 * @method void setTime(string $Time) 设置<p>时间桶，格式 yyyy-MM-dd HH:mm:ss</p>
 * @method integer getExecutionCount() 获取<p>执行批次数</p>
 * @method void setExecutionCount(integer $ExecutionCount) 设置<p>执行批次数</p>
 * @method integer getSuccessCount() 获取<p>成功批次数</p>
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>成功批次数</p>
 * @method integer getFailCount() 获取<p>失败批次数</p>
 * @method void setFailCount(integer $FailCount) 设置<p>失败批次数</p>
 * @method float getAvgDuration() 获取<p>平均时延，单位毫秒</p>
 * @method void setAvgDuration(float $AvgDuration) 设置<p>平均时延，单位毫秒</p>
 */
class DialTrendPoint extends AbstractModel
{
    /**
     * @var string <p>时间桶，格式 yyyy-MM-dd HH:mm:ss</p>
     */
    public $Time;

    /**
     * @var integer <p>执行批次数</p>
     */
    public $ExecutionCount;

    /**
     * @var integer <p>成功批次数</p>
     */
    public $SuccessCount;

    /**
     * @var integer <p>失败批次数</p>
     */
    public $FailCount;

    /**
     * @var float <p>平均时延，单位毫秒</p>
     */
    public $AvgDuration;

    /**
     * @param string $Time <p>时间桶，格式 yyyy-MM-dd HH:mm:ss</p>
     * @param integer $ExecutionCount <p>执行批次数</p>
     * @param integer $SuccessCount <p>成功批次数</p>
     * @param integer $FailCount <p>失败批次数</p>
     * @param float $AvgDuration <p>平均时延，单位毫秒</p>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ExecutionCount",$param) and $param["ExecutionCount"] !== null) {
            $this->ExecutionCount = $param["ExecutionCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("AvgDuration",$param) and $param["AvgDuration"] !== null) {
            $this->AvgDuration = $param["AvgDuration"];
        }
    }
}
