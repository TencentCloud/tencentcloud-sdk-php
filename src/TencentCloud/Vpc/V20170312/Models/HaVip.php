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
 * 描述 HAVIP 信息
 *
 * @method string getHaVipId() 获取`HAVIP`的`ID`，是`HAVIP`的唯一标识。
 * @method void setHaVipId(string $HaVipId) 设置`HAVIP`的`ID`，是`HAVIP`的唯一标识。
 * @method string getHaVipName() 获取`HAVIP`名称。
 * @method void setHaVipName(string $HaVipName) 设置`HAVIP`名称。
 * @method string getVip() 获取虚拟IP地址。
 * @method void setVip(string $Vip) 设置虚拟IP地址。
 * @method string getVpcId() 获取`HAVIP`所在私有网络`ID`。
 * @method void setVpcId(string $VpcId) 设置`HAVIP`所在私有网络`ID`。
 * @method string getSubnetId() 获取`HAVIP`所在子网`ID`。
 * @method void setSubnetId(string $SubnetId) 设置`HAVIP`所在子网`ID`。
 * @method string getNetworkInterfaceId() 获取`HAVIP`关联弹性网卡`ID`。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置`HAVIP`关联弹性网卡`ID`。
 * @method string getInstanceId() 获取被绑定的实例`ID`。
 * @method void setInstanceId(string $InstanceId) 设置被绑定的实例`ID`。
 * @method string getAddressIp() 获取绑定`EIP`。
 * @method void setAddressIp(string $AddressIp) 设置绑定`EIP`。
 * @method string getState() 获取状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
 * @method void setState(string $State) 设置状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getBusiness() 获取使用havip的业务标识。
 * @method void setBusiness(string $Business) 设置使用havip的业务标识。
 * @method array getHaVipAssociationSet() 获取`HAVIP`的飘移范围。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHaVipAssociationSet(array $HaVipAssociationSet) 设置`HAVIP`的飘移范围。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckAssociate() 获取是否开启`HAVIP`的飘移范围校验。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckAssociate(boolean $CheckAssociate) 设置是否开启`HAVIP`的飘移范围校验。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcId() 获取CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcId(string $CdcId) 设置CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlushedTime() 获取HAVIP 刷新时间。该参数只作为出参数。以下场景会触发 FlushTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlushedTime(string $FlushedTime) 设置HAVIP 刷新时间。该参数只作为出参数。以下场景会触发 FlushTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取标签键值对。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签键值对。	
注意：此字段可能返回 null，表示取不到有效值。
 */
class HaVip extends AbstractModel
{
    /**
     * @var string `HAVIP`的`ID`，是`HAVIP`的唯一标识。
     */
    public $HaVipId;

    /**
     * @var string `HAVIP`名称。
     */
    public $HaVipName;

    /**
     * @var string 虚拟IP地址。
     */
    public $Vip;

    /**
     * @var string `HAVIP`所在私有网络`ID`。
     */
    public $VpcId;

    /**
     * @var string `HAVIP`所在子网`ID`。
     */
    public $SubnetId;

    /**
     * @var string `HAVIP`关联弹性网卡`ID`。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 被绑定的实例`ID`。
     */
    public $InstanceId;

    /**
     * @var string 绑定`EIP`。
     */
    public $AddressIp;

    /**
     * @var string 状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
     */
    public $State;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 使用havip的业务标识。
     */
    public $Business;

    /**
     * @var array `HAVIP`的飘移范围。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HaVipAssociationSet;

    /**
     * @var boolean 是否开启`HAVIP`的飘移范围校验。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckAssociate;

    /**
     * @var string CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcId;

    /**
     * @var string HAVIP 刷新时间。该参数只作为出参数。以下场景会触发 FlushTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlushedTime;

    /**
     * @var array 标签键值对。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @param string $HaVipId `HAVIP`的`ID`，是`HAVIP`的唯一标识。
     * @param string $HaVipName `HAVIP`名称。
     * @param string $Vip 虚拟IP地址。
     * @param string $VpcId `HAVIP`所在私有网络`ID`。
     * @param string $SubnetId `HAVIP`所在子网`ID`。
     * @param string $NetworkInterfaceId `HAVIP`关联弹性网卡`ID`。
     * @param string $InstanceId 被绑定的实例`ID`。
     * @param string $AddressIp 绑定`EIP`。
     * @param string $State 状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
     * @param string $CreatedTime 创建时间。
     * @param string $Business 使用havip的业务标识。
     * @param array $HaVipAssociationSet `HAVIP`的飘移范围。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckAssociate 是否开启`HAVIP`的飘移范围校验。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcId CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlushedTime HAVIP 刷新时间。该参数只作为出参数。以下场景会触发 FlushTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 标签键值对。	
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("HaVipAssociationSet",$param) and $param["HaVipAssociationSet"] !== null) {
            $this->HaVipAssociationSet = [];
            foreach ($param["HaVipAssociationSet"] as $key => $value){
                $obj = new HaVipAssociation();
                $obj->deserialize($value);
                array_push($this->HaVipAssociationSet, $obj);
            }
        }

        if (array_key_exists("CheckAssociate",$param) and $param["CheckAssociate"] !== null) {
            $this->CheckAssociate = $param["CheckAssociate"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("FlushedTime",$param) and $param["FlushedTime"] !== null) {
            $this->FlushedTime = $param["FlushedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
