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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getAppId() 获取APPID
 * @method void setAppId(integer $AppId) 设置APPID
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getVpcId() 获取VPC数字ID
 * @method void setVpcId(integer $VpcId) 设置VPC数字ID
 * @method integer getSubnetId() 获取Subnet数字ID
 * @method void setSubnetId(integer $SubnetId) 设置Subnet数字ID
 * @method string getStatusDesc() 获取状态中文描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态中文描述
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getVip() 获取内网IP
 * @method void setVip(string $Vip) 设置内网IP
 * @method integer getVport() 获取内网端口
 * @method void setVport(integer $Vport) 设置内网端口
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getAutoRenewFlag() 获取自动续费标志
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志
 * @method integer getMemory() 获取内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位 GB
 * @method integer getStorage() 获取存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置存储大小，单位 GB
 * @method integer getShardCount() 获取分片个数
 * @method void setShardCount(integer $ShardCount) 设置分片个数
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method string getIsolatedTimestamp() 获取隔离时间
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置隔离时间
 * @method string getUin() 获取UIN
 * @method void setUin(string $Uin) 设置UIN
 * @method array getShardDetail() 获取分片详情
 * @method void setShardDetail(array $ShardDetail) 设置分片详情
 */

/**
 *分布式数据库实例信息
 */
class DCDBInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer APPID
     */
    public $AppId;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer VPC数字ID
     */
    public $VpcId;

    /**
     * @var integer Subnet数字ID
     */
    public $SubnetId;

    /**
     * @var string 状态中文描述
     */
    public $StatusDesc;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 内网IP
     */
    public $Vip;

    /**
     * @var integer 内网端口
     */
    public $Vport;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 自动续费标志
     */
    public $AutoRenewFlag;

    /**
     * @var integer 内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 存储大小，单位 GB
     */
    public $Storage;

    /**
     * @var integer 分片个数
     */
    public $ShardCount;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var string 隔离时间
     */
    public $IsolatedTimestamp;

    /**
     * @var string UIN
     */
    public $Uin;

    /**
     * @var array 分片详情
     */
    public $ShardDetail;
    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $AppId APPID
     * @param integer $ProjectId 项目ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $VpcId VPC数字ID
     * @param integer $SubnetId Subnet数字ID
     * @param string $StatusDesc 状态中文描述
     * @param integer $Status 状态
     * @param string $Vip 内网IP
     * @param integer $Vport 内网端口
     * @param string $CreateTime 创建时间
     * @param integer $AutoRenewFlag 自动续费标志
     * @param integer $Memory 内存大小，单位 GB
     * @param integer $Storage 存储大小，单位 GB
     * @param integer $ShardCount 分片个数
     * @param string $PeriodEndTime 到期时间
     * @param string $IsolatedTimestamp 隔离时间
     * @param string $Uin UIN
     * @param array $ShardDetail 分片详情
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ShardDetail",$param) and $param["ShardDetail"] !== null) {
            $this->ShardDetail = [];
            foreach ($param["ShardDetail"] as $key => $value){
                $obj = new ShardInfo();
                $obj->deserialize($value);
                array_push($this->ShardDetail, $obj);
            }
        }
    }
}
