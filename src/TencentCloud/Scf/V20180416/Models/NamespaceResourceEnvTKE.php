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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基于TKE的资源池选项
 *
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getSubnetID() 获取子网ID
 * @method void setSubnetID(string $SubnetID) 设置子网ID
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDataPath() 获取数据存储地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataPath(string $DataPath) 设置数据存储地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeSelector() 获取node选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeSelector(array $NodeSelector) 设置node选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTolerations() 获取污点容忍
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTolerations(array $Tolerations) 设置污点容忍
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取scf组件将占用的节点端口起始号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置scf组件将占用的节点端口起始号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodTemplatePatch() 获取yaml格式的pod patch内容，例如
metadata:
  labels:
    key: value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodTemplatePatch(string $PodTemplatePatch) 设置yaml格式的pod patch内容，例如
metadata:
  labels:
    key: value
注意：此字段可能返回 null，表示取不到有效值。
 */
class NamespaceResourceEnvTKE extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 子网ID
     */
    public $SubnetID;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 数据存储地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataPath;

    /**
     * @var array node选择器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeSelector;

    /**
     * @var array 污点容忍
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tolerations;

    /**
     * @var integer scf组件将占用的节点端口起始号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string yaml格式的pod patch内容，例如
metadata:
  labels:
    key: value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodTemplatePatch;

    /**
     * @param string $ClusterID 集群ID
     * @param string $SubnetID 子网ID
     * @param string $Namespace 命名空间
     * @param string $DataPath 数据存储地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeSelector node选择器
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tolerations 污点容忍
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port scf组件将占用的节点端口起始号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodTemplatePatch yaml格式的pod patch内容，例如
metadata:
  labels:
    key: value
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("SubnetID",$param) and $param["SubnetID"] !== null) {
            $this->SubnetID = $param["SubnetID"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("DataPath",$param) and $param["DataPath"] !== null) {
            $this->DataPath = $param["DataPath"];
        }

        if (array_key_exists("NodeSelector",$param) and $param["NodeSelector"] !== null) {
            $this->NodeSelector = [];
            foreach ($param["NodeSelector"] as $key => $value){
                $obj = new K8SLabel();
                $obj->deserialize($value);
                array_push($this->NodeSelector, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new K8SToleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PodTemplatePatch",$param) and $param["PodTemplatePatch"] !== null) {
            $this->PodTemplatePatch = $param["PodTemplatePatch"];
        }
    }
}
