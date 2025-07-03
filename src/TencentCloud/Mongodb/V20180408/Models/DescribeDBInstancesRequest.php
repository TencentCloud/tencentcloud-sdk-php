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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
 * @method integer getInstanceType() 获取实例类型，取值范围：
<ul><li>0： 所有实例</li><li>1： 正式实例</li><li>2： 临时实例</li><li>3： 只读实例</li><li>-1： 正式实例+只读+灾备实例</li></ul>
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，取值范围：
<ul><li>0： 所有实例</li><li>1： 正式实例</li><li>2： 临时实例</li><li>3： 只读实例</li><li>-1： 正式实例+只读+灾备实例</li></ul>
 * @method integer getClusterType() 获取集群类型，取值范围： 
<ul><li>0： 副本集实例</li><li>1： 正式实例</li> <li>-1： 所有实例</li></ul>
 * @method void setClusterType(integer $ClusterType) 设置集群类型，取值范围： 
<ul><li>0： 副本集实例</li><li>1： 正式实例</li> <li>-1： 所有实例</li></ul>
 * @method array getStatus() 获取实例状态，取值范围： 
<ul><li>0： 待初始化</li><li>1： 流程执行中</li> <li>2： 有效实例</li><li>-2： 已过期实例</li></ul>
 * @method void setStatus(array $Status) 设置实例状态，取值范围： 
<ul><li>0： 待初始化</li><li>1： 流程执行中</li> <li>2： 有效实例</li><li>-2： 已过期实例</li></ul>
 * @method string getVpcId() 获取私有网络的ID，基础网络则不传该参数。
 * @method void setVpcId(string $VpcId) 设置私有网络的ID，基础网络则不传该参数。
 * @method string getSubnetId() 获取私有网络的子网ID，基础网络则不传该参数。入参设置该参数的同时，必须设置相应的VpcId。
 * @method void setSubnetId(string $SubnetId) 设置私有网络的子网ID，基础网络则不传该参数。入参设置该参数的同时，必须设置相应的VpcId。
 * @method integer getPayMode() 获取付费类型，取值范围：
<ul><li>0： 按量计费</li><li>1：包年包月</li><li>-1： 按量计费+包年包月</li></ul>
 * @method void setPayMode(integer $PayMode) 设置付费类型，取值范围：
<ul><li>0： 按量计费</li><li>1：包年包月</li><li>-1： 按量计费+包年包月</li></ul>
 * @method integer getLimit() 获取单次请求返回的数量，最小值为1，最大值为100，默认值为20。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，最小值为1，最大值为100，默认值为20。
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method string getOrderBy() 获取返回结果集排序的字段，目前支持： 
<ul><li>ProjectId： 按照项目ID排序</li><li>InstanceName：按照实例名称排序</li><li>CreateTime： 根据创建时间排序</li></ul>
 * @method void setOrderBy(string $OrderBy) 设置返回结果集排序的字段，目前支持： 
<ul><li>ProjectId： 按照项目ID排序</li><li>InstanceName：按照实例名称排序</li><li>CreateTime： 根据创建时间排序</li></ul>
 * @method string getOrderByType() 获取返回结果集排序方式，目前支持："ASC"或者"DESC"。
<ul><li>ASC： 顺序取值</li><li>DESC：倒序取值</li></ul>
 * @method void setOrderByType(string $OrderByType) 设置返回结果集排序方式，目前支持："ASC"或者"DESC"。
<ul><li>ASC： 顺序取值</li><li>DESC：倒序取值</li></ul>
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceIds;

    /**
     * @var integer 实例类型，取值范围：
<ul><li>0： 所有实例</li><li>1： 正式实例</li><li>2： 临时实例</li><li>3： 只读实例</li><li>-1： 正式实例+只读+灾备实例</li></ul>
     */
    public $InstanceType;

    /**
     * @var integer 集群类型，取值范围： 
<ul><li>0： 副本集实例</li><li>1： 正式实例</li> <li>-1： 所有实例</li></ul>
     */
    public $ClusterType;

    /**
     * @var array 实例状态，取值范围： 
<ul><li>0： 待初始化</li><li>1： 流程执行中</li> <li>2： 有效实例</li><li>-2： 已过期实例</li></ul>
     */
    public $Status;

    /**
     * @var string 私有网络的ID，基础网络则不传该参数。
     */
    public $VpcId;

    /**
     * @var string 私有网络的子网ID，基础网络则不传该参数。入参设置该参数的同时，必须设置相应的VpcId。
     */
    public $SubnetId;

    /**
     * @var integer 付费类型，取值范围：
<ul><li>0： 按量计费</li><li>1：包年包月</li><li>-1： 按量计费+包年包月</li></ul>
     */
    public $PayMode;

    /**
     * @var integer 单次请求返回的数量，最小值为1，最大值为100，默认值为20。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var string 返回结果集排序的字段，目前支持： 
<ul><li>ProjectId： 按照项目ID排序</li><li>InstanceName：按照实例名称排序</li><li>CreateTime： 根据创建时间排序</li></ul>
     */
    public $OrderBy;

    /**
     * @var string 返回结果集排序方式，目前支持："ASC"或者"DESC"。
<ul><li>ASC： 顺序取值</li><li>DESC：倒序取值</li></ul>
     */
    public $OrderByType;

    /**
     * @param array $InstanceIds 实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
     * @param integer $InstanceType 实例类型，取值范围：
<ul><li>0： 所有实例</li><li>1： 正式实例</li><li>2： 临时实例</li><li>3： 只读实例</li><li>-1： 正式实例+只读+灾备实例</li></ul>
     * @param integer $ClusterType 集群类型，取值范围： 
<ul><li>0： 副本集实例</li><li>1： 正式实例</li> <li>-1： 所有实例</li></ul>
     * @param array $Status 实例状态，取值范围： 
<ul><li>0： 待初始化</li><li>1： 流程执行中</li> <li>2： 有效实例</li><li>-2： 已过期实例</li></ul>
     * @param string $VpcId 私有网络的ID，基础网络则不传该参数。
     * @param string $SubnetId 私有网络的子网ID，基础网络则不传该参数。入参设置该参数的同时，必须设置相应的VpcId。
     * @param integer $PayMode 付费类型，取值范围：
<ul><li>0： 按量计费</li><li>1：包年包月</li><li>-1： 按量计费+包年包月</li></ul>
     * @param integer $Limit 单次请求返回的数量，最小值为1，最大值为100，默认值为20。
     * @param integer $Offset 偏移量，默认值为0。
     * @param string $OrderBy 返回结果集排序的字段，目前支持： 
<ul><li>ProjectId： 按照项目ID排序</li><li>InstanceName：按照实例名称排序</li><li>CreateTime： 根据创建时间排序</li></ul>
     * @param string $OrderByType 返回结果集排序方式，目前支持："ASC"或者"DESC"。
<ul><li>ASC： 顺序取值</li><li>DESC：倒序取值</li></ul>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
