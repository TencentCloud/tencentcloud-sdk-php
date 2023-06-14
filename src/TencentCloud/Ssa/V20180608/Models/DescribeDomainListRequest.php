<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainList请求参数结构体
 *
 * @method integer getOffset() 获取起始，从0开始(只支持32位)
 * @method void setOffset(integer $Offset) 设置起始，从0开始(只支持32位)
 * @method integer getLimit() 获取limit,最大值200(只支持32位)
 * @method void setLimit(integer $Limit) 设置limit,最大值200(只支持32位)
 * @method integer getAssetBasicType() 获取资产大类，根据此字段时返回不同的子结构,AssetBasicType(只支持32位)
 * @method void setAssetBasicType(integer $AssetBasicType) 设置资产大类，根据此字段时返回不同的子结构,AssetBasicType(只支持32位)
 * @method array getFilter() 获取过滤条件
 * @method void setFilter(array $Filter) 设置过滤条件
 * @method string getOrder() 获取排序
 * @method void setOrder(string $Order) 设置排序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method array getField() 获取导出字段
 * @method void setField(array $Field) 设置导出字段
 * @method integer getTimeRange() 获取时间范围(只支持32位)
 * @method void setTimeRange(integer $TimeRange) 设置时间范围(只支持32位)
 * @method integer getLogic() 获取逻辑字段(只支持32位)
 * @method void setLogic(integer $Logic) 设置逻辑字段(只支持32位)
 * @method string getGroupByField() 获取聚合字段  
 * @method void setGroupByField(string $GroupByField) 设置聚合字段  
 * @method string getTask() 获取-
 * @method void setTask(string $Task) 设置-
 * @method integer getRequestFrom() 获取0:cfw 1:vss 2.soc 3.waf 4.cwp
 * @method void setRequestFrom(integer $RequestFrom) 设置0:cfw 1:vss 2.soc 3.waf 4.cwp
 */
class DescribeDomainListRequest extends AbstractModel
{
    /**
     * @var integer 起始，从0开始(只支持32位)
     */
    public $Offset;

    /**
     * @var integer limit,最大值200(只支持32位)
     */
    public $Limit;

    /**
     * @var integer 资产大类，根据此字段时返回不同的子结构,AssetBasicType(只支持32位)
     */
    public $AssetBasicType;

    /**
     * @var array 过滤条件
     */
    public $Filter;

    /**
     * @var string 排序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var array 导出字段
     */
    public $Field;

    /**
     * @var integer 时间范围(只支持32位)
     */
    public $TimeRange;

    /**
     * @var integer 逻辑字段(只支持32位)
     */
    public $Logic;

    /**
     * @var string 聚合字段  
     */
    public $GroupByField;

    /**
     * @var string -
     */
    public $Task;

    /**
     * @var integer 0:cfw 1:vss 2.soc 3.waf 4.cwp
     */
    public $RequestFrom;

    /**
     * @param integer $Offset 起始，从0开始(只支持32位)
     * @param integer $Limit limit,最大值200(只支持32位)
     * @param integer $AssetBasicType 资产大类，根据此字段时返回不同的子结构,AssetBasicType(只支持32位)
     * @param array $Filter 过滤条件
     * @param string $Order 排序
     * @param string $By 排序字段
     * @param array $Field 导出字段
     * @param integer $TimeRange 时间范围(只支持32位)
     * @param integer $Logic 逻辑字段(只支持32位)
     * @param string $GroupByField 聚合字段  
     * @param string $Task -
     * @param integer $RequestFrom 0:cfw 1:vss 2.soc 3.waf 4.cwp
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AssetBasicType",$param) and $param["AssetBasicType"] !== null) {
            $this->AssetBasicType = $param["AssetBasicType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new QueryFilterV3();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }

        if (array_key_exists("GroupByField",$param) and $param["GroupByField"] !== null) {
            $this->GroupByField = $param["GroupByField"];
        }

        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = $param["Task"];
        }

        if (array_key_exists("RequestFrom",$param) and $param["RequestFrom"] !== null) {
            $this->RequestFrom = $param["RequestFrom"];
        }
    }
}
