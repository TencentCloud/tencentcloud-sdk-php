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
 * GetResourcePathTree请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method string getFileType() 获取资源文件类型
 * @method void setFileType(string $FileType) 设置资源文件类型
 * @method string getFilePath() 获取资源路径
 * @method void setFilePath(string $FilePath) 设置资源路径
 * @method string getDirectoryType() 获取文件夹类型
 * @method void setDirectoryType(string $DirectoryType) 设置文件夹类型
 */
class GetResourcePathTreeRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var string 资源文件类型
     */
    public $FileType;

    /**
     * @var string 资源路径
     */
    public $FilePath;

    /**
     * @var string 文件夹类型
     */
    public $DirectoryType;

    /**
     * @param string $ProjectId 项目id
     * @param string $Name 资源名称
     * @param string $FileType 资源文件类型
     * @param string $FilePath 资源路径
     * @param string $DirectoryType 文件夹类型
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("DirectoryType",$param) and $param["DirectoryType"] !== null) {
            $this->DirectoryType = $param["DirectoryType"];
        }
    }
}
