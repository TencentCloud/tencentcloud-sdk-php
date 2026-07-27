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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CFS数据迁移任务信息
 *
 * @method string getTaskName() 获取<p>迁移任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>迁移任务名称</p>
 * @method string getTaskId() 获取<p>迁移任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>迁移任务id</p>
 * @method integer getMigrationType() 获取<p>迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移</p>
 * @method void setMigrationType(integer $MigrationType) 设置<p>迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移</p>
 * @method integer getMigrationMode() 获取<p>迁移模式，默认为0。0: 全量迁移</p>
 * @method void setMigrationMode(integer $MigrationMode) 设置<p>迁移模式，默认为0。0: 全量迁移</p>
 * @method string getBucketName() 获取<p>数据源桶名称</p>
 * @method void setBucketName(string $BucketName) 设置<p>数据源桶名称</p>
 * @method string getBucketRegion() 获取<p>数据源桶地域</p>
 * @method void setBucketRegion(string $BucketRegion) 设置<p>数据源桶地域</p>
 * @method string getBucketAddress() 获取<p>数据源桶地址</p>
 * @method void setBucketAddress(string $BucketAddress) 设置<p>数据源桶地址</p>
 * @method string getListAddress() 获取<p>清单地址</p>
 * @method void setListAddress(string $ListAddress) 设置<p>清单地址</p>
 * @method string getFsName() 获取<p>文件系统实例名称</p>
 * @method void setFsName(string $FsName) 设置<p>文件系统实例名称</p>
 * @method string getFileSystemId() 获取<p>文件系统实例Id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统实例Id</p>
 * @method string getFsPath() 获取<p>文件系统路径</p>
 * @method void setFsPath(string $FsPath) 设置<p>文件系统路径</p>
 * @method integer getCoverType() 获取<p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
 * @method void setCoverType(integer $CoverType) 设置<p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getEndTime() 获取<p>完成/终止时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>完成/终止时间</p>
 * @method integer getStatus() 获取<p>迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中</p>
 * @method void setStatus(integer $Status) 设置<p>迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中</p>
 * @method integer getFileTotalCount() 获取<p>文件数量</p>
 * @method void setFileTotalCount(integer $FileTotalCount) 设置<p>文件数量</p>
 * @method integer getFileMigratedCount() 获取<p>已迁移文件数量</p>
 * @method void setFileMigratedCount(integer $FileMigratedCount) 设置<p>已迁移文件数量</p>
 * @method integer getFileFailedCount() 获取<p>迁移失败文件数量</p>
 * @method void setFileFailedCount(integer $FileFailedCount) 设置<p>迁移失败文件数量</p>
 * @method integer getFileTotalSize() 获取<p>文件容量，单位Byte</p>
 * @method void setFileTotalSize(integer $FileTotalSize) 设置<p>文件容量，单位Byte</p>
 * @method integer getFileMigratedSize() 获取<p>已迁移文件容量，单位Byte</p>
 * @method void setFileMigratedSize(integer $FileMigratedSize) 设置<p>已迁移文件容量，单位Byte</p>
 * @method integer getFileFailedSize() 获取<p>迁移失败文件容量，单位Byte</p>
 * @method void setFileFailedSize(integer $FileFailedSize) 设置<p>迁移失败文件容量，单位Byte</p>
 * @method string getFileTotalList() 获取<p>全部清单</p>
 * @method void setFileTotalList(string $FileTotalList) 设置<p>全部清单</p>
 * @method string getFileCompletedList() 获取<p>已完成文件清单</p>
 * @method void setFileCompletedList(string $FileCompletedList) 设置<p>已完成文件清单</p>
 * @method string getFileFailedList() 获取<p>失败文件清单</p>
 * @method void setFileFailedList(string $FileFailedList) 设置<p>失败文件清单</p>
 * @method string getBucketPath() 获取<p>源桶路径</p>
 * @method void setBucketPath(string $BucketPath) 设置<p>源桶路径</p>
 * @method integer getDirection() 获取<p>迁移方向。0: 对象存储迁移至文件系统，1: 文件系统迁移至对象存储。默认 0</p>
 * @method void setDirection(integer $Direction) 设置<p>迁移方向。0: 对象存储迁移至文件系统，1: 文件系统迁移至对象存储。默认 0</p>
 * @method string getSrcService() 获取<p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
 * @method void setSrcService(string $SrcService) 设置<p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
 */
