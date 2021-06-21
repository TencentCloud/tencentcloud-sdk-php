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
 * 限速值类型，例如：包速率pps、带宽bps
 *
 * @method integer getType() 获取限速值类型，取值[
1(包速率pps)
2(带宽bps)
]
 * @method void setType(integer $Type) 设置限速值类型，取值[
1(包速率pps)
2(带宽bps)
]
 * @method integer getValue() 获取值大小
 * @method void setValue(integer $Value) 设置值大小
 */
class SpeedValue extends AbstractModel
{
    /**
     * @var integer 限速值类型，取值[
1(包速率pps)
2(带宽bps)
]
     */
    public $Type;

    /**
     * @var integer 值大小
     */
    public $Value;

    /**
     * @param integer $Type 限速值类型，取值[
1(包速率pps)
2(带宽bps)
]
     * @param integer $Value 值大小
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
