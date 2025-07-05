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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资管管理-上传资源请求
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getFilePath() 获取资源路径
 * @method void setFilePath(string $FilePath) 设置资源路径
 * @method string getBucketName() 获取桶名称
 * @method void setBucketName(string $BucketName) 设置桶名称
 * @method string getRegion() 获取所属地区
 * @method void setRegion(string $Region) 设置所属地区
 * @method boolean getNewFile() 获取是否为新资源
 * @method void setNewFile(boolean $NewFile) 设置是否为新资源
 * @method array getFileList() 获取资源列表
 * @method void setFileList(array $FileList) 设置资源列表
 * @method array getFileSizeList() 获取资源大小列表
 * @method void setFileSizeList(array $FileSizeList) 设置资源大小列表
 * @method string getFileMd5() 获取File Md5（适配私有化，公有云可以不传）
 * @method void setFileMd5(string $FileMd5) 设置File Md5（适配私有化，公有云可以不传）
 */
class UploadResourceRequestInfo extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 资源路径
     */
    public $FilePath;

    /**
     * @var string 桶名称
     */
    public $BucketName;

    /**
     * @var string 所属地区
     */
    public $Region;

    /**
     * @var boolean 是否为新资源
     */
    public $NewFile;

    /**
     * @var array 资源列表
     */
    public $FileList;

    /**
     * @var array 资源大小列表
     */
    public $FileSizeList;

    /**
     * @var string File Md5（适配私有化，公有云可以不传）
     */
    public $FileMd5;

    /**
     * @param string $ProjectId 项目id
     * @param string $FilePath 资源路径
     * @param string $BucketName 桶名称
     * @param string $Region 所属地区
     * @param boolean $NewFile 是否为新资源
     * @param array $FileList 资源列表
     * @param array $FileSizeList 资源大小列表
     * @param string $FileMd5 File Md5（适配私有化，公有云可以不传）
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

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NewFile",$param) and $param["NewFile"] !== null) {
            $this->NewFile = $param["NewFile"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = $param["FileList"];
        }

        if (array_key_exists("FileSizeList",$param) and $param["FileSizeList"] !== null) {
            $this->FileSizeList = $param["FileSizeList"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }
    }
}
