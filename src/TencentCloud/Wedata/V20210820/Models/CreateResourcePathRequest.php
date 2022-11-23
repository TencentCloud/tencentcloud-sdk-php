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
 * CreateResourcePath请求参数结构体
 *
 * @method string getName() 获取文件夹名称，如 aaa
 * @method void setName(string $Name) 设置文件夹名称，如 aaa
 * @method string getFilePath() 获取文件夹所属父目录，请注意，根目录为 /datastudio/resource
 * @method void setFilePath(string $FilePath) 设置文件夹所属父目录，请注意，根目录为 /datastudio/resource
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class CreateResourcePathRequest extends AbstractModel
{
    /**
     * @var string 文件夹名称，如 aaa
     */
    public $Name;

    /**
     * @var string 文件夹所属父目录，请注意，根目录为 /datastudio/resource
     */
    public $FilePath;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param string $Name 文件夹名称，如 aaa
     * @param string $FilePath 文件夹所属父目录，请注意，根目录为 /datastudio/resource
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
