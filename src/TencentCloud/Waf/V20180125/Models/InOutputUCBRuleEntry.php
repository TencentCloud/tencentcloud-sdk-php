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
 * 自定义规则UCB的Rule生效条件
 *
 * @method string getKey() 获取键
 * @method void setKey(string $Key) 设置键
 * @method string getOp() 获取操作符
 * @method void setOp(string $Op) 设置操作符
 * @method UCBEntryValue getValue() 获取值
 * @method void setValue(UCBEntryValue $Value) 设置值
 * @method string getOpOp() 获取可选的补充操作符
 * @method void setOpOp(string $OpOp) 设置可选的补充操作符
 * @method array getOpArg() 获取可选的补充参数
 * @method void setOpArg(array $OpArg) 设置可选的补充参数
 * @method float getOpValue() 获取可选的补充值
 * @method void setOpValue(float $OpValue) 设置可选的补充值
 * @method string getName() 获取Header参数值时使用
 * @method void setName(string $Name) 设置Header参数值时使用
 * @method array getAreas() 获取区域选择
 * @method void setAreas(array $Areas) 设置区域选择
 * @method string getLang() 获取语言环境
 * @method void setLang(string $Lang) 设置语言环境
 * @method array getParamCompareList() 获取参数匹配
 * @method void setParamCompareList(array $ParamCompareList) 设置参数匹配
 */
class InOutputUCBRuleEntry extends AbstractModel
{
    /**
     * @var string 键
     */
    public $Key;

    /**
     * @var string 操作符
     */
    public $Op;

    /**
     * @var UCBEntryValue 值
     */
    public $Value;

    /**
     * @var string 可选的补充操作符
     */
    public $OpOp;

    /**
     * @var array 可选的补充参数
     */
    public $OpArg;

    /**
     * @var float 可选的补充值
     */
    public $OpValue;

    /**
     * @var string Header参数值时使用
     */
    public $Name;

    /**
     * @var array 区域选择
     */
    public $Areas;

    /**
     * @var string 语言环境
     */
    public $Lang;

    /**
     * @var array 参数匹配
     */
    public $ParamCompareList;

    /**
     * @param string $Key 键
     * @param string $Op 操作符
     * @param UCBEntryValue $Value 值
     * @param string $OpOp 可选的补充操作符
     * @param array $OpArg 可选的补充参数
     * @param float $OpValue 可选的补充值
     * @param string $Name Header参数值时使用
     * @param array $Areas 区域选择
     * @param string $Lang 语言环境
     * @param array $ParamCompareList 参数匹配
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new UCBEntryValue();
            $this->Value->deserialize($param["Value"]);
        }

        if (array_key_exists("OpOp",$param) and $param["OpOp"] !== null) {
            $this->OpOp = $param["OpOp"];
        }

        if (array_key_exists("OpArg",$param) and $param["OpArg"] !== null) {
            $this->OpArg = $param["OpArg"];
        }

        if (array_key_exists("OpValue",$param) and $param["OpValue"] !== null) {
            $this->OpValue = $param["OpValue"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = [];
            foreach ($param["Areas"] as $key => $value){
                $obj = new Area();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("ParamCompareList",$param) and $param["ParamCompareList"] !== null) {
            $this->ParamCompareList = [];
            foreach ($param["ParamCompareList"] as $key => $value){
                $obj = new ParamCompareList();
                $obj->deserialize($value);
                array_push($this->ParamCompareList, $obj);
            }
        }
    }
}
