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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShardSpec请求参数结构体
 *
 * @method string getCpuType() 获取Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
 * @method void setCpuType(string $CpuType) 设置Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
 */
class DescribeShardSpecRequest extends AbstractModel
{
    /**
     * @var string Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
     */
    public $CpuType;

    /**
     * @param string $CpuType Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
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
        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }
    }
}
