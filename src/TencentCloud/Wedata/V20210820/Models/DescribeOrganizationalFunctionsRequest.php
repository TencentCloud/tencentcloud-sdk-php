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
 * DescribeOrganizationalFunctions请求参数结构体
 *
 * @method string getType() 获取场景类型：开发、使用
 * @method void setType(string $Type) 设置场景类型：开发、使用
 * @method string getProjectId() 获取项目 ID
 * @method void setProjectId(string $ProjectId) 设置项目 ID
 * @method string getName() 获取函数名称
 * @method void setName(string $Name) 设置函数名称
 * @method string getDisplayName() 获取展示名称
 * @method void setDisplayName(string $DisplayName) 设置展示名称
 */
class DescribeOrganizationalFunctionsRequest extends AbstractModel
{
    /**
     * @var string 场景类型：开发、使用
     */
    public $Type;

    /**
     * @var string 项目 ID
     */
    public $ProjectId;

    /**
     * @var string 函数名称
     */
    public $Name;

    /**
     * @var string 展示名称
     */
    public $DisplayName;

    /**
     * @param string $Type 场景类型：开发、使用
     * @param string $ProjectId 项目 ID
     * @param string $Name 函数名称
     * @param string $DisplayName 展示名称
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }
    }
}
