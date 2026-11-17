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
 * 增量备份文件信息
 *
 * @method string getFileName() 获取文件名。
 * @method void setFileName(string $FileName) 设置文件名。
 * @method string getBackupSetId() 获取备份集 ID。
 * @method void setBackupSetId(string $BackupSetId) 设置备份集 ID。
 * @method string getStatus() 获取文件状态。取值：
- notReady：未就绪
- backuping：备份中
- finished：备份完成
- failed：备份失败
 * @method void setStatus(string $Status) 设置文件状态。取值：
- notReady：未就绪
- backuping：备份中
- finished：备份完成
- failed：备份失败
 * @method string getSourceInfo() 获取源库连接信息。云数据库实例为实例 ID，其余为 ip:port。
 * @method void setSourceInfo(string $SourceInfo) 设置源库连接信息。云数据库实例为实例 ID，其余为 ip:port。
 * @method string getStartTime() 获取开始时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method void setStartTime(string $StartTime) 设置开始时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method string getEndTime() 获取结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
 * @method void setEndTime(string $EndTime) 设置结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
 * @method string getExpireTime() 获取过期时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method integer getBackupSize() 获取文件大小，单位：字节。
 * @method void setBackupSize(integer $BackupSize) 设置文件大小，单位：字节。
 * @method string getBackupMethod() 获取备份方式。取值：logical（逻辑备份）。
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式。取值：logical（逻辑备份）。
 * @method string getStorageType() 获取存储类型。取值：DBSStorage（内置存储）。
 * @method void setStorageType(string $StorageType) 设置存储类型。取值：DBSStorage（内置存储）。
 * @method string getRetentionType() 获取存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
 * @method void setRetentionType(string $RetentionType) 设置存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
 * @method ResourceDetail getResourceDetail() 获取备份集存储详情。
 * @method void setResourceDetail(ResourceDetail $ResourceDetail) 设置备份集存储详情。
 * @method string getBackupPool() 获取备份池。
 * @method void setBackupPool(string $BackupPool) 设置备份池。
 * @method array getAllowedActions() 获取当前状态下允许的操作。取值：download。
 * @method void setAllowedActions(array $AllowedActions) 设置当前状态下允许的操作。取值：download。
 * @method array getAllActions() 获取支持的全部操作。
 * @method void setAllActions(array $AllActions) 设置支持的全部操作。
 * @method string getLastModified() 获取文件最后修改时间。格式为 YYYY-MM-DD hh:mm:ss。
 * @method void setLastModified(string $LastModified) 设置文件最后修改时间。格式为 YYYY-MM-DD hh:mm:ss。
 */
class BackupFile extends AbstractModel
{
    /**
     * @var string 文件名。
     */
    public $FileName;

    /**
     * @var string 备份集 ID。
     */
    public $BackupSetId;

    /**
     * @var string 文件状态。取值：
- notReady：未就绪
- backuping：备份中
- finished：备份完成
- failed：备份失败
     */
    public $Status;

    /**
     * @var string 源库连接信息。云数据库实例为实例 ID，其余为 ip:port。
     */
    public $SourceInfo;

    /**
     * @var string 开始时间。格式为 YYYY-MM-DD hh:mm:ss。
     */
    public $StartTime;

    /**
     * @var string 结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
     */
    public $EndTime;

    /**
     * @var string 过期时间。格式为 YYYY-MM-DD hh:mm:ss。
     */
    public $ExpireTime;

    /**
     * @var integer 文件大小，单位：字节。
     */
    public $BackupSize;

    /**
     * @var string 备份方式。取值：logical（逻辑备份）。
     */
    public $BackupMethod;

    /**
     * @var string 存储类型。取值：DBSStorage（内置存储）。
     */
    public $StorageType;

    /**
     * @var string 存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
     */
    public $RetentionType;

    /**
     * @var ResourceDetail 备份集存储详情。
     */
    public $ResourceDetail;

    /**
     * @var string 备份池。
     */
    public $BackupPool;

    /**
     * @var array 当前状态下允许的操作。取值：download。
     */
    public $AllowedActions;

    /**
     * @var array 支持的全部操作。
     */
    public $AllActions;

    /**
     * @var string 文件最后修改时间。格式为 YYYY-MM-DD hh:mm:ss。
     */
    public $LastModified;

    /**
     * @param string $FileName 文件名。
     * @param string $BackupSetId 备份集 ID。
     * @param string $Status 文件状态。取值：
- notReady：未就绪
- backuping：备份中
- finished：备份完成
- failed：备份失败
     * @param string $SourceInfo 源库连接信息。云数据库实例为实例 ID，其余为 ip:port。
     * @param string $StartTime 开始时间。格式为 YYYY-MM-DD hh:mm:ss。
     * @param string $EndTime 结束时间。格式为 YYYY-MM-DD hh:mm:ss，备份集尚未结束时返回 0000-00-00 00:00:00。
     * @param string $ExpireTime 过期时间。格式为 YYYY-MM-DD hh:mm:ss。
     * @param integer $BackupSize 文件大小，单位：字节。
     * @param string $BackupMethod 备份方式。取值：logical（逻辑备份）。
     * @param string $StorageType 存储类型。取值：DBSStorage（内置存储）。
     * @param string $RetentionType 存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
     * @param ResourceDetail $ResourceDetail 备份集存储详情。
     * @param string $BackupPool 备份池。
     * @param array $AllowedActions 当前状态下允许的操作。取值：download。
     * @param array $AllActions 支持的全部操作。
     * @param string $LastModified 文件最后修改时间。格式为 YYYY-MM-DD hh:mm:ss。
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

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = $param["SourceInfo"];
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

        if (array_key_exists("RetentionType",$param) and $param["RetentionType"] !== null) {
            $this->RetentionType = $param["RetentionType"];
        }

        if (array_key_exists("ResourceDetail",$param) and $param["ResourceDetail"] !== null) {
            $this->ResourceDetail = new ResourceDetail();
            $this->ResourceDetail->deserialize($param["ResourceDetail"]);
        }

        if (array_key_exists("BackupPool",$param) and $param["BackupPool"] !== null) {
            $this->BackupPool = $param["BackupPool"];
        }

        if (array_key_exists("AllowedActions",$param) and $param["AllowedActions"] !== null) {
            $this->AllowedActions = $param["AllowedActions"];
        }

        if (array_key_exists("AllActions",$param) and $param["AllActions"] !== null) {
            $this->AllActions = $param["AllActions"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }
    }
}
