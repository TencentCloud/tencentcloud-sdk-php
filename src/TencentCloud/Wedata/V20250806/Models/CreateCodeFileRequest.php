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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCodeFile请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getCodeFileName() 获取代码文件名称
 * @method void setCodeFileName(string $CodeFileName) 设置代码文件名称
 * @method string getParentFolderPath() 获取父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
 * @method CodeFileConfig getCodeFileConfig() 获取代码文件配置
 * @method void setCodeFileConfig(CodeFileConfig $CodeFileConfig) 设置代码文件配置
 * @method string getCodeFileContent() 获取代码文件内容
 * @method void setCodeFileContent(string $CodeFileContent) 设置代码文件内容
 */
class CreateCodeFileRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 代码文件名称
     */
    public $CodeFileName;

    /**
     * @var string 父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
     */
    public $ParentFolderPath;

    /**
     * @var CodeFileConfig 代码文件配置
     */
    public $CodeFileConfig;

    /**
     * @var string 代码文件内容
     */
    public $CodeFileContent;

    /**
     * @param string $ProjectId 项目ID
     * @param string $CodeFileName 代码文件名称
     * @param string $ParentFolderPath 父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
     * @param CodeFileConfig $CodeFileConfig 代码文件配置
     * @param string $CodeFileContent 代码文件内容
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

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("CodeFileConfig",$param) and $param["CodeFileConfig"] !== null) {
            $this->CodeFileConfig = new CodeFileConfig();
            $this->CodeFileConfig->deserialize($param["CodeFileConfig"]);
        }

        if (array_key_exists("CodeFileContent",$param) and $param["CodeFileContent"] !== null) {
            $this->CodeFileContent = $param["CodeFileContent"];
        }
    }
}
