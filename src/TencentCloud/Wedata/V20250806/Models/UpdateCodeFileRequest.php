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
 * UpdateCodeFile请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getCodeFileId() 获取代码文件ID，参数值来自CreateCodeFile接口的返回
 * @method void setCodeFileId(string $CodeFileId) 设置代码文件ID，参数值来自CreateCodeFile接口的返回
 * @method CodeFileConfig getCodeFileConfig() 获取代码文件配置
 * @method void setCodeFileConfig(CodeFileConfig $CodeFileConfig) 设置代码文件配置
 * @method string getCodeFileContent() 获取代码文件内容
 * @method void setCodeFileContent(string $CodeFileContent) 设置代码文件内容
 */
class UpdateCodeFileRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 代码文件ID，参数值来自CreateCodeFile接口的返回
     */
    public $CodeFileId;

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
     * @param string $CodeFileId 代码文件ID，参数值来自CreateCodeFile接口的返回
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

        if (array_key_exists("CodeFileId",$param) and $param["CodeFileId"] !== null) {
            $this->CodeFileId = $param["CodeFileId"];
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
