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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceGroupMembers请求参数结构体
 *
 * @method integer getId() 获取资产组ID
 * @method void setId(integer $Id) 设置资产组ID
 * @method boolean getBound() 获取true - 查询已在该资产组的资产，false - 查询未在该资产组的资产
 * @method void setBound(boolean $Bound) 设置true - 查询已在该资产组的资产，false - 查询未在该资产组的资产
 * @method string getName() 获取资产名或资产IP，模糊查询
 * @method void setName(string $Name) 设置资产名或资产IP，模糊查询
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数，默认20, 最大500
 * @method void setLimit(integer $Limit) 设置每页条目数，默认20, 最大500
 * @method integer getKind() 获取资产类型，1 - Linux，2 - Windows，3 - MySQL，4 - SQLServer
 * @method void setKind(integer $Kind) 设置资产类型，1 - Linux，2 - Windows，3 - MySQL，4 - SQLServer
 * @method string getDepartmentId() 获取所属部门ID
 * @method void setDepartmentId(string $DepartmentId) 设置所属部门ID
 * @method array getTagFilters() 获取过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
 * @method void setTagFilters(array $TagFilters) 设置过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
 */
class DescribeDeviceGroupMembersRequest extends AbstractModel
{
    /**
     * @var integer 资产组ID
     */
    public $Id;

    /**
     * @var boolean true - 查询已在该资产组的资产，false - 查询未在该资产组的资产
     */
    public $Bound;

    /**
     * @var string 资产名或资产IP，模糊查询
     */
    public $Name;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数，默认20, 最大500
     */
    public $Limit;

    /**
     * @var integer 资产类型，1 - Linux，2 - Windows，3 - MySQL，4 - SQLServer
     */
    public $Kind;

    /**
     * @var string 所属部门ID
     */
    public $DepartmentId;

    /**
     * @var array 过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
     */
    public $TagFilters;

    /**
     * @param integer $Id 资产组ID
     * @param boolean $Bound true - 查询已在该资产组的资产，false - 查询未在该资产组的资产
     * @param string $Name 资产名或资产IP，模糊查询
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数，默认20, 最大500
     * @param integer $Kind 资产类型，1 - Linux，2 - Windows，3 - MySQL，4 - SQLServer
     * @param string $DepartmentId 所属部门ID
     * @param array $TagFilters 过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Bound",$param) and $param["Bound"] !== null) {
            $this->Bound = $param["Bound"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
