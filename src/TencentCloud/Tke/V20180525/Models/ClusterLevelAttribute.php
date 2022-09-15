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
 * 托管集群等级属性
 *
 * @method string getName() 获取集群等级
 * @method void setName(string $Name) 设置集群等级
 * @method string getAlias() 获取等级名称
 * @method void setAlias(string $Alias) 设置等级名称
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method integer getPodCount() 获取Pod数量
 * @method void setPodCount(integer $PodCount) 设置Pod数量
 * @method integer getConfigMapCount() 获取Configmap数量
 * @method void setConfigMapCount(integer $ConfigMapCount) 设置Configmap数量
 * @method integer getCRDCount() 获取CRD数量
 * @method void setCRDCount(integer $CRDCount) 设置CRD数量
 * @method boolean getEnable() 获取是否启用
 * @method void setEnable(boolean $Enable) 设置是否启用
 * @method integer getOtherCount() 获取其他资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherCount(integer $OtherCount) 设置其他资源数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterLevelAttribute extends AbstractModel
{
    /**
     * @var string 集群等级
     */
    public $Name;

    /**
     * @var string 等级名称
     */
    public $Alias;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var integer Pod数量
     */
    public $PodCount;

    /**
     * @var integer Configmap数量
     */
    public $ConfigMapCount;

    /**
     * @var integer CRD数量
     */
    public $CRDCount;

    /**
     * @var boolean 是否启用
     */
    public $Enable;

    /**
     * @var integer 其他资源数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherCount;

    /**
     * @param string $Name 集群等级
     * @param string $Alias 等级名称
     * @param integer $NodeCount 节点数量
     * @param integer $PodCount Pod数量
     * @param integer $ConfigMapCount Configmap数量
     * @param integer $CRDCount CRD数量
     * @param boolean $Enable 是否启用
     * @param integer $OtherCount 其他资源数量
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ConfigMapCount",$param) and $param["ConfigMapCount"] !== null) {
            $this->ConfigMapCount = $param["ConfigMapCount"];
        }

        if (array_key_exists("CRDCount",$param) and $param["CRDCount"] !== null) {
            $this->CRDCount = $param["CRDCount"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("OtherCount",$param) and $param["OtherCount"] !== null) {
            $this->OtherCount = $param["OtherCount"];
        }
    }
}
