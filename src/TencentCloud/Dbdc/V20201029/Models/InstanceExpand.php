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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群扩展信息。
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getInstanceName() 获取集群名称
 * @method void setInstanceName(string $InstanceName) 设置集群名称
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getInstanceType() 获取集群类型： 0：一主一备，1：一主两备
 * @method void setInstanceType(integer $InstanceType) 设置集群类型： 0：一主一备，1：一主两备
 * @method integer getInstanceStatus() 获取集群状态: 0 集群创建中, 1 集群有效, 2 集群扩容中, 3 集群删除中, 4 集群缩容中 -1 集群已隔离 -2 集群已删除
 * @method void setInstanceStatus(integer $InstanceStatus) 设置集群状态: 0 集群创建中, 1 集群有效, 2 集群扩容中, 3 集群删除中, 4 集群缩容中 -1 集群已隔离 -2 集群已删除
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getAutoRenewFlag() 获取实例自动续费标识： 0正常续费 1自动续费 2到期不续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置实例自动续费标识： 0正常续费 1自动续费 2到期不续费
 * @method string getMachine() 获取机型
 * @method void setMachine(string $Machine) 设置机型
 * @method string getPeriodEndTime() 获取过期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置过期时间
 * @method InstanceDetail getInstanceDetail() 获取集群信息
 * @method void setInstanceDetail(InstanceDetail $InstanceDetail) 设置集群信息
 * @method integer getPid() 获取计费侧的产品ID
 * @method void setPid(integer $Pid) 设置计费侧的产品ID
 */
class InstanceExpand extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 集群名称
     */
    public $InstanceName;

    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 集群类型： 0：一主一备，1：一主两备
     */
    public $InstanceType;

    /**
     * @var integer 集群状态: 0 集群创建中, 1 集群有效, 2 集群扩容中, 3 集群删除中, 4 集群缩容中 -1 集群已隔离 -2 集群已删除
     */
    public $InstanceStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 实例自动续费标识： 0正常续费 1自动续费 2到期不续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 机型
     */
    public $Machine;

    /**
     * @var string 过期时间
     */
    public $PeriodEndTime;

    /**
     * @var InstanceDetail 集群信息
     */
    public $InstanceDetail;

    /**
     * @var integer 计费侧的产品ID
     */
    public $Pid;

    /**
     * @param string $InstanceId 集群ID
     * @param string $InstanceName 集群名称
     * @param integer $AppId 用户ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $InstanceType 集群类型： 0：一主一备，1：一主两备
     * @param integer $InstanceStatus 集群状态: 0 集群创建中, 1 集群有效, 2 集群扩容中, 3 集群删除中, 4 集群缩容中 -1 集群已隔离 -2 集群已删除
     * @param string $CreateTime 创建时间
     * @param integer $AutoRenewFlag 实例自动续费标识： 0正常续费 1自动续费 2到期不续费
     * @param string $Machine 机型
     * @param string $PeriodEndTime 过期时间
     * @param InstanceDetail $InstanceDetail 集群信息
     * @param integer $Pid 计费侧的产品ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("InstanceDetail",$param) and $param["InstanceDetail"] !== null) {
            $this->InstanceDetail = new InstanceDetail();
            $this->InstanceDetail->deserialize($param["InstanceDetail"]);
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }
    }
}
