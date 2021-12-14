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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨域2.0云联网下子机和网卡信息
 *
 * @method string getLocalVpcId() 获取本地私有网络ID，即负载均衡的VpcId。
 * @method void setLocalVpcId(string $LocalVpcId) 设置本地私有网络ID，即负载均衡的VpcId。
 * @method string getVpcId() 获取子机或网卡所属的私有网络ID。
 * @method void setVpcId(string $VpcId) 设置子机或网卡所属的私有网络ID。
 * @method string getIP() 获取子机或网卡的IP地址
 * @method void setIP(string $IP) 设置子机或网卡的IP地址
 * @method string getVpcName() 获取子机或网卡所属的私有网络名称。
 * @method void setVpcName(string $VpcName) 设置子机或网卡所属的私有网络名称。
 * @method string getEniId() 获取子机的网卡ID。
 * @method void setEniId(string $EniId) 设置子机的网卡ID。
 * @method string getInstanceId() 获取子机实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置子机实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取子机实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置子机实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取子机或者网卡所属的地域。
 * @method void setRegion(string $Region) 设置子机或者网卡所属的地域。
 */
class CrossTargets extends AbstractModel
{
    /**
     * @var string 本地私有网络ID，即负载均衡的VpcId。
     */
    public $LocalVpcId;

    /**
     * @var string 子机或网卡所属的私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 子机或网卡的IP地址
     */
    public $IP;

    /**
     * @var string 子机或网卡所属的私有网络名称。
     */
    public $VpcName;

    /**
     * @var string 子机的网卡ID。
     */
    public $EniId;

    /**
     * @var string 子机实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 子机实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 子机或者网卡所属的地域。
     */
    public $Region;

    /**
     * @param string $LocalVpcId 本地私有网络ID，即负载均衡的VpcId。
     * @param string $VpcId 子机或网卡所属的私有网络ID。
     * @param string $IP 子机或网卡的IP地址
     * @param string $VpcName 子机或网卡所属的私有网络名称。
     * @param string $EniId 子机的网卡ID。
     * @param string $InstanceId 子机实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 子机实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 子机或者网卡所属的地域。
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
        if (array_key_exists("LocalVpcId",$param) and $param["LocalVpcId"] !== null) {
            $this->LocalVpcId = $param["LocalVpcId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
