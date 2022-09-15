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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例地域信息描述
 *
 * @method string getEngineRegion() 获取引擎部署地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineRegion(string $EngineRegion) 设置引擎部署地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplica() 获取引擎在该地域的副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplica(integer $Replica) 设置引擎在该地域的副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecId() 获取引擎在该地域的规格id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecId(string $SpecId) 设置引擎在该地域的规格id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIntranetVpcInfos() 获取内网的网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntranetVpcInfos(array $IntranetVpcInfos) 设置内网的网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableClientInternet() 获取是否开公网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableClientInternet(boolean $EnableClientInternet) 设置是否开公网
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeInstanceRegionInfo extends AbstractModel
{
    /**
     * @var string 引擎部署地域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineRegion;

    /**
     * @var integer 引擎在该地域的副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replica;

    /**
     * @var string 引擎在该地域的规格id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecId;

    /**
     * @var array 内网的网络信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntranetVpcInfos;

    /**
     * @var boolean 是否开公网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableClientInternet;

    /**
     * @param string $EngineRegion 引擎部署地域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replica 引擎在该地域的副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecId 引擎在该地域的规格id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IntranetVpcInfos 内网的网络信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableClientInternet 是否开公网
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
        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("IntranetVpcInfos",$param) and $param["IntranetVpcInfos"] !== null) {
            $this->IntranetVpcInfos = [];
            foreach ($param["IntranetVpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->IntranetVpcInfos, $obj);
            }
        }

        if (array_key_exists("EnableClientInternet",$param) and $param["EnableClientInternet"] !== null) {
            $this->EnableClientInternet = $param["EnableClientInternet"];
        }
    }
}
