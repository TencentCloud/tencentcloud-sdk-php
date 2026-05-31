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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序条件
 *
 * @method string getName() 获取排序字段名称。
 * @method void setName(string $Name) 设置排序字段名称。
 * @method string getOrder() 获取排序方向。取值：ASC（升序）、DESC（降序）。
 * @method void setOrder(string $Order) 设置排序方向。取值：ASC（升序）、DESC（降序）。
 */
class RequestSort extends AbstractModel
{
    /**
     * @var string 排序字段名称。
     */
    public $Name;

    /**
     * @var string 排序方向。取值：ASC（升序）、DESC（降序）。
     */
    public $Order;

    /**
     * @param string $Name 排序字段名称。
     * @param string $Order 排序方向。取值：ASC（升序）、DESC（降序）。
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
