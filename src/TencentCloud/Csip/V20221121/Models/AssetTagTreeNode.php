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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产标签树节点
 *
 * @method string getKey() 获取标签键
 * @method void setKey(string $Key) 设置标签键
 * @method string getValue() 获取标签值
 * @method void setValue(string $Value) 设置标签值
 * @method array getChildren() 获取子节点
 * @method void setChildren(array $Children) 设置子节点
 * @method string getColor() 获取颜色
 * @method void setColor(string $Color) 设置颜色
 */
class AssetTagTreeNode extends AbstractModel
{
    /**
     * @var string 标签键
     */
    public $Key;

    /**
     * @var string 标签值
     */
    public $Value;

    /**
     * @var array 子节点
     */
    public $Children;

    /**
     * @var string 颜色
     */
    public $Color;

    /**
     * @param string $Key 标签键
     * @param string $Value 标签值
     * @param array $Children 子节点
     * @param string $Color 颜色
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new AssetTagTreeNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
