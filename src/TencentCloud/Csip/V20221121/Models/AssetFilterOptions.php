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
 * 资产过滤选项
 *
 * @method string getText() 获取<p>显示值</p>
 * @method void setText(string $Text) 设置<p>显示值</p>
 * @method string getValue() 获取<p>实际值</p>
 * @method void setValue(string $Value) 设置<p>实际值</p>
 * @method string getStyle() 获取<p>样式</p>
 * @method void setStyle(string $Style) 设置<p>样式</p>
 */
class AssetFilterOptions extends AbstractModel
{
    /**
     * @var string <p>显示值</p>
     */
    public $Text;

    /**
     * @var string <p>实际值</p>
     */
    public $Value;

    /**
     * @var string <p>样式</p>
     */
    public $Style;

    /**
     * @param string $Text <p>显示值</p>
     * @param string $Value <p>实际值</p>
     * @param string $Style <p>样式</p>
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

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
