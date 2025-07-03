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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理实例
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getInstanceType() 获取实例类型：1 master 主实例; 2 ro 只读实例; 3 dr 灾备实例; 4 sdr 小灾备实例
 * @method void setInstanceType(integer $InstanceType) 设置实例类型：1 master 主实例; 2 ro 只读实例; 3 dr 灾备实例; 4 sdr 小灾备实例
 * @method integer getStatus() 获取实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
 * @method void setStatus(integer $Status) 设置实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
 * @method integer getWeight() 获取只读权重,如果权重为系统自动分配，改值不生效，只代表是否启用该实例
 * @method void setWeight(integer $Weight) 设置只读权重,如果权重为系统自动分配，改值不生效，只代表是否启用该实例
 * @method string getRegion() 获取实例所属地域
 * @method void setRegion(string $Region) 设置实例所属地域
 * @method string getZone() 获取实例所属可用区
 * @method void setZone(string $Zone) 设置实例所属可用区
 * @method string getInstNodeId() 获取实例节点ID
 * @method void setInstNodeId(string $InstNodeId) 设置实例节点ID
 * @method string getInstNodeRole() 获取节点角色
 * @method void setInstNodeRole(string $InstNodeRole) 设置节点角色
 */
class ProxyInst extends AbstractModel
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
     * @var integer 实例类型：1 master 主实例; 2 ro 只读实例; 3 dr 灾备实例; 4 sdr 小灾备实例
     */
    public $InstanceType;

    /**
     * @var integer 实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
     */
    public $Status;

    /**
     * @var integer 只读权重,如果权重为系统自动分配，改值不生效，只代表是否启用该实例
     */
    public $Weight;

    /**
     * @var string 实例所属地域
     */
    public $Region;

    /**
     * @var string 实例所属可用区
     */
    public $Zone;

    /**
     * @var string 实例节点ID
     */
    public $InstNodeId;

    /**
     * @var string 节点角色
     */
    public $InstNodeRole;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $InstanceType 实例类型：1 master 主实例; 2 ro 只读实例; 3 dr 灾备实例; 4 sdr 小灾备实例
     * @param integer $Status 实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
     * @param integer $Weight 只读权重,如果权重为系统自动分配，改值不生效，只代表是否启用该实例
     * @param string $Region 实例所属地域
     * @param string $Zone 实例所属可用区
     * @param string $InstNodeId 实例节点ID
     * @param string $InstNodeRole 节点角色
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstNodeId",$param) and $param["InstNodeId"] !== null) {
            $this->InstNodeId = $param["InstNodeId"];
        }

        if (array_key_exists("InstNodeRole",$param) and $param["InstNodeRole"] !== null) {
            $this->InstNodeRole = $param["InstNodeRole"];
        }
    }
}
