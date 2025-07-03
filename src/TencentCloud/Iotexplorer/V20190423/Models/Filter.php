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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述键值对过滤器，用于条件过滤查询。例如过滤ID、名称、状态等

- 若存在多个Filter时，Filter间的关系为逻辑与（AND）关系。

- 若同一个Filter存在多个Values，同一Filter下Values间的关系为逻辑或（OR）关系。
 *
 * @method string getName() 获取需要过滤的字段
 * @method void setName(string $Name) 设置需要过滤的字段
 * @method array getValues() 获取字段的过滤的一个或多个值
 * @method void setValues(array $Values) 设置字段的过滤的一个或多个值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 需要过滤的字段
     */
    public $Name;

    /**
     * @var array 字段的过滤的一个或多个值
     */
    public $Values;

    /**
     * @param string $Name 需要过滤的字段
     * @param array $Values 字段的过滤的一个或多个值
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
