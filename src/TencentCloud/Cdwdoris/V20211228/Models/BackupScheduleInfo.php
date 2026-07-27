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
 * @method integer getBackupType() 获取<p>迁移类型：<br>1-远端集群迁移；2-COS迁移</p>
 * @method void setBackupType(integer $BackupType) 设置<p>迁移类型：<br>1-远端集群迁移；2-COS迁移</p>
 * @method integer getExistCount() 获取<p>当前任务现存实例数</p>
 * @method void setExistCount(integer $ExistCount) 设置<p>当前任务现存实例数</p>
 * @method string getCosSourceInfo() 获取<p>cos信息</p>
 * @method void setCosSourceInfo(string $CosSourceInfo) 设置<p>cos信息</p>
 * @method string getDorisSourceInfo() 获取<p>doris信息</p>
 * @method void setDorisSourceInfo(string $DorisSourceInfo) 设置<p>doris信息</p>
 * @method integer getRestoreType() 获取<p>恢复类型</p>
 * @method void setRestoreType(integer $RestoreType) 设置<p>恢复类型</p>
 * @method SnapshotRemainPolicy getSnapshotRemainPolicy() 获取<p>快照保留策略</p>
 * @method void setSnapshotRemainPolicy(SnapshotRemainPolicy $SnapshotRemainPolicy) 设置<p>快照保留策略</p>
 * @method string getDataRemoteRegion() 获取<p>远程备份地域</p>
 * @method void setDataRemoteRegion(string $DataRemoteRegion) 设置<p>远程备份地域</p>
 * @method boolean getIsWithinGracePeriod() 获取<p>是否在宽限期内</p>
 * @method void setIsWithinGracePeriod(boolean $IsWithinGracePeriod) 设置<p>是否在宽限期内</p>
 * @method integer getGracePeriod() 获取<p>宽限期（天数）</p>
 * @method void setGracePeriod(integer $GracePeriod) 设置<p>宽限期（天数）</p>
 * @method string getGraceStartTime() 获取<p>宽限开始时间</p>
 * @method void setGraceStartTime(string $GraceStartTime) 设置<p>宽限开始时间</p>
 * @method string getBucketType() 获取<p>托管桶类型：standard-标准，多可用区-MAZ</p>
 * @method void setBucketType(string $BucketType) 设置<p>托管桶类型：standard-标准，多可用区-MAZ</p>
 * @method integer getEnableSecurityLock() 获取<p>是否开启安全锁：0-未开启，1-已开启</p>
 * @method void setEnableSecurityLock(integer $EnableSecurityLock) 设置<p>是否开启安全锁：0-未开启，1-已开启</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method string getInstanceStatus() 获取<p>实例状态</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态</p>
 * @method string getInstanceStatusDesc() 获取<p>实例状态描述</p>
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置<p>实例状态描述</p>
 * @method BucketEncryptionInfo getBucketEncryption() 获取<p>桶加密状态信息</p>
 * @method void setBucketEncryption(BucketEncryptionInfo $BucketEncryption) 设置<p>桶加密状态信息</p>
 */
class BackupScheduleInfo extends AbstractModel
{
    /**
     * @var integer <p>迁移类型：<br>1-远端集群迁移；2-COS迁移</p>
     */
    public $BackupType;

    /**
     * @var integer <p>当前任务现存实例数</p>
     */
    public $ExistCount;

    /**
     * @var string <p>cos信息</p>
     */
    public $CosSourceInfo;

    /**
     * @var string <p>doris信息</p>
     */
    public $DorisSourceInfo;

    /**
     * @var integer <p>恢复类型</p>
     */
    public $RestoreType;

    /**
     * @var SnapshotRemainPolicy <p>快照保留策略</p>
     */
    public $SnapshotRemainPolicy;

    /**
     * @var string <p>远程备份地域</p>
     */
    public $DataRemoteRegion;

    /**
     * @var boolean <p>是否在宽限期内</p>
     */
    public $IsWithinGracePeriod;

    /**
     * @var integer <p>宽限期（天数）</p>
     */
    public $GracePeriod;

    /**
     * @var string <p>宽限开始时间</p>
     */
    public $GraceStartTime;

    /**
     * @var string <p>托管桶类型：standard-标准，多可用区-MAZ</p>
     */
    public $BucketType;

    /**
     * @var integer <p>是否开启安全锁：0-未开启，1-已开启</p>
     */
    public $EnableSecurityLock;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例状态</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>实例状态描述</p>
     */
    public $InstanceStatusDesc;

    /**
     * @var BucketEncryptionInfo <p>桶加密状态信息</p>
     */
    public $BucketEncryption;

    /**
     * @param integer $BackupType <p>迁移类型：<br>1-远端集群迁移；2-COS迁移</p>
     * @param integer $ExistCount <p>当前任务现存实例数</p>
     * @param string $CosSourceInfo <p>cos信息</p>
     * @param string $DorisSourceInfo <p>doris信息</p>
     * @param integer $RestoreType <p>恢复类型</p>
     * @param SnapshotRemainPolicy $SnapshotRemainPolicy <p>快照保留策略</p>
     * @param string $DataRemoteRegion <p>远程备份地域</p>
     * @param boolean $IsWithinGracePeriod <p>是否在宽限期内</p>
     * @param integer $GracePeriod <p>宽限期（天数）</p>
     * @param string $GraceStartTime <p>宽限开始时间</p>
     * @param string $BucketType <p>托管桶类型：standard-标准，多可用区-MAZ</p>
     * @param integer $EnableSecurityLock <p>是否开启安全锁：0-未开启，1-已开启</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名</p>
     * @param string $InstanceStatus <p>实例状态</p>
     * @param string $InstanceStatusDesc <p>实例状态描述</p>
     * @param BucketEncryptionInfo $BucketEncryption <p>桶加密状态信息</p>
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
