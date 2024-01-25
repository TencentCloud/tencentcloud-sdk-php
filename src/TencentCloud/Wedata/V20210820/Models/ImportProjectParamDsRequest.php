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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportProjectParamDs请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getFilesCos() 获取已废弃
 * @method void setFilesCos(array $FilesCos) 设置已废弃
 * @method string getPublishInfoId() 获取发布ID
 * @method void setPublishInfoId(string $PublishInfoId) 设置发布ID
 * @method string getGlobalConfig() 获取全局参数
 * @method void setGlobalConfig(string $GlobalConfig) 设置全局参数
 * @method string getBucketName() 获取已废弃
 * @method void setBucketName(string $BucketName) 设置已废弃
 * @method string getCosRegion() 获取已废弃
 * @method void setCosRegion(string $CosRegion) 设置已废弃
 * @method string getFileName() 获取共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName
 * @method void setFileName(string $FileName) 设置共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName
 */
class ImportProjectParamDsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 已废弃
     */
    public $FilesCos;

    /**
     * @var string 发布ID
     */
    public $PublishInfoId;

    /**
     * @var string 全局参数
     */
    public $GlobalConfig;

    /**
     * @var string 已废弃
     */
    public $BucketName;

    /**
     * @var string 已废弃
     */
    public $CosRegion;

    /**
     * @var string 共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName
     */
    public $FileName;

    /**
     * @param string $ProjectId 项目ID
     * @param array $FilesCos 已废弃
     * @param string $PublishInfoId 发布ID
     * @param string $GlobalConfig 全局参数
     * @param string $BucketName 已废弃
     * @param string $CosRegion 已废弃
     * @param string $FileName 共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FilesCos",$param) and $param["FilesCos"] !== null) {
            $this->FilesCos = $param["FilesCos"];
        }

        if (array_key_exists("PublishInfoId",$param) and $param["PublishInfoId"] !== null) {
            $this->PublishInfoId = $param["PublishInfoId"];
        }

        if (array_key_exists("GlobalConfig",$param) and $param["GlobalConfig"] !== null) {
            $this->GlobalConfig = $param["GlobalConfig"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
