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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 末次月经
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getNorm() 获取归一化值
 * @method void setNorm(string $Norm) 设置归一化值
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getTimestamp() 获取时间戳
 * @method void setTimestamp(string $Timestamp) 设置时间戳
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getValue() 获取对外输出值
 * @method void setValue(string $Value) 设置对外输出值
 */
class LastMenstrualPeriodBlock extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 归一化值
     */
    public $Norm;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 时间戳
     */
    public $Timestamp;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 对外输出值
     */
    public $Value;

    /**
     * @param string $Name 名称
     * @param string $Src 原文
     * @param string $Norm 归一化值
     * @param string $Type 类型
     * @param string $Timestamp 时间戳
     * @param string $Unit 单位
     * @param string $Value 对外输出值
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

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Norm",$param) and $param["Norm"] !== null) {
            $this->Norm = $param["Norm"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
