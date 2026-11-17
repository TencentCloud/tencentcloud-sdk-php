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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全量备份集详情
 *
 * @method string getBackupSetId() 获取<p>备份集 ID。</p>
 * @method void setBackupSetId(string $BackupSetId) 设置<p>备份集 ID。</p>
 * @method string getSourceInfo() 获取<p>源实例信息。</p>
 * @method void setSourceInfo(string $SourceInfo) 设置<p>源实例信息。</p>
 * @method string getStatus() 获取<p>备份集状态。可能的取值为："running" - 运行中;"finished" - 已完成;"failed" - 已失败;"stopped" - 已终止。</p>
 * @method void setStatus(string $Status) 设置<p>备份集状态。可能的取值为："running" - 运行中;"finished" - 已完成;"failed" - 已失败;"stopped" - 已终止。</p>
 * @method string getStartTime() 获取<p>创建时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
 * @method void setStartTime(string $StartTime) 设置<p>创建时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
 * @method string getEndTime() 获取<p>结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。</p>
 * @method string getExpireTime() 获取<p>过期时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
 * @method integer getBackupSize() 获取<p>备份集大小，单位为 Bytes。</p>
 * @method void setBackupSize(integer $BackupSize) 设置<p>备份集大小，单位为 Bytes。</p>
 * @method string getBackupMethod() 获取<p>备份方式。可能的取值为："logical" - 逻辑备份；"physical" - 物理备份。</p>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式。可能的取值为："logical" - 逻辑备份；"physical" - 物理备份。</p>
 * @method string getStorageType() 获取<p>存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。</p>
 * @method string getBackupPool() 获取<p>备份池类型。目前仅支持 "DefaultPool"，即默认存储池。</p>
 * @method void setBackupPool(string $BackupPool) 设置<p>备份池类型。目前仅支持 "DefaultPool"，即默认存储池。</p>
 * @method string getRetentionType() 获取<p>备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。</p>
 * @method void setRetentionType(string $RetentionType) 设置<p>备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。</p>
 * @method ResourceDetail getResourceDetail() 获取<p>备份集存储状态详情。</p>
 * @method void setResourceDetail(ResourceDetail $ResourceDetail) 设置<p>备份集存储状态详情。</p>
 * @method Endpoint getSourceEndpoint() 获取备份源实例信息。
 * @method void setSourceEndpoint(Endpoint $SourceEndpoint) 设置备份源实例信息。
 * @method BackupObject getBackupObject() 获取备份对象。
 * @method void setBackupObject(BackupObject $BackupObject) 设置备份对象。
 * @method FullBackupProgress getProgress() 获取备份进度。
 * @method void setProgress(FullBackupProgress $Progress) 设置备份进度。
 * @method FullBackupErrorMessage getErrorMessage() 获取备份错误信息。备份失败时有值。
 * @method void setErrorMessage(FullBackupErrorMessage $ErrorMessage) 设置备份错误信息。备份失败时有值。
 * @method BackupSetOption getBackupSetOption() 获取备份集加密信息。
 * @method void setBackupSetOption(BackupSetOption $BackupSetOption) 设置备份集加密信息。
 */
class FullBackupSetDetail extends AbstractModel
{
    /**
     * @var string <p>备份集 ID。</p>
     */
    public $BackupSetId;

    /**
     * @var string <p>源实例信息。</p>
     */
    public $SourceInfo;

    /**
     * @var string <p>备份集状态。可能的取值为："running" - 运行中;"finished" - 已完成;"failed" - 已失败;"stopped" - 已终止。</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。</p>
     */
    public $EndTime;

    /**
     * @var string <p>过期时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>备份集大小，单位为 Bytes。</p>
     */
    public $BackupSize;

    /**
     * @var string <p>备份方式。可能的取值为："logical" - 逻辑备份；"physical" - 物理备份。</p>
     */
    public $BackupMethod;

    /**
     * @var string <p>存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。</p>
     */
    public $StorageType;

    /**
     * @var string <p>备份池类型。目前仅支持 "DefaultPool"，即默认存储池。</p>
     */
    public $BackupPool;

    /**
     * @var string <p>备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。</p>
     */
    public $RetentionType;

    /**
     * @var ResourceDetail <p>备份集存储状态详情。</p>
     */
    public $ResourceDetail;

    /**
     * @var Endpoint 备份源实例信息。
     */
    public $SourceEndpoint;

    /**
     * @var BackupObject 备份对象。
     */
    public $BackupObject;

    /**
     * @var FullBackupProgress 备份进度。
     */
    public $Progress;

    /**
     * @var FullBackupErrorMessage 备份错误信息。备份失败时有值。
     */
    public $ErrorMessage;

    /**
     * @var BackupSetOption 备份集加密信息。
     */
    public $BackupSetOption;

    /**
     * @param string $BackupSetId <p>备份集 ID。</p>
     * @param string $SourceInfo <p>源实例信息。</p>
     * @param string $Status <p>备份集状态。可能的取值为："running" - 运行中;"finished" - 已完成;"failed" - 已失败;"stopped" - 已终止。</p>
     * @param string $StartTime <p>创建时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
     * @param string $EndTime <p>结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。</p>
     * @param string $ExpireTime <p>过期时间。格式为 YYYY-MM-DD hh:mm:ss。</p>
     * @param integer $BackupSize <p>备份集大小，单位为 Bytes。</p>
     * @param string $BackupMethod <p>备份方式。可能的取值为："logical" - 逻辑备份；"physical" - 物理备份。</p>
     * @param string $StorageType <p>存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。</p>
     * @param string $BackupPool <p>备份池类型。目前仅支持 "DefaultPool"，即默认存储池。</p>
     * @param string $RetentionType <p>备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。</p>
     * @param ResourceDetail $ResourceDetail <p>备份集存储状态详情。</p>
     * @param Endpoint $SourceEndpoint 备份源实例信息。
     * @param BackupObject $BackupObject 备份对象。
     * @param FullBackupProgress $Progress 备份进度。
     * @param FullBackupErrorMessage $ErrorMessage 备份错误信息。备份失败时有值。
     * @param BackupSetOption $BackupSetOption 备份集加密信息。
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
        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = $param["SourceInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("BackupPool",$param) and $param["BackupPool"] !== null) {
            $this->BackupPool = $param["BackupPool"];
        }

        if (array_key_exists("RetentionType",$param) and $param["RetentionType"] !== null) {
            $this->RetentionType = $param["RetentionType"];
        }

        if (array_key_exists("ResourceDetail",$param) and $param["ResourceDetail"] !== null) {
            $this->ResourceDetail = new ResourceDetail();
            $this->ResourceDetail->deserialize($param["ResourceDetail"]);
        }

        if (array_key_exists("SourceEndpoint",$param) and $param["SourceEndpoint"] !== null) {
            $this->SourceEndpoint = new Endpoint();
            $this->SourceEndpoint->deserialize($param["SourceEndpoint"]);
        }

        if (array_key_exists("BackupObject",$param) and $param["BackupObject"] !== null) {
            $this->BackupObject = new BackupObject();
            $this->BackupObject->deserialize($param["BackupObject"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = new FullBackupProgress();
            $this->Progress->deserialize($param["Progress"]);
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = new FullBackupErrorMessage();
            $this->ErrorMessage->deserialize($param["ErrorMessage"]);
        }

        if (array_key_exists("BackupSetOption",$param) and $param["BackupSetOption"] !== null) {
            $this->BackupSetOption = new BackupSetOption();
            $this->BackupSetOption->deserialize($param["BackupSetOption"]);
        }
    }
}
