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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupSummary返回参数结构体
 *
 * @method integer getFreeSpace() 获取实际免费总空间，单位(KB)。
 * @method void setFreeSpace(integer $FreeSpace) 设置实际免费总空间，单位(KB)。
 * @method integer getActualUsedSpace() 获取备份实际使用空间，单位(KB)。
 * @method void setActualUsedSpace(integer $ActualUsedSpace) 设置备份实际使用空间，单位(KB)。
 * @method integer getBackupFilesTotal() 获取备份文件总个数。
 * @method void setBackupFilesTotal(integer $BackupFilesTotal) 设置备份文件总个数。
 * @method integer getBillingSpace() 获取备份占用收费空间，单位(KB)。
 * @method void setBillingSpace(integer $BillingSpace) 设置备份占用收费空间，单位(KB)。
 * @method integer getDataBackupSpace() 获取数据备份使用空间，单位(KB)。
 * @method void setDataBackupSpace(integer $DataBackupSpace) 设置数据备份使用空间，单位(KB)。
 * @method integer getDataBackupCount() 获取数据备份文件总个数。
 * @method void setDataBackupCount(integer $DataBackupCount) 设置数据备份文件总个数。
 * @method integer getManualBackupSpace() 获取数据备份中手动备份使用空间，单位(KB)。
 * @method void setManualBackupSpace(integer $ManualBackupSpace) 设置数据备份中手动备份使用空间，单位(KB)。
 * @method integer getManualBackupCount() 获取数据备份中手动备份文件总个数。
 * @method void setManualBackupCount(integer $ManualBackupCount) 设置数据备份中手动备份文件总个数。
 * @method integer getAutoBackupSpace() 获取数据备份中自动备份使用空间，单位(KB)。
 * @method void setAutoBackupSpace(integer $AutoBackupSpace) 设置数据备份中自动备份使用空间，单位(KB)。
 * @method integer getAutoBackupCount() 获取数据备份中自动备份文件总个数。
 * @method void setAutoBackupCount(integer $AutoBackupCount) 设置数据备份中自动备份文件总个数。
 * @method integer getLogBackupSpace() 获取日志备份使用空间，单位(KB)。
 * @method void setLogBackupSpace(integer $LogBackupSpace) 设置日志备份使用空间，单位(KB)。
 * @method integer getLogBackupCount() 获取日志备份文件总个数。
 * @method void setLogBackupCount(integer $LogBackupCount) 设置日志备份文件总个数。
 * @method float getEstimatedAmount() 获取预估收费金额，单位（元/小时）。
 * @method void setEstimatedAmount(float $EstimatedAmount) 设置预估收费金额，单位（元/小时）。
 * @method integer getLocalBackupFilesTotal() 获取本地备份文件总个数
 * @method void setLocalBackupFilesTotal(integer $LocalBackupFilesTotal) 设置本地备份文件总个数
 * @method integer getCrossBackupFilesTotal() 获取跨地域备份文件总个数
 * @method void setCrossBackupFilesTotal(integer $CrossBackupFilesTotal) 设置跨地域备份文件总个数
 * @method integer getCrossBillingSpace() 获取跨地域备份占用收费空间，单位（KB）
 * @method void setCrossBillingSpace(integer $CrossBillingSpace) 设置跨地域备份占用收费空间，单位（KB）
 * @method integer getCrossAutoBackupSpace() 获取跨地域自动数据备份使用空间，单位（KB）
 * @method void setCrossAutoBackupSpace(integer $CrossAutoBackupSpace) 设置跨地域自动数据备份使用空间，单位（KB）
 * @method integer getCrossAutoBackupCount() 获取跨地域自动数据备份文件总个数
 * @method void setCrossAutoBackupCount(integer $CrossAutoBackupCount) 设置跨地域自动数据备份文件总个数
 * @method integer getLocalLogBackupSpace() 获取本地日志备份使用空间，单位（KB）
 * @method void setLocalLogBackupSpace(integer $LocalLogBackupSpace) 设置本地日志备份使用空间，单位（KB）
 * @method integer getLocalLogBackupCount() 获取本地日志备份文件总个数
 * @method void setLocalLogBackupCount(integer $LocalLogBackupCount) 设置本地日志备份文件总个数
 * @method integer getCrossLogBackupSpace() 获取跨地域日志备份使用空间，单位（KB）
 * @method void setCrossLogBackupSpace(integer $CrossLogBackupSpace) 设置跨地域日志备份使用空间，单位（KB）
 * @method integer getCrossLogBackupCount() 获取跨地域日志备份文件总个数
 * @method void setCrossLogBackupCount(integer $CrossLogBackupCount) 设置跨地域日志备份文件总个数
 * @method float getCrossEstimatedAmount() 获取跨地域备份预估收费金额，单位（元/小时）
 * @method void setCrossEstimatedAmount(float $CrossEstimatedAmount) 设置跨地域备份预估收费金额，单位（元/小时）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupSummaryResponse extends AbstractModel
{
    /**
     * @var integer 实际免费总空间，单位(KB)。
     */
    public $FreeSpace;

    /**
     * @var integer 备份实际使用空间，单位(KB)。
     */
    public $ActualUsedSpace;

    /**
     * @var integer 备份文件总个数。
     */
    public $BackupFilesTotal;

    /**
     * @var integer 备份占用收费空间，单位(KB)。
     */
    public $BillingSpace;

    /**
     * @var integer 数据备份使用空间，单位(KB)。
     */
    public $DataBackupSpace;

    /**
     * @var integer 数据备份文件总个数。
     */
    public $DataBackupCount;

    /**
     * @var integer 数据备份中手动备份使用空间，单位(KB)。
     */
    public $ManualBackupSpace;

    /**
     * @var integer 数据备份中手动备份文件总个数。
     */
    public $ManualBackupCount;

    /**
     * @var integer 数据备份中自动备份使用空间，单位(KB)。
     */
    public $AutoBackupSpace;

    /**
     * @var integer 数据备份中自动备份文件总个数。
     */
    public $AutoBackupCount;

    /**
     * @var integer 日志备份使用空间，单位(KB)。
     */
    public $LogBackupSpace;

    /**
     * @var integer 日志备份文件总个数。
     */
    public $LogBackupCount;

    /**
     * @var float 预估收费金额，单位（元/小时）。
     */
    public $EstimatedAmount;

    /**
     * @var integer 本地备份文件总个数
     */
    public $LocalBackupFilesTotal;

    /**
     * @var integer 跨地域备份文件总个数
     */
    public $CrossBackupFilesTotal;

    /**
     * @var integer 跨地域备份占用收费空间，单位（KB）
     */
    public $CrossBillingSpace;

    /**
     * @var integer 跨地域自动数据备份使用空间，单位（KB）
     */
    public $CrossAutoBackupSpace;

    /**
     * @var integer 跨地域自动数据备份文件总个数
     */
    public $CrossAutoBackupCount;

    /**
     * @var integer 本地日志备份使用空间，单位（KB）
     */
    public $LocalLogBackupSpace;

    /**
     * @var integer 本地日志备份文件总个数
     */
    public $LocalLogBackupCount;

    /**
     * @var integer 跨地域日志备份使用空间，单位（KB）
     */
    public $CrossLogBackupSpace;

    /**
     * @var integer 跨地域日志备份文件总个数
     */
    public $CrossLogBackupCount;

    /**
     * @var float 跨地域备份预估收费金额，单位（元/小时）
     */
    public $CrossEstimatedAmount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $FreeSpace 实际免费总空间，单位(KB)。
     * @param integer $ActualUsedSpace 备份实际使用空间，单位(KB)。
     * @param integer $BackupFilesTotal 备份文件总个数。
     * @param integer $BillingSpace 备份占用收费空间，单位(KB)。
     * @param integer $DataBackupSpace 数据备份使用空间，单位(KB)。
     * @param integer $DataBackupCount 数据备份文件总个数。
     * @param integer $ManualBackupSpace 数据备份中手动备份使用空间，单位(KB)。
     * @param integer $ManualBackupCount 数据备份中手动备份文件总个数。
     * @param integer $AutoBackupSpace 数据备份中自动备份使用空间，单位(KB)。
     * @param integer $AutoBackupCount 数据备份中自动备份文件总个数。
     * @param integer $LogBackupSpace 日志备份使用空间，单位(KB)。
     * @param integer $LogBackupCount 日志备份文件总个数。
     * @param float $EstimatedAmount 预估收费金额，单位（元/小时）。
     * @param integer $LocalBackupFilesTotal 本地备份文件总个数
     * @param integer $CrossBackupFilesTotal 跨地域备份文件总个数
     * @param integer $CrossBillingSpace 跨地域备份占用收费空间，单位（KB）
     * @param integer $CrossAutoBackupSpace 跨地域自动数据备份使用空间，单位（KB）
     * @param integer $CrossAutoBackupCount 跨地域自动数据备份文件总个数
     * @param integer $LocalLogBackupSpace 本地日志备份使用空间，单位（KB）
     * @param integer $LocalLogBackupCount 本地日志备份文件总个数
     * @param integer $CrossLogBackupSpace 跨地域日志备份使用空间，单位（KB）
     * @param integer $CrossLogBackupCount 跨地域日志备份文件总个数
     * @param float $CrossEstimatedAmount 跨地域备份预估收费金额，单位（元/小时）
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FreeSpace",$param) and $param["FreeSpace"] !== null) {
            $this->FreeSpace = $param["FreeSpace"];
        }

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
        }

        if (array_key_exists("BackupFilesTotal",$param) and $param["BackupFilesTotal"] !== null) {
            $this->BackupFilesTotal = $param["BackupFilesTotal"];
        }

        if (array_key_exists("BillingSpace",$param) and $param["BillingSpace"] !== null) {
            $this->BillingSpace = $param["BillingSpace"];
        }

        if (array_key_exists("DataBackupSpace",$param) and $param["DataBackupSpace"] !== null) {
            $this->DataBackupSpace = $param["DataBackupSpace"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("ManualBackupSpace",$param) and $param["ManualBackupSpace"] !== null) {
            $this->ManualBackupSpace = $param["ManualBackupSpace"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("AutoBackupSpace",$param) and $param["AutoBackupSpace"] !== null) {
            $this->AutoBackupSpace = $param["AutoBackupSpace"];
        }

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("LogBackupSpace",$param) and $param["LogBackupSpace"] !== null) {
            $this->LogBackupSpace = $param["LogBackupSpace"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("EstimatedAmount",$param) and $param["EstimatedAmount"] !== null) {
            $this->EstimatedAmount = $param["EstimatedAmount"];
        }

        if (array_key_exists("LocalBackupFilesTotal",$param) and $param["LocalBackupFilesTotal"] !== null) {
            $this->LocalBackupFilesTotal = $param["LocalBackupFilesTotal"];
        }

        if (array_key_exists("CrossBackupFilesTotal",$param) and $param["CrossBackupFilesTotal"] !== null) {
            $this->CrossBackupFilesTotal = $param["CrossBackupFilesTotal"];
        }

        if (array_key_exists("CrossBillingSpace",$param) and $param["CrossBillingSpace"] !== null) {
            $this->CrossBillingSpace = $param["CrossBillingSpace"];
        }

        if (array_key_exists("CrossAutoBackupSpace",$param) and $param["CrossAutoBackupSpace"] !== null) {
            $this->CrossAutoBackupSpace = $param["CrossAutoBackupSpace"];
        }

        if (array_key_exists("CrossAutoBackupCount",$param) and $param["CrossAutoBackupCount"] !== null) {
            $this->CrossAutoBackupCount = $param["CrossAutoBackupCount"];
        }

        if (array_key_exists("LocalLogBackupSpace",$param) and $param["LocalLogBackupSpace"] !== null) {
            $this->LocalLogBackupSpace = $param["LocalLogBackupSpace"];
        }

        if (array_key_exists("LocalLogBackupCount",$param) and $param["LocalLogBackupCount"] !== null) {
            $this->LocalLogBackupCount = $param["LocalLogBackupCount"];
        }

        if (array_key_exists("CrossLogBackupSpace",$param) and $param["CrossLogBackupSpace"] !== null) {
            $this->CrossLogBackupSpace = $param["CrossLogBackupSpace"];
        }

        if (array_key_exists("CrossLogBackupCount",$param) and $param["CrossLogBackupCount"] !== null) {
            $this->CrossLogBackupCount = $param["CrossLogBackupCount"];
        }

        if (array_key_exists("CrossEstimatedAmount",$param) and $param["CrossEstimatedAmount"] !== null) {
            $this->CrossEstimatedAmount = $param["CrossEstimatedAmount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
