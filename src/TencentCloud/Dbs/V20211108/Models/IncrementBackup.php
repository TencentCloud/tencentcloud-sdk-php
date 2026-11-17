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
 * 增量备份集信息
 *
 * @method string getBackupSetId() 获取备份集 ID。
 * @method void setBackupSetId(string $BackupSetId) 设置备份集 ID。
 * @method string getSourceInfo() 获取源实例信息。
 * @method void setSourceInfo(string $SourceInfo) 设置源实例信息。
 * @method string getStatus() 获取备份集状态。可能的取值为：
"running" - 运行中;
"finished" - 已完成;
"failed" - 已失败;
"stopped" - 已终止。
 * @method void setStatus(string $Status) 设置备份集状态。可能的取值为：
"running" - 运行中;
"finished" - 已完成;
"failed" - 已失败;
"stopped" - 已终止。
 * @method string getStartTime() 获取开始时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method void setStartTime(string $StartTime) 设置开始时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method string getEndTime() 获取结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
 * @method void setEndTime(string $EndTime) 设置结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
 * @method string getExpireTime() 获取过期时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未生成过期时间时返回空字符串。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未生成过期时间时返回空字符串。
 * @method integer getFileCount() 获取备份集文件个数。
 * @method void setFileCount(integer $FileCount) 设置备份集文件个数。
 * @method string getBackupMethod() 获取备份方式。可能的取值为：
"logical" - 逻辑备份；
"physical" - 物理备份。
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式。可能的取值为：
"logical" - 逻辑备份；
"physical" - 物理备份。
 * @method string getStorageType() 获取存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。
 * @method void setStorageType(string $StorageType) 设置存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。
 * @method string getBackupPool() 获取备份池类型。目前仅支持 "DefaultPool"，即默认存储池。
 * @method void setBackupPool(string $BackupPool) 设置备份池类型。目前仅支持 "DefaultPool"，即默认存储池。
 * @method string getRetentionType() 获取备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。
 * @method void setRetentionType(string $RetentionType) 设置备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。
 * @method ResourceItemDetail getResourceDetail() 获取备份集存储状态详情。
 * @method void setResourceDetail(ResourceItemDetail $ResourceDetail) 设置备份集存储状态详情。
 */
class IncrementBackup extends AbstractModel
{
    /**
     * @var string 备份集 ID。
     */
    public $BackupSetId;

    /**
     * @var string 源实例信息。
     */
    public $SourceInfo;

    /**
     * @var string 备份集状态。可能的取值为：
"running" - 运行中;
"finished" - 已完成;
"failed" - 已失败;
"stopped" - 已终止。
     */
    public $Status;

    /**
     * @var string 开始时间。格式为 YYYY-MM-DD hh:mm:ss。
     */
    public $StartTime;

    /**
     * @var string 结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
     */
    public $EndTime;

    /**
     * @var string 过期时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未生成过期时间时返回空字符串。
     */
    public $ExpireTime;

    /**
     * @var integer 备份集文件个数。
     */
    public $FileCount;

    /**
     * @var string 备份方式。可能的取值为：
"logical" - 逻辑备份；
"physical" - 物理备份。
     */
    public $BackupMethod;

    /**
     * @var string 存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。
     */
    public $StorageType;

    /**
     * @var string 备份池类型。目前仅支持 "DefaultPool"，即默认存储池。
     */
    public $BackupPool;

    /**
     * @var string 备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。
     */
    public $RetentionType;

    /**
     * @var ResourceItemDetail 备份集存储状态详情。
     */
    public $ResourceDetail;

    /**
     * @param string $BackupSetId 备份集 ID。
     * @param string $SourceInfo 源实例信息。
     * @param string $Status 备份集状态。可能的取值为：
"running" - 运行中;
"finished" - 已完成;
"failed" - 已失败;
"stopped" - 已终止。
     * @param string $StartTime 开始时间。格式为 YYYY-MM-DD hh:mm:ss。
     * @param string $EndTime 结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
     * @param string $ExpireTime 过期时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未生成过期时间时返回空字符串。
     * @param integer $FileCount 备份集文件个数。
     * @param string $BackupMethod 备份方式。可能的取值为：
"logical" - 逻辑备份；
"physical" - 物理备份。
     * @param string $StorageType 存储类型。目前仅支持 "DBSStorage"，即 DBS 内置存储。
     * @param string $BackupPool 备份池类型。目前仅支持 "DefaultPool"，即默认存储池。
     * @param string $RetentionType 备份集存储类型。支持的取值范围为："standard" - 标准存储；"tiered" - 分级存储。
     * @param ResourceItemDetail $ResourceDetail 备份集存储状态详情。
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

        if (array_key_exists("FileCount",$param) and $param["FileCount"] !== null) {
            $this->FileCount = $param["FileCount"];
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
            $this->ResourceDetail = new ResourceItemDetail();
            $this->ResourceDetail->deserialize($param["ResourceDetail"]);
        }
    }
}
