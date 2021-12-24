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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询结果排序条件
 *
 * @method string getField() 获取排序字段
 * @method void setField(string $Field) 设置排序字段
 * @method string getOrder() 获取排序方式，升序ASC / 降序DESC
 * @method void setOrder(string $Order) 设置排序方式，升序ASC / 降序DESC
 */
class Sort extends AbstractModel
{
    /**
     * @var string 排序字段
     */
    public $Field;

    /**
     * @var string 排序方式，升序ASC / 降序DESC
     */
    public $Order;

    /**
     * @param string $Field 排序字段
     * @param string $Order 排序方式，升序ASC / 降序DESC
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
