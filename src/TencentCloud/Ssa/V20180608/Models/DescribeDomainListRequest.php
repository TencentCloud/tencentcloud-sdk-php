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
 * @method integer getOffset() 获取-
 * @method void setOffset(integer $Offset) 设置-
 * @method integer getLimit() 获取-
 * @method void setLimit(integer $Limit) 设置-
 * @method integer getAssetBasicType() 获取-
 * @method void setAssetBasicType(integer $AssetBasicType) 设置-
 * @method array getFilter() 获取-
 * @method void setFilter(array $Filter) 设置-
 * @method string getOrder() 获取-
 * @method void setOrder(string $Order) 设置-
 * @method string getBy() 获取-
 * @method void setBy(string $By) 设置-
 * @method array getField() 获取-
 * @method void setField(array $Field) 设置-
 * @method integer getTimeRange() 获取-
 * @method void setTimeRange(integer $TimeRange) 设置-
 * @method integer getLogic() 获取-
 * @method void setLogic(integer $Logic) 设置-
 * @method string getGroupByField() 获取-
 * @method void setGroupByField(string $GroupByField) 设置-
 * @method string getTask() 获取-
 * @method void setTask(string $Task) 设置-
 * @method integer getRequestFrom() 获取-
 * @method void setRequestFrom(integer $RequestFrom) 设置-
 */
class DescribeDomainListRequest extends AbstractModel
{
    /**
     * @var integer -
     */
    public $Offset;

    /**
     * @var integer -
     */
    public $Limit;

    /**
     * @var integer -
     */
    public $AssetBasicType;

    /**
     * @var array -
     */
    public $Filter;

    /**
     * @var string -
     */
    public $Order;

    /**
     * @var string -
     */
    public $By;

    /**
     * @var array -
     */
    public $Field;

    /**
     * @var integer -
     */
    public $TimeRange;

    /**
     * @var integer -
     */
    public $Logic;

    /**
     * @var string -
     */
    public $GroupByField;

    /**
     * @var string -
     */
    public $Task;

    /**
     * @var integer -
     */
    public $RequestFrom;

    /**
     * @param integer $Offset -
     * @param integer $Limit -
     * @param integer $AssetBasicType -
     * @param array $Filter -
     * @param string $Order -
     * @param string $By -
     * @param array $Field -
     * @param integer $TimeRange -
     * @param integer $Logic -
     * @param string $GroupByField -
     * @param string $Task -
     * @param integer $RequestFrom -
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
