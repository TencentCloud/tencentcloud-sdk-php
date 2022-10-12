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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncBaselineDetectSummary返回参数结构体
 *
 * @method integer getProgressRate() 获取处理进度
 * @method void setProgressRate(integer $ProgressRate) 设置处理进度
 * @method integer getNotPassPolicyCount() 获取未通过策略总数
 * @method void setNotPassPolicyCount(integer $NotPassPolicyCount) 设置未通过策略总数
 * @method integer getHostCount() 获取主机总数
 * @method void setHostCount(integer $HostCount) 设置主机总数
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getWillFirstScan() 获取1:即将进行首次扫描   0:已经扫描过了
 * @method void setWillFirstScan(integer $WillFirstScan) 设置1:即将进行首次扫描   0:已经扫描过了
 * @method array getDetectingTaskIds() 获取正在检测的任务ID
 * @method void setDetectingTaskIds(array $DetectingTaskIds) 设置正在检测的任务ID
 * @method integer getLeftMins() 获取扫描中剩余时间(分钟)
 * @method void setLeftMins(integer $LeftMins) 设置扫描中剩余时间(分钟)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SyncBaselineDetectSummaryResponse extends AbstractModel
{
    /**
     * @var integer 处理进度
     */
    public $ProgressRate;

    /**
     * @var integer 未通过策略总数
     */
    public $NotPassPolicyCount;

    /**
     * @var integer 主机总数
     */
    public $HostCount;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 1:即将进行首次扫描   0:已经扫描过了
     */
    public $WillFirstScan;

    /**
     * @var array 正在检测的任务ID
     */
    public $DetectingTaskIds;

    /**
     * @var integer 扫描中剩余时间(分钟)
     */
    public $LeftMins;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProgressRate 处理进度
     * @param integer $NotPassPolicyCount 未通过策略总数
     * @param integer $HostCount 主机总数
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $WillFirstScan 1:即将进行首次扫描   0:已经扫描过了
     * @param array $DetectingTaskIds 正在检测的任务ID
     * @param integer $LeftMins 扫描中剩余时间(分钟)
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProgressRate",$param) and $param["ProgressRate"] !== null) {
            $this->ProgressRate = $param["ProgressRate"];
        }

        if (array_key_exists("NotPassPolicyCount",$param) and $param["NotPassPolicyCount"] !== null) {
            $this->NotPassPolicyCount = $param["NotPassPolicyCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("WillFirstScan",$param) and $param["WillFirstScan"] !== null) {
            $this->WillFirstScan = $param["WillFirstScan"];
        }

        if (array_key_exists("DetectingTaskIds",$param) and $param["DetectingTaskIds"] !== null) {
            $this->DetectingTaskIds = $param["DetectingTaskIds"];
        }

        if (array_key_exists("LeftMins",$param) and $param["LeftMins"] !== null) {
            $this->LeftMins = $param["LeftMins"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
