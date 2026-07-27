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
 * CreateMigrationTask请求参数结构体
 *
 * @method string getTaskName() 获取<p>迁移任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>迁移任务名称</p>
 * @method integer getMigrationType() 获取<p>迁移方式标志位，默认为0。0：桶迁移；1：清单迁移</p>
 * @method void setMigrationType(integer $MigrationType) 设置<p>迁移方式标志位，默认为0。0：桶迁移；1：清单迁移</p>
 * @method integer getMigrationMode() 获取<p>迁移模式，默认为0。0: 全量迁移</p>
 * @method void setMigrationMode(integer $MigrationMode) 设置<p>迁移模式，默认为0。0: 全量迁移</p>
 * @method string getSrcSecretId() 获取<p>数据源账号的 SecretId</p>
 * @method void setSrcSecretId(string $SrcSecretId) 设置<p>数据源账号的 SecretId</p>
 * @method string getSrcSecretKey() 获取<p>数据源账号的 SecretKey</p>
 * @method void setSrcSecretKey(string $SrcSecretKey) 设置<p>数据源账号的 SecretKey</p>
 * @method string getFileSystemId() 获取<p>文件系统实例 ID，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统实例 ID，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
 * @method string getFsPath() 获取<p>文件系统路径</p>
 * @method void setFsPath(string $FsPath) 设置<p>文件系统路径</p>
 * @method integer getCoverType() 获取<p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
 * @method void setCoverType(integer $CoverType) 设置<p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
 * @method string getSrcService() 获取<p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
 * @method void setSrcService(string $SrcService) 设置<p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
 * @method string getBucketName() 获取<p>数据源桶名称；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
 * @method void setBucketName(string $BucketName) 设置<p>数据源桶名称；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
 * @method string getBucketRegion() 获取<p>数据源桶地域</p>
 * @method void setBucketRegion(string $BucketRegion) 设置<p>数据源桶地域</p>
 * @method string getBucketAddress() 获取<p>数据源桶地址；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
 * @method void setBucketAddress(string $BucketAddress) 设置<p>数据源桶地址；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
 * @method string getListAddress() 获取<p>清单地址，迁移方式为清单迁移时必填</p>
 * @method void setListAddress(string $ListAddress) 设置<p>清单地址，迁移方式为清单迁移时必填</p>
 * @method string getFsName() 获取<p>目标文件系统名称</p>
 * @method void setFsName(string $FsName) 设置<p>目标文件系统名称</p>
 * @method string getBucketPath() 获取<p>源桶路径，默认为 /</p>
 * @method void setBucketPath(string $BucketPath) 设置<p>源桶路径，默认为 /</p>
 * @method integer getDirection() 获取<p>迁移方向；0：对象存储迁移至文件系统，1：文件系统迁移至对象存储。默认为0</p>
 * @method void setDirection(integer $Direction) 设置<p>迁移方向；0：对象存储迁移至文件系统，1：文件系统迁移至对象存储。默认为0</p>
 */
class CreateMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string <p>迁移任务名称</p>
     */
    public $TaskName;

    /**
     * @var integer <p>迁移方式标志位，默认为0。0：桶迁移；1：清单迁移</p>
     */
    public $MigrationType;

    /**
     * @var integer <p>迁移模式，默认为0。0: 全量迁移</p>
     */
    public $MigrationMode;

    /**
     * @var string <p>数据源账号的 SecretId</p>
     */
    public $SrcSecretId;

    /**
     * @var string <p>数据源账号的 SecretKey</p>
     */
    public $SrcSecretKey;

    /**
     * @var string <p>文件系统实例 ID，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
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
     * @var string <p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
     */
    public $SrcService;

    /**
     * @var string <p>数据源桶名称；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
     */
    public $BucketName;

    /**
     * @var string <p>数据源桶地域</p>
     */
    public $BucketRegion;

    /**
     * @var string <p>数据源桶地址；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
     */
    public $BucketAddress;

    /**
     * @var string <p>清单地址，迁移方式为清单迁移时必填</p>
     */
    public $ListAddress;

    /**
     * @var string <p>目标文件系统名称</p>
     */
    public $FsName;

    /**
     * @var string <p>源桶路径，默认为 /</p>
     */
    public $BucketPath;

    /**
     * @var integer <p>迁移方向；0：对象存储迁移至文件系统，1：文件系统迁移至对象存储。默认为0</p>
     */
    public $Direction;

    /**
     * @param string $TaskName <p>迁移任务名称</p>
     * @param integer $MigrationType <p>迁移方式标志位，默认为0。0：桶迁移；1：清单迁移</p>
     * @param integer $MigrationMode <p>迁移模式，默认为0。0: 全量迁移</p>
     * @param string $SrcSecretId <p>数据源账号的 SecretId</p>
     * @param string $SrcSecretKey <p>数据源账号的 SecretKey</p>
     * @param string $FileSystemId <p>文件系统实例 ID，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
     * @param string $FsPath <p>文件系统路径</p>
     * @param integer $CoverType <p>同名文件迁移时覆盖策略，默认为0。0: 最后修改时间优先；1: 全覆盖；2: 不覆盖</p>
     * @param string $SrcService <p>数据源服务商</p><p>枚举值：</p><ul><li>COS： 腾讯云COS</li><li>OSS： 阿里云OSS</li><li>OBS： 华为云OBS</li><li>BOS： 百度云BOS</li><li>TOS： 火山引擎TOS</li></ul>
     * @param string $BucketName <p>数据源桶名称；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
     * @param string $BucketRegion <p>数据源桶地域</p>
     * @param string $BucketAddress <p>数据源桶地址；桶迁移时，BucketName 和 BucketAddress 必填其一，清单迁移时无需填写此参数</p>
     * @param string $ListAddress <p>清单地址，迁移方式为清单迁移时必填</p>
     * @param string $FsName <p>目标文件系统名称</p>
     * @param string $BucketPath <p>源桶路径，默认为 /</p>
     * @param integer $Direction <p>迁移方向；0：对象存储迁移至文件系统，1：文件系统迁移至对象存储。默认为0</p>
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
