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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份详细信息
 *
 * @method string getName() 获取备份文件名
 * @method void setName(string $Name) 设置备份文件名
 * @method integer getSize() 获取备份文件大小，单位：Byte
 * @method void setSize(integer $Size) 设置备份文件大小，单位：Byte
 * @method string getDate() 获取备份快照时间，时间格式：2016-03-17 02:10:37
 * @method void setDate(string $Date) 设置备份快照时间，时间格式：2016-03-17 02:10:37
 * @method string getIntranetUrl() 获取下载地址
 * @method void setIntranetUrl(string $IntranetUrl) 设置下载地址
 * @method string getInternetUrl() 获取下载地址
 * @method void setInternetUrl(string $InternetUrl) 设置下载地址
 * @method string getType() 获取日志具体类型。可能的值有 "logical": 逻辑冷备， "physical": 物理冷备。
 * @method void setType(string $Type) 设置日志具体类型。可能的值有 "logical": 逻辑冷备， "physical": 物理冷备。
 * @method integer getBackupId() 获取备份子任务的ID，删除备份文件时使用
 * @method void setBackupId(integer $BackupId) 设置备份子任务的ID，删除备份文件时使用
 * @method string getStatus() 获取备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
 * @method void setStatus(string $Status) 设置备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
 * @method string getFinishTime() 获取备份任务的完成时间
 * @method void setFinishTime(string $FinishTime) 设置备份任务的完成时间
 * @method string getCreator() 获取（该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。
 * @method void setCreator(string $Creator) 设置（该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。
 * @method string getStartTime() 获取备份任务的开始时间
 * @method void setStartTime(string $StartTime) 设置备份任务的开始时间
 * @method string getMethod() 获取备份方法。可能的值有 "full": 全量备份， "partial": 部分备份。
 * @method void setMethod(string $Method) 设置备份方法。可能的值有 "full": 全量备份， "partial": 部分备份。
 * @method string getWay() 获取备份方式。可能的值有 "manual": 手动备份， "automatic": 自动备份。
 * @method void setWay(string $Way) 设置备份方式。可能的值有 "manual": 手动备份， "automatic": 自动备份。
 * @method string getManualBackupName() 获取手动备份别名
 * @method void setManualBackupName(string $ManualBackupName) 设置手动备份别名
 * @method string getSaveMode() 获取备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份
 * @method void setSaveMode(string $SaveMode) 设置备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份
 * @method string getRegion() 获取本地备份所在地域
 * @method void setRegion(string $Region) 设置本地备份所在地域
 * @method array getRemoteInfo() 获取异地备份详细信息
 * @method void setRemoteInfo(array $RemoteInfo) 设置异地备份详细信息
 * @method integer getCosStorageType() 获取存储方式，0-常规存储，1-归档存储，默认为0
 * @method void setCosStorageType(integer $CosStorageType) 设置存储方式，0-常规存储，1-归档存储，默认为0
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getEncryptionFlag() 获取备份文件是否加密， on-加密， off-未加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptionFlag(string $EncryptionFlag) 设置备份文件是否加密， on-加密， off-未加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutedGTIDSet() 获取备份GTID点位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutedGTIDSet(string $ExecutedGTIDSet) 设置备份GTID点位
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string 备份文件名
     */
    public $Name;

    /**
     * @var integer 备份文件大小，单位：Byte
     */
    public $Size;

    /**
     * @var string 备份快照时间，时间格式：2016-03-17 02:10:37
     */
    public $Date;

    /**
     * @var string 下载地址
     */
    public $IntranetUrl;

    /**
     * @var string 下载地址
     */
    public $InternetUrl;

    /**
     * @var string 日志具体类型。可能的值有 "logical": 逻辑冷备， "physical": 物理冷备。
     */
    public $Type;

    /**
     * @var integer 备份子任务的ID，删除备份文件时使用
     */
    public $BackupId;

    /**
     * @var string 备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
     */
    public $Status;

    /**
     * @var string 备份任务的完成时间
     */
    public $FinishTime;

    /**
     * @var string （该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。
     */
    public $Creator;

    /**
     * @var string 备份任务的开始时间
     */
    public $StartTime;

    /**
     * @var string 备份方法。可能的值有 "full": 全量备份， "partial": 部分备份。
     */
    public $Method;

    /**
     * @var string 备份方式。可能的值有 "manual": 手动备份， "automatic": 自动备份。
     */
    public $Way;

    /**
     * @var string 手动备份别名
     */
    public $ManualBackupName;

    /**
     * @var string 备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份
     */
    public $SaveMode;

    /**
     * @var string 本地备份所在地域
     */
    public $Region;

    /**
     * @var array 异地备份详细信息
     */
    public $RemoteInfo;

    /**
     * @var integer 存储方式，0-常规存储，1-归档存储，默认为0
     */
    public $CosStorageType;

    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 备份文件是否加密， on-加密， off-未加密
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptionFlag;

    /**
     * @var string 备份GTID点位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutedGTIDSet;

    /**
     * @param string $Name 备份文件名
     * @param integer $Size 备份文件大小，单位：Byte
     * @param string $Date 备份快照时间，时间格式：2016-03-17 02:10:37
     * @param string $IntranetUrl 下载地址
     * @param string $InternetUrl 下载地址
     * @param string $Type 日志具体类型。可能的值有 "logical": 逻辑冷备， "physical": 物理冷备。
     * @param integer $BackupId 备份子任务的ID，删除备份文件时使用
     * @param string $Status 备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
     * @param string $FinishTime 备份任务的完成时间
     * @param string $Creator （该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。
     * @param string $StartTime 备份任务的开始时间
     * @param string $Method 备份方法。可能的值有 "full": 全量备份， "partial": 部分备份。
     * @param string $Way 备份方式。可能的值有 "manual": 手动备份， "automatic": 自动备份。
     * @param string $ManualBackupName 手动备份别名
     * @param string $SaveMode 备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份
     * @param string $Region 本地备份所在地域
     * @param array $RemoteInfo 异地备份详细信息
     * @param integer $CosStorageType 存储方式，0-常规存储，1-归档存储，默认为0
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $EncryptionFlag 备份文件是否加密， on-加密， off-未加密
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutedGTIDSet 备份GTID点位
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Way",$param) and $param["Way"] !== null) {
            $this->Way = $param["Way"];
        }

        if (array_key_exists("ManualBackupName",$param) and $param["ManualBackupName"] !== null) {
            $this->ManualBackupName = $param["ManualBackupName"];
        }

        if (array_key_exists("SaveMode",$param) and $param["SaveMode"] !== null) {
            $this->SaveMode = $param["SaveMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RemoteInfo",$param) and $param["RemoteInfo"] !== null) {
            $this->RemoteInfo = [];
            foreach ($param["RemoteInfo"] as $key => $value){
                $obj = new RemoteBackupInfo();
                $obj->deserialize($value);
                array_push($this->RemoteInfo, $obj);
            }
        }

        if (array_key_exists("CosStorageType",$param) and $param["CosStorageType"] !== null) {
            $this->CosStorageType = $param["CosStorageType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EncryptionFlag",$param) and $param["EncryptionFlag"] !== null) {
            $this->EncryptionFlag = $param["EncryptionFlag"];
        }

        if (array_key_exists("ExecutedGTIDSet",$param) and $param["ExecutedGTIDSet"] !== null) {
            $this->ExecutedGTIDSet = $param["ExecutedGTIDSet"];
        }
    }
}
