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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParallelKeyMapping 用于 inference engine 并行配置参数 key 映射
 *
 * @method string getType() 获取<p>并行类型</p>
 * @method void setType(string $Type) 设置<p>并行类型</p>
 * @method array getKeys() 获取<p>该并行类型对应的参数 key 列表</p>
 * @method void setKeys(array $Keys) 设置<p>该并行类型对应的参数 key 列表</p>
 */
class ParallelKeyMapping extends AbstractModel
{
    /**
     * @var string <p>并行类型</p>
     */
    public $Type;

    /**
     * @var array <p>该并行类型对应的参数 key 列表</p>
     */
    public $Keys;

    /**
     * @param string $Type <p>并行类型</p>
     * @param array $Keys <p>该并行类型对应的参数 key 列表</p>
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

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }
    }
}
