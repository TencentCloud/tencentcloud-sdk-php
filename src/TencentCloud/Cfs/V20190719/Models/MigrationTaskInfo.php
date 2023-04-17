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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CFS数据迁移任务信息
 *
 * @method string getTaskName() 获取迁移任务名称
 * @method void setTaskName(string $TaskName) 设置迁移任务名称
 * @method string getTaskId() 获取迁移任务id
 * @method void setTaskId(string $TaskId) 设置迁移任务id
 * @method integer getMigrationType() 获取迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
 * @method void setMigrationType(integer $MigrationType) 设置迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
 * @method integer getMigrationMode() 获取迁移模式，默认为0。0: 全量迁移
 * @method void setMigrationMode(integer $MigrationMode) 设置迁移模式，默认为0。0: 全量迁移
 * @method string getBucketName() 获取数据源桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置数据源桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketRegion() 获取数据源桶地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketRegion(string $BucketRegion) 设置数据源桶地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketAddress() 获取数据源桶地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketAddress(string $BucketAddress) 设置数据源桶地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListAddress() 获取清单地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListAddress(string $ListAddress) 设置清单地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFsName() 获取文件系统实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFsName(string $FsName) 设置文件系统实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSystemId() 获取文件系统实例Id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统实例Id
 * @method string getFsPath() 获取文件系统路径
 * @method void setFsPath(string $FsPath) 设置文件系统路径
 * @method integer getCoverType() 获取同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
 * @method void setCoverType(integer $CoverType) 设置同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getEndTime() 获取完成/终止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置完成/终止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取迁移状态。0: 已完成；1: 进行中；2: 已终止
 * @method void setStatus(integer $Status) 设置迁移状态。0: 已完成；1: 进行中；2: 已终止
 * @method integer getFileTotalCount() 获取文件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileTotalCount(integer $FileTotalCount) 设置文件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileMigratedCount() 获取已迁移文件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMigratedCount(integer $FileMigratedCount) 设置已迁移文件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileFailedCount() 获取迁移失败文件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileFailedCount(integer $FileFailedCount) 设置迁移失败文件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileTotalSize() 获取文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileTotalSize(integer $FileTotalSize) 设置文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileMigratedSize() 获取已迁移文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMigratedSize(integer $FileMigratedSize) 设置已迁移文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileFailedSize() 获取迁移失败文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileFailedSize(integer $FileFailedSize) 设置迁移失败文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileTotalList() 获取全部清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileTotalList(string $FileTotalList) 设置全部清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileCompletedList() 获取已完成文件清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileCompletedList(string $FileCompletedList) 设置已完成文件清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileFailedList() 获取失败文件清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileFailedList(string $FileFailedList) 设置失败文件清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketPath() 获取源桶路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketPath(string $BucketPath) 设置源桶路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrationTaskInfo extends AbstractModel
{
    /**
     * @var string 迁移任务名称
     */
    public $TaskName;

    /**
     * @var string 迁移任务id
     */
    public $TaskId;

    /**
     * @var integer 迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
     */
    public $MigrationType;

    /**
     * @var integer 迁移模式，默认为0。0: 全量迁移
     */
    public $MigrationMode;

    /**
     * @var string 数据源桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @var string 数据源桶地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketRegion;

    /**
     * @var string 数据源桶地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketAddress;

    /**
     * @var string 清单地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListAddress;

    /**
     * @var string 文件系统实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FsName;

    /**
     * @var string 文件系统实例Id
     */
    public $FileSystemId;

    /**
     * @var string 文件系统路径
     */
    public $FsPath;

    /**
     * @var integer 同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
     */
    public $CoverType;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 完成/终止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 迁移状态。0: 已完成；1: 进行中；2: 已终止
     */
    public $Status;

    /**
     * @var integer 文件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileTotalCount;

    /**
     * @var integer 已迁移文件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMigratedCount;

    /**
     * @var integer 迁移失败文件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileFailedCount;

    /**
     * @var integer 文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileTotalSize;

    /**
     * @var integer 已迁移文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMigratedSize;

    /**
     * @var integer 迁移失败文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileFailedSize;

    /**
     * @var string 全部清单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileTotalList;

    /**
     * @var string 已完成文件清单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileCompletedList;

    /**
     * @var string 失败文件清单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileFailedList;

    /**
     * @var string 源桶路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketPath;

    /**
     * @param string $TaskName 迁移任务名称
     * @param string $TaskId 迁移任务id
     * @param integer $MigrationType 迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
     * @param integer $MigrationMode 迁移模式，默认为0。0: 全量迁移
     * @param string $BucketName 数据源桶名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketRegion 数据源桶地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketAddress 数据源桶地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListAddress 清单地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FsName 文件系统实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSystemId 文件系统实例Id
     * @param string $FsPath 文件系统路径
     * @param integer $CoverType 同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
     * @param integer $CreateTime 创建时间
     * @param integer $EndTime 完成/终止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 迁移状态。0: 已完成；1: 进行中；2: 已终止
     * @param integer $FileTotalCount 文件数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileMigratedCount 已迁移文件数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileFailedCount 迁移失败文件数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileTotalSize 文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileMigratedSize 已迁移文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileFailedSize 迁移失败文件容量，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileTotalList 全部清单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileCompletedList 已完成文件清单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileFailedList 失败文件清单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketPath 源桶路径
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }

        if (array_key_exists("MigrationMode",$param) and $param["MigrationMode"] !== null) {
            $this->MigrationMode = $param["MigrationMode"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketAddress",$param) and $param["BucketAddress"] !== null) {
            $this->BucketAddress = $param["BucketAddress"];
        }

        if (array_key_exists("ListAddress",$param) and $param["ListAddress"] !== null) {
            $this->ListAddress = $param["ListAddress"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("FsPath",$param) and $param["FsPath"] !== null) {
            $this->FsPath = $param["FsPath"];
        }

        if (array_key_exists("CoverType",$param) and $param["CoverType"] !== null) {
            $this->CoverType = $param["CoverType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileTotalCount",$param) and $param["FileTotalCount"] !== null) {
            $this->FileTotalCount = $param["FileTotalCount"];
        }

        if (array_key_exists("FileMigratedCount",$param) and $param["FileMigratedCount"] !== null) {
            $this->FileMigratedCount = $param["FileMigratedCount"];
        }

        if (array_key_exists("FileFailedCount",$param) and $param["FileFailedCount"] !== null) {
            $this->FileFailedCount = $param["FileFailedCount"];
        }

        if (array_key_exists("FileTotalSize",$param) and $param["FileTotalSize"] !== null) {
            $this->FileTotalSize = $param["FileTotalSize"];
        }

        if (array_key_exists("FileMigratedSize",$param) and $param["FileMigratedSize"] !== null) {
            $this->FileMigratedSize = $param["FileMigratedSize"];
        }

        if (array_key_exists("FileFailedSize",$param) and $param["FileFailedSize"] !== null) {
            $this->FileFailedSize = $param["FileFailedSize"];
        }

        if (array_key_exists("FileTotalList",$param) and $param["FileTotalList"] !== null) {
            $this->FileTotalList = $param["FileTotalList"];
        }

        if (array_key_exists("FileCompletedList",$param) and $param["FileCompletedList"] !== null) {
            $this->FileCompletedList = $param["FileCompletedList"];
        }

        if (array_key_exists("FileFailedList",$param) and $param["FileFailedList"] !== null) {
            $this->FileFailedList = $param["FileFailedList"];
        }

        if (array_key_exists("BucketPath",$param) and $param["BucketPath"] !== null) {
            $this->BucketPath = $param["BucketPath"];
        }
    }
}
