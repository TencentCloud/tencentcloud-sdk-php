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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method array getSpecItem() 获取售卖规格信息
 * @method void setSpecItem(array $SpecItem) 设置售卖规格信息
 */

/**
 *实例规格信息
 */
class SpecificationInfo extends AbstractModel
{
    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var array 售卖规格信息
     */
    public $SpecItem;
    /**
     * @param string $Region 地域信息
     * @param string $Zone 可用区信息
     * @param array $SpecItem 售卖规格信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecItem",$param) and $param["SpecItem"] !== null) {
            $this->SpecItem = [];
            foreach ($param["SpecItem"] as $key => $value){
                $obj = new SpecItem();
                $obj->deserialize($value);
                array_push($this->SpecItem, $obj);
            }
        }
    }
}
