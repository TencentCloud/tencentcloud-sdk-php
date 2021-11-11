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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群配置
 *
 * @method array getAutoInjectionNamespaceList() 获取自动注入SideCar的NameSpace
 * @method void setAutoInjectionNamespaceList(array $AutoInjectionNamespaceList) 设置自动注入SideCar的NameSpace
 * @method array getIngressGatewayList() 获取Ingress配置列表
 * @method void setIngressGatewayList(array $IngressGatewayList) 设置Ingress配置列表
 * @method array getEgressGatewayList() 获取Egress配置列表
 * @method void setEgressGatewayList(array $EgressGatewayList) 设置Egress配置列表
 * @method IstiodConfig getIstiod() 获取Istiod配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstiod(IstiodConfig $Istiod) 设置Istiod配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeployConfig getDeployConfig() 获取部署配置
 * @method void setDeployConfig(DeployConfig $DeployConfig) 设置部署配置
 * @method array getAutoInjectionNamespaceStateList() 获取自动注入命名空间状态列表
 * @method void setAutoInjectionNamespaceStateList(array $AutoInjectionNamespaceStateList) 设置自动注入命名空间状态列表
 */
class ClusterConfig extends AbstractModel
{
    /**
     * @var array 自动注入SideCar的NameSpace
     */
    public $AutoInjectionNamespaceList;

    /**
     * @var array Ingress配置列表
     */
    public $IngressGatewayList;

    /**
     * @var array Egress配置列表
     */
    public $EgressGatewayList;

    /**
     * @var IstiodConfig Istiod配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Istiod;

    /**
     * @var DeployConfig 部署配置
     */
    public $DeployConfig;

    /**
     * @var array 自动注入命名空间状态列表
     */
    public $AutoInjectionNamespaceStateList;

    /**
     * @param array $AutoInjectionNamespaceList 自动注入SideCar的NameSpace
     * @param array $IngressGatewayList Ingress配置列表
     * @param array $EgressGatewayList Egress配置列表
     * @param IstiodConfig $Istiod Istiod配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeployConfig $DeployConfig 部署配置
     * @param array $AutoInjectionNamespaceStateList 自动注入命名空间状态列表
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
        if (array_key_exists("AutoInjectionNamespaceList",$param) and $param["AutoInjectionNamespaceList"] !== null) {
            $this->AutoInjectionNamespaceList = $param["AutoInjectionNamespaceList"];
        }

        if (array_key_exists("IngressGatewayList",$param) and $param["IngressGatewayList"] !== null) {
            $this->IngressGatewayList = [];
            foreach ($param["IngressGatewayList"] as $key => $value){
                $obj = new IngressGateway();
                $obj->deserialize($value);
                array_push($this->IngressGatewayList, $obj);
            }
        }

        if (array_key_exists("EgressGatewayList",$param) and $param["EgressGatewayList"] !== null) {
            $this->EgressGatewayList = [];
            foreach ($param["EgressGatewayList"] as $key => $value){
                $obj = new EgressGateway();
                $obj->deserialize($value);
                array_push($this->EgressGatewayList, $obj);
            }
        }

        if (array_key_exists("Istiod",$param) and $param["Istiod"] !== null) {
            $this->Istiod = new IstiodConfig();
            $this->Istiod->deserialize($param["Istiod"]);
        }

        if (array_key_exists("DeployConfig",$param) and $param["DeployConfig"] !== null) {
            $this->DeployConfig = new DeployConfig();
            $this->DeployConfig->deserialize($param["DeployConfig"]);
        }

        if (array_key_exists("AutoInjectionNamespaceStateList",$param) and $param["AutoInjectionNamespaceStateList"] !== null) {
            $this->AutoInjectionNamespaceStateList = [];
            foreach ($param["AutoInjectionNamespaceStateList"] as $key => $value){
                $obj = new AutoInjectionNamespaceState();
                $obj->deserialize($value);
                array_push($this->AutoInjectionNamespaceStateList, $obj);
            }
        }
    }
}
