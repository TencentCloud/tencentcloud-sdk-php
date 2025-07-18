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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于表示百分比或数量
 *
 * @method string getType() 获取Num,Percent ,分别表示数量和百分比，默认为 Num
 * @method void setType(string $Type) 设置Num,Percent ,分别表示数量和百分比，默认为 Num
 * @method integer getValue() 获取数值
 * @method void setValue(integer $Value) 设置数值
 */
class NumOrPercent extends AbstractModel
{
    /**
     * @var string Num,Percent ,分别表示数量和百分比，默认为 Num
     */
    public $Type;

    /**
     * @var integer 数值
     */
    public $Value;

    /**
     * @param string $Type Num,Percent ,分别表示数量和百分比，默认为 Num
     * @param integer $Value 数值
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
