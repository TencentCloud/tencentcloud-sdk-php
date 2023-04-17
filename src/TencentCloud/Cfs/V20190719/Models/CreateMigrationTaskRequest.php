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
 * CreateMigrationTask请求参数结构体
 *
 * @method string getTaskName() 获取迁移任务名称
 * @method void setTaskName(string $TaskName) 设置迁移任务名称
 * @method integer getMigrationType() 获取迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
 * @method void setMigrationType(integer $MigrationType) 设置迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
 * @method integer getMigrationMode() 获取迁移模式，默认为0。0: 全量迁移
 * @method void setMigrationMode(integer $MigrationMode) 设置迁移模式，默认为0。0: 全量迁移
 * @method string getSrcSecretId() 获取数据源账号的SecretId
 * @method void setSrcSecretId(string $SrcSecretId) 设置数据源账号的SecretId
 * @method string getSrcSecretKey() 获取数据源账号的SecretKey
 * @method void setSrcSecretKey(string $SrcSecretKey) 设置数据源账号的SecretKey
 * @method string getFileSystemId() 获取文件系统实例Id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统实例Id
 * @method string getFsPath() 获取文件系统路径
 * @method void setFsPath(string $FsPath) 设置文件系统路径
 * @method integer getCoverType() 获取同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
 * @method void setCoverType(integer $CoverType) 设置同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
 * @method string getSrcService() 获取数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
 * @method void setSrcService(string $SrcService) 设置数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
 * @method string getBucketName() 获取数据源桶名称，名称和地址至少有一个
 * @method void setBucketName(string $BucketName) 设置数据源桶名称，名称和地址至少有一个
 * @method string getBucketRegion() 获取数据源桶地域
 * @method void setBucketRegion(string $BucketRegion) 设置数据源桶地域
 * @method string getBucketAddress() 获取数据源桶地址，名称和地址至少有一个
 * @method void setBucketAddress(string $BucketAddress) 设置数据源桶地址，名称和地址至少有一个
 * @method string getListAddress() 获取清单地址，迁移方式为清单迁移时必填
 * @method void setListAddress(string $ListAddress) 设置清单地址，迁移方式为清单迁移时必填
 * @method string getFsName() 获取目标文件系统名称
 * @method void setFsName(string $FsName) 设置目标文件系统名称
 * @method string getBucketPath() 获取源桶路径，默认为/
 * @method void setBucketPath(string $BucketPath) 设置源桶路径，默认为/
 */
class CreateMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string 迁移任务名称
     */
    public $TaskName;

    /**
     * @var integer 迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
     */
    public $MigrationType;

    /**
     * @var integer 迁移模式，默认为0。0: 全量迁移
     */
    public $MigrationMode;

    /**
     * @var string 数据源账号的SecretId
     */
    public $SrcSecretId;

    /**
     * @var string 数据源账号的SecretKey
     */
    public $SrcSecretKey;

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
     * @var string 数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
     */
    public $SrcService;

    /**
     * @var string 数据源桶名称，名称和地址至少有一个
     */
    public $BucketName;

    /**
     * @var string 数据源桶地域
     */
    public $BucketRegion;

    /**
     * @var string 数据源桶地址，名称和地址至少有一个
     */
    public $BucketAddress;

    /**
     * @var string 清单地址，迁移方式为清单迁移时必填
     */
    public $ListAddress;

    /**
     * @var string 目标文件系统名称
     */
    public $FsName;

    /**
     * @var string 源桶路径，默认为/
     */
    public $BucketPath;

    /**
     * @param string $TaskName 迁移任务名称
     * @param integer $MigrationType 迁移方式标志位，默认为0。0: 桶迁移；1: 清单迁移
     * @param integer $MigrationMode 迁移模式，默认为0。0: 全量迁移
     * @param string $SrcSecretId 数据源账号的SecretId
     * @param string $SrcSecretKey 数据源账号的SecretKey
     * @param string $FileSystemId 文件系统实例Id
     * @param string $FsPath 文件系统路径
     * @param integer $CoverType 同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖
     * @param string $SrcService 数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
     * @param string $BucketName 数据源桶名称，名称和地址至少有一个
     * @param string $BucketRegion 数据源桶地域
     * @param string $BucketAddress 数据源桶地址，名称和地址至少有一个
     * @param string $ListAddress 清单地址，迁移方式为清单迁移时必填
     * @param string $FsName 目标文件系统名称
     * @param string $BucketPath 源桶路径，默认为/
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

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }

        if (array_key_exists("MigrationMode",$param) and $param["MigrationMode"] !== null) {
            $this->MigrationMode = $param["MigrationMode"];
        }

        if (array_key_exists("SrcSecretId",$param) and $param["SrcSecretId"] !== null) {
            $this->SrcSecretId = $param["SrcSecretId"];
        }

        if (array_key_exists("SrcSecretKey",$param) and $param["SrcSecretKey"] !== null) {
            $this->SrcSecretKey = $param["SrcSecretKey"];
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

        if (array_key_exists("SrcService",$param) and $param["SrcService"] !== null) {
            $this->SrcService = $param["SrcService"];
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

        if (array_key_exists("BucketPath",$param) and $param["BucketPath"] !== null) {
            $this->BucketPath = $param["BucketPath"];
        }
    }
}
