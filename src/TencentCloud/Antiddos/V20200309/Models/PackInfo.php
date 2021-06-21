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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐包信息
 *
 * @method string getPackType() 获取套餐包的类型，取值[
staticpack：高防IP三网套餐包
insurance：保险套餐包
]
 * @method void setPackType(string $PackType) 设置套餐包的类型，取值[
staticpack：高防IP三网套餐包
insurance：保险套餐包
]
 * @method string getPackId() 获取套餐包的ID
 * @method void setPackId(string $PackId) 设置套餐包的ID
 */
class PackInfo extends AbstractModel
{
    /**
     * @var string 套餐包的类型，取值[
staticpack：高防IP三网套餐包
insurance：保险套餐包
]
     */
    public $PackType;

    /**
     * @var string 套餐包的ID
     */
    public $PackId;

    /**
     * @param string $PackType 套餐包的类型，取值[
staticpack：高防IP三网套餐包
insurance：保险套餐包
]
     * @param string $PackId 套餐包的ID
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
        if (array_key_exists("PackType",$param) and $param["PackType"] !== null) {
            $this->PackType = $param["PackType"];
        }

        if (array_key_exists("PackId",$param) and $param["PackId"] !== null) {
            $this->PackId = $param["PackId"];
        }
    }
}
