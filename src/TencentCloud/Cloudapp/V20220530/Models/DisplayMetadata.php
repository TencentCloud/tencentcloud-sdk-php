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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据展示信息
 *
 * @method string getName() 获取<p>展示的名称</p>
 * @method void setName(string $Name) 设置<p>展示的名称</p>
 * @method string getValue() 获取<p>展示的值</p>
 * @method void setValue(string $Value) 设置<p>展示的值</p>
 */
class DisplayMetadata extends AbstractModel
{
    /**
     * @var string <p>展示的名称</p>
     */
    public $Name;

    /**
     * @var string <p>展示的值</p>
     */
    public $Value;

    /**
     * @param string $Name <p>展示的名称</p>
     * @param string $Value <p>展示的值</p>
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
