<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProjectId() 获取项目ID，可使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口查询项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID，可使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口查询项目ID
 * @method array getInstanceTypes() 获取实例类型，可取值：1-主实例，2-灾备实例，3-只读实例
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例类型，可取值：1-主实例，2-灾备实例，3-只读实例
 * @method array getVips() 获取实例的内网IP地址
 * @method void setVips(array $Vips) 设置实例的内网IP地址
 * @method array getStatus() 获取实例状态，可取值：0-创建中，1-运行中，4-隔离中，5-已隔离
 * @method void setStatus(array $Status) 设置实例状态，可取值：0-创建中，1-运行中，4-隔离中，5-已隔离
 * @method integer getOffset() 获取记录偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20，最大值为2000
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为20，最大值为2000
 * @method string getSecurityGroupId() 获取安全组ID
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID
 * @method array getPayTypes() 获取付费类型，可取值：0-包年包月，1-小时计费
 * @method void setPayTypes(array $PayTypes) 设置付费类型，可取值：0-包年包月，1-小时计费
 * @method array getInstanceNames() 获取实例名称
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称
 * @method array getTaskStatus() 获取实例任务状态，可能取值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
 * @method void setTaskStatus(array $TaskStatus) 设置实例任务状态，可能取值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
 * @method array getEngineVersions() 获取实例数据库引擎版本，可能取值：5.1、5.5、5.6和5.7
 * @method void setEngineVersions(array $EngineVersions) 设置实例数据库引擎版本，可能取值：5.1、5.5、5.6和5.7
 * @method array getVpcIds() 获取私有网络的ID
 * @method void setVpcIds(array $VpcIds) 设置私有网络的ID
 * @method array getZoneIds() 获取可用区的ID
 * @method void setZoneIds(array $ZoneIds) 设置可用区的ID
 * @method array getSubnetIds() 获取子网ID
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID
 * @method array getCdbErrors() 获取是否锁定标记
 * @method void setCdbErrors(array $CdbErrors) 设置是否锁定标记
 * @method string getOrderBy() 获取排序的字段，目前支持："InstanceId", "InstanceName", "CreateTime", "DeadlineTime"
 * @method void setOrderBy(string $OrderBy) 设置排序的字段，目前支持："InstanceId", "InstanceName", "CreateTime", "DeadlineTime"
 * @method string getOrderDirection() 获取排序方式，目前支持："ASC"或者"DESC"
 * @method void setOrderDirection(string $OrderDirection) 设置排序方式，目前支持："ASC"或者"DESC"
 * @method integer getWithSecurityGroup() 获取是否包含安全组信息
 * @method void setWithSecurityGroup(integer $WithSecurityGroup) 设置是否包含安全组信息
 * @method integer getWithExCluster() 获取是否包含独享集群信息
 * @method void setWithExCluster(integer $WithExCluster) 设置是否包含独享集群信息
 * @method string getExClusterId() 获取独享集群ID
 * @method void setExClusterId(string $ExClusterId) 设置独享集群ID
 * @method array getInstanceIds() 获取实例ID
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID
 * @method integer getInitFlag() 获取初始化标记，可取值：0-未初始化，1-初始化
 * @method void setInitFlag(integer $InitFlag) 设置初始化标记，可取值：0-未初始化，1-初始化
 * @method integer getWithDr() 获取是否包含灾备实例
 * @method void setWithDr(integer $WithDr) 设置是否包含灾备实例
 * @method integer getWithRo() 获取是否包含只读实例
 * @method void setWithRo(integer $WithRo) 设置是否包含只读实例
 * @method integer getWithMaster() 获取是否包含主实例
 * @method void setWithMaster(integer $WithMaster) 设置是否包含主实例
 */

