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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务进程信息
 *
 * @method string getIp() 获取进程所在节点IP
 * @method void setIp(string $Ip) 设置进程所在节点IP
 * @method integer getNodeType() 获取进程类型
 * @method void setNodeType(integer $NodeType) 设置进程类型
 * @method string getNodeName() 获取进程名称
 * @method void setNodeName(string $NodeName) 设置进程名称
 * @method integer getServiceStatus() 获取服务组件状态
 * @method void setServiceStatus(integer $ServiceStatus) 设置服务组件状态
 * @method integer getMonitorStatus() 获取进程监控状态
 * @method void setMonitorStatus(integer $MonitorStatus) 设置进程监控状态
 * @method integer getStatus() 获取服务组件状态
 * @method void setStatus(integer $Status) 设置服务组件状态
 * @method string getPortsInfo() 获取进程端口信息
 * @method void setPortsInfo(string $PortsInfo) 设置进程端口信息
 * @method string getLastRestartTime() 获取最近重启时间
 * @method void setLastRestartTime(string $LastRestartTime) 设置最近重启时间
 * @method integer getFlag() 获取节点类型
 * @method void setFlag(integer $Flag) 设置节点类型
 * @method integer getConfGroupId() 获取配置组ID
 * @method void setConfGroupId(integer $ConfGroupId) 设置配置组ID
 * @method string getConfGroupName() 获取配置组名称
 * @method void setConfGroupName(string $ConfGroupName) 设置配置组名称
 * @method integer getConfStatus() 获取节点是否需要重启
 * @method void setConfStatus(integer $ConfStatus) 设置节点是否需要重启
 * @method array getServiceDetectionInfo() 获取进程探测信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDetectionInfo(array $ServiceDetectionInfo) 设置进程探测信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeFlagFilter() 获取节点类型
 * @method void setNodeFlagFilter(string $NodeFlagFilter) 设置节点类型
 * @method HealthStatus getHealthStatus() 获取进程健康状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthStatus(HealthStatus $HealthStatus) 设置进程健康状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportRoleMonitor() 获取角色是否支持监控
 * @method void setIsSupportRoleMonitor(boolean $IsSupportRoleMonitor) 设置角色是否支持监控
 * @method array getStopPolicies() 获取暂停策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopPolicies(array $StopPolicies) 设置暂停策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHAState() 获取测试环境api强校验，现网没有，emrcc接口返回有。不加会报错
 * @method void setHAState(string $HAState) 设置测试环境api强校验，现网没有，emrcc接口返回有。不加会报错
 * @method string getNameService() 获取NameService名称
 * @method void setNameService(string $NameService) 设置NameService名称
 * @method boolean getIsFederation() 获取是否支持联邦
 * @method void setIsFederation(boolean $IsFederation) 设置是否支持联邦
 * @method integer getDataNodeMaintenanceState() 获取datanode是否是维护状态
 * @method void setDataNodeMaintenanceState(integer $DataNodeMaintenanceState) 设置datanode是否是维护状态
 */
class ServiceNodeDetailInfo extends AbstractModel
{
    /**
     * @var string 进程所在节点IP
     */
    public $Ip;

    /**
     * @var integer 进程类型
     */
    public $NodeType;

    /**
     * @var string 进程名称
     */
    public $NodeName;

    /**
     * @var integer 服务组件状态
     */
    public $ServiceStatus;

    /**
     * @var integer 进程监控状态
     */
    public $MonitorStatus;

    /**
     * @var integer 服务组件状态
     */
    public $Status;

    /**
     * @var string 进程端口信息
     */
    public $PortsInfo;

    /**
     * @var string 最近重启时间
     */
    public $LastRestartTime;

    /**
     * @var integer 节点类型
     */
    public $Flag;

    /**
     * @var integer 配置组ID
     */
    public $ConfGroupId;

    /**
     * @var string 配置组名称
     */
    public $ConfGroupName;

    /**
     * @var integer 节点是否需要重启
     */
    public $ConfStatus;

    /**
     * @var array 进程探测信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDetectionInfo;

    /**
     * @var string 节点类型
     */
    public $NodeFlagFilter;

