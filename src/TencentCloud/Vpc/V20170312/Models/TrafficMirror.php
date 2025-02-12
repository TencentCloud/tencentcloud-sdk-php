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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量镜像实例
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getTrafficMirrorId() 获取流量镜像实例。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例。
 * @method string getTrafficMirrorName() 获取流量镜像名字。
 * @method void setTrafficMirrorName(string $TrafficMirrorName) 设置流量镜像名字。
 * @method string getTrafficMirrorDescribe() 获取流量镜像描述。
 * @method void setTrafficMirrorDescribe(string $TrafficMirrorDescribe) 设置流量镜像描述。
 * @method string getState() 获取流量镜像状态。
 * @method void setState(string $State) 设置流量镜像状态。
 * @method string getDirection() 获取流量镜像采集方向。
 * @method void setDirection(string $Direction) 设置流量镜像采集方向。
 * @method array getCollectorSrcs() 获取流量镜像采集对象。
 * @method void setCollectorSrcs(array $CollectorSrcs) 设置流量镜像采集对象。
 * @method string getNatId() 获取流量镜像过滤的nat网关实例ID。
 * @method void setNatId(string $NatId) 设置流量镜像过滤的nat网关实例ID。
 * @method array getCollectorNormalFilters() 获取流量镜像过滤的五元组规则。
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) 设置流量镜像过滤的五元组规则。
 * @method TrafficMirrorTarget getCollectorTarget() 获取流量镜接收目标。
 * @method void setCollectorTarget(TrafficMirrorTarget $CollectorTarget) 设置流量镜接收目标。
 * @method string getCreateTime() 获取流量镜像创建时间。
 * @method void setCreateTime(string $CreateTime) 设置流量镜像创建时间。
 * @method string getType() 获取流量镜像的类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置流量镜像的类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取流量镜像所属的子网ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置流量镜像所属的子网ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetInfo() 获取流量镜接收目标资源信息，当接收目标为ENI和CLB时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetInfo(array $TargetInfo) 设置流量镜接收目标资源信息，当接收目标为ENI和CLB时返回。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrafficMirror extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 流量镜像实例。
     */
    public $TrafficMirrorId;

    /**
     * @var string 流量镜像名字。
     */
    public $TrafficMirrorName;

    /**
     * @var string 流量镜像描述。
     */
    public $TrafficMirrorDescribe;

    /**
     * @var string 流量镜像状态。
     */
    public $State;

    /**
     * @var string 流量镜像采集方向。
     */
    public $Direction;

    /**
     * @var array 流量镜像采集对象。
     */
    public $CollectorSrcs;

    /**
     * @var string 流量镜像过滤的nat网关实例ID。
     */
    public $NatId;

    /**
     * @var array 流量镜像过滤的五元组规则。
     */
    public $CollectorNormalFilters;

    /**
     * @var TrafficMirrorTarget 流量镜接收目标。
     */
    public $CollectorTarget;

    /**
     * @var string 流量镜像创建时间。
     */
    public $CreateTime;

    /**
     * @var string 流量镜像的类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 流量镜像所属的子网ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var array 流量镜接收目标资源信息，当接收目标为ENI和CLB时返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetInfo;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $TrafficMirrorId 流量镜像实例。
     * @param string $TrafficMirrorName 流量镜像名字。
     * @param string $TrafficMirrorDescribe 流量镜像描述。
     * @param string $State 流量镜像状态。
     * @param string $Direction 流量镜像采集方向。
     * @param array $CollectorSrcs 流量镜像采集对象。
     * @param string $NatId 流量镜像过滤的nat网关实例ID。
     * @param array $CollectorNormalFilters 流量镜像过滤的五元组规则。
     * @param TrafficMirrorTarget $CollectorTarget 流量镜接收目标。
     * @param string $CreateTime 流量镜像创建时间。
     * @param string $Type 流量镜像的类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 流量镜像所属的子网ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetInfo 流量镜接收目标资源信息，当接收目标为ENI和CLB时返回。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("TrafficMirrorName",$param) and $param["TrafficMirrorName"] !== null) {
            $this->TrafficMirrorName = $param["TrafficMirrorName"];
        }

        if (array_key_exists("TrafficMirrorDescribe",$param) and $param["TrafficMirrorDescribe"] !== null) {
            $this->TrafficMirrorDescribe = $param["TrafficMirrorDescribe"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("CollectorSrcs",$param) and $param["CollectorSrcs"] !== null) {
            $this->CollectorSrcs = $param["CollectorSrcs"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("CollectorNormalFilters",$param) and $param["CollectorNormalFilters"] !== null) {
            $this->CollectorNormalFilters = [];
            foreach ($param["CollectorNormalFilters"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->CollectorNormalFilters, $obj);
            }
        }

        if (array_key_exists("CollectorTarget",$param) and $param["CollectorTarget"] !== null) {
            $this->CollectorTarget = new TrafficMirrorTarget();
            $this->CollectorTarget->deserialize($param["CollectorTarget"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = [];
            foreach ($param["TargetInfo"] as $key => $value){
                $obj = new TrafficMirrorTargetResourceInfo();
                $obj->deserialize($value);
                array_push($this->TargetInfo, $obj);
            }
        }
    }
}
