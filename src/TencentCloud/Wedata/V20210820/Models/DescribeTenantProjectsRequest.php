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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTenantProjects请求参数结构体
 *
 * @method integer getPageNumber() 获取第几页
 * @method void setPageNumber(integer $PageNumber) 设置第几页
 * @method integer getPageSize() 获取一页几条
 * @method void setPageSize(integer $PageSize) 设置一页几条
 * @method boolean getDescribeExecutors() 获取是否展示关联执行组的信息。正常应该不是从项目列表里获取
 * @method void setDescribeExecutors(boolean $DescribeExecutors) 设置是否展示关联执行组的信息。正常应该不是从项目列表里获取
 * @method boolean getDescribeAdminUsers() 获取是否展示项目管理员信息，减少默认返回的请求内容
 * @method void setDescribeAdminUsers(boolean $DescribeAdminUsers) 设置是否展示项目管理员信息，减少默认返回的请求内容
 * @method boolean getDescribeMemberCount() 获取统计项目人员数量。数据地图需求
 * @method void setDescribeMemberCount(boolean $DescribeMemberCount) 设置统计项目人员数量。数据地图需求
 * @method array getFilters() 获取自定义条件查询
 * @method void setFilters(array $Filters) 设置自定义条件查询
 * @method array getOrderFields() 获取排序字段
 * @method void setOrderFields(array $OrderFields) 设置排序字段
 * @method boolean getDescribeCreator() 获取默认不提供创建者信息，该参数与CAM交互比较耗时
 * @method void setDescribeCreator(boolean $DescribeCreator) 设置默认不提供创建者信息，该参数与CAM交互比较耗时
 * @method boolean getDescribeResourcePools() 获取是否展示关联资源池信息
 * @method void setDescribeResourcePools(boolean $DescribeResourcePools) 设置是否展示关联资源池信息
 */
class DescribeTenantProjectsRequest extends AbstractModel
{
    /**
     * @var integer 第几页
     */
    public $PageNumber;

    /**
     * @var integer 一页几条
     */
    public $PageSize;

    /**
     * @var boolean 是否展示关联执行组的信息。正常应该不是从项目列表里获取
     */
    public $DescribeExecutors;

    /**
     * @var boolean 是否展示项目管理员信息，减少默认返回的请求内容
     */
    public $DescribeAdminUsers;

    /**
     * @var boolean 统计项目人员数量。数据地图需求
     */
    public $DescribeMemberCount;

    /**
     * @var array 自定义条件查询
     */
    public $Filters;

    /**
     * @var array 排序字段
     */
    public $OrderFields;

    /**
     * @var boolean 默认不提供创建者信息，该参数与CAM交互比较耗时
     */
    public $DescribeCreator;

    /**
     * @var boolean 是否展示关联资源池信息
     */
    public $DescribeResourcePools;

    /**
     * @param integer $PageNumber 第几页
     * @param integer $PageSize 一页几条
     * @param boolean $DescribeExecutors 是否展示关联执行组的信息。正常应该不是从项目列表里获取
     * @param boolean $DescribeAdminUsers 是否展示项目管理员信息，减少默认返回的请求内容
     * @param boolean $DescribeMemberCount 统计项目人员数量。数据地图需求
     * @param array $Filters 自定义条件查询
     * @param array $OrderFields 排序字段
     * @param boolean $DescribeCreator 默认不提供创建者信息，该参数与CAM交互比较耗时
     * @param boolean $DescribeResourcePools 是否展示关联资源池信息
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DescribeExecutors",$param) and $param["DescribeExecutors"] !== null) {
            $this->DescribeExecutors = $param["DescribeExecutors"];
        }

        if (array_key_exists("DescribeAdminUsers",$param) and $param["DescribeAdminUsers"] !== null) {
            $this->DescribeAdminUsers = $param["DescribeAdminUsers"];
        }

        if (array_key_exists("DescribeMemberCount",$param) and $param["DescribeMemberCount"] !== null) {
            $this->DescribeMemberCount = $param["DescribeMemberCount"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("DescribeCreator",$param) and $param["DescribeCreator"] !== null) {
            $this->DescribeCreator = $param["DescribeCreator"];
        }

        if (array_key_exists("DescribeResourcePools",$param) and $param["DescribeResourcePools"] !== null) {
            $this->DescribeResourcePools = $param["DescribeResourcePools"];
        }
    }
}
