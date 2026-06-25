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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP tool 参数
 *
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getType() 获取<p>参数类型</p><p>枚举值：</p><ul><li>string： 字符串</li><li>number： 数字</li><li>boolean： 布尔</li><li>array： 数组</li><li>object： 对象</li></ul>
 * @method void setType(string $Type) 设置<p>参数类型</p><p>枚举值：</p><ul><li>string： 字符串</li><li>number： 数字</li><li>boolean： 布尔</li><li>array： 数组</li><li>object： 对象</li></ul>
 * @method boolean getRequired() 获取<p>必填</p>
 * @method void setRequired(boolean $Required) 设置<p>必填</p>
 * @method string getPosition() 获取<p>位置</p><p>枚举值：</p><ul><li>query： query</li><li>path： query</li><li>header： header</li><li>body： body</li></ul>
 * @method void setPosition(string $Position) 设置<p>位置</p><p>枚举值：</p><ul><li>query： query</li><li>path： query</li><li>header： header</li><li>body： body</li></ul>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getDefault() 获取<p>默认值</p>
 * @method void setDefault(string $Default) 设置<p>默认值</p>
 * @method CNAPIGwMCPToolParam getItems() 获取<p>数组子项</p>
 * @method void setItems(CNAPIGwMCPToolParam $Items) 设置<p>数组子项</p>
 * @method array getProperties() 获取<p>对象属性</p>
 * @method void setProperties(array $Properties) 设置<p>对象属性</p>
 * @method string getBackendName() 获取<p>转发到后端的名称</p><p>不填则使用原始名称</p>
 * @method void setBackendName(string $BackendName) 设置<p>转发到后端的名称</p><p>不填则使用原始名称</p>
 */
class CNAPIGwMCPToolParam extends AbstractModel
{
    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>参数类型</p><p>枚举值：</p><ul><li>string： 字符串</li><li>number： 数字</li><li>boolean： 布尔</li><li>array： 数组</li><li>object： 对象</li></ul>
     */
    public $Type;

    /**
     * @var boolean <p>必填</p>
     */
    public $Required;

    /**
     * @var string <p>位置</p><p>枚举值：</p><ul><li>query： query</li><li>path： query</li><li>header： header</li><li>body： body</li></ul>
     */
    public $Position;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>默认值</p>
     */
    public $Default;

    /**
     * @var CNAPIGwMCPToolParam <p>数组子项</p>
     */
    public $Items;

    /**
     * @var array <p>对象属性</p>
     */
    public $Properties;

    /**
     * @var string <p>转发到后端的名称</p><p>不填则使用原始名称</p>
     */
    public $BackendName;

    /**
     * @param string $Name <p>名字</p>
     * @param string $Type <p>参数类型</p><p>枚举值：</p><ul><li>string： 字符串</li><li>number： 数字</li><li>boolean： 布尔</li><li>array： 数组</li><li>object： 对象</li></ul>
     * @param boolean $Required <p>必填</p>
     * @param string $Position <p>位置</p><p>枚举值：</p><ul><li>query： query</li><li>path： query</li><li>header： header</li><li>body： body</li></ul>
     * @param string $Description <p>描述</p>
     * @param string $Default <p>默认值</p>
     * @param CNAPIGwMCPToolParam $Items <p>数组子项</p>
     * @param array $Properties <p>对象属性</p>
     * @param string $BackendName <p>转发到后端的名称</p><p>不填则使用原始名称</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = new CNAPIGwMCPToolParam();
            $this->Items->deserialize($param["Items"]);
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new CNAPIGwMCPToolParam();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("BackendName",$param) and $param["BackendName"] !== null) {
            $this->BackendName = $param["BackendName"];
        }
    }
}
