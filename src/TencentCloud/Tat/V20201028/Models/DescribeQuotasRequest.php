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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuotas请求参数结构体
 *
 * @method array getResourceNames() 获取资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
 * @method void setResourceNames(array $ResourceNames) 设置资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
 */
class DescribeQuotasRequest extends AbstractModel
{
    /**
     * @var array 资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
     */
    public $ResourceNames;

    /**
     * @param array $ResourceNames 资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
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
        if (array_key_exists("ResourceNames",$param) and $param["ResourceNames"] !== null) {
            $this->ResourceNames = $param["ResourceNames"];
        }
    }
}
