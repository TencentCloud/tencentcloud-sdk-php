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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProcessImageTemplates请求参数结构体
 *
 * @method array getDefinitions() 获取图片处理模板唯一标识过滤条件，数组长度限制：100。
 * @method void setDefinitions(array $Definitions) 设置图片处理模板唯一标识过滤条件，数组长度限制：100。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数 默认值：10；最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数 默认值：10；最大值：100。
 * @method string getName() 获取图片处理模板标识过滤条件。
 * @method void setName(string $Name) 设置图片处理模板标识过滤条件。
 * @method integer getOrderType() 获取排序方式，OrderBy设置后才有效，可选值：   0：升序   1：降序  默认 0。
 * @method void setOrderType(integer $OrderType) 设置排序方式，OrderBy设置后才有效，可选值：   0：升序   1：降序  默认 0。
 * @method string getOrderBy() 获取排序字段，可选值：  
Definition：模板唯一标识； 
默认值：创建时间。
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选值：  
Definition：模板唯一标识； 
默认值：创建时间。
 * @method string getType() 获取模板类型过滤条件，可选值： <li>Preset：系统预置模板；</li> <li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型过滤条件，可选值： <li>Preset：系统预置模板；</li> <li>Custom：用户自定义模板。</li>
 */
class DescribeProcessImageTemplatesRequest extends AbstractModel
{
    /**
     * @var array 图片处理模板唯一标识过滤条件，数组长度限制：100。
     */
    public $Definitions;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数 默认值：10；最大值：100。
     */
    public $Limit;

    /**
     * @var string 图片处理模板标识过滤条件。
     */
    public $Name;

    /**
     * @var integer 排序方式，OrderBy设置后才有效，可选值：   0：升序   1：降序  默认 0。
     */
    public $OrderType;

    /**
     * @var string 排序字段，可选值：  
Definition：模板唯一标识； 
默认值：创建时间。
     */
    public $OrderBy;

    /**
     * @var string 模板类型过滤条件，可选值： <li>Preset：系统预置模板；</li> <li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @param array $Definitions 图片处理模板唯一标识过滤条件，数组长度限制：100。
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数 默认值：10；最大值：100。
     * @param string $Name 图片处理模板标识过滤条件。
     * @param integer $OrderType 排序方式，OrderBy设置后才有效，可选值：   0：升序   1：降序  默认 0。
     * @param string $OrderBy 排序字段，可选值：  
Definition：模板唯一标识； 
默认值：创建时间。
     * @param string $Type 模板类型过滤条件，可选值： <li>Preset：系统预置模板；</li> <li>Custom：用户自定义模板。</li>
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
        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
