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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络集群资产审计返回结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method string getRegion() 获取集群区域
 * @method void setRegion(string $Region) 设置集群区域
 * @method string getAction() 获取动作
 * @method void setAction(string $Action) 设置动作
 * @method string getOperation() 获取操作人
 * @method void setOperation(string $Operation) 设置操作人
 * @method string getNetworkPolicyName() 获取策略名
 * @method void setNetworkPolicyName(string $NetworkPolicyName) 设置策略名
 * @method string getOperationTime() 获取操作时间
 * @method void setOperationTime(string $OperationTime) 设置操作时间
 * @method integer getAppId() 获取操作人appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置操作人appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取操作人uin
 * @method void setUin(string $Uin) 设置操作人uin
 * @method integer getPolicyId() 获取策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置策略id
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkAuditRecord extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 集群名字
     */
    public $ClusterName;

    /**
     * @var string 集群区域
     */
    public $Region;

    /**
     * @var string 动作
     */
    public $Action;

    /**
     * @var string 操作人
     */
    public $Operation;

    /**
     * @var string 策略名
     */
    public $NetworkPolicyName;

    /**
     * @var string 操作时间
     */
    public $OperationTime;

    /**
     * @var integer 操作人appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 操作人uin
     */
    public $Uin;

    /**
     * @var integer 策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群名字
     * @param string $Region 集群区域
     * @param string $Action 动作
     * @param string $Operation 操作人
     * @param string $NetworkPolicyName 策略名
     * @param string $OperationTime 操作时间
     * @param integer $AppId 操作人appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 操作人uin
     * @param integer $PolicyId 策略id
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("NetworkPolicyName",$param) and $param["NetworkPolicyName"] !== null) {
            $this->NetworkPolicyName = $param["NetworkPolicyName"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
