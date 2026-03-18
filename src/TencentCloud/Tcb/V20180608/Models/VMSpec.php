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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VM规格
 *
 * @method string getType() 获取LightHouse=轻量云服务器
CVM=云服务器
 * @method void setType(string $Type) 设置LightHouse=轻量云服务器
CVM=云服务器
 * @method VMSpecLightHouse getLightHouseSpec() 获取轻量云服务器规格。
当Type=LightHouse时有效
 * @method void setLightHouseSpec(VMSpecLightHouse $LightHouseSpec) 设置轻量云服务器规格。
当Type=LightHouse时有效
 * @method VMPrice getPrice() 获取价格信息
 * @method void setPrice(VMPrice $Price) 设置价格信息
 */
class VMSpec extends AbstractModel
{
    /**
     * @var string LightHouse=轻量云服务器
CVM=云服务器
     */
    public $Type;

    /**
     * @var VMSpecLightHouse 轻量云服务器规格。
当Type=LightHouse时有效
     */
    public $LightHouseSpec;

    /**
     * @var VMPrice 价格信息
     */
    public $Price;

    /**
     * @param string $Type LightHouse=轻量云服务器
CVM=云服务器
     * @param VMSpecLightHouse $LightHouseSpec 轻量云服务器规格。
当Type=LightHouse时有效
     * @param VMPrice $Price 价格信息
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

        if (array_key_exists("LightHouseSpec",$param) and $param["LightHouseSpec"] !== null) {
            $this->LightHouseSpec = new VMSpecLightHouse();
            $this->LightHouseSpec->deserialize($param["LightHouseSpec"]);
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new VMPrice();
            $this->Price->deserialize($param["Price"]);
        }
    }
}
