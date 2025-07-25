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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自建k8s-容器标准输出信息
 *
 * @method boolean getAllContainers() 获取是否所有容器
 * @method void setAllContainers(boolean $AllContainers) 设置是否所有容器
 * @method string getContainer() 获取container为空表所有的，不为空采集指定的容器
 * @method void setContainer(string $Container) 设置container为空表所有的，不为空采集指定的容器
 * @method string getNamespace() 获取namespace可以多个，用分隔号分割,例如A,B；为空或者没有这个字段，表示所有namespace
 * @method void setNamespace(string $Namespace) 设置namespace可以多个，用分隔号分割,例如A,B；为空或者没有这个字段，表示所有namespace
 * @method array getIncludeLabels() 获取pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeLabels(array $IncludeLabels) 设置pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkLoads() 获取工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkLoads(array $WorkLoads) 设置工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExcludeNamespace() 获取需要排除的namespace可以多个，用分隔号分割,例如A,B
 * @method void setExcludeNamespace(string $ExcludeNamespace) 设置需要排除的namespace可以多个，用分隔号分割,例如A,B
 * @method array getExcludeLabels() 获取需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeLabels(array $ExcludeLabels) 设置需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomLabels() 获取metadata信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomLabels(array $CustomLabels) 设置metadata信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerStdoutInfo extends AbstractModel
{
    /**
     * @var boolean 是否所有容器
     */
    public $AllContainers;

    /**
     * @var string container为空表所有的，不为空采集指定的容器
     */
    public $Container;

    /**
     * @var string namespace可以多个，用分隔号分割,例如A,B；为空或者没有这个字段，表示所有namespace
     */
    public $Namespace;

    /**
     * @var array pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeLabels;

    /**
     * @var array 工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkLoads;

    /**
     * @var string 需要排除的namespace可以多个，用分隔号分割,例如A,B
     */
    public $ExcludeNamespace;

    /**
     * @var array 需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeLabels;

    /**
     * @var array metadata信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomLabels;

    /**
     * @param boolean $AllContainers 是否所有容器
     * @param string $Container container为空表所有的，不为空采集指定的容器
     * @param string $Namespace namespace可以多个，用分隔号分割,例如A,B；为空或者没有这个字段，表示所有namespace
     * @param array $IncludeLabels pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkLoads 工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExcludeNamespace 需要排除的namespace可以多个，用分隔号分割,例如A,B
     * @param array $ExcludeLabels 需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomLabels metadata信息
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
        if (array_key_exists("AllContainers",$param) and $param["AllContainers"] !== null) {
            $this->AllContainers = $param["AllContainers"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("IncludeLabels",$param) and $param["IncludeLabels"] !== null) {
            $this->IncludeLabels = $param["IncludeLabels"];
        }

        if (array_key_exists("WorkLoads",$param) and $param["WorkLoads"] !== null) {
            $this->WorkLoads = [];
            foreach ($param["WorkLoads"] as $key => $value){
                $obj = new ContainerWorkLoadInfo();
                $obj->deserialize($value);
                array_push($this->WorkLoads, $obj);
            }
        }

        if (array_key_exists("ExcludeNamespace",$param) and $param["ExcludeNamespace"] !== null) {
            $this->ExcludeNamespace = $param["ExcludeNamespace"];
        }

        if (array_key_exists("ExcludeLabels",$param) and $param["ExcludeLabels"] !== null) {
            $this->ExcludeLabels = $param["ExcludeLabels"];
        }

        if (array_key_exists("CustomLabels",$param) and $param["CustomLabels"] !== null) {
            $this->CustomLabels = $param["CustomLabels"];
        }
    }
}
