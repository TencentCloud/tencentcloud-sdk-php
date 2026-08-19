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
 * 资产动态表头
 *
 * @method string getItemType() 获取<p>类型</p>
 * @method void setItemType(string $ItemType) 设置<p>类型</p>
 * @method string getLabel() 获取<p>展示</p>
 * @method void setLabel(string $Label) 设置<p>展示</p>
 * @method integer getCopy() 获取<p>是否支持复制</p>
 * @method void setCopy(integer $Copy) 设置<p>是否支持复制</p>
 * @method array getValues() 获取<p>值对应字段键</p>
 * @method void setValues(array $Values) 设置<p>值对应字段键</p>
 * @method string getLinkURL() 获取<p>跳转URL</p>
 * @method void setLinkURL(string $LinkURL) 设置<p>跳转URL</p>
 * @method array getFilters() 获取<p>过滤器</p>
 * @method void setFilters(array $Filters) 设置<p>过滤器</p>
 * @method integer getSort() 获取<p>是否支持排序</p>
 * @method void setSort(integer $Sort) 设置<p>是否支持排序</p>
 * @method string getValueStyle() 获取<p>字段展示样式</p>
 * @method void setValueStyle(string $ValueStyle) 设置<p>字段展示样式</p>
 */
class AssetHeaderItem extends AbstractModel
{
    /**
     * @var string <p>类型</p>
     */
    public $ItemType;

    /**
     * @var string <p>展示</p>
     */
    public $Label;

    /**
     * @var integer <p>是否支持复制</p>
     */
    public $Copy;

    /**
     * @var array <p>值对应字段键</p>
     */
    public $Values;

    /**
     * @var string <p>跳转URL</p>
     */
    public $LinkURL;

    /**
     * @var array <p>过滤器</p>
     */
    public $Filters;

    /**
     * @var integer <p>是否支持排序</p>
     */
    public $Sort;

    /**
     * @var string <p>字段展示样式</p>
     */
    public $ValueStyle;

    /**
     * @param string $ItemType <p>类型</p>
     * @param string $Label <p>展示</p>
     * @param integer $Copy <p>是否支持复制</p>
     * @param array $Values <p>值对应字段键</p>
     * @param string $LinkURL <p>跳转URL</p>
     * @param array $Filters <p>过滤器</p>
     * @param integer $Sort <p>是否支持排序</p>
     * @param string $ValueStyle <p>字段展示样式</p>
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
        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = $param["Copy"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("LinkURL",$param) and $param["LinkURL"] !== null) {
            $this->LinkURL = $param["LinkURL"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilterConfig();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("ValueStyle",$param) and $param["ValueStyle"] !== null) {
            $this->ValueStyle = $param["ValueStyle"];
        }
    }
}
