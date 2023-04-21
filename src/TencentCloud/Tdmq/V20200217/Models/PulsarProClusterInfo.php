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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar专业版集群信息
 *
 * @method string getClusterId() 获取集群Id。
 * @method void setClusterId(string $ClusterId) 设置集群Id。
 * @method string getClusterName() 获取集群名称。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
 * @method string getRemark() 获取说明信息。
 * @method void setRemark(string $Remark) 设置说明信息。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:隔离
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:隔离
 * @method string getVersion() 获取集群版本
 * @method void setVersion(string $Version) 设置集群版本
 * @method array getNodeDistribution() 获取节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeDistribution(array $NodeDistribution) 设置节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStorage() 获取最大储存容量，单位：MB
 * @method void setMaxStorage(integer $MaxStorage) 设置最大储存容量，单位：MB
 */
class PulsarProClusterInfo extends AbstractModel
{
    /**
     * @var string 集群Id。
     */
    public $ClusterId;

    /**
     * @var string 集群名称。
     */
    public $ClusterName;

    /**
     * @var string 说明信息。
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:隔离
     */
    public $Status;

    /**
     * @var string 集群版本
     */
    public $Version;

    /**
     * @var array 节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeDistribution;

    /**
     * @var integer 最大储存容量，单位：MB
     */
    public $MaxStorage;

    /**
     * @param string $ClusterId 集群Id。
     * @param string $ClusterName 集群名称。
     * @param string $Remark 说明信息。
     * @param string $CreateTime 创建时间
     * @param integer $Status 集群状态，0:创建中，1:正常，2:隔离
     * @param string $Version 集群版本
     * @param array $NodeDistribution 节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStorage 最大储存容量，单位：MB
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = [];
            foreach ($param["NodeDistribution"] as $key => $value){
                $obj = new InstanceNodeDistribution();
                $obj->deserialize($value);
                array_push($this->NodeDistribution, $obj);
            }
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }
    }
}
