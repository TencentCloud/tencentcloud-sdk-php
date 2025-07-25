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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateDealsAndPayNew请求参数结构体
 *
 * @method array getGoods() 获取计费下单入参
 * @method void setGoods(array $Goods) 设置计费下单入参
 */
class GenerateDealsAndPayNewRequest extends AbstractModel
{
    /**
     * @var array 计费下单入参
     */
    public $Goods;

    /**
     * @param array $Goods 计费下单入参
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
        if (array_key_exists("Goods",$param) and $param["Goods"] !== null) {
            $this->Goods = [];
            foreach ($param["Goods"] as $key => $value){
                $obj = new GoodNews();
                $obj->deserialize($value);
                array_push($this->Goods, $obj);
            }
        }
    }
}
