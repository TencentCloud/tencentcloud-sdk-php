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
 * CreateOrUpdateResource请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getFiles() 获取文件名
 * @method void setFiles(array $Files) 设置文件名
 * @method string getFilePath() 获取文件所属路径，资源管理根路径为 /datastudio/resouce
 * @method void setFilePath(string $FilePath) 设置文件所属路径，资源管理根路径为 /datastudio/resouce
 * @method string getCosBucketName() 获取cos存储桶名字
 * @method void setCosBucketName(string $CosBucketName) 设置cos存储桶名字
 * @method string getCosRegion() 获取cos所属地域
 * @method void setCosRegion(string $CosRegion) 设置cos所属地域
 * @method boolean getNewFile() 获取是否为新文件，新增为 true，更新为 false
 * @method void setNewFile(boolean $NewFile) 设置是否为新文件，新增为 true，更新为 false
 * @method array getFilesSize() 获取文件大小
 * @method void setFilesSize(array $FilesSize) 设置文件大小
 */
class CreateOrUpdateResourceRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 文件名
     */
    public $Files;

    /**
     * @var string 文件所属路径，资源管理根路径为 /datastudio/resouce
     */
    public $FilePath;

    /**
     * @var string cos存储桶名字
     */
    public $CosBucketName;

    /**
     * @var string cos所属地域
     */
    public $CosRegion;

    /**
     * @var boolean 是否为新文件，新增为 true，更新为 false
     */
    public $NewFile;

    /**
     * @var array 文件大小
     */
    public $FilesSize;

    /**
     * @param string $ProjectId 项目ID
     * @param array $Files 文件名
     * @param string $FilePath 文件所属路径，资源管理根路径为 /datastudio/resouce
     * @param string $CosBucketName cos存储桶名字
     * @param string $CosRegion cos所属地域
     * @param boolean $NewFile 是否为新文件，新增为 true，更新为 false
     * @param array $FilesSize 文件大小
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

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = $param["Files"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("NewFile",$param) and $param["NewFile"] !== null) {
            $this->NewFile = $param["NewFile"];
        }

        if (array_key_exists("FilesSize",$param) and $param["FilesSize"] !== null) {
            $this->FilesSize = $param["FilesSize"];
        }
    }
}
