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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeNodes请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getNamePattern() 获取边缘节点名称模糊搜索串
 * @method void setNamePattern(string $NamePattern) 设置边缘节点名称模糊搜索串
 * @method array getNameMatchedList() 获取边缘节点名称列表，支持批量查询 ，优先于模糊查询
 * @method void setNameMatchedList(array $NameMatchedList) 设置边缘节点名称列表，支持批量查询 ，优先于模糊查询
 * @method array getSort() 获取排序信息列表
 * @method void setSort(array $Sort) 设置排序信息列表
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取页面大小Limit
 * @method void setLimit(integer $Limit) 设置页面大小Limit
 * @method integer getNodeType() 获取节点类型
 * @method void setNodeType(integer $NodeType) 设置节点类型
 */
class DescribeEdgeNodesRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string 边缘节点名称模糊搜索串
     */
    public $NamePattern;

    /**
     * @var array 边缘节点名称列表，支持批量查询 ，优先于模糊查询
     */
    public $NameMatchedList;

    /**
     * @var array 排序信息列表
     */
    public $Sort;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 页面大小Limit
     */
    public $Limit;

    /**
     * @var integer 节点类型
     */
    public $NodeType;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $NamePattern 边缘节点名称模糊搜索串
     * @param array $NameMatchedList 边缘节点名称列表，支持批量查询 ，优先于模糊查询
     * @param array $Sort 排序信息列表
     * @param integer $Offset 偏移量
     * @param integer $Limit 页面大小Limit
     * @param integer $NodeType 节点类型
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("NameMatchedList",$param) and $param["NameMatchedList"] !== null) {
            $this->NameMatchedList = $param["NameMatchedList"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = [];
            foreach ($param["Sort"] as $key => $value){
                $obj = new Sort();
                $obj->deserialize($value);
                array_push($this->Sort, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
