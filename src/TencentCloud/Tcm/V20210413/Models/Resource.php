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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource 定义了资源类型和数量
 *
 * @method string getName() 获取资源类型 cpu/memory
 * @method void setName(string $Name) 设置资源类型 cpu/memory
 * @method string getQuantity() 获取资源数量
 * @method void setQuantity(string $Quantity) 设置资源数量
 */
class Resource extends AbstractModel
{
    /**
     * @var string 资源类型 cpu/memory
     */
    public $Name;

    /**
     * @var string 资源数量
     */
    public $Quantity;

    /**
     * @param string $Name 资源类型 cpu/memory
     * @param string $Quantity 资源数量
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

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }
    }
}
