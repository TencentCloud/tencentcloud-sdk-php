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
namespace TencentCloud\Memcached\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method string getOrderBy() 获取枚举范围： AddTimeStamp, InstanceName, ProjectId
 * @method void setOrderBy(string $OrderBy) 设置枚举范围： AddTimeStamp, InstanceName, ProjectId
 * @method array getSearchKeys() 获取查找的关键字
 * @method void setSearchKeys(array $SearchKeys) 设置查找的关键字
 * @method array getUniqSubnetIds() 获取子网ID列表
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置子网ID列表
 * @method array getVips() 获取VIP列表
 * @method void setVips(array $Vips) 设置VIP列表
 * @method integer getOrderType() 获取0倒序，1正序，默认倒序
 * @method void setOrderType(integer $OrderType) 设置0倒序，1正序，默认倒序
 * @method array getInstanceNames() 获取实例名称列表
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称列表
 * @method array getUniqVpcIds() 获取VPC ID列表
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置VPC ID列表
 * @method array getProjectIds() 获取项目ID列表
 * @method void setProjectIds(array $ProjectIds) 设置项目ID列表
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 * @method integer getLimit() 获取实例列表的大小，参数默认值100
 * @method void setLimit(integer $Limit) 设置实例列表的大小，参数默认值100
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string 枚举范围： AddTimeStamp, InstanceName, ProjectId
     */
    public $OrderBy;

    /**
     * @var array 查找的关键字
     */
    public $SearchKeys;

    /**
     * @var array 子网ID列表
     */
    public $UniqSubnetIds;

    /**
     * @var array VIP列表
     */
    public $Vips;

    /**
     * @var integer 0倒序，1正序，默认倒序
     */
    public $OrderType;

    /**
     * @var array 实例名称列表
     */
    public $InstanceNames;

    /**
     * @var array VPC ID列表
     */
    public $UniqVpcIds;

    /**
     * @var array 项目ID列表
     */
    public $ProjectIds;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @var integer 实例列表的大小，参数默认值100
     */
    public $Limit;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @param string $OrderBy 枚举范围： AddTimeStamp, InstanceName, ProjectId
     * @param array $SearchKeys 查找的关键字
     * @param array $UniqSubnetIds 子网ID列表
     * @param array $Vips VIP列表
     * @param integer $OrderType 0倒序，1正序，默认倒序
     * @param array $InstanceNames 实例名称列表
     * @param array $UniqVpcIds VPC ID列表
     * @param array $ProjectIds 项目ID列表
     * @param integer $Offset 偏移量，取Limit整数倍
     * @param integer $Limit 实例列表的大小，参数默认值100
     * @param array $InstanceIds 实例ID列表
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
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
