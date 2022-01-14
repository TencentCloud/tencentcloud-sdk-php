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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusScanTaskStatus返回参数结构体
 *
 * @method integer getContainerTotal() 获取查杀容器个数
 * @method void setContainerTotal(integer $ContainerTotal) 设置查杀容器个数
 * @method integer getRiskContainerCnt() 获取风险容器个数
 * @method void setRiskContainerCnt(integer $RiskContainerCnt) 设置风险容器个数
 * @method string getStatus() 获取扫描状态 任务状态:
SCAN_NONE:无， 
SCAN_SCANNING:正在扫描中，
SCAN_FINISH：扫描完成， 
SCAN_TIMEOUT：扫描超时
SCAN_CANCELING: 取消中
SCAN_CANCELED:已取消
 * @method void setStatus(string $Status) 设置扫描状态 任务状态:
SCAN_NONE:无， 
SCAN_SCANNING:正在扫描中，
SCAN_FINISH：扫描完成， 
SCAN_TIMEOUT：扫描超时
SCAN_CANCELING: 取消中
SCAN_CANCELED:已取消
 * @method integer getSchedule() 获取扫描进度 I
 * @method void setSchedule(integer $Schedule) 设置扫描进度 I
 * @method integer getContainerScanCnt() 获取已经扫描了的容器个数
 * @method void setContainerScanCnt(integer $ContainerScanCnt) 设置已经扫描了的容器个数
 * @method integer getRiskCnt() 获取风险个数
 * @method void setRiskCnt(integer $RiskCnt) 设置风险个数
 * @method integer getLeftSeconds() 获取剩余扫描时间
 * @method void setLeftSeconds(integer $LeftSeconds) 设置剩余扫描时间
 * @method string getStartTime() 获取扫描开始时间
 * @method void setStartTime(string $StartTime) 设置扫描开始时间
 * @method string getEndTime() 获取扫描结束时间
 * @method void setEndTime(string $EndTime) 设置扫描结束时间
 * @method string getScanType() 获取扫描类型，"CYCLE"：周期扫描， "MANUAL"：手动扫描
 * @method void setScanType(string $ScanType) 设置扫描类型，"CYCLE"：周期扫描， "MANUAL"：手动扫描
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusScanTaskStatusResponse extends AbstractModel
{
    /**
     * @var integer 查杀容器个数
     */
    public $ContainerTotal;

    /**
     * @var integer 风险容器个数
     */
    public $RiskContainerCnt;

    /**
     * @var string 扫描状态 任务状态:
SCAN_NONE:无， 
SCAN_SCANNING:正在扫描中，
SCAN_FINISH：扫描完成， 
SCAN_TIMEOUT：扫描超时
SCAN_CANCELING: 取消中
SCAN_CANCELED:已取消
     */
    public $Status;

    /**
     * @var integer 扫描进度 I
     */
    public $Schedule;

    /**
     * @var integer 已经扫描了的容器个数
     */
    public $ContainerScanCnt;

    /**
     * @var integer 风险个数
     */
    public $RiskCnt;

    /**
     * @var integer 剩余扫描时间
     */
    public $LeftSeconds;

    /**
     * @var string 扫描开始时间
     */
    public $StartTime;

    /**
     * @var string 扫描结束时间
     */
    public $EndTime;

    /**
     * @var string 扫描类型，"CYCLE"：周期扫描， "MANUAL"：手动扫描
     */
    public $ScanType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ContainerTotal 查杀容器个数
     * @param integer $RiskContainerCnt 风险容器个数
     * @param string $Status 扫描状态 任务状态:
SCAN_NONE:无， 
SCAN_SCANNING:正在扫描中，
SCAN_FINISH：扫描完成， 
SCAN_TIMEOUT：扫描超时
SCAN_CANCELING: 取消中
SCAN_CANCELED:已取消
     * @param integer $Schedule 扫描进度 I
     * @param integer $ContainerScanCnt 已经扫描了的容器个数
     * @param integer $RiskCnt 风险个数
     * @param integer $LeftSeconds 剩余扫描时间
     * @param string $StartTime 扫描开始时间
     * @param string $EndTime 扫描结束时间
     * @param string $ScanType 扫描类型，"CYCLE"：周期扫描， "MANUAL"：手动扫描
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
        if (array_key_exists("ContainerTotal",$param) and $param["ContainerTotal"] !== null) {
            $this->ContainerTotal = $param["ContainerTotal"];
        }

        if (array_key_exists("RiskContainerCnt",$param) and $param["RiskContainerCnt"] !== null) {
            $this->RiskContainerCnt = $param["RiskContainerCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("ContainerScanCnt",$param) and $param["ContainerScanCnt"] !== null) {
            $this->ContainerScanCnt = $param["ContainerScanCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("LeftSeconds",$param) and $param["LeftSeconds"] !== null) {
            $this->LeftSeconds = $param["LeftSeconds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