    /**
     * @var HealthStatus 进程健康状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthStatus;

    /**
     * @var boolean 角色是否支持监控
     */
    public $IsSupportRoleMonitor;

    /**
     * @var array 暂停策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopPolicies;

    /**
     * @var string 测试环境api强校验，现网没有，emrcc接口返回有。不加会报错
     */
    public $HAState;

    /**
     * @var string NameService名称
     */
    public $NameService;

    /**
     * @var boolean 是否支持联邦
     */
    public $IsFederation;

    /**
     * @var integer datanode是否是维护状态
     */
    public $DataNodeMaintenanceState;

    /**
     * @param string $Ip 进程所在节点IP
     * @param integer $NodeType 进程类型
     * @param string $NodeName 进程名称
     * @param integer $ServiceStatus 服务组件状态
     * @param integer $MonitorStatus 进程监控状态
     * @param integer $Status 服务组件状态
     * @param string $PortsInfo 进程端口信息
     * @param string $LastRestartTime 最近重启时间
     * @param integer $Flag 节点类型
     * @param integer $ConfGroupId 配置组ID
     * @param string $ConfGroupName 配置组名称
     * @param integer $ConfStatus 节点是否需要重启
     * @param array $ServiceDetectionInfo 进程探测信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeFlagFilter 节点类型
     * @param HealthStatus $HealthStatus 进程健康状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportRoleMonitor 角色是否支持监控
     * @param array $StopPolicies 暂停策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HAState 测试环境api强校验，现网没有，emrcc接口返回有。不加会报错
     * @param string $NameService NameService名称
     * @param boolean $IsFederation 是否支持联邦
     * @param integer $DataNodeMaintenanceState datanode是否是维护状态
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PortsInfo",$param) and $param["PortsInfo"] !== null) {
            $this->PortsInfo = $param["PortsInfo"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("ConfGroupId",$param) and $param["ConfGroupId"] !== null) {
            $this->ConfGroupId = $param["ConfGroupId"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }

        if (array_key_exists("ConfStatus",$param) and $param["ConfStatus"] !== null) {
            $this->ConfStatus = $param["ConfStatus"];
        }

        if (array_key_exists("ServiceDetectionInfo",$param) and $param["ServiceDetectionInfo"] !== null) {
            $this->ServiceDetectionInfo = [];
            foreach ($param["ServiceDetectionInfo"] as $key => $value){
                $obj = new ServiceProcessFunctionInfo();
                $obj->deserialize($value);
                array_push($this->ServiceDetectionInfo, $obj);
            }
        }

        if (array_key_exists("NodeFlagFilter",$param) and $param["NodeFlagFilter"] !== null) {
            $this->NodeFlagFilter = $param["NodeFlagFilter"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = new HealthStatus();
            $this->HealthStatus->deserialize($param["HealthStatus"]);
        }

        if (array_key_exists("IsSupportRoleMonitor",$param) and $param["IsSupportRoleMonitor"] !== null) {
            $this->IsSupportRoleMonitor = $param["IsSupportRoleMonitor"];
        }

        if (array_key_exists("StopPolicies",$param) and $param["StopPolicies"] !== null) {
            $this->StopPolicies = [];
            foreach ($param["StopPolicies"] as $key => $value){
                $obj = new RestartPolicy();
                $obj->deserialize($value);
                array_push($this->StopPolicies, $obj);
            }
        }

        if (array_key_exists("HAState",$param) and $param["HAState"] !== null) {
            $this->HAState = $param["HAState"];
        }

        if (array_key_exists("NameService",$param) and $param["NameService"] !== null) {
            $this->NameService = $param["NameService"];
        }

        if (array_key_exists("IsFederation",$param) and $param["IsFederation"] !== null) {
            $this->IsFederation = $param["IsFederation"];
        }

        if (array_key_exists("DataNodeMaintenanceState",$param) and $param["DataNodeMaintenanceState"] !== null) {
            $this->DataNodeMaintenanceState = $param["DataNodeMaintenanceState"];
        }
    }
}
