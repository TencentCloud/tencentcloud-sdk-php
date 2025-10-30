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
 * 通用的下拉框列表
 *
 * @method string getText() 获取cvm实例类型
 * @method void setText(string $Text) 设置cvm实例类型
 * @method string getValue() 获取cvm实例名称
 * @method void setValue(string $Value) 设置cvm实例名称
 */
class AttributeOptionSet extends AbstractModel
{
    /**
     * @var string cvm实例类型
     */
    public $Text;

    /**
     * @var string cvm实例名称
     */
    public $Value;

    /**
     * @param string $Text cvm实例类型
     * @param string $Value cvm实例名称
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
