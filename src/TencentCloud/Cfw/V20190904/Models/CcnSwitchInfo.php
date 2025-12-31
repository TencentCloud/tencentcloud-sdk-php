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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ccn实例开关信息
 *
 * @method string getCcnId() 获取ccn的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnId(string $CcnId) 设置ccn的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchMode() 获取开关接入模式，1:自动接入,2:手动接入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchMode(integer $SwitchMode) 设置开关接入模式，1:自动接入,2:手动接入
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoutingMode() 获取引流路由方法 0:多路由表, 1:策略路由
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutingMode(integer $RoutingMode) 设置引流路由方法 0:多路由表, 1:策略路由
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegionCidrConfigs() 获取地域级别CIDR配置
 * @method void setRegionCidrConfigs(array $RegionCidrConfigs) 设置地域级别CIDR配置
 * @method array getInterconnectPairs() 获取互联集合对列表
 * @method void setInterconnectPairs(array $InterconnectPairs) 设置互联集合对列表
 * @method string getFwVpcCidr() 获取引流通用CIDR(废弃)
 * @method void setFwVpcCidr(string $FwVpcCidr) 设置引流通用CIDR(废弃)
 */
class CcnSwitchInfo extends AbstractModel
{
    /**
     * @var string ccn的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnId;

    /**
     * @var integer 开关接入模式，1:自动接入,2:手动接入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchMode;

    /**
     * @var integer 引流路由方法 0:多路由表, 1:策略路由
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutingMode;

    /**
     * @var array 地域级别CIDR配置
     */
    public $RegionCidrConfigs;

    /**
     * @var array 互联集合对列表
     */
    public $InterconnectPairs;

    /**
     * @var string 引流通用CIDR(废弃)
     */
    public $FwVpcCidr;

    /**
     * @param string $CcnId ccn的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchMode 开关接入模式，1:自动接入,2:手动接入
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoutingMode 引流路由方法 0:多路由表, 1:策略路由
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RegionCidrConfigs 地域级别CIDR配置
     * @param array $InterconnectPairs 互联集合对列表
     * @param string $FwVpcCidr 引流通用CIDR(废弃)
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }

        if (array_key_exists("RegionCidrConfigs",$param) and $param["RegionCidrConfigs"] !== null) {
            $this->RegionCidrConfigs = [];
            foreach ($param["RegionCidrConfigs"] as $key => $value){
                $obj = new RegionCidrConfig();
                $obj->deserialize($value);
                array_push($this->RegionCidrConfigs, $obj);
            }
        }

        if (array_key_exists("InterconnectPairs",$param) and $param["InterconnectPairs"] !== null) {
            $this->InterconnectPairs = [];
            foreach ($param["InterconnectPairs"] as $key => $value){
                $obj = new InterconnectPair();
                $obj->deserialize($value);
                array_push($this->InterconnectPairs, $obj);
            }
        }

        if (array_key_exists("FwVpcCidr",$param) and $param["FwVpcCidr"] !== null) {
            $this->FwVpcCidr = $param["FwVpcCidr"];
        }
    }
}