class MigrationTaskInfo extends AbstractModel
{
    /**
     * @var string <p>迁移任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>迁移任务id</p>
     */
    public $TaskId;

    /**
     * @var integer <p>迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移</p>
     */
    public $MigrationType;

    /**
     * @var integer <p>迁移模式，默认为0。0: 全量迁移</p>
     */
    public $MigrationMode;

    /**
     * @var string <p>数据源桶名称</p>
     */
    public $BucketName;

    /**
     * @var string <p>数据源桶地域</p>
     */
    public $BucketRegion;

    /**
     * @var string <p>数据源桶地址</p>
     */
    public $BucketAddress;

    /**
     * @var string <p>清单地址</p>
     */
    public $ListAddress;

    /**
     * @var string <p>文件系统实例名称</p>
     */
    public $FsName;

    /**
     * @var string <p>文件系统实例Id</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>文件系统路径</p>
     */
    public $FsPath;

    /**
     * @var integer <p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
     */
    public $CoverType;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>完成/终止时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中</p>
     */
    public $Status;

    /**
     * @var integer <p>文件数量</p>
     */
    public $FileTotalCount;

    /**
     * @var integer <p>已迁移文件数量</p>
     */
    public $FileMigratedCount;

    /**
     * @var integer <p>迁移失败文件数量</p>
     */
    public $FileFailedCount;

    /**
     * @var integer <p>文件容量，单位Byte</p>
     */
    public $FileTotalSize;

    /**
     * @var integer <p>已迁移文件容量，单位Byte</p>
     */
    public $FileMigratedSize;

    /**
     * @var integer <p>迁移失败文件容量，单位Byte</p>
     */
    public $FileFailedSize;

    /**
     * @var string <p>全部清单</p>
     */
    public $FileTotalList;

    /**
     * @var string <p>已完成文件清单</p>
     */
    public $FileCompletedList;

    /**
     * @var string <p>失败文件清单</p>
     */
    public $FileFailedList;

    /**
     * @var string <p>源桶路径</p>
     */
    public $BucketPath;

    /**
     * @var integer <p>迁移方向。0: 对象存储迁移至文件系统，1: 文件系统迁移至对象存储。默认 0</p>
     */
    public $Direction;

    /**
     * @var string <p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
     */
    public $SrcService;

    /**
     * @param string $TaskName <p>迁移任务名称</p>
     * @param string $TaskId <p>迁移任务id</p>
     * @param integer $MigrationType <p>迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移</p>
     * @param integer $MigrationMode <p>迁移模式，默认为0。0: 全量迁移</p>
     * @param string $BucketName <p>数据源桶名称</p>
     * @param string $BucketRegion <p>数据源桶地域</p>
     * @param string $BucketAddress <p>数据源桶地址</p>
     * @param string $ListAddress <p>清单地址</p>
     * @param string $FsName <p>文件系统实例名称</p>
     * @param string $FileSystemId <p>文件系统实例Id</p>
     * @param string $FsPath <p>文件系统路径</p>
     * @param integer $CoverType <p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $EndTime <p>完成/终止时间</p>
     * @param integer $Status <p>迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中</p>
     * @param integer $FileTotalCount <p>文件数量</p>
     * @param integer $FileMigratedCount <p>已迁移文件数量</p>
     * @param integer $FileFailedCount <p>迁移失败文件数量</p>
     * @param integer $FileTotalSize <p>文件容量，单位Byte</p>
     * @param integer $FileMigratedSize <p>已迁移文件容量，单位Byte</p>
     * @param integer $FileFailedSize <p>迁移失败文件容量，单位Byte</p>
     * @param string $FileTotalList <p>全部清单</p>
     * @param string $FileCompletedList <p>已完成文件清单</p>
     * @param string $FileFailedList <p>失败文件清单</p>
     * @param string $BucketPath <p>源桶路径</p>
     * @param integer $Direction <p>迁移方向。0: 对象存储迁移至文件系统，1: 文件系统迁移至对象存储。默认 0</p>
     * @param string $SrcService <p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("SrcService",$param) and $param["SrcService"] !== null) {
            $this->SrcService = $param["SrcService"];
        }
    }
}
