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
 * 带有匹配方式的apiname列表
 *
 * @method array getValue() 获取匹配值列表
 * @method void setValue(array $Value) 设置匹配值列表
 * @method string getOp() 获取匹配方式，如属于和正则等
 * @method void setOp(string $Op) 设置匹配方式，如属于和正则等
 * @method array getApiNameMethod() 获取手动筛选的时候，要传该结构体
 * @method void setApiNameMethod(array $ApiNameMethod) 设置手动筛选的时候，要传该结构体
 */
class ApiNameOp extends AbstractModel
{
    /**
     * @var array 匹配值列表
     */
    public $Value;

    /**
     * @var string 匹配方式，如属于和正则等
     */
    public $Op;

    /**
     * @var array 手动筛选的时候，要传该结构体
     */
    public $ApiNameMethod;

    /**
     * @param array $Value 匹配值列表
     * @param string $Op 匹配方式，如属于和正则等
     * @param array $ApiNameMethod 手动筛选的时候，要传该结构体
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("ApiNameMethod",$param) and $param["ApiNameMethod"] !== null) {
            $this->ApiNameMethod = [];
            foreach ($param["ApiNameMethod"] as $key => $value){
                $obj = new ApiNameMethod();
                $obj->deserialize($value);
                array_push($this->ApiNameMethod, $obj);
            }
        }
    }
}
