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
 * 通用块信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method array getNums() 获取数值
 * @method void setNums(array $Nums) 设置数值
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 */
class FieldInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var array 数值
     */
    public $Nums;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @param string $Name 名称
     * @param string $Value 值
     * @param array $Nums 数值
     * @param string $Src 原文
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Nums",$param) and $param["Nums"] !== null) {
            $this->Nums = [];
            foreach ($param["Nums"] as $key => $value){
                $obj = new NumValue();
                $obj->deserialize($value);
                array_push($this->Nums, $obj);
            }
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }
    }
}
