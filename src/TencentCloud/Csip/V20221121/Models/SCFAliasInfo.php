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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF 函数别名精简信息
 *
 * @method string getName() 获取别名名称
 * @method void setName(string $Name) 设置别名名称
 * @method string getFunctionVersion() 获取别名指向的主版本号
 * @method void setFunctionVersion(string $FunctionVersion) 设置别名指向的主版本号
 */
class SCFAliasInfo extends AbstractModel
{
    /**
     * @var string 别名名称
     */
    public $Name;

    /**
     * @var string 别名指向的主版本号
     */
    public $FunctionVersion;

    /**
     * @param string $Name 别名名称
     * @param string $FunctionVersion 别名指向的主版本号
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

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }
    }
}
