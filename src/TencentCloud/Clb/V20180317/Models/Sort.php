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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序条件
 *
 * @method string getField() 获取<p>排序的字段</p>
 * @method void setField(string $Field) 设置<p>排序的字段</p>
 * @method string getOrder() 获取<p>排序方式，支持ASC、DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方式，支持ASC、DESC</p>
 */
class Sort extends AbstractModel
{
    /**
     * @var string <p>排序的字段</p>
     */
    public $Field;

    /**
     * @var string <p>排序方式，支持ASC、DESC</p>
     */
    public $Order;

    /**
     * @param string $Field <p>排序的字段</p>
     * @param string $Order <p>排序方式，支持ASC、DESC</p>
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
