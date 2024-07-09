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
 * 公网地址信息
 *
 * @method string getVip() 获取公网 ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置公网 ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetMaxBandwidthOut() 获取公网最大带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网最大带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取公网所属分组 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置公网所属分组 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取公网所属分组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置公网所属分组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkId() 获取公网负载均衡 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkId(string $NetworkId) 设置公网负载均衡 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取公网负载均衡描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置公网负载均衡描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class PublicAddressConfig extends AbstractModel
{
    /**
     * @var string 公网 ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 公网最大带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 公网所属分组 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 公网所属分组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 公网负载均衡 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkId;

    /**
     * @var string 公网负载均衡描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Vip 公网 ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetMaxBandwidthOut 公网最大带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 公网所属分组 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 公网所属分组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkId 公网负载均衡 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 公网负载均衡描述
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
