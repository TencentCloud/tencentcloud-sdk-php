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
 * @method string getApplicationId() 获取待查询表所属应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置待查询表所属应用实例ID
 * @method array getLogicZoneIds() 获取待查询表所属大区列表
 * @method void setLogicZoneIds(array $LogicZoneIds) 设置待查询表所属大区列表
 * @method array getSelectedTables() 获取待查询表信息列表
 * @method void setSelectedTables(array $SelectedTables) 设置待查询表信息列表
 * @method array getFilters() 获取过滤条件，本接口支持：TableName，TableInstanceId
 * @method void setFilters(array $Filters) 设置过滤条件，本接口支持：TableName，TableInstanceId
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取结果列表数量
 * @method void setLimit(integer $Limit) 设置结果列表数量
 */

/**
 *DescribeTables请求参数结构体
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var string 待查询表所属应用实例ID
     */
    public $ApplicationId;

    /**
     * @var array 待查询表所属大区列表
     */
    public $LogicZoneIds;

    /**
     * @var array 待查询表信息列表
     */
    public $SelectedTables;

    /**
     * @var array 过滤条件，本接口支持：TableName，TableInstanceId
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 结果列表数量
     */
    public $Limit;
    /**
     * @param string $ApplicationId 待查询表所属应用实例ID
     * @param array $LogicZoneIds 待查询表所属大区列表
     * @param array $SelectedTables 待查询表信息列表
     * @param array $Filters 过滤条件，本接口支持：TableName，TableInstanceId
     * @param integer $Offset 偏移量
     * @param integer $Limit 结果列表数量
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

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfo();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
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
