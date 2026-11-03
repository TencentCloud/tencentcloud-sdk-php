<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色状态信息
 *
 * @method string getRoleName() 获取
 * @method void setRoleName(string $RoleName) 设置
 * @method string getWorkloadType() 获取
 * @method void setWorkloadType(string $WorkloadType) 设置
 * @method string getWorkloadName() 获取
 * @method void setWorkloadName(string $WorkloadName) 设置
 * @method integer getRunningReplicas() 获取
 * @method void setRunningReplicas(integer $RunningReplicas) 设置
 * @method integer getTargetReplicas() 获取
 * @method void setTargetReplicas(integer $TargetReplicas) 设置
 * @method integer getContainerCount() 获取
 * @method void setContainerCount(integer $ContainerCount) 设置
 * @method string getState() 获取
 * @method void setState(string $State) 设置
 * @method string getLastObservedTime() 获取
 * @method void setLastObservedTime(string $LastObservedTime) 设置
 * @method string getRole() 获取
 * @method void setRole(string $Role) 设置
 */
class RoleStatusInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $RoleName;

    /**
     * @var string 
     */
    public $WorkloadType;

    /**
     * @var string 
     */
    public $WorkloadName;

    /**
     * @var integer 
     */
    public $RunningReplicas;

    /**
     * @var integer 
     */
    public $TargetReplicas;

    /**
     * @var integer 
     */
    public $ContainerCount;

    /**
     * @var string 
     */
    public $State;

    /**
     * @var string 
     */
    public $LastObservedTime;

    /**
     * @var string 
     */
    public $Role;

    /**
     * @param string $RoleName 
     * @param string $WorkloadType 
     * @param string $WorkloadName 
     * @param integer $RunningReplicas 
     * @param integer $TargetReplicas 
     * @param integer $ContainerCount 
     * @param string $State 
     * @param string $LastObservedTime 
     * @param string $Role 
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("RunningReplicas",$param) and $param["RunningReplicas"] !== null) {
            $this->RunningReplicas = $param["RunningReplicas"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("LastObservedTime",$param) and $param["LastObservedTime"] !== null) {
            $this->LastObservedTime = $param["LastObservedTime"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
