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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤器
 *
 * @method string getName() 获取过滤参数
 * @method void setName(string $Name) 设置过滤参数
 * @method string getOp() 获取过滤表达式
 * @method void setOp(string $Op) 设置过滤表达式
 * @method array getValues() 获取参与过滤的值
 * @method void setValues(array $Values) 设置参与过滤的值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤参数
     */
    public $Name;

    /**
     * @var string 过滤表达式
     */
    public $Op;

    /**
     * @var array 参与过滤的值
     */
    public $Values;

    /**
     * @param string $Name 过滤参数
     * @param string $Op 过滤表达式
     * @param array $Values 参与过滤的值
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

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
