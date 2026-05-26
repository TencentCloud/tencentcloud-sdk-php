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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vdb数据库文档中键值结构
 *
 * @method string getName() 获取<p>vdb document字段名</p>
 * @method void setName(string $Name) 设置<p>vdb document字段名</p>
 * @method string getValue() 获取<p>vdb document字段值</p>
 * @method void setValue(string $Value) 设置<p>vdb document字段值</p>
 * @method string getType() 获取<p>vdb document字段类型</p>
 * @method void setType(string $Type) 设置<p>vdb document字段类型</p>
 * @method string getDescription() 获取<p>字段描述</p>
 * @method void setDescription(string $Description) 设置<p>字段描述</p>
 */
class VDBFieldMap extends AbstractModel
{
    /**
     * @var string <p>vdb document字段名</p>
     */
    public $Name;

    /**
     * @var string <p>vdb document字段值</p>
     */
    public $Value;

    /**
     * @var string <p>vdb document字段类型</p>
     */
    public $Type;

    /**
     * @var string <p>字段描述</p>
     */
    public $Description;

    /**
     * @param string $Name <p>vdb document字段名</p>
     * @param string $Value <p>vdb document字段值</p>
     * @param string $Type <p>vdb document字段类型</p>
     * @param string $Description <p>字段描述</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
