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
 * 备份实例详情
 *
 * @method integer getJobId() 获取备份实例id
 * @method void setJobId(integer $JobId) 设置备份实例id
 * @method string getSnapshot() 获取备份实例名
 * @method void setSnapshot(string $Snapshot) 设置备份实例名
 * @method integer getBackUpSize() 获取备份数据量
 * @method void setBackUpSize(integer $BackUpSize) 设置备份数据量
 * @method integer getBackUpSingleSize() 获取备份单副本数据量
 * @method void setBackUpSingleSize(integer $BackUpSingleSize) 设置备份单副本数据量
 * @method string getBackUpTime() 获取实例创建时间
 * @method void setBackUpTime(string $BackUpTime) 设置实例创建时间
 * @method string getExpireTime() 获取实例过期时间
 * @method void setExpireTime(string $ExpireTime) 设置实例过期时间
 * @method string getJobStatus() 获取实例状态
 * @method void setJobStatus(string $JobStatus) 设置实例状态
 * @method integer getBackupType() 获取0为默认。1时是对远端的doris进行备份，不周期，一次性
 * @method void setBackupType(integer $BackupType) 设置0为默认。1时是对远端的doris进行备份，不周期，一次性
 * @method integer getBackupTimeType() 获取0为默认。1时是立即备份。2时是迁移
 * @method void setBackupTimeType(integer $BackupTimeType) 设置0为默认。1时是立即备份。2时是迁移
 * @method DorisSourceInfo getDorisSourceInfo() 获取远端doris的连接信息
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) 设置远端doris的连接信息
 * @method integer getJobStatusNum() 获取实例状态对应的数值
 * @method void setJobStatusNum(integer $JobStatusNum) 设置实例状态对应的数值
 * @method BackupCosInfo getBackupCosInfo() 获取备份实例中关于cos的信息	
 * @method void setBackupCosInfo(BackupCosInfo $BackupCosInfo) 设置备份实例中关于cos的信息	
 * @method boolean getIsUserDefineBucket() 获取是否使用的自定义桶
 * @method void setIsUserDefineBucket(boolean $IsUserDefineBucket) 设置是否使用的自定义桶
 * @method string getErrorReason() 获取错误原因
 * @method void setErrorReason(string $ErrorReason) 设置错误原因
 * @method SnapshotRemainPolicy getSnapshotRemainPolicy() 获取快照保留策略
 * @method void setSnapshotRemainPolicy(SnapshotRemainPolicy $SnapshotRemainPolicy) 设置快照保留策略
 * @method integer getIsolationCount() 获取隔离次数
 * @method void setIsolationCount(integer $IsolationCount) 设置隔离次数
 * @method integer getEnableSecurityLock() 获取是否开启安全锁
 * @method void setEnableSecurityLock(integer $EnableSecurityLock) 设置是否开启安全锁
 * @method integer getGracePeriod() 获取宽限期天数
 * @method void setGracePeriod(integer $GracePeriod) 设置宽限期天数
 * @method string getGraceStartTime() 获取宽限期开始时间
 * @method void setGraceStartTime(string $GraceStartTime) 设置宽限期开始时间
 * @method boolean getIsWithinGracePeriod() 获取是否在宽限期内
 * @method void setIsWithinGracePeriod(boolean $IsWithinGracePeriod) 设置是否在宽限期内
 * @method boolean getUseManagedBucket() 获取是否使用托管桶
 * @method void setUseManagedBucket(boolean $UseManagedBucket) 设置是否使用托管桶
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getInstanceStatusDesc() 获取实例状态描述
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置实例状态描述
 * @method string getDataRemoteRegion() 获取备份远程桶地域
 * @method void setDataRemoteRegion(string $DataRemoteRegion) 设置备份远程桶地域
 * @method BucketEncryptionInfo getBucketEncryption() 获取桶加密状态信息
 * @method void setBucketEncryption(BucketEncryptionInfo $BucketEncryption) 设置桶加密状态信息
 * @method string getEncryption() 获取备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled
 * @method void setEncryption(string $Encryption) 设置备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled
 * @method boolean getEncryptionEnabled() 获取是否开通加密存储：0-未开通，1-已开通
 * @method void setEncryptionEnabled(boolean $EncryptionEnabled) 设置是否开通加密存储：0-未开通，1-已开通
 */
