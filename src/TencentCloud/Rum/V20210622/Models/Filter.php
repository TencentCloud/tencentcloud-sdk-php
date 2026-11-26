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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述键值对过滤器，用于条件过滤查询。例如过滤ID、名称、状态等

· 若存在多个Filter时，Filter间的关系为逻辑与（AND）关系。
· 若同一个Filter存在多个Values，同一Filter下Values间的关系为逻辑或（OR）关系。
 *
 * @method array getValues() 获取<p>一个或者多个过滤值。</p>
 * @method void setValues(array $Values) 设置<p>一个或者多个过滤值。</p>
 * @method string getName() 获取<p>过滤键的名称。</p>
 * @method void setName(string $Name) 设置<p>过滤键的名称。</p>
 */
class Filter extends AbstractModel
{
    /**
     * @var array <p>一个或者多个过滤值。</p>
     */
    public $Values;

    /**
     * @var string <p>过滤键的名称。</p>
     */
    public $Name;

    /**
     * @param array $Values <p>一个或者多个过滤值。</p>
     * @param string $Name <p>过滤键的名称。</p>
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
