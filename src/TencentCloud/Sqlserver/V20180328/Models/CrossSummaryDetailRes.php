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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨地域备份实时统计列表项
 *
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method string getRegion() 获取实例所属地域
 * @method void setRegion(string $Region) 设置实例所属地域
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getCrossBackupEnabled() 获取跨地域备份状态 enable-开启，disable-关闭
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) 设置跨地域备份状态 enable-开启，disable-关闭
 * @method array getCrossRegions() 获取跨地域备份目标地域
 * @method void setCrossRegions(array $CrossRegions) 设置跨地域备份目标地域
 * @method string getLastBackupStartTime() 获取最新备份开始时间
 * @method void setLastBackupStartTime(string $LastBackupStartTime) 设置最新备份开始时间
 * @method integer getCrossBackupSaveDays() 获取跨地域备份保留天数
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) 设置跨地域备份保留天数
 * @method integer getDataBackupSpace() 获取跨地域数据备份总空间
 * @method void setDataBackupSpace(integer $DataBackupSpace) 设置跨地域数据备份总空间
 * @method integer getDataBackupCount() 获取跨地域数据备份文件总个数
 * @method void setDataBackupCount(integer $DataBackupCount) 设置跨地域数据备份文件总个数
 * @method integer getLogBackupSpace() 获取跨地域日志备份总空间
 * @method void setLogBackupSpace(integer $LogBackupSpace) 设置跨地域日志备份总空间
 * @method integer getLogBackupCount() 获取跨地域日志备份文件总个数
 * @method void setLogBackupCount(integer $LogBackupCount) 设置跨地域日志备份文件总个数
 * @method integer getActualUsedSpace() 获取跨地域备份总空间
 * @method void setActualUsedSpace(integer $ActualUsedSpace) 设置跨地域备份总空间
 * @method integer getActualUsedCount() 获取跨地域备份总个数
 * @method void setActualUsedCount(integer $ActualUsedCount) 设置跨地域备份总个数
 */
class CrossSummaryDetailRes extends AbstractModel
{
    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var string 实例所属地域
     */
    public $Region;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 跨地域备份状态 enable-开启，disable-关闭
     */
    public $CrossBackupEnabled;

    /**
     * @var array 跨地域备份目标地域
     */
    public $CrossRegions;

    /**
     * @var string 最新备份开始时间
     */
    public $LastBackupStartTime;

    /**
     * @var integer 跨地域备份保留天数
     */
    public $CrossBackupSaveDays;

    /**
     * @var integer 跨地域数据备份总空间
     */
    public $DataBackupSpace;

    /**
     * @var integer 跨地域数据备份文件总个数
     */
    public $DataBackupCount;

    /**
     * @var integer 跨地域日志备份总空间
     */
    public $LogBackupSpace;

    /**
     * @var integer 跨地域日志备份文件总个数
     */
    public $LogBackupCount;

    /**
     * @var integer 跨地域备份总空间
     */
    public $ActualUsedSpace;

    /**
     * @var integer 跨地域备份总个数
     */
    public $ActualUsedCount;

    /**
     * @param integer $Status 实例状态
     * @param string $Region 实例所属地域
     * @param string $InstanceId 实例ID
     * @param string $Name 实例名称
     * @param string $CrossBackupEnabled 跨地域备份状态 enable-开启，disable-关闭
     * @param array $CrossRegions 跨地域备份目标地域
     * @param string $LastBackupStartTime 最新备份开始时间
     * @param integer $CrossBackupSaveDays 跨地域备份保留天数
     * @param integer $DataBackupSpace 跨地域数据备份总空间
     * @param integer $DataBackupCount 跨地域数据备份文件总个数
     * @param integer $LogBackupSpace 跨地域日志备份总空间
     * @param integer $LogBackupCount 跨地域日志备份文件总个数
     * @param integer $ActualUsedSpace 跨地域备份总空间
     * @param integer $ActualUsedCount 跨地域备份总个数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CrossBackupEnabled",$param) and $param["CrossBackupEnabled"] !== null) {
            $this->CrossBackupEnabled = $param["CrossBackupEnabled"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("LastBackupStartTime",$param) and $param["LastBackupStartTime"] !== null) {
            $this->LastBackupStartTime = $param["LastBackupStartTime"];
        }

        if (array_key_exists("CrossBackupSaveDays",$param) and $param["CrossBackupSaveDays"] !== null) {
            $this->CrossBackupSaveDays = $param["CrossBackupSaveDays"];
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

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
        }

        if (array_key_exists("ActualUsedCount",$param) and $param["ActualUsedCount"] !== null) {
            $this->ActualUsedCount = $param["ActualUsedCount"];
        }
    }
}
