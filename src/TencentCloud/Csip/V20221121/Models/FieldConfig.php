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
 * 资产详情字段配置
 *
 * @method string getLabel() 获取<p>字段显示</p>
 * @method void setLabel(string $Label) 设置<p>字段显示</p>
 * @method string getValue() 获取<p>字段值</p>
 * @method void setValue(string $Value) 设置<p>字段值</p>
 * @method FieldStyle getStyle() 获取<p>字段样式配置</p>
 * @method void setStyle(FieldStyle $Style) 设置<p>字段样式配置</p>
 * @method integer getValueCount() 获取<p>字段内容数量</p>
 * @method void setValueCount(integer $ValueCount) 设置<p>字段内容数量</p>
 */
class FieldConfig extends AbstractModel
{
    /**
     * @var string <p>字段显示</p>
     */
    public $Label;

    /**
     * @var string <p>字段值</p>
     */
    public $Value;

    /**
     * @var FieldStyle <p>字段样式配置</p>
     */
    public $Style;

    /**
     * @var integer <p>字段内容数量</p>
     */
    public $ValueCount;

    /**
     * @param string $Label <p>字段显示</p>
     * @param string $Value <p>字段值</p>
     * @param FieldStyle $Style <p>字段样式配置</p>
     * @param integer $ValueCount <p>字段内容数量</p>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = new FieldStyle();
            $this->Style->deserialize($param["Style"]);
        }

        if (array_key_exists("ValueCount",$param) and $param["ValueCount"] !== null) {
            $this->ValueCount = $param["ValueCount"];
        }
    }
}
