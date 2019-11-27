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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getApplicationId() 获取大区所属应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置大区所属应用实例ID
 * @method array getLogicZoneIds() 获取大区ID
 * @method void setLogicZoneIds(array $LogicZoneIds) 设置大区ID
 * @method array getFilters() 获取过滤条件，本接口支持：ZoneName，ZoneId
 * @method void setFilters(array $Filters) 设置过滤条件，本接口支持：ZoneName，ZoneId
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取大区列表大小
 * @method void setLimit(integer $Limit) 设置大区列表大小
 */

/**
 *DescribeZones请求参数结构体
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var string 大区所属应用实例ID
     */
    public $ApplicationId;

    /**
     * @var array 大区ID
     */
    public $LogicZoneIds;

    /**
     * @var array 过滤条件，本接口支持：ZoneName，ZoneId
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 大区列表大小
     */
    public $Limit;
    /**
     * @param string $ApplicationId 大区所属应用实例ID
     * @param array $LogicZoneIds 大区ID
     * @param array $Filters 过滤条件，本接口支持：ZoneName，ZoneId
     * @param integer $Offset 偏移量
     * @param integer $Limit 大区列表大小
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("LogicZoneIds",$param) and $param["LogicZoneIds"] !== null) {
            $this->LogicZoneIds = $param["LogicZoneIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
