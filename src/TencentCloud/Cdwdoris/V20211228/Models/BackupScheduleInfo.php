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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份、迁移任务信息
 *
 * @method integer getBackupType() 获取迁移类型：
1-远端集群迁移；2-COS迁移
 * @method void setBackupType(integer $BackupType) 设置迁移类型：
1-远端集群迁移；2-COS迁移
 * @method integer getExistCount() 获取当前任务现存实例数
 * @method void setExistCount(integer $ExistCount) 设置当前任务现存实例数
 * @method string getCosSourceInfo() 获取cos信息
 * @method void setCosSourceInfo(string $CosSourceInfo) 设置cos信息
 * @method string getDorisSourceInfo() 获取doris信息
 * @method void setDorisSourceInfo(string $DorisSourceInfo) 设置doris信息
 * @method integer getRestoreType() 获取恢复类型
 * @method void setRestoreType(integer $RestoreType) 设置恢复类型
 * @method SnapshotRemainPolicy getSnapshotRemainPolicy() 获取快照保留策略
 * @method void setSnapshotRemainPolicy(SnapshotRemainPolicy $SnapshotRemainPolicy) 设置快照保留策略
 * @method string getDataRemoteRegion() 获取远程备份地域
 * @method void setDataRemoteRegion(string $DataRemoteRegion) 设置远程备份地域
 * @method boolean getIsWithinGracePeriod() 获取是否在宽限期内
 * @method void setIsWithinGracePeriod(boolean $IsWithinGracePeriod) 设置是否在宽限期内
 * @method integer getGracePeriod() 获取宽限期（天数）
 * @method void setGracePeriod(integer $GracePeriod) 设置宽限期（天数）
 * @method string getGraceStartTime() 获取宽限开始时间
 * @method void setGraceStartTime(string $GraceStartTime) 设置宽限开始时间
 * @method string getBucketType() 获取托管桶类型：standard-标准，多可用区-MAZ
 * @method void setBucketType(string $BucketType) 设置托管桶类型：standard-标准，多可用区-MAZ
 * @method integer getEnableSecurityLock() 获取是否开启安全锁：0-未开启，1-已开启
 * @method void setEnableSecurityLock(integer $EnableSecurityLock) 设置是否开启安全锁：0-未开启，1-已开启
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getInstanceStatusDesc() 获取实例状态描述
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置实例状态描述
 * @method BucketEncryptionInfo getBucketEncryption() 获取桶加密状态信息
 * @method void setBucketEncryption(BucketEncryptionInfo $BucketEncryption) 设置桶加密状态信息
 */
class BackupScheduleInfo extends AbstractModel
{
    /**
     * @var integer 迁移类型：
1-远端集群迁移；2-COS迁移
     */
    public $BackupType;

    /**
     * @var integer 当前任务现存实例数
     */
    public $ExistCount;

    /**
     * @var string cos信息
     */
    public $CosSourceInfo;

    /**
     * @var string doris信息
     */
    public $DorisSourceInfo;

    /**
     * @var integer 恢复类型
     */
    public $RestoreType;

    /**
     * @var SnapshotRemainPolicy 快照保留策略
     */
    public $SnapshotRemainPolicy;

    /**
     * @var string 远程备份地域
     */
    public $DataRemoteRegion;

    /**
     * @var boolean 是否在宽限期内
     */
    public $IsWithinGracePeriod;

    /**
     * @var integer 宽限期（天数）
     */
    public $GracePeriod;

    /**
     * @var string 宽限开始时间
     */
    public $GraceStartTime;

    /**
     * @var string 托管桶类型：standard-标准，多可用区-MAZ
     */
    public $BucketType;

    /**
     * @var integer 是否开启安全锁：0-未开启，1-已开启
     */
    public $EnableSecurityLock;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例状态描述
     */
    public $InstanceStatusDesc;

    /**
     * @var BucketEncryptionInfo 桶加密状态信息
     */
    public $BucketEncryption;

    /**
     * @param integer $BackupType 迁移类型：
1-远端集群迁移；2-COS迁移
     * @param integer $ExistCount 当前任务现存实例数
     * @param string $CosSourceInfo cos信息
     * @param string $DorisSourceInfo doris信息
     * @param integer $RestoreType 恢复类型
     * @param SnapshotRemainPolicy $SnapshotRemainPolicy 快照保留策略
     * @param string $DataRemoteRegion 远程备份地域
     * @param boolean $IsWithinGracePeriod 是否在宽限期内
     * @param integer $GracePeriod 宽限期（天数）
     * @param string $GraceStartTime 宽限开始时间
     * @param string $BucketType 托管桶类型：standard-标准，多可用区-MAZ
     * @param integer $EnableSecurityLock 是否开启安全锁：0-未开启，1-已开启
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名
     * @param string $InstanceStatus 实例状态
     * @param string $InstanceStatusDesc 实例状态描述
     * @param BucketEncryptionInfo $BucketEncryption 桶加密状态信息
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
        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("ExistCount",$param) and $param["ExistCount"] !== null) {
            $this->ExistCount = $param["ExistCount"];
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = $param["CosSourceInfo"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = $param["DorisSourceInfo"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("SnapshotRemainPolicy",$param) and $param["SnapshotRemainPolicy"] !== null) {
            $this->SnapshotRemainPolicy = new SnapshotRemainPolicy();
            $this->SnapshotRemainPolicy->deserialize($param["SnapshotRemainPolicy"]);
        }

        if (array_key_exists("DataRemoteRegion",$param) and $param["DataRemoteRegion"] !== null) {
            $this->DataRemoteRegion = $param["DataRemoteRegion"];
        }

        if (array_key_exists("IsWithinGracePeriod",$param) and $param["IsWithinGracePeriod"] !== null) {
            $this->IsWithinGracePeriod = $param["IsWithinGracePeriod"];
        }

        if (array_key_exists("GracePeriod",$param) and $param["GracePeriod"] !== null) {
            $this->GracePeriod = $param["GracePeriod"];
        }

        if (array_key_exists("GraceStartTime",$param) and $param["GraceStartTime"] !== null) {
            $this->GraceStartTime = $param["GraceStartTime"];
        }

        if (array_key_exists("BucketType",$param) and $param["BucketType"] !== null) {
            $this->BucketType = $param["BucketType"];
        }

        if (array_key_exists("EnableSecurityLock",$param) and $param["EnableSecurityLock"] !== null) {
            $this->EnableSecurityLock = $param["EnableSecurityLock"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("BucketEncryption",$param) and $param["BucketEncryption"] !== null) {
            $this->BucketEncryption = new BucketEncryptionInfo();
            $this->BucketEncryption->deserialize($param["BucketEncryption"]);
        }
    }
}
