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
 * 备份文件详细信息
 *
 * @method string getFileName() 获取文件名，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件名
 * @method void setFileName(string $FileName) 设置文件名，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件名
 * @method integer getSize() 获取文件大小，单位 KB，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件大小
 * @method void setSize(integer $Size) 设置文件大小，单位 KB，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件大小
 * @method string getStartTime() 获取备份开始时间
 * @method void setStartTime(string $StartTime) 设置备份开始时间
 * @method string getEndTime() 获取备份结束时间
 * @method void setEndTime(string $EndTime) 设置备份结束时间
 * @method string getInternalAddr() 获取内网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
 * @method void setInternalAddr(string $InternalAddr) 设置内网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
 * @method string getExternalAddr() 获取外网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
 * @method void setExternalAddr(string $ExternalAddr) 设置外网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
 * @method integer getId() 获取备份文件唯一标识，RestoreInstance接口会用到该字段，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取可回档的ID
 * @method void setId(integer $Id) 设置备份文件唯一标识，RestoreInstance接口会用到该字段，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取可回档的ID
 * @method integer getStatus() 获取备份文件状态（0-创建中；1-成功；2-失败）
 * @method void setStatus(integer $Status) 设置备份文件状态（0-创建中；1-成功；2-失败）
 * @method array getDBs() 获取多库备份时的DB列表
 * @method void setDBs(array $DBs) 设置多库备份时的DB列表
 * @method integer getStrategy() 获取备份策略（0-实例备份；1-多库备份）
 * @method void setStrategy(integer $Strategy) 设置备份策略（0-实例备份；1-多库备份）
 * @method integer getBackupWay() 获取备份方式，0-定时备份；1-手动临时备份；2-定期备份
 * @method void setBackupWay(integer $BackupWay) 设置备份方式，0-定时备份；1-手动临时备份；2-定期备份
 * @method string getBackupName() 获取备份任务名称，可自定义
 * @method void setBackupName(string $BackupName) 设置备份任务名称，可自定义
 * @method string getGroupId() 获取聚合Id，对于打包备份文件不返回此值。通过此值调用DescribeBackupFiles接口，获取单库备份文件的详细信息
 * @method void setGroupId(string $GroupId) 设置聚合Id，对于打包备份文件不返回此值。通过此值调用DescribeBackupFiles接口，获取单库备份文件的详细信息
 * @method string getBackupFormat() 获取备份文件形式（pkg-打包备份文件，single-单库备份文件）
 * @method void setBackupFormat(string $BackupFormat) 设置备份文件形式（pkg-打包备份文件，single-单库备份文件）
 * @method string getRegion() 获取实例当前地域Code
 * @method void setRegion(string $Region) 设置实例当前地域Code
 * @method array getCrossBackupAddr() 获取跨地域备份的目的地域下载链接
 * @method void setCrossBackupAddr(array $CrossBackupAddr) 设置跨地域备份的目的地域下载链接
 * @method array getCrossBackupStatus() 获取跨地域备份的目标地域和备份状态
 * @method void setCrossBackupStatus(array $CrossBackupStatus) 设置跨地域备份的目标地域和备份状态
 */
class Backup extends AbstractModel
{
    /**
     * @var string 文件名，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小，单位 KB，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件大小
     */
    public $Size;

    /**
     * @var string 备份开始时间
     */
    public $StartTime;

    /**
     * @var string 备份结束时间
     */
    public $EndTime;

    /**
     * @var string 内网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
     */
    public $InternalAddr;

    /**
     * @var string 外网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
     */
    public $ExternalAddr;

    /**
     * @var integer 备份文件唯一标识，RestoreInstance接口会用到该字段，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取可回档的ID
     */
    public $Id;

    /**
     * @var integer 备份文件状态（0-创建中；1-成功；2-失败）
     */
    public $Status;

    /**
     * @var array 多库备份时的DB列表
     */
    public $DBs;

    /**
     * @var integer 备份策略（0-实例备份；1-多库备份）
     */
    public $Strategy;

    /**
     * @var integer 备份方式，0-定时备份；1-手动临时备份；2-定期备份
     */
    public $BackupWay;

    /**
     * @var string 备份任务名称，可自定义
     */
    public $BackupName;

    /**
     * @var string 聚合Id，对于打包备份文件不返回此值。通过此值调用DescribeBackupFiles接口，获取单库备份文件的详细信息
     */
    public $GroupId;

    /**
     * @var string 备份文件形式（pkg-打包备份文件，single-单库备份文件）
     */
    public $BackupFormat;

    /**
     * @var string 实例当前地域Code
     */
    public $Region;

    /**
     * @var array 跨地域备份的目的地域下载链接
     */
    public $CrossBackupAddr;

    /**
     * @var array 跨地域备份的目标地域和备份状态
     */
    public $CrossBackupStatus;

    /**
     * @param string $FileName 文件名，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件名
     * @param integer $Size 文件大小，单位 KB，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取文件大小
     * @param string $StartTime 备份开始时间
     * @param string $EndTime 备份结束时间
     * @param string $InternalAddr 内网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
     * @param string $ExternalAddr 外网下载地址，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取下载地址
     * @param integer $Id 备份文件唯一标识，RestoreInstance接口会用到该字段，对于单库备份文件不返回此值；单库备份文件通过DescribeBackupFiles接口获取可回档的ID
     * @param integer $Status 备份文件状态（0-创建中；1-成功；2-失败）
     * @param array $DBs 多库备份时的DB列表
     * @param integer $Strategy 备份策略（0-实例备份；1-多库备份）
     * @param integer $BackupWay 备份方式，0-定时备份；1-手动临时备份；2-定期备份
     * @param string $BackupName 备份任务名称，可自定义
     * @param string $GroupId 聚合Id，对于打包备份文件不返回此值。通过此值调用DescribeBackupFiles接口，获取单库备份文件的详细信息
     * @param string $BackupFormat 备份文件形式（pkg-打包备份文件，single-单库备份文件）
     * @param string $Region 实例当前地域Code
     * @param array $CrossBackupAddr 跨地域备份的目的地域下载链接
     * @param array $CrossBackupStatus 跨地域备份的目标地域和备份状态
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = $param["DBs"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("BackupWay",$param) and $param["BackupWay"] !== null) {
            $this->BackupWay = $param["BackupWay"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("BackupFormat",$param) and $param["BackupFormat"] !== null) {
            $this->BackupFormat = $param["BackupFormat"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CrossBackupAddr",$param) and $param["CrossBackupAddr"] !== null) {
            $this->CrossBackupAddr = [];
            foreach ($param["CrossBackupAddr"] as $key => $value){
                $obj = new CrossBackupAddr();
                $obj->deserialize($value);
                array_push($this->CrossBackupAddr, $obj);
            }
        }

        if (array_key_exists("CrossBackupStatus",$param) and $param["CrossBackupStatus"] !== null) {
            $this->CrossBackupStatus = [];
            foreach ($param["CrossBackupStatus"] as $key => $value){
                $obj = new CrossRegionStatus();
                $obj->deserialize($value);
                array_push($this->CrossBackupStatus, $obj);
            }
        }
    }
}
