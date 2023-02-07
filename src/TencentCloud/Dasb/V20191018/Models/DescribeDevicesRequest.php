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
 * DescribeDevices请求参数结构体
 *
 * @method array getIdSet() 获取资产ID集合
 * @method void setIdSet(array $IdSet) 设置资产ID集合
 * @method string getName() 获取资产名或资产IP，模糊查询
 * @method void setName(string $Name) 设置资产名或资产IP，模糊查询
 * @method string getIp() 获取暂未使用
 * @method void setIp(string $Ip) 设置暂未使用
 * @method array getApCodeSet() 获取地域码集合
 * @method void setApCodeSet(array $ApCodeSet) 设置地域码集合
 * @method integer getKind() 获取操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method void setKind(integer $Kind) 设置操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 * @method array getAuthorizedUserIdSet() 获取有该资产访问权限的用户ID集合
 * @method void setAuthorizedUserIdSet(array $AuthorizedUserIdSet) 设置有该资产访问权限的用户ID集合
 * @method array getResourceIdSet() 获取过滤条件，资产绑定的堡垒机服务ID集合
 * @method void setResourceIdSet(array $ResourceIdSet) 设置过滤条件，资产绑定的堡垒机服务ID集合
 * @method array getKindSet() 获取可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method void setKindSet(array $KindSet) 设置可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method string getDepartmentId() 获取过滤条件，可按照部门ID进行过滤
 * @method void setDepartmentId(string $DepartmentId) 设置过滤条件，可按照部门ID进行过滤
 * @method array getTagFilters() 获取过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
 * @method void setTagFilters(array $TagFilters) 设置过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
 * @method array getFilters() 获取过滤数组。支持的Name：
BindingStatus 绑定状态
 * @method void setFilters(array $Filters) 设置过滤数组。支持的Name：
BindingStatus 绑定状态
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var array 资产ID集合
     */
    public $IdSet;

    /**
     * @var string 资产名或资产IP，模糊查询
     */
    public $Name;

    /**
     * @var string 暂未使用
     */
    public $Ip;

    /**
     * @var array 地域码集合
     */
    public $ApCodeSet;

    /**
     * @var integer 操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     */
    public $Kind;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @var array 有该资产访问权限的用户ID集合
     */
    public $AuthorizedUserIdSet;

    /**
     * @var array 过滤条件，资产绑定的堡垒机服务ID集合
     */
    public $ResourceIdSet;

    /**
     * @var array 可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     */
    public $KindSet;

    /**
     * @var string 过滤条件，可按照部门ID进行过滤
     */
    public $DepartmentId;

    /**
     * @var array 过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
     */
    public $TagFilters;

    /**
     * @var array 过滤数组。支持的Name：
BindingStatus 绑定状态
     */
    public $Filters;

    /**
     * @param array $IdSet 资产ID集合
     * @param string $Name 资产名或资产IP，模糊查询
     * @param string $Ip 暂未使用
     * @param array $ApCodeSet 地域码集合
     * @param integer $Kind 操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数量，默认20
     * @param array $AuthorizedUserIdSet 有该资产访问权限的用户ID集合
     * @param array $ResourceIdSet 过滤条件，资产绑定的堡垒机服务ID集合
     * @param array $KindSet 可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     * @param string $DepartmentId 过滤条件，可按照部门ID进行过滤
     * @param array $TagFilters 过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系
     * @param array $Filters 过滤数组。支持的Name：
BindingStatus 绑定状态
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ApCodeSet",$param) and $param["ApCodeSet"] !== null) {
            $this->ApCodeSet = $param["ApCodeSet"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AuthorizedUserIdSet",$param) and $param["AuthorizedUserIdSet"] !== null) {
            $this->AuthorizedUserIdSet = $param["AuthorizedUserIdSet"];
        }

        if (array_key_exists("ResourceIdSet",$param) and $param["ResourceIdSet"] !== null) {
            $this->ResourceIdSet = $param["ResourceIdSet"];
        }

        if (array_key_exists("KindSet",$param) and $param["KindSet"] !== null) {
            $this->KindSet = $param["KindSet"];
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
