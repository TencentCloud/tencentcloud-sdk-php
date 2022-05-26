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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * spark流任务统计信息
 *
 * @method string getStartTime() 获取任务开始时间
 * @method void setStartTime(string $StartTime) 设置任务开始时间
 * @method integer getReceivers() 获取数据接收器数
 * @method void setReceivers(integer $Receivers) 设置数据接收器数
 * @method integer getNumActiveReceivers() 获取运行中的接收器数
 * @method void setNumActiveReceivers(integer $NumActiveReceivers) 设置运行中的接收器数
 * @method integer getNumInactiveReceivers() 获取不活跃的接收器数
 * @method void setNumInactiveReceivers(integer $NumInactiveReceivers) 设置不活跃的接收器数
 * @method integer getNumActiveBatches() 获取运行中的批数
 * @method void setNumActiveBatches(integer $NumActiveBatches) 设置运行中的批数
 * @method integer getNumRetainedCompletedBatches() 获取待处理的批数
 * @method void setNumRetainedCompletedBatches(integer $NumRetainedCompletedBatches) 设置待处理的批数
 * @method integer getNumTotalCompletedBatches() 获取已完成的批数
 * @method void setNumTotalCompletedBatches(integer $NumTotalCompletedBatches) 设置已完成的批数
 * @method float getAverageInputRate() 获取平均输入速率
 * @method void setAverageInputRate(float $AverageInputRate) 设置平均输入速率
 * @method float getAverageSchedulingDelay() 获取平均等待时长
 * @method void setAverageSchedulingDelay(float $AverageSchedulingDelay) 设置平均等待时长
 * @method float getAverageProcessingTime() 获取平均处理时长
 * @method void setAverageProcessingTime(float $AverageProcessingTime) 设置平均处理时长
 * @method float getAverageTotalDelay() 获取平均延时
 * @method void setAverageTotalDelay(float $AverageTotalDelay) 设置平均延时
 */
class StreamingStatistics extends AbstractModel
{
    /**
     * @var string 任务开始时间
     */
    public $StartTime;

    /**
     * @var integer 数据接收器数
     */
    public $Receivers;

    /**
     * @var integer 运行中的接收器数
     */
    public $NumActiveReceivers;

    /**
     * @var integer 不活跃的接收器数
     */
    public $NumInactiveReceivers;

    /**
     * @var integer 运行中的批数
     */
    public $NumActiveBatches;

    /**
     * @var integer 待处理的批数
     */
    public $NumRetainedCompletedBatches;

    /**
     * @var integer 已完成的批数
     */
    public $NumTotalCompletedBatches;

    /**
     * @var float 平均输入速率
     */
    public $AverageInputRate;

    /**
     * @var float 平均等待时长
     */
    public $AverageSchedulingDelay;

    /**
     * @var float 平均处理时长
     */
    public $AverageProcessingTime;

    /**
     * @var float 平均延时
     */
    public $AverageTotalDelay;

    /**
     * @param string $StartTime 任务开始时间
     * @param integer $Receivers 数据接收器数
     * @param integer $NumActiveReceivers 运行中的接收器数
     * @param integer $NumInactiveReceivers 不活跃的接收器数
     * @param integer $NumActiveBatches 运行中的批数
     * @param integer $NumRetainedCompletedBatches 待处理的批数
     * @param integer $NumTotalCompletedBatches 已完成的批数
     * @param float $AverageInputRate 平均输入速率
     * @param float $AverageSchedulingDelay 平均等待时长
     * @param float $AverageProcessingTime 平均处理时长
     * @param float $AverageTotalDelay 平均延时
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("NumActiveReceivers",$param) and $param["NumActiveReceivers"] !== null) {
            $this->NumActiveReceivers = $param["NumActiveReceivers"];
        }

        if (array_key_exists("NumInactiveReceivers",$param) and $param["NumInactiveReceivers"] !== null) {
            $this->NumInactiveReceivers = $param["NumInactiveReceivers"];
        }

        if (array_key_exists("NumActiveBatches",$param) and $param["NumActiveBatches"] !== null) {
            $this->NumActiveBatches = $param["NumActiveBatches"];
        }

        if (array_key_exists("NumRetainedCompletedBatches",$param) and $param["NumRetainedCompletedBatches"] !== null) {
            $this->NumRetainedCompletedBatches = $param["NumRetainedCompletedBatches"];
        }

        if (array_key_exists("NumTotalCompletedBatches",$param) and $param["NumTotalCompletedBatches"] !== null) {
            $this->NumTotalCompletedBatches = $param["NumTotalCompletedBatches"];
        }

        if (array_key_exists("AverageInputRate",$param) and $param["AverageInputRate"] !== null) {
            $this->AverageInputRate = $param["AverageInputRate"];
        }

        if (array_key_exists("AverageSchedulingDelay",$param) and $param["AverageSchedulingDelay"] !== null) {
            $this->AverageSchedulingDelay = $param["AverageSchedulingDelay"];
        }

        if (array_key_exists("AverageProcessingTime",$param) and $param["AverageProcessingTime"] !== null) {
            $this->AverageProcessingTime = $param["AverageProcessingTime"];
        }

        if (array_key_exists("AverageTotalDelay",$param) and $param["AverageTotalDelay"] !== null) {
            $this->AverageTotalDelay = $param["AverageTotalDelay"];
        }
    }
}
