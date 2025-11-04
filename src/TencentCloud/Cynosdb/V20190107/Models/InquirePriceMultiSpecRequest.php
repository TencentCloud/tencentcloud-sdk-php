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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceMultiSpec请求参数结构体
 *
 * @method string getZone() 获取可用区,每个地域提供最佳实践
 * @method void setZone(string $Zone) 设置可用区,每个地域提供最佳实践
 * @method string getInstancePayMode() 获取实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
 * @method void setInstancePayMode(string $InstancePayMode) 设置实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
 * @method string getStoragePayMode() 获取存储购买类型，可选值为：PREPAID, POSTPAID
 * @method void setStoragePayMode(string $StoragePayMode) 设置存储购买类型，可选值为：PREPAID, POSTPAID
 * @method array getGoodsSpecs() 获取商品规格
 * @method void setGoodsSpecs(array $GoodsSpecs) 设置商品规格
 */
class InquirePriceMultiSpecRequest extends AbstractModel
{
    /**
     * @var string 可用区,每个地域提供最佳实践
     */
    public $Zone;

    /**
     * @var string 实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
     */
    public $InstancePayMode;

    /**
     * @var string 存储购买类型，可选值为：PREPAID, POSTPAID
     */
    public $StoragePayMode;

    /**
     * @var array 商品规格
     */
    public $GoodsSpecs;

    /**
     * @param string $Zone 可用区,每个地域提供最佳实践
     * @param string $InstancePayMode 实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
     * @param string $StoragePayMode 存储购买类型，可选值为：PREPAID, POSTPAID
     * @param array $GoodsSpecs 商品规格
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("GoodsSpecs",$param) and $param["GoodsSpecs"] !== null) {
            $this->GoodsSpecs = [];
            foreach ($param["GoodsSpecs"] as $key => $value){
                $obj = new GoodsSpec();
                $obj->deserialize($value);
                array_push($this->GoodsSpecs, $obj);
            }
        }
    }
}
