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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 明细账单配置描述结构
 *
 * @method string getName() 获取配置描述名称
 * @method void setName(string $Name) 设置配置描述名称
 * @method string getValue() 获取配置描述值
 * @method void setValue(string $Value) 设置配置描述值
 */
class BillDetailComponentConfig extends AbstractModel
{
    /**
     * @var string 配置描述名称
     */
    public $Name;

    /**
     * @var string 配置描述值
     */
    public $Value;

    /**
     * @param string $Name 配置描述名称
     * @param string $Value 配置描述值
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
    }
}
