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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘容器集群可用的自定义参数
 *
 * @method array getKubeAPIServer() 获取kube-apiserver可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeAPIServer(array $KubeAPIServer) 设置kube-apiserver可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKubeControllerManager() 获取kube-controller-manager可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeControllerManager(array $KubeControllerManager) 设置kube-controller-manager可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKubeScheduler() 获取kube-scheduler可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeScheduler(array $KubeScheduler) 设置kube-scheduler可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKubelet() 获取kubelet可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubelet(array $Kubelet) 设置kubelet可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeAvailableExtraArgs extends AbstractModel
{
    /**
     * @var array kube-apiserver可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeAPIServer;

    /**
     * @var array kube-controller-manager可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeControllerManager;

    /**
     * @var array kube-scheduler可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeScheduler;

    /**
     * @var array kubelet可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kubelet;

    /**
     * @param array $KubeAPIServer kube-apiserver可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KubeControllerManager kube-controller-manager可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KubeScheduler kube-scheduler可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Kubelet kubelet可用的自定义参数
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
        if (array_key_exists("KubeAPIServer",$param) and $param["KubeAPIServer"] !== null) {
            $this->KubeAPIServer = [];
            foreach ($param["KubeAPIServer"] as $key => $value){
                $obj = new EdgeArgsFlag();
                $obj->deserialize($value);
                array_push($this->KubeAPIServer, $obj);
            }
        }

        if (array_key_exists("KubeControllerManager",$param) and $param["KubeControllerManager"] !== null) {
            $this->KubeControllerManager = [];
            foreach ($param["KubeControllerManager"] as $key => $value){
                $obj = new EdgeArgsFlag();
                $obj->deserialize($value);
                array_push($this->KubeControllerManager, $obj);
            }
        }

        if (array_key_exists("KubeScheduler",$param) and $param["KubeScheduler"] !== null) {
            $this->KubeScheduler = [];
            foreach ($param["KubeScheduler"] as $key => $value){
                $obj = new EdgeArgsFlag();
                $obj->deserialize($value);
                array_push($this->KubeScheduler, $obj);
            }
        }

        if (array_key_exists("Kubelet",$param) and $param["Kubelet"] !== null) {
            $this->Kubelet = [];
            foreach ($param["Kubelet"] as $key => $value){
                $obj = new EdgeArgsFlag();
                $obj->deserialize($value);
                array_push($this->Kubelet, $obj);
            }
        }
    }
}