class BackUpJobDisplay extends AbstractModel
{
    /**
     * @var integer 备份实例id
     */
    public $JobId;

    /**
     * @var string 备份实例名
     */
    public $Snapshot;

    /**
     * @var integer 备份数据量
     */
    public $BackUpSize;

    /**
     * @var integer 备份单副本数据量
     */
    public $BackUpSingleSize;

    /**
     * @var string 实例创建时间
     */
    public $BackUpTime;

    /**
     * @var string 实例过期时间
     */
    public $ExpireTime;

    /**
     * @var string 实例状态
     */
    public $JobStatus;

    /**
     * @var integer 0为默认。1时是对远端的doris进行备份，不周期，一次性
     */
    public $BackupType;

    /**
     * @var integer 0为默认。1时是立即备份。2时是迁移
     */
    public $BackupTimeType;

    /**
     * @var DorisSourceInfo 远端doris的连接信息
     */
    public $DorisSourceInfo;

    /**
     * @var integer 实例状态对应的数值
     */
    public $JobStatusNum;

    /**
     * @var BackupCosInfo 备份实例中关于cos的信息	
     */
    public $BackupCosInfo;

    /**
     * @var boolean 是否使用的自定义桶
     */
    public $IsUserDefineBucket;

    /**
     * @var string 错误原因
     */
    public $ErrorReason;

    /**
     * @var SnapshotRemainPolicy 快照保留策略
     */
    public $SnapshotRemainPolicy;

    /**
     * @var integer 隔离次数
     */
    public $IsolationCount;

    /**
     * @var integer 是否开启安全锁
     */
    public $EnableSecurityLock;

    /**
     * @var integer 宽限期天数
     */
    public $GracePeriod;

    /**
     * @var string 宽限期开始时间
     */
    public $GraceStartTime;

    /**
     * @var boolean 是否在宽限期内
     */
    public $IsWithinGracePeriod;

    /**
     * @var boolean 是否使用托管桶
     */
    public $UseManagedBucket;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
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
     * @var string 备份远程桶地域
     */
    public $DataRemoteRegion;

    /**
     * @var BucketEncryptionInfo 桶加密状态信息
     */
    public $BucketEncryption;

    /**
     * @var string 备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled
     */
    public $Encryption;

    /**
     * @var boolean 是否开通加密存储：0-未开通，1-已开通
     */
    public $EncryptionEnabled;

