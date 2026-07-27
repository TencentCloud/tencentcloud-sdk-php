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
 * @method integer getJobId() 获取<p>备份实例id</p>
 * @method void setJobId(integer $JobId) 设置<p>备份实例id</p>
 * @method string getSnapshot() 获取<p>备份实例名</p>
 * @method void setSnapshot(string $Snapshot) 设置<p>备份实例名</p>
 * @method integer getBackUpSize() 获取<p>备份数据量</p>
 * @method void setBackUpSize(integer $BackUpSize) 设置<p>备份数据量</p>
 * @method integer getBackUpSingleSize() 获取<p>备份单副本数据量</p>
 * @method void setBackUpSingleSize(integer $BackUpSingleSize) 设置<p>备份单副本数据量</p>
 * @method string getBackUpTime() 获取<p>实例创建时间</p>
 * @method void setBackUpTime(string $BackUpTime) 设置<p>实例创建时间</p>
 * @method string getExpireTime() 获取<p>实例过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>实例过期时间</p>
 * @method string getJobStatus() 获取<p>实例状态</p>
 * @method void setJobStatus(string $JobStatus) 设置<p>实例状态</p>
 * @method integer getBackupType() 获取<p>0为默认。1时是对远端的doris进行备份，不周期，一次性</p>
 * @method void setBackupType(integer $BackupType) 设置<p>0为默认。1时是对远端的doris进行备份，不周期，一次性</p>
 * @method integer getBackupTimeType() 获取<p>0为默认。1时是立即备份。2时是迁移</p>
 * @method void setBackupTimeType(integer $BackupTimeType) 设置<p>0为默认。1时是立即备份。2时是迁移</p>
 * @method DorisSourceInfo getDorisSourceInfo() 获取<p>远端doris的连接信息</p>
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) 设置<p>远端doris的连接信息</p>
 * @method integer getJobStatusNum() 获取<p>实例状态对应的数值</p>
 * @method void setJobStatusNum(integer $JobStatusNum) 设置<p>实例状态对应的数值</p>
 * @method BackupCosInfo getBackupCosInfo() 获取<p>备份实例中关于cos的信息</p>
 * @method void setBackupCosInfo(BackupCosInfo $BackupCosInfo) 设置<p>备份实例中关于cos的信息</p>
 * @method boolean getIsUserDefineBucket() 获取<p>是否使用的自定义桶</p>
 * @method void setIsUserDefineBucket(boolean $IsUserDefineBucket) 设置<p>是否使用的自定义桶</p>
 * @method string getErrorReason() 获取<p>错误原因</p>
 * @method void setErrorReason(string $ErrorReason) 设置<p>错误原因</p>
 * @method SnapshotRemainPolicy getSnapshotRemainPolicy() 获取<p>快照保留策略</p>
 * @method void setSnapshotRemainPolicy(SnapshotRemainPolicy $SnapshotRemainPolicy) 设置<p>快照保留策略</p>
 * @method integer getIsolationCount() 获取<p>隔离次数</p>
 * @method void setIsolationCount(integer $IsolationCount) 设置<p>隔离次数</p>
 * @method integer getEnableSecurityLock() 获取<p>是否开启安全锁</p>
 * @method void setEnableSecurityLock(integer $EnableSecurityLock) 设置<p>是否开启安全锁</p>
 * @method integer getGracePeriod() 获取<p>宽限期天数</p>
 * @method void setGracePeriod(integer $GracePeriod) 设置<p>宽限期天数</p>
 * @method string getGraceStartTime() 获取<p>宽限期开始时间</p>
 * @method void setGraceStartTime(string $GraceStartTime) 设置<p>宽限期开始时间</p>
 * @method boolean getIsWithinGracePeriod() 获取<p>是否在宽限期内</p>
 * @method void setIsWithinGracePeriod(boolean $IsWithinGracePeriod) 设置<p>是否在宽限期内</p>
 * @method boolean getUseManagedBucket() 获取<p>是否使用托管桶</p>
 * @method void setUseManagedBucket(boolean $UseManagedBucket) 设置<p>是否使用托管桶</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceStatus() 获取<p>实例状态</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态</p>
 * @method string getInstanceStatusDesc() 获取<p>实例状态描述</p>
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置<p>实例状态描述</p>
 * @method string getDataRemoteRegion() 获取<p>备份远程桶地域</p>
 * @method void setDataRemoteRegion(string $DataRemoteRegion) 设置<p>备份远程桶地域</p>
 * @method BucketEncryptionInfo getBucketEncryption() 获取<p>桶加密状态信息</p>
 * @method void setBucketEncryption(BucketEncryptionInfo $BucketEncryption) 设置<p>桶加密状态信息</p>
 * @method string getEncryption() 获取<p>备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled</p>
 * @method void setEncryption(string $Encryption) 设置<p>备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled</p>
 * @method boolean getEncryptionEnabled() 获取<p>是否开通加密存储：0-未开通，1-已开通</p>
 * @method void setEncryptionEnabled(boolean $EncryptionEnabled) 设置<p>是否开通加密存储：0-未开通，1-已开通</p>
 * @method integer getScheduleId() 获取<p>任务调度id</p>
 * @method void setScheduleId(integer $ScheduleId) 设置<p>任务调度id</p>
 * @method integer getTotalTasks() 获取<p>总任务数（库数）</p>
 * @method void setTotalTasks(integer $TotalTasks) 设置<p>总任务数（库数）</p>
 * @method integer getCompletedTasks() 获取<p>已完成任务数</p>
 * @method void setCompletedTasks(integer $CompletedTasks) 设置<p>已完成任务数</p>
 * @method integer getFailedTasks() 获取<p>失败任务数</p>
 * @method void setFailedTasks(integer $FailedTasks) 设置<p>失败任务数</p>
 * @method string getBackupProgress() 获取<p>备份进度描述，如 3/5</p>
 * @method void setBackupProgress(string $BackupProgress) 设置<p>备份进度描述，如 3/5</p>
 */