/**
 *DescribeDBInstances请求参数结构体
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer 项目ID，可使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口查询项目ID
     */
    public $ProjectId;

    /**
     * @var array 实例类型，可取值：1-主实例，2-灾备实例，3-只读实例
     */
    public $InstanceTypes;

    /**
     * @var array 实例的内网IP地址
     */
    public $Vips;

    /**
     * @var array 实例状态，可取值：0-创建中，1-运行中，4-隔离中，5-已隔离
     */
    public $Status;

    /**
     * @var integer 记录偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20，最大值为2000
     */
    public $Limit;

    /**
     * @var string 安全组ID
     */
    public $SecurityGroupId;

    /**
     * @var array 付费类型，可取值：0-包年包月，1-小时计费
     */
    public $PayTypes;

    /**
     * @var array 实例名称
     */
    public $InstanceNames;

    /**
     * @var array 实例任务状态，可能取值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
     */
    public $TaskStatus;

    /**
     * @var array 实例数据库引擎版本，可能取值：5.1、5.5、5.6和5.7
     */
    public $EngineVersions;

    /**
     * @var array 私有网络的ID
     */
    public $VpcIds;

    /**
     * @var array 可用区的ID
     */
    public $ZoneIds;

    /**
     * @var array 子网ID
     */
    public $SubnetIds;

    /**
     * @var array 是否锁定标记
     */
    public $CdbErrors;

    /**
     * @var string 排序的字段，目前支持："InstanceId", "InstanceName", "CreateTime", "DeadlineTime"
     */
    public $OrderBy;

    /**
     * @var string 排序方式，目前支持："ASC"或者"DESC"
     */
    public $OrderDirection;

    /**
     * @var integer 是否包含安全组信息
     */
    public $WithSecurityGroup;

    /**
     * @var integer 是否包含独享集群信息
     */
    public $WithExCluster;

    /**
     * @var string 独享集群ID
     */
    public $ExClusterId;

    /**
     * @var array 实例ID
     */
    public $InstanceIds;

    /**
     * @var integer 初始化标记，可取值：0-未初始化，1-初始化
     */
    public $InitFlag;

    /**
     * @var integer 是否包含灾备实例
     */
    public $WithDr;

    /**
     * @var integer 是否包含只读实例
     */
    public $WithRo;

    /**
     * @var integer 是否包含主实例
     */
    public $WithMaster;
    /**
     * @param integer $ProjectId 项目ID，可使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口查询项目ID
     * @param array $InstanceTypes 实例类型，可取值：1-主实例，2-灾备实例，3-只读实例
     * @param array $Vips 实例的内网IP地址
     * @param array $Status 实例状态，可取值：0-创建中，1-运行中，4-隔离中，5-已隔离
     * @param integer $Offset 记录偏移量，默认值为0
     * @param integer $Limit 单次请求返回的数量，默认值为20，最大值为2000
     * @param string $SecurityGroupId 安全组ID
     * @param array $PayTypes 付费类型，可取值：0-包年包月，1-小时计费
     * @param array $InstanceNames 实例名称
     * @param array $TaskStatus 实例任务状态，可能取值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
     * @param array $EngineVersions 实例数据库引擎版本，可能取值：5.1、5.5、5.6和5.7
     * @param array $VpcIds 私有网络的ID
     * @param array $ZoneIds 可用区的ID
     * @param array $SubnetIds 子网ID
     * @param array $CdbErrors 是否锁定标记
     * @param string $OrderBy 排序的字段，目前支持："InstanceId", "InstanceName", "CreateTime", "DeadlineTime"
     * @param string $OrderDirection 排序方式，目前支持："ASC"或者"DESC"
     * @param integer $WithSecurityGroup 是否包含安全组信息
     * @param integer $WithExCluster 是否包含独享集群信息
     * @param string $ExClusterId 独享集群ID
     * @param array $InstanceIds 实例ID
     * @param integer $InitFlag 初始化标记，可取值：0-未初始化，1-初始化
     * @param integer $WithDr 是否包含灾备实例
     * @param integer $WithRo 是否包含只读实例
     * @param integer $WithMaster 是否包含主实例
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = [];
            foreach ($param["InstanceTypes"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->InstanceTypes, $obj);
            }
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = [];
            foreach ($param["Status"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->Status, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("PayTypes",$param) and $param["PayTypes"] !== null) {
            $this->PayTypes = [];
            foreach ($param["PayTypes"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->PayTypes, $obj);
            }
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = [];
            foreach ($param["TaskStatus"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->TaskStatus, $obj);
            }
        }

        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = [];
            foreach ($param["VpcIds"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->VpcIds, $obj);
            }
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = [];
            foreach ($param["ZoneIds"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->ZoneIds, $obj);
            }
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = [];
            foreach ($param["SubnetIds"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->SubnetIds, $obj);
            }
        }

        if (array_key_exists("CdbErrors",$param) and $param["CdbErrors"] !== null) {
            $this->CdbErrors = [];
            foreach ($param["CdbErrors"] as $key => $value){
                $obj = new int64();
                $obj->deserialize($value);
                array_push($this->CdbErrors, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("WithSecurityGroup",$param) and $param["WithSecurityGroup"] !== null) {
            $this->WithSecurityGroup = $param["WithSecurityGroup"];
        }

        if (array_key_exists("WithExCluster",$param) and $param["WithExCluster"] !== null) {
            $this->WithExCluster = $param["WithExCluster"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("WithDr",$param) and $param["WithDr"] !== null) {
            $this->WithDr = $param["WithDr"];
        }

        if (array_key_exists("WithRo",$param) and $param["WithRo"] !== null) {
            $this->WithRo = $param["WithRo"];
        }

        if (array_key_exists("WithMaster",$param) and $param["WithMaster"] !== null) {
            $this->WithMaster = $param["WithMaster"];
        }
    }
}
