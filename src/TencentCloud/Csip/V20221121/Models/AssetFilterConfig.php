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
 * 资产过滤配置器
 *
 * @method string getAttr() 获取<p>查询属性</p>
 * @method void setAttr(string $Attr) 设置<p>查询属性</p>
 * @method string getLabel() 获取<p>展示</p>
 * @method void setLabel(string $Label) 设置<p>展示</p>
 * @method string getStyle() 获取<p>样式</p>
 * @method void setStyle(string $Style) 设置<p>样式</p>
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 * @method string getLabelEn() 获取<p>英文展示</p>
 * @method void setLabelEn(string $LabelEn) 设置<p>英文展示</p>
 * @method array getOptions() 获取<p>资产私有字段过滤器</p>
 * @method void setOptions(array $Options) 设置<p>资产私有字段过滤器</p>
 */
class AssetFilterConfig extends AbstractModel
{
    /**
     * @var string <p>查询属性</p>
     */
    public $Attr;

    /**
     * @var string <p>展示</p>
     */
    public $Label;

    /**
     * @var string <p>样式</p>
     */
    public $Style;

    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @var string <p>英文展示</p>
     */
    public $LabelEn;

    /**
     * @var array <p>资产私有字段过滤器</p>
     */
    public $Options;

    /**
     * @param string $Attr <p>查询属性</p>
     * @param string $Label <p>展示</p>
     * @param string $Style <p>样式</p>
     * @param string $Value <p>值</p>
     * @param string $LabelEn <p>英文展示</p>
     * @param array $Options <p>资产私有字段过滤器</p>
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
        if (array_key_exists("Attr",$param) and $param["Attr"] !== null) {
            $this->Attr = $param["Attr"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("LabelEn",$param) and $param["LabelEn"] !== null) {
            $this->LabelEn = $param["LabelEn"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new AssetFilterOptions();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
