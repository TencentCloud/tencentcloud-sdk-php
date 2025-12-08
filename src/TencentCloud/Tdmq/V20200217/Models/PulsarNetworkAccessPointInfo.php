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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar 网络接入点信息
 *
 * @method string getVpcId() 获取vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取接入地址
 * @method void setEndpoint(string $Endpoint) 设置接入地址
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getRouteType() 获取接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
 * @method void setRouteType(integer $RouteType) 设置接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
 * @method integer getOperationType() 获取0：本地域访问，由于并没有配置跨地域容灾，所该类型的接入点，无法进行异地切换、异地访问切回；
1：本地域访问，由于配置了跨地域容灾，随时可以进行异地切换，该状态用于主集群的接入点
2：跨地域访问，已经完成了异地切换，该状态用于源集群的接入点，该状态下的接入点不可删除
3：跨地域访问，随时可以进行异地访问切回，该状态用于目标集群的接入点，该状态下的接入点不可删除
4:跨地域访问，目标集群已经完成异地切回，等待删除状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationType(integer $OperationType) 设置0：本地域访问，由于并没有配置跨地域容灾，所该类型的接入点，无法进行异地切换、异地访问切回；
1：本地域访问，由于配置了跨地域容灾，随时可以进行异地切换，该状态用于主集群的接入点
2：跨地域访问，已经完成了异地切换，该状态用于源集群的接入点，该状态下的接入点不可删除
3：跨地域访问，随时可以进行异地访问切回，该状态用于目标集群的接入点，该状态下的接入点不可删除
4:跨地域访问，目标集群已经完成异地切回，等待删除状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessPointsType() 获取接入点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPointsType(string $AccessPointsType) 设置接入点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取带宽，目前只有公网会有这个值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽，目前只有公网会有这个值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityPolicy() 获取类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityPolicy(array $SecurityPolicy) 设置类
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStandardAccessPoint() 获取是否是标准的接入点 true是标准的 false不是标准的
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardAccessPoint(boolean $StandardAccessPoint) 设置是否是标准的接入点 true是标准的 false不是标准的
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneName() 获取可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTls() 获取是否开启TLS加密
 * @method void setTls(boolean $Tls) 设置是否开启TLS加密
 * @method string getCustomUrl() 获取接入点自定义域名
 * @method void setCustomUrl(string $CustomUrl) 设置接入点自定义域名
 * @method array getSecurityGroupIds() 获取接入点绑定的安全组id列表，仅限vpc接入点有效
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置接入点绑定的安全组id列表，仅限vpc接入点有效
 */
class PulsarNetworkAccessPointInfo extends AbstractModel
{
    /**
     * @var string vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 接入地址
     */
    public $Endpoint;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
     */
    public $RouteType;

    /**
     * @var integer 0：本地域访问，由于并没有配置跨地域容灾，所该类型的接入点，无法进行异地切换、异地访问切回；
1：本地域访问，由于配置了跨地域容灾，随时可以进行异地切换，该状态用于主集群的接入点
2：跨地域访问，已经完成了异地切换，该状态用于源集群的接入点，该状态下的接入点不可删除
3：跨地域访问，随时可以进行异地访问切回，该状态用于目标集群的接入点，该状态下的接入点不可删除
4:跨地域访问，目标集群已经完成异地切回，等待删除状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationType;

    /**
     * @var string 接入点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPointsType;

    /**
     * @var integer 带宽，目前只有公网会有这个值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var array 类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityPolicy;

    /**
     * @var boolean 是否是标准的接入点 true是标准的 false不是标准的
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardAccessPoint;

    /**
     * @var string 可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneName;

    /**
     * @var boolean 是否开启TLS加密
     */
    public $Tls;

    /**
     * @var string 接入点自定义域名
     */
    public $CustomUrl;

    /**
     * @var array 接入点绑定的安全组id列表，仅限vpc接入点有效
     */
    public $SecurityGroupIds;

    /**
     * @param string $VpcId vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint 接入地址
     * @param string $InstanceId 实例id
     * @param integer $RouteType 接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
     * @param integer $OperationType 0：本地域访问，由于并没有配置跨地域容灾，所该类型的接入点，无法进行异地切换、异地访问切回；
1：本地域访问，由于配置了跨地域容灾，随时可以进行异地切换，该状态用于主集群的接入点
2：跨地域访问，已经完成了异地切换，该状态用于源集群的接入点，该状态下的接入点不可删除
3：跨地域访问，随时可以进行异地访问切回，该状态用于目标集群的接入点，该状态下的接入点不可删除
4:跨地域访问，目标集群已经完成异地切回，等待删除状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessPointsType 接入点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 带宽，目前只有公网会有这个值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityPolicy 类
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StandardAccessPoint 是否是标准的接入点 true是标准的 false不是标准的
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneName 可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Tls 是否开启TLS加密
     * @param string $CustomUrl 接入点自定义域名
     * @param array $SecurityGroupIds 接入点绑定的安全组id列表，仅限vpc接入点有效
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("AccessPointsType",$param) and $param["AccessPointsType"] !== null) {
            $this->AccessPointsType = $param["AccessPointsType"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = [];
            foreach ($param["SecurityPolicy"] as $key => $value){
                $obj = new SecurityPolicy();
                $obj->deserialize($value);
                array_push($this->SecurityPolicy, $obj);
            }
        }

        if (array_key_exists("StandardAccessPoint",$param) and $param["StandardAccessPoint"] !== null) {
            $this->StandardAccessPoint = $param["StandardAccessPoint"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = $param["Tls"];
        }

        if (array_key_exists("CustomUrl",$param) and $param["CustomUrl"] !== null) {
            $this->CustomUrl = $param["CustomUrl"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
