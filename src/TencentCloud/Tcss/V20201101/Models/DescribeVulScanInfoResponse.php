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
 * DescribeVulScanInfo返回参数结构体
 *
 * @method integer getLocalImageScanCount() 获取本次扫描的本地镜像总数
 * @method void setLocalImageScanCount(integer $LocalImageScanCount) 设置本次扫描的本地镜像总数
 * @method integer getIgnoreVulCount() 获取忽略的漏洞数量
 * @method void setIgnoreVulCount(integer $IgnoreVulCount) 设置忽略的漏洞数量
 * @method string getScanStartTime() 获取漏洞扫描的开始时间
 * @method void setScanStartTime(string $ScanStartTime) 设置漏洞扫描的开始时间
 * @method string getScanEndTime() 获取漏洞扫描的结束时间
 * @method void setScanEndTime(string $ScanEndTime) 设置漏洞扫描的结束时间
 * @method integer getFoundRiskImageCount() 获取发现风险镜像数量
 * @method void setFoundRiskImageCount(integer $FoundRiskImageCount) 设置发现风险镜像数量
 * @method integer getFoundVulCount() 获取本地发现漏洞数量
 * @method void setFoundVulCount(integer $FoundVulCount) 设置本地发现漏洞数量
 * @method float getScanProgress() 获取扫描进度
 * @method void setScanProgress(float $ScanProgress) 设置扫描进度
 * @method integer getRegistryImageScanCount() 获取本次扫描的仓库镜像总数
 * @method void setRegistryImageScanCount(integer $RegistryImageScanCount) 设置本次扫描的仓库镜像总数
 * @method integer getLocalTaskID() 获取本地镜像最近一次的漏洞任务扫描ID
 * @method void setLocalTaskID(integer $LocalTaskID) 设置本地镜像最近一次的漏洞任务扫描ID
 * @method string getStatus() 获取扫描状态:NOT_SCAN:未扫描，SCANNING:扫描中,SCANNED:完成，CANCELED：扫描停止
 * @method void setStatus(string $Status) 设置扫描状态:NOT_SCAN:未扫描，SCANNING:扫描中,SCANNED:完成，CANCELED：扫描停止
 * @method float getRemainingTime() 获取剩余时间，秒
 * @method void setRemainingTime(float $RemainingTime) 设置剩余时间，秒
 * @method integer getRegistryTaskID() 获取仓库镜像最近一次的漏洞任务扫描ID
 * @method void setRegistryTaskID(integer $RegistryTaskID) 设置仓库镜像最近一次的漏洞任务扫描ID
 * @method integer getRegistryFoundVulCount() 获取仓库发现漏洞数量
 * @method void setRegistryFoundVulCount(integer $RegistryFoundVulCount) 设置仓库发现漏洞数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulScanInfoResponse extends AbstractModel
{
    /**
     * @var integer 本次扫描的本地镜像总数
     */
    public $LocalImageScanCount;

    /**
     * @var integer 忽略的漏洞数量
     */
    public $IgnoreVulCount;

    /**
     * @var string 漏洞扫描的开始时间
     */
    public $ScanStartTime;

    /**
     * @var string 漏洞扫描的结束时间
     */
    public $ScanEndTime;

    /**
     * @var integer 发现风险镜像数量
     */
    public $FoundRiskImageCount;

    /**
     * @var integer 本地发现漏洞数量
     */
    public $FoundVulCount;

    /**
     * @var float 扫描进度
     */
    public $ScanProgress;

    /**
     * @var integer 本次扫描的仓库镜像总数
     */
    public $RegistryImageScanCount;

    /**
     * @var integer 本地镜像最近一次的漏洞任务扫描ID
     */
    public $LocalTaskID;

    /**
     * @var string 扫描状态:NOT_SCAN:未扫描，SCANNING:扫描中,SCANNED:完成，CANCELED：扫描停止
     */
    public $Status;

    /**
     * @var float 剩余时间，秒
     */
    public $RemainingTime;

    /**
     * @var integer 仓库镜像最近一次的漏洞任务扫描ID
     */
    public $RegistryTaskID;

    /**
     * @var integer 仓库发现漏洞数量
     */
    public $RegistryFoundVulCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $LocalImageScanCount 本次扫描的本地镜像总数
     * @param integer $IgnoreVulCount 忽略的漏洞数量
     * @param string $ScanStartTime 漏洞扫描的开始时间
     * @param string $ScanEndTime 漏洞扫描的结束时间
     * @param integer $FoundRiskImageCount 发现风险镜像数量
     * @param integer $FoundVulCount 本地发现漏洞数量
     * @param float $ScanProgress 扫描进度
     * @param integer $RegistryImageScanCount 本次扫描的仓库镜像总数
     * @param integer $LocalTaskID 本地镜像最近一次的漏洞任务扫描ID
     * @param string $Status 扫描状态:NOT_SCAN:未扫描，SCANNING:扫描中,SCANNED:完成，CANCELED：扫描停止
     * @param float $RemainingTime 剩余时间，秒
     * @param integer $RegistryTaskID 仓库镜像最近一次的漏洞任务扫描ID
     * @param integer $RegistryFoundVulCount 仓库发现漏洞数量
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
        if (array_key_exists("LocalImageScanCount",$param) and $param["LocalImageScanCount"] !== null) {
            $this->LocalImageScanCount = $param["LocalImageScanCount"];
        }

        if (array_key_exists("IgnoreVulCount",$param) and $param["IgnoreVulCount"] !== null) {
            $this->IgnoreVulCount = $param["IgnoreVulCount"];
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("FoundRiskImageCount",$param) and $param["FoundRiskImageCount"] !== null) {
            $this->FoundRiskImageCount = $param["FoundRiskImageCount"];
        }

        if (array_key_exists("FoundVulCount",$param) and $param["FoundVulCount"] !== null) {
            $this->FoundVulCount = $param["FoundVulCount"];
        }

        if (array_key_exists("ScanProgress",$param) and $param["ScanProgress"] !== null) {
            $this->ScanProgress = $param["ScanProgress"];
        }

        if (array_key_exists("RegistryImageScanCount",$param) and $param["RegistryImageScanCount"] !== null) {
            $this->RegistryImageScanCount = $param["RegistryImageScanCount"];
        }

        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RemainingTime",$param) and $param["RemainingTime"] !== null) {
            $this->RemainingTime = $param["RemainingTime"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }

        if (array_key_exists("RegistryFoundVulCount",$param) and $param["RegistryFoundVulCount"] !== null) {
            $this->RegistryFoundVulCount = $param["RegistryFoundVulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
