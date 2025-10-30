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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎网络信息
 *
 * @method string getEngineNetworkName() 获取引擎网络名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNetworkName(string $EngineNetworkName) 设置引擎网络名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEngineNetworkState() 获取引擎网络状态，0--初始化，2--可用，-1--已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNetworkState(integer $EngineNetworkState) 设置引擎网络状态，0--初始化，2--可用，-1--已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineNetworkCidr() 获取引擎网络cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNetworkCidr(string $EngineNetworkCidr) 设置引擎网络cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineNetworkId() 获取引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNetworkId(string $EngineNetworkId) 设置引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrivateLinkNumber() 获取私有连接个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateLinkNumber(integer $PrivateLinkNumber) 设置私有连接个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEngineNumber() 获取计算引擎个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNumber(integer $EngineNumber) 设置计算引擎个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGateWayInfo() 获取网关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGateWayInfo(array $GateWayInfo) 设置网关信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EngineNetworkInfo extends AbstractModel
{
    /**
     * @var string 引擎网络名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNetworkName;

    /**
     * @var integer 引擎网络状态，0--初始化，2--可用，-1--已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNetworkState;

    /**
     * @var string 引擎网络cidr
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNetworkCidr;

    /**
     * @var string 引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNetworkId;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 私有连接个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateLinkNumber;

    /**
     * @var integer 计算引擎个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNumber;

    /**
     * @var array 网关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GateWayInfo;

    /**
     * @param string $EngineNetworkName 引擎网络名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EngineNetworkState 引擎网络状态，0--初始化，2--可用，-1--已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineNetworkCidr 引擎网络cidr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineNetworkId 引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PrivateLinkNumber 私有连接个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EngineNumber 计算引擎个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GateWayInfo 网关信息
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
        if (array_key_exists("EngineNetworkName",$param) and $param["EngineNetworkName"] !== null) {
            $this->EngineNetworkName = $param["EngineNetworkName"];
        }

        if (array_key_exists("EngineNetworkState",$param) and $param["EngineNetworkState"] !== null) {
            $this->EngineNetworkState = $param["EngineNetworkState"];
        }

        if (array_key_exists("EngineNetworkCidr",$param) and $param["EngineNetworkCidr"] !== null) {
            $this->EngineNetworkCidr = $param["EngineNetworkCidr"];
        }

        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PrivateLinkNumber",$param) and $param["PrivateLinkNumber"] !== null) {
            $this->PrivateLinkNumber = $param["PrivateLinkNumber"];
        }

        if (array_key_exists("EngineNumber",$param) and $param["EngineNumber"] !== null) {
            $this->EngineNumber = $param["EngineNumber"];
        }

        if (array_key_exists("GateWayInfo",$param) and $param["GateWayInfo"] !== null) {
            $this->GateWayInfo = [];
            foreach ($param["GateWayInfo"] as $key => $value){
                $obj = new GatewayInfo();
                $obj->deserialize($value);
                array_push($this->GateWayInfo, $obj);
            }
        }
    }
}
