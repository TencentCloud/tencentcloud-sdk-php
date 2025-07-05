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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrafficMirror请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getTrafficMirrorName() 获取流量镜像名字。
 * @method void setTrafficMirrorName(string $TrafficMirrorName) 设置流量镜像名字。
 * @method string getTrafficMirrorDescribe() 获取流量镜像描述。
 * @method void setTrafficMirrorDescribe(string $TrafficMirrorDescribe) 设置流量镜像描述。
 * @method string getState() 获取流量镜像状态, 支持RUNNING/STOPED（vpc），RUNNING（公网IP），当采集vpc流量镜像时，此参数为必填。
 * @method void setState(string $State) 设置流量镜像状态, 支持RUNNING/STOPED（vpc），RUNNING（公网IP），当采集vpc流量镜像时，此参数为必填。
 * @method string getDirection() 获取流量镜像采集方向，支持EGRESS/INGRESS/ALL（vpc），ALL（公网IP）。
 * @method void setDirection(string $Direction) 设置流量镜像采集方向，支持EGRESS/INGRESS/ALL（vpc），ALL（公网IP）。
 * @method array getCollectorSrcs() 获取流量镜像的采集对象。
 * @method void setCollectorSrcs(array $CollectorSrcs) 设置流量镜像的采集对象。
 * @method string getNatId() 获取流量镜像过滤的natgw实例。
 * @method void setNatId(string $NatId) 设置流量镜像过滤的natgw实例。
 * @method array getCollectorNormalFilters() 获取需要过滤的五元组规则。
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) 设置需要过滤的五元组规则。
 * @method TrafficMirrorTarget getCollectorTarget() 获取流量镜像的目的地址。
 * @method void setCollectorTarget(TrafficMirrorTarget $CollectorTarget) 设置流量镜像的目的地址。
 * @method string getSubnetId() 获取流量镜像采集流量的发送端所属子网ID。
 * @method void setSubnetId(string $SubnetId) 设置流量镜像采集流量的发送端所属子网ID。
 * @method string getType() 获取创建的流量镜像的类型，支持VPC/PUBLICIP，默认为VPC类型。
 * @method void setType(string $Type) 设置创建的流量镜像的类型，支持VPC/PUBLICIP，默认为VPC类型。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 */
class CreateTrafficMirrorRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 流量镜像名字。
     */
    public $TrafficMirrorName;

    /**
     * @var string 流量镜像描述。
     */
    public $TrafficMirrorDescribe;

    /**
     * @var string 流量镜像状态, 支持RUNNING/STOPED（vpc），RUNNING（公网IP），当采集vpc流量镜像时，此参数为必填。
     */
    public $State;

    /**
     * @var string 流量镜像采集方向，支持EGRESS/INGRESS/ALL（vpc），ALL（公网IP）。
     */
    public $Direction;

    /**
     * @var array 流量镜像的采集对象。
     */
    public $CollectorSrcs;

    /**
     * @var string 流量镜像过滤的natgw实例。
     */
    public $NatId;

    /**
     * @var array 需要过滤的五元组规则。
     */
    public $CollectorNormalFilters;

    /**
     * @var TrafficMirrorTarget 流量镜像的目的地址。
     */
    public $CollectorTarget;

    /**
     * @var string 流量镜像采集流量的发送端所属子网ID。
     */
    public $SubnetId;

    /**
     * @var string 创建的流量镜像的类型，支持VPC/PUBLICIP，默认为VPC类型。
     */
    public $Type;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $TrafficMirrorName 流量镜像名字。
     * @param string $TrafficMirrorDescribe 流量镜像描述。
     * @param string $State 流量镜像状态, 支持RUNNING/STOPED（vpc），RUNNING（公网IP），当采集vpc流量镜像时，此参数为必填。
     * @param string $Direction 流量镜像采集方向，支持EGRESS/INGRESS/ALL（vpc），ALL（公网IP）。
     * @param array $CollectorSrcs 流量镜像的采集对象。
     * @param string $NatId 流量镜像过滤的natgw实例。
     * @param array $CollectorNormalFilters 需要过滤的五元组规则。
     * @param TrafficMirrorTarget $CollectorTarget 流量镜像的目的地址。
     * @param string $SubnetId 流量镜像采集流量的发送端所属子网ID。
     * @param string $Type 创建的流量镜像的类型，支持VPC/PUBLICIP，默认为VPC类型。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
