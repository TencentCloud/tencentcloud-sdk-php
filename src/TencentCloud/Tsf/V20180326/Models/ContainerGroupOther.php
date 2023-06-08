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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署组列表-其它字段
 *
 * @method integer getInstanceNum() 获取实例总数
 * @method void setInstanceNum(integer $InstanceNum) 设置实例总数
 * @method integer getCurrentNum() 获取已启动实例总数
 * @method void setCurrentNum(integer $CurrentNum) 设置已启动实例总数
 * @method string getLbIp() 获取负载均衡ip
 * @method void setLbIp(string $LbIp) 设置负载均衡ip
 * @method string getClusterIp() 获取Service ip
 * @method void setClusterIp(string $ClusterIp) 设置Service ip
 * @method string getStatus() 获取服务状态，请参考后面的的状态定义
 * @method void setStatus(string $Status) 设置服务状态，请参考后面的的状态定义
 * @method string getMessage() 获取服务状态，请参考后面的的状态定义
 * @method void setMessage(string $Message) 设置服务状态，请参考后面的的状态定义
 * @method array getEnvs() 获取环境变量
 * @method void setEnvs(array $Envs) 设置环境变量
 * @method integer getNodePort() 获取Service NodePort
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePort(integer $NodePort) 设置Service NodePort
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查相关字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查相关字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNotEqualServiceConfig() 获取服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNotEqualServiceConfig(boolean $IsNotEqualServiceConfig) 设置服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerGroupOther extends AbstractModel
{
    /**
     * @var integer 实例总数
     */
    public $InstanceNum;

    /**
     * @var integer 已启动实例总数
     */
    public $CurrentNum;

    /**
     * @var string 负载均衡ip
     */
    public $LbIp;

    /**
     * @var string Service ip
     */
    public $ClusterIp;

    /**
     * @var string 服务状态，请参考后面的的状态定义
     */
    public $Status;

    /**
     * @var string 服务状态，请参考后面的的状态定义
     */
    public $Message;

    /**
     * @var array 环境变量
     */
    public $Envs;

    /**
     * @var integer Service NodePort
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePort;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var HealthCheckSettings 健康检查相关字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @var boolean 服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNotEqualServiceConfig;

    /**
     * @param integer $InstanceNum 实例总数
     * @param integer $CurrentNum 已启动实例总数
     * @param string $LbIp 负载均衡ip
     * @param string $ClusterIp Service ip
     * @param string $Status 服务状态，请参考后面的的状态定义
     * @param string $Message 服务状态，请参考后面的的状态定义
     * @param array $Envs 环境变量
     * @param integer $NodePort Service NodePort
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSettings $HealthCheckSettings 健康检查相关字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNotEqualServiceConfig 服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("LbIp",$param) and $param["LbIp"] !== null) {
            $this->LbIp = $param["LbIp"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("NodePort",$param) and $param["NodePort"] !== null) {
            $this->NodePort = $param["NodePort"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("IsNotEqualServiceConfig",$param) and $param["IsNotEqualServiceConfig"] !== null) {
            $this->IsNotEqualServiceConfig = $param["IsNotEqualServiceConfig"];
        }
    }
}
