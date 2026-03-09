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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由实体对象
 *
 * @method integer getAccessType() 获取<p>实例接入方式0：PLAINTEXT (明文方式，没有带用户信息老版本及社区版本都支持)1：SASL_PLAINTEXT（明文方式，不过在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）2：SSL（SSL加密通信，没有带用户信息，老版本及社区版本都支持）3：SASL_SSL（SSL加密通信，在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）</p>
 * @method void setAccessType(integer $AccessType) 设置<p>实例接入方式0：PLAINTEXT (明文方式，没有带用户信息老版本及社区版本都支持)1：SASL_PLAINTEXT（明文方式，不过在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）2：SSL（SSL加密通信，没有带用户信息，老版本及社区版本都支持）3：SASL_SSL（SSL加密通信，在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）</p>
 * @method integer getRouteId() 获取<p>路由Id</p>
 * @method void setRouteId(integer $RouteId) 设置<p>路由Id</p>
 * @method integer getVipType() 获取<p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
 * @method void setVipType(integer $VipType) 设置<p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
 * @method array getVipList() 获取<p>虚拟IP列表</p>
 * @method void setVipList(array $VipList) 设置<p>虚拟IP列表</p>
 * @method string getDomain() 获取<p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置<p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDomainPort() 获取<p>域名port</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainPort(integer $DomainPort) 设置<p>域名port</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeleteTimestamp() 获取<p>时间戳</p>
 * @method void setDeleteTimestamp(string $DeleteTimestamp) 设置<p>时间戳</p>
 * @method string getSubnet() 获取<p>子网Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnet(string $Subnet) 设置<p>子网Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBrokerVipList() 获取<p>虚拟IP列表(1对1 broker节点)</p>
 * @method void setBrokerVipList(array $BrokerVipList) 设置<p>虚拟IP列表(1对1 broker节点)</p>
 * @method string getVpcId() 获取<p>私有网络Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>私有网络Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNote() 获取<p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置<p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>路由的状态。1: 创建中，2: 创建成功，3: 创建失败，4: 删除中，6: 删除失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>路由的状态。1: 创建中，2: 创建成功，3: 创建失败，4: 删除中，6: 删除失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Route extends AbstractModel
{
    /**
     * @var integer <p>实例接入方式0：PLAINTEXT (明文方式，没有带用户信息老版本及社区版本都支持)1：SASL_PLAINTEXT（明文方式，不过在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）2：SSL（SSL加密通信，没有带用户信息，老版本及社区版本都支持）3：SASL_SSL（SSL加密通信，在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）</p>
     */
    public $AccessType;

    /**
     * @var integer <p>路由Id</p>
     */
    public $RouteId;

    /**
     * @var integer <p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
     */
    public $VipType;

    /**
     * @var array <p>虚拟IP列表</p>
     */
    public $VipList;

    /**
     * @var string <p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer <p>域名port</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainPort;

    /**
     * @var string <p>时间戳</p>
     */
    public $DeleteTimestamp;

    /**
     * @var string <p>子网Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subnet;

    /**
     * @var array <p>虚拟IP列表(1对1 broker节点)</p>
     */
    public $BrokerVipList;

    /**
     * @var string <p>私有网络Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @var integer <p>路由的状态。1: 创建中，2: 创建成功，3: 创建失败，4: 删除中，6: 删除失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $AccessType <p>实例接入方式0：PLAINTEXT (明文方式，没有带用户信息老版本及社区版本都支持)1：SASL_PLAINTEXT（明文方式，不过在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）2：SSL（SSL加密通信，没有带用户信息，老版本及社区版本都支持）3：SASL_SSL（SSL加密通信，在数据开始时，会通过SASL方式登录鉴权，仅社区版本支持）</p>
     * @param integer $RouteId <p>路由Id</p>
     * @param integer $VipType <p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
     * @param array $VipList <p>虚拟IP列表</p>
     * @param string $Domain <p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DomainPort <p>域名port</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeleteTimestamp <p>时间戳</p>
     * @param string $Subnet <p>子网Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BrokerVipList <p>虚拟IP列表(1对1 broker节点)</p>
     * @param string $VpcId <p>私有网络Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Note <p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>路由的状态。1: 创建中，2: 创建成功，3: 创建失败，4: 删除中，6: 删除失败</p>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("DeleteTimestamp",$param) and $param["DeleteTimestamp"] !== null) {
            $this->DeleteTimestamp = $param["DeleteTimestamp"];
        }

        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("BrokerVipList",$param) and $param["BrokerVipList"] !== null) {
            $this->BrokerVipList = [];
            foreach ($param["BrokerVipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->BrokerVipList, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
