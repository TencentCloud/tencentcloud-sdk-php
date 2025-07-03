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
 * 块信息
 *
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method string getPositive() 获取阳性
 * @method void setPositive(string $Positive) 设置阳性
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method array getSize() 获取大小
 * @method void setSize(array $Size) 设置大小
 */
class BlockInfo extends AbstractModel
{
    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var string 阳性
     */
    public $Positive;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var array 大小
     */
    public $Size;

    /**
     * @param array $Index 原文位置
     * @param string $Positive 阳性
     * @param string $Src 原文
     * @param string $Value 值
     * @param string $Type 类型
     * @param string $Name 名称
     * @param array $Size 大小
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Positive",$param) and $param["Positive"] !== null) {
            $this->Positive = $param["Positive"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = [];
            foreach ($param["Size"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->Size, $obj);
            }
        }
    }
}
