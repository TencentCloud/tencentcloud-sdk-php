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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingSpecsPrice请求参数结构体
 *
 * @method array getSpecsParam() 获取询价参数，支持批量询价
 * @method void setSpecsParam(array $SpecsParam) 设置询价参数，支持批量询价
 */
class DescribeBillingSpecsPriceRequest extends AbstractModel
{
    /**
     * @var array 询价参数，支持批量询价
     */
    public $SpecsParam;

    /**
     * @param array $SpecsParam 询价参数，支持批量询价
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
        if (array_key_exists("SpecsParam",$param) and $param["SpecsParam"] !== null) {
            $this->SpecsParam = [];
            foreach ($param["SpecsParam"] as $key => $value){
                $obj = new SpecUnit();
                $obj->deserialize($value);
                array_push($this->SpecsParam, $obj);
            }
        }
    }
}
