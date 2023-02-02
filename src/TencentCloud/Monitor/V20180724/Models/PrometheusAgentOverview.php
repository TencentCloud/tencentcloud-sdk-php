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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管prometheus agent概览
 *
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getStatus() 获取agent状态
normal = 正常
abnormal = 异常
 * @method void setStatus(string $Status) 设置agent状态
normal = 正常
abnormal = 异常
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method array getExternalLabels() 获取额外labels
本集群的所有指标都会带上这几个label
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalLabels(array $ExternalLabels) 设置额外labels
本集群的所有指标都会带上这几个label
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取集群所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置集群所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取集群所在VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置集群所在VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailedReason() 获取记录关联等操作的失败信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReason(string $FailedReason) 设置记录关联等操作的失败信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAgentOverview extends AbstractModel
{
    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string agent状态
normal = 正常
abnormal = 异常
     */
    public $Status;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var array 额外labels
本集群的所有指标都会带上这几个label
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalLabels;

    /**
     * @var string 集群所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 集群所在VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 记录关联等操作的失败信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReason;

    /**
     * @param string $ClusterType 集群类型
     * @param string $ClusterId 集群id
     * @param string $Status agent状态
normal = 正常
abnormal = 异常
     * @param string $ClusterName 集群名称
     * @param array $ExternalLabels 额外labels
本集群的所有指标都会带上这几个label
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 集群所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 集群所在VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailedReason 记录关联等操作的失败信息
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ExternalLabels",$param) and $param["ExternalLabels"] !== null) {
            $this->ExternalLabels = [];
            foreach ($param["ExternalLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->ExternalLabels, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }
    }
}