    /**
     * @param integer $JobId 备份实例id
     * @param string $Snapshot 备份实例名
     * @param integer $BackUpSize 备份数据量
     * @param integer $BackUpSingleSize 备份单副本数据量
     * @param string $BackUpTime 实例创建时间
     * @param string $ExpireTime 实例过期时间
     * @param string $JobStatus 实例状态
     * @param integer $BackupType 0为默认。1时是对远端的doris进行备份，不周期，一次性
     * @param integer $BackupTimeType 0为默认。1时是立即备份。2时是迁移
     * @param DorisSourceInfo $DorisSourceInfo 远端doris的连接信息
     * @param integer $JobStatusNum 实例状态对应的数值
     * @param BackupCosInfo $BackupCosInfo 备份实例中关于cos的信息	
     * @param boolean $IsUserDefineBucket 是否使用的自定义桶
     * @param string $ErrorReason 错误原因
     * @param SnapshotRemainPolicy $SnapshotRemainPolicy 快照保留策略
     * @param integer $IsolationCount 隔离次数
     * @param integer $EnableSecurityLock 是否开启安全锁
     * @param integer $GracePeriod 宽限期天数
     * @param string $GraceStartTime 宽限期开始时间
     * @param boolean $IsWithinGracePeriod 是否在宽限期内
     * @param boolean $UseManagedBucket 是否使用托管桶
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceStatus 实例状态
     * @param string $InstanceStatusDesc 实例状态描述
     * @param string $DataRemoteRegion 备份远程桶地域
     * @param BucketEncryptionInfo $BucketEncryption 桶加密状态信息
     * @param string $Encryption 备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled
     * @param boolean $EncryptionEnabled 是否开通加密存储：0-未开通，1-已开通
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Snapshot",$param) and $param["Snapshot"] !== null) {
            $this->Snapshot = $param["Snapshot"];
        }

        if (array_key_exists("BackUpSize",$param) and $param["BackUpSize"] !== null) {
            $this->BackUpSize = $param["BackUpSize"];
        }

        if (array_key_exists("BackUpSingleSize",$param) and $param["BackUpSingleSize"] !== null) {
            $this->BackUpSingleSize = $param["BackUpSingleSize"];
        }

        if (array_key_exists("BackUpTime",$param) and $param["BackUpTime"] !== null) {
            $this->BackUpTime = $param["BackUpTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTimeType",$param) and $param["BackupTimeType"] !== null) {
            $this->BackupTimeType = $param["BackupTimeType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("JobStatusNum",$param) and $param["JobStatusNum"] !== null) {
            $this->JobStatusNum = $param["JobStatusNum"];
        }

        if (array_key_exists("BackupCosInfo",$param) and $param["BackupCosInfo"] !== null) {
            $this->BackupCosInfo = new BackupCosInfo();
            $this->BackupCosInfo->deserialize($param["BackupCosInfo"]);
        }

        if (array_key_exists("IsUserDefineBucket",$param) and $param["IsUserDefineBucket"] !== null) {
            $this->IsUserDefineBucket = $param["IsUserDefineBucket"];
        }

        if (array_key_exists("ErrorReason",$param) and $param["ErrorReason"] !== null) {
            $this->ErrorReason = $param["ErrorReason"];
        }

        if (array_key_exists("SnapshotRemainPolicy",$param) and $param["SnapshotRemainPolicy"] !== null) {
            $this->SnapshotRemainPolicy = new SnapshotRemainPolicy();
            $this->SnapshotRemainPolicy->deserialize($param["SnapshotRemainPolicy"]);
        }

        if (array_key_exists("IsolationCount",$param) and $param["IsolationCount"] !== null) {
            $this->IsolationCount = $param["IsolationCount"];
        }

        if (array_key_exists("EnableSecurityLock",$param) and $param["EnableSecurityLock"] !== null) {
            $this->EnableSecurityLock = $param["EnableSecurityLock"];
        }

        if (array_key_exists("GracePeriod",$param) and $param["GracePeriod"] !== null) {
            $this->GracePeriod = $param["GracePeriod"];
        }

        if (array_key_exists("GraceStartTime",$param) and $param["GraceStartTime"] !== null) {
            $this->GraceStartTime = $param["GraceStartTime"];
        }

        if (array_key_exists("IsWithinGracePeriod",$param) and $param["IsWithinGracePeriod"] !== null) {
            $this->IsWithinGracePeriod = $param["IsWithinGracePeriod"];
        }

        if (array_key_exists("UseManagedBucket",$param) and $param["UseManagedBucket"] !== null) {
            $this->UseManagedBucket = $param["UseManagedBucket"];
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

        if (array_key_exists("DataRemoteRegion",$param) and $param["DataRemoteRegion"] !== null) {
            $this->DataRemoteRegion = $param["DataRemoteRegion"];
        }

        if (array_key_exists("BucketEncryption",$param) and $param["BucketEncryption"] !== null) {
            $this->BucketEncryption = new BucketEncryptionInfo();
            $this->BucketEncryption->deserialize($param["BucketEncryption"]);
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("EncryptionEnabled",$param) and $param["EncryptionEnabled"] !== null) {
            $this->EncryptionEnabled = $param["EncryptionEnabled"];
        }
    }
}