class BackUpJobDisplay extends AbstractModel
{
    /**
     * @var integer <p>备份实例id</p>
     */
    public $JobId;

    /**
     * @var string <p>备份实例名</p>
     */
    public $Snapshot;

    /**
     * @var integer <p>备份数据量</p>
     */
    public $BackUpSize;

    /**
     * @var integer <p>备份单副本数据量</p>
     */
    public $BackUpSingleSize;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $BackUpTime;

    /**
     * @var string <p>实例过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>实例状态</p>
     */
    public $JobStatus;

    /**
     * @var integer <p>0为默认。1时是对远端的doris进行备份，不周期，一次性</p>
     */
    public $BackupType;

    /**
     * @var integer <p>0为默认。1时是立即备份。2时是迁移</p>
     */
    public $BackupTimeType;

    /**
     * @var DorisSourceInfo <p>远端doris的连接信息</p>
     */
    public $DorisSourceInfo;

    /**
     * @var integer <p>实例状态对应的数值</p>
     */
    public $JobStatusNum;

    /**
     * @var BackupCosInfo <p>备份实例中关于cos的信息</p>
     */
    public $BackupCosInfo;

    /**
     * @var boolean <p>是否使用的自定义桶</p>
     */
    public $IsUserDefineBucket;

    /**
     * @var string <p>错误原因</p>
     */
    public $ErrorReason;

    /**
     * @var SnapshotRemainPolicy <p>快照保留策略</p>
     */
    public $SnapshotRemainPolicy;

    /**
     * @var integer <p>隔离次数</p>
     */
    public $IsolationCount;

    /**
     * @var integer <p>是否开启安全锁</p>
     */
    public $EnableSecurityLock;

    /**
     * @var integer <p>宽限期天数</p>
     */
    public $GracePeriod;

    /**
     * @var string <p>宽限期开始时间</p>
     */
    public $GraceStartTime;

    /**
     * @var boolean <p>是否在宽限期内</p>
     */
    public $IsWithinGracePeriod;

