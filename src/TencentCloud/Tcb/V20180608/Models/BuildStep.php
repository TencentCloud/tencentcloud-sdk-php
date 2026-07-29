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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构建步骤
 *
 * @method string getName() 获取<p>步骤名（建议 kebab-case，如 build-image），出现在 DescribeCloudAppVersion.Steps[].Name</p>
 * @method void setName(string $Name) 设置<p>步骤名（建议 kebab-case，如 build-image），出现在 DescribeCloudAppVersion.Steps[].Name</p>
 * @method string getCommand() 获取<p>shell 脚本，支持单行或多行</p>
 * @method void setCommand(string $Command) 设置<p>shell 脚本，支持单行或多行</p>
 */
class BuildStep extends AbstractModel
{
    /**
     * @var string <p>步骤名（建议 kebab-case，如 build-image），出现在 DescribeCloudAppVersion.Steps[].Name</p>
     */
    public $Name;

    /**
     * @var string <p>shell 脚本，支持单行或多行</p>
     */
    public $Command;

    /**
     * @param string $Name <p>步骤名（建议 kebab-case，如 build-image），出现在 DescribeCloudAppVersion.Steps[].Name</p>
     * @param string $Command <p>shell 脚本，支持单行或多行</p>
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

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }
    }
}
