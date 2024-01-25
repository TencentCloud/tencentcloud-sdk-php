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
 * ImportDsEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getFileCos() 获取事件名称
 * @method void setFileCos(string $FileCos) 设置事件名称
 * @method string getBucketName() 获取桶名
 * @method void setBucketName(string $BucketName) 设置桶名
 * @method string getCosRegion() 获取cos地域
 * @method void setCosRegion(string $CosRegion) 设置cos地域
 * @method boolean getForceUpdate() 获取是否强制刷新
 * @method void setForceUpdate(boolean $ForceUpdate) 设置是否强制刷新
 * @method string getFileName() 获取共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName，不能为空
 * @method void setFileName(string $FileName) 设置共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName，不能为空
 */
class ImportDsEventRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件名称
     */
    public $FileCos;

    /**
     * @var string 桶名
     */
    public $BucketName;

    /**
     * @var string cos地域
     */
    public $CosRegion;

    /**
     * @var boolean 是否强制刷新
     */
    public $ForceUpdate;

    /**
     * @var string 共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName，不能为空
     */
    public $FileName;

    /**
     * @param string $ProjectId 项目id
     * @param string $FileCos 事件名称
     * @param string $BucketName 桶名
     * @param string $CosRegion cos地域
     * @param boolean $ForceUpdate 是否强制刷新
     * @param string $FileName 共享存储临时文件名称，详情可以见 UploadFileDs 接口，该参数从 UploadFileDs 中的 TargetFileName，不能为空
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

        if (array_key_exists("FileCos",$param) and $param["FileCos"] !== null) {
            $this->FileCos = $param["FileCos"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ForceUpdate",$param) and $param["ForceUpdate"] !== null) {
            $this->ForceUpdate = $param["ForceUpdate"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
