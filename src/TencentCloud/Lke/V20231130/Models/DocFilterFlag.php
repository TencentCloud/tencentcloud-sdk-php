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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档列表筛选标识位
 *
 * @method string getFlag() 获取标识位
 * @method void setFlag(string $Flag) 设置标识位
 * @method boolean getValue() 获取标识值
 * @method void setValue(boolean $Value) 设置标识值
 */
class DocFilterFlag extends AbstractModel
{
    /**
     * @var string 标识位
     */
    public $Flag;

    /**
     * @var boolean 标识值
     */
    public $Value;

    /**
     * @param string $Flag 标识位
     * @param boolean $Value 标识值
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
        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