    /**
     * @var boolean <p>是否使用托管桶</p>
     */
    public $UseManagedBucket;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
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
     * @var string <p>备份远程桶地域</p>
     */
    public $DataRemoteRegion;

    /**
     * @var BucketEncryptionInfo <p>桶加密状态信息</p>
     */
    public $BucketEncryption;

    /**
     * @var string <p>备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled</p>
     */
    public $Encryption;

    /**
     * @var boolean <p>是否开通加密存储：0-未开通，1-已开通</p>
     */
    public $EncryptionEnabled;

    /**
     * @var integer <p>任务调度id</p>
     */
    public $ScheduleId;

    /**
     * @var integer <p>总任务数（库数）</p>
     */
    public $TotalTasks;

    /**
     * @var integer <p>已完成任务数</p>
     */
    public $CompletedTasks;

    /**
     * @var integer <p>失败任务数</p>
     */
    public $FailedTasks;

    /**
     * @var string <p>备份进度描述，如 3/5</p>
     */
    public $BackupProgress;

    /**
     * @param integer $JobId <p>备份实例id</p>
     * @param string $Snapshot <p>备份实例名</p>
     * @param integer $BackUpSize <p>备份数据量</p>
     * @param integer $BackUpSingleSize <p>备份单副本数据量</p>
     * @param string $BackUpTime <p>实例创建时间</p>
     * @param string $ExpireTime <p>实例过期时间</p>
     * @param string $JobStatus <p>实例状态</p>
     * @param integer $BackupType <p>0为默认。1时是对远端的doris进行备份，不周期，一次性</p>
     * @param integer $BackupTimeType <p>0为默认。1时是立即备份。2时是迁移</p>
     * @param DorisSourceInfo $DorisSourceInfo <p>远端doris的连接信息</p>
     * @param integer $JobStatusNum <p>实例状态对应的数值</p>
     * @param BackupCosInfo $BackupCosInfo <p>备份实例中关于cos的信息</p>
     * @param boolean $IsUserDefineBucket <p>是否使用的自定义桶</p>
     * @param string $ErrorReason <p>错误原因</p>
     * @param SnapshotRemainPolicy $SnapshotRemainPolicy <p>快照保留策略</p>
     * @param integer $IsolationCount <p>隔离次数</p>
     * @param integer $EnableSecurityLock <p>是否开启安全锁</p>
     * @param integer $GracePeriod <p>宽限期天数</p>
     * @param string $GraceStartTime <p>宽限期开始时间</p>
     * @param boolean $IsWithinGracePeriod <p>是否在宽限期内</p>
     * @param boolean $UseManagedBucket <p>是否使用托管桶</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceStatus <p>实例状态</p>
     * @param string $InstanceStatusDesc <p>实例状态描述</p>
     * @param string $DataRemoteRegion <p>备份远程桶地域</p>
     * @param BucketEncryptionInfo $BucketEncryption <p>桶加密状态信息</p>
     * @param string $Encryption <p>备份任务创建时记录的加密类型：SSE-COS/SSE-KMS/disabled</p>
     * @param boolean $EncryptionEnabled <p>是否开通加密存储：0-未开通，1-已开通</p>
     * @param integer $ScheduleId <p>任务调度id</p>
     * @param integer $TotalTasks <p>总任务数（库数）</p>
     * @param integer $CompletedTasks <p>已完成任务数</p>
     * @param integer $FailedTasks <p>失败任务数</p>
     * @param string $BackupProgress <p>备份进度描述，如 3/5</p>
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

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("TotalTasks",$param) and $param["TotalTasks"] !== null) {
            $this->TotalTasks = $param["TotalTasks"];
        }

        if (array_key_exists("CompletedTasks",$param) and $param["CompletedTasks"] !== null) {
            $this->CompletedTasks = $param["CompletedTasks"];
        }

        if (array_key_exists("FailedTasks",$param) and $param["FailedTasks"] !== null) {
            $this->FailedTasks = $param["FailedTasks"];
        }

        if (array_key_exists("BackupProgress",$param) and $param["BackupProgress"] !== null) {
            $this->BackupProgress = $param["BackupProgress"];
        }
    }
}
