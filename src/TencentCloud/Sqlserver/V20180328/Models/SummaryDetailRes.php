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
 * 备份概览实时统计项
 *
 * @method integer getRegionId() 获取地域标识
 * @method void setRegionId(integer $RegionId) 设置地域标识
 * @method integer getStatus() 获取实例状态。1：申请中2：运行中3：受限运行中 (主备切换中)4：已隔离5：回收中6：已回收7：任务执行中 (实例做备份、回档等操作)8：已下线9：实例扩容中10：实例迁移中
 * @method void setStatus(integer $Status) 设置实例状态。1：申请中2：运行中3：受限运行中 (主备切换中)4：已隔离5：回收中6：已回收7：任务执行中 (实例做备份、回档等操作)8：已下线9：实例扩容中10：实例迁移中
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method integer getActualUsedSpace() 获取备份空间
 * @method void setActualUsedSpace(integer $ActualUsedSpace) 设置备份空间
 * @method integer getDataBackupSpace() 获取数据备份空间
 * @method void setDataBackupSpace(integer $DataBackupSpace) 设置数据备份空间
 * @method integer getDataBackupCount() 获取数据备份文件总个数
 * @method void setDataBackupCount(integer $DataBackupCount) 设置数据备份文件总个数
 * @method integer getLogBackupSpace() 获取日志备份空间
 * @method void setLogBackupSpace(integer $LogBackupSpace) 设置日志备份空间
 * @method integer getLogBackupCount() 获取日志备份文件总个数
 * @method void setLogBackupCount(integer $LogBackupCount) 设置日志备份文件总个数
 * @method integer getAutoBackupSpace() 获取自动备份空间
 * @method void setAutoBackupSpace(integer $AutoBackupSpace) 设置自动备份空间
 * @method integer getAutoBackupCount() 获取自动备份文件总个数
 * @method void setAutoBackupCount(integer $AutoBackupCount) 设置自动备份文件总个数
 * @method integer getManualBackupSpace() 获取手动备份空间
 * @method void setManualBackupSpace(integer $ManualBackupSpace) 设置手动备份空间
 * @method integer getManualBackupCount() 获取手动备份文件总个数
 * @method void setManualBackupCount(integer $ManualBackupCount) 设置手动备份文件总个数
 * @method string getRegion() 获取实例所属地域码
 * @method void setRegion(string $Region) 设置实例所属地域码
 */
class SummaryDetailRes extends AbstractModel
{
    /**
     * @var integer 地域标识
     */
    public $RegionId;

    /**
     * @var integer 实例状态。1：申请中2：运行中3：受限运行中 (主备切换中)4：已隔离5：回收中6：已回收7：任务执行中 (实例做备份、回档等操作)8：已下线9：实例扩容中10：实例迁移中
     */
    public $Status;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var integer 备份空间
     */
    public $ActualUsedSpace;

    /**
     * @var integer 数据备份空间
     */
    public $DataBackupSpace;

    /**
     * @var integer 数据备份文件总个数
     */
    public $DataBackupCount;

    /**
     * @var integer 日志备份空间
     */
    public $LogBackupSpace;

    /**
     * @var integer 日志备份文件总个数
     */
    public $LogBackupCount;

    /**
     * @var integer 自动备份空间
     */
    public $AutoBackupSpace;

    /**
     * @var integer 自动备份文件总个数
     */
    public $AutoBackupCount;

    /**
     * @var integer 手动备份空间
     */
    public $ManualBackupSpace;

    /**
     * @var integer 手动备份文件总个数
     */
    public $ManualBackupCount;

    /**
     * @var string 实例所属地域码
     */
    public $Region;

    /**
     * @param integer $RegionId 地域标识
     * @param integer $Status 实例状态。1：申请中2：运行中3：受限运行中 (主备切换中)4：已隔离5：回收中6：已回收7：任务执行中 (实例做备份、回档等操作)8：已下线9：实例扩容中10：实例迁移中
     * @param string $InstanceId 实例ID
     * @param string $Name 实例名称
     * @param integer $ActualUsedSpace 备份空间
     * @param integer $DataBackupSpace 数据备份空间
     * @param integer $DataBackupCount 数据备份文件总个数
     * @param integer $LogBackupSpace 日志备份空间
     * @param integer $LogBackupCount 日志备份文件总个数
     * @param integer $AutoBackupSpace 自动备份空间
     * @param integer $AutoBackupCount 自动备份文件总个数
     * @param integer $ManualBackupSpace 手动备份空间
     * @param integer $ManualBackupCount 手动备份文件总个数
     * @param string $Region 实例所属地域码
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
        }

        if (array_key_exists("DataBackupSpace",$param) and $param["DataBackupSpace"] !== null) {
            $this->DataBackupSpace = $param["DataBackupSpace"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("LogBackupSpace",$param) and $param["LogBackupSpace"] !== null) {
            $this->LogBackupSpace = $param["LogBackupSpace"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("AutoBackupSpace",$param) and $param["AutoBackupSpace"] !== null) {
            $this->AutoBackupSpace = $param["AutoBackupSpace"];
        }

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("ManualBackupSpace",$param) and $param["ManualBackupSpace"] !== null) {
            $this->ManualBackupSpace = $param["ManualBackupSpace"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
