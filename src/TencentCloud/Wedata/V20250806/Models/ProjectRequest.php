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
 * 项目信息
 *
 * @method string getProjectName() 获取项目标识，英文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
 * @method void setProjectName(string $ProjectName) 设置项目标识，英文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
 * @method string getDisplayName() 获取项目显示名称，可以为中文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
 * @method void setDisplayName(string $DisplayName) 设置项目显示名称，可以为中文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
 * @method string getProjectModel() 获取项目模式，SIMPLE（默认）：简单模式 STANDARD：标准模式
 * @method void setProjectModel(string $ProjectModel) 设置项目模式，SIMPLE（默认）：简单模式 STANDARD：标准模式
 */
class ProjectRequest extends AbstractModel
{
    /**
     * @var string 项目标识，英文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
     */
    public $ProjectName;

    /**
     * @var string 项目显示名称，可以为中文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
     */
    public $DisplayName;

    /**
     * @var string 项目模式，SIMPLE（默认）：简单模式 STANDARD：标准模式
     */
    public $ProjectModel;

    /**
     * @param string $ProjectName 项目标识，英文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
     * @param string $DisplayName 项目显示名称，可以为中文名，以字母开头，可包含字母、数字和下划线，不能超过32个字符
     * @param string $ProjectModel 项目模式，SIMPLE（默认）：简单模式 STANDARD：标准模式
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ProjectModel",$param) and $param["ProjectModel"] !== null) {
            $this->ProjectModel = $param["ProjectModel"];
        }
    }
}
