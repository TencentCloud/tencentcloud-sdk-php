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
 * SCF 命名空间精简信息
 *
 * @method string getName() 获取命名空间名称
 * @method void setName(string $Name) 设置命名空间名称
 * @method string getType() 获取命名空间类型
枚举值：
Default：默认命名空间
Custom：自定义命名空间
 * @method void setType(string $Type) 设置命名空间类型
枚举值：
Default：默认命名空间
Custom：自定义命名空间
 */
class SCFNamespaceInfo extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $Name;

    /**
     * @var string 命名空间类型
枚举值：
Default：默认命名空间
Custom：自定义命名空间
     */
    public $Type;

    /**
     * @param string $Name 命名空间名称
     * @param string $Type 命名空间类型
枚举值：
Default：默认命名空间
Custom：自定义命名空间
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
