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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusInstanceDetail返回参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getSubnetId() 获取子网 ID
 * @method void setSubnetId(string $SubnetId) 设置子网 ID
 * @method integer getInstanceStatus() 获取实例业务状态。取值范围：

1：正在创建
2：运行中
3：异常
4：重建中
5：销毁中
6：已停服
8：欠费停服中
9：欠费已停服
 * @method void setInstanceStatus(integer $InstanceStatus) 设置实例业务状态。取值范围：

1：正在创建
2：运行中
3：异常
4：重建中
5：销毁中
6：已停服
8：欠费停服中
9：欠费已停服
 * @method integer getChargeStatus() 获取计费状态

1：正常
2：过期
3：销毁
4：分配中
5：分配失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(integer $ChargeStatus) 设置计费状态

1：正常
2：过期
3：销毁
4：分配中
5：分配失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableGrafana() 获取是否开启 Grafana
0：不开启
1：开启
 * @method void setEnableGrafana(integer $EnableGrafana) 设置是否开启 Grafana
0：不开启
1：开启
 * @method string getGrafanaURL() 获取Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaURL(string $GrafanaURL) 设置Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceChargeType() 获取实例计费模式。取值范围：

2：包年包月
3：按量
 * @method void setInstanceChargeType(integer $InstanceChargeType) 设置实例计费模式。取值范围：

2：包年包月
3：按量
 * @method string getSpecName() 获取规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataRetentionTime() 获取存储周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置存储周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记

0：不自动续费
1：开启自动续费
2：禁止自动续费
-1：无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记

0：不自动续费
1：开启自动续费
2：禁止自动续费
-1：无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePrometheusInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string 子网 ID
     */
    public $SubnetId;

    /**
     * @var integer 实例业务状态。取值范围：

1：正在创建
2：运行中
3：异常
4：重建中
5：销毁中
6：已停服
8：欠费停服中
9：欠费已停服
     */
    public $InstanceStatus;

    /**
     * @var integer 计费状态

1：正常
2：过期
3：销毁
4：分配中
5：分配失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var integer 是否开启 Grafana
0：不开启
1：开启
     */
    public $EnableGrafana;

    /**
     * @var string Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaURL;

    /**
     * @var integer 实例计费模式。取值范围：

2：包年包月
3：按量
     */
    public $InstanceChargeType;

    /**
     * @var string 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer 存储周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRetentionTime;

    /**
     * @var string 购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 自动续费标记

0：不自动续费
1：开启自动续费
2：禁止自动续费
-1：无效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $VpcId VPC ID
     * @param string $SubnetId 子网 ID
     * @param integer $InstanceStatus 实例业务状态。取值范围：

1：正在创建
2：运行中
3：异常
4：重建中
5：销毁中
6：已停服
8：欠费停服中
9：欠费已停服
     * @param integer $ChargeStatus 计费状态

1：正常
2：过期
3：销毁
4：分配中
5：分配失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableGrafana 是否开启 Grafana
0：不开启
1：开启
     * @param string $GrafanaURL Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceChargeType 实例计费模式。取值范围：

2：包年包月
3：按量
     * @param string $SpecName 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataRetentionTime 存储周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记

0：不自动续费
1：开启自动续费
2：禁止自动续费
-1：无效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("EnableGrafana",$param) and $param["EnableGrafana"] !== null) {
            $this->EnableGrafana = $param["EnableGrafana"];
        }

        if (array_key_exists("GrafanaURL",$param) and $param["GrafanaURL"] !== null) {
            $this->GrafanaURL = $param["GrafanaURL"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
