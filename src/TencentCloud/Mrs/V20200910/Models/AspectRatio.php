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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 纵横比
 *
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method string getNumber() 获取数值
 * @method void setNumber(string $Number) 设置数值
 * @method string getRelation() 获取关系
 * @method void setRelation(string $Relation) 设置关系
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 */
class AspectRatio extends AbstractModel
{
    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var string 数值
     */
    public $Number;

    /**
     * @var string 关系
     */
    public $Relation;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @param array $Index 原文位置
     * @param string $Number 数值
     * @param string $Relation 关系
     * @param string $Src 原文
     * @param string $Value 值
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
