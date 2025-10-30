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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上链数据 key-value
 *
 * @method string getLabel() 获取标题名字
 * @method void setLabel(string $Label) 设置标题名字
 * @method string getType() 获取类型，文字："text"，图片："image"
 * @method void setType(string $Type) 设置类型，文字："text"，图片："image"
 * @method string getValue() 获取值，文字类型："abc"，图片类型：""/images/img.png"
 * @method void setValue(string $Value) 设置值，文字类型："abc"，图片类型：""/images/img.png"
 */
class ChainValue extends AbstractModel
{
    /**
     * @var string 标题名字
     */
    public $Label;

    /**
     * @var string 类型，文字："text"，图片："image"
     */
    public $Type;

    /**
     * @var string 值，文字类型："abc"，图片类型：""/images/img.png"
     */
    public $Value;

    /**
     * @param string $Label 标题名字
     * @param string $Type 类型，文字："text"，图片："image"
     * @param string $Value 值，文字类型："abc"，图片类型：""/images/img.png"
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
