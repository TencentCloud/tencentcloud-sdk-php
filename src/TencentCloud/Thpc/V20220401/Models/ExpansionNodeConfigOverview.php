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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容节点配置信息概览。
 *
 * @method string getInstanceType() 获取节点机型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置节点机型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Placement getPlacement() 获取扩容实例所在的位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlacement(Placement $Placement) 设置扩容实例所在的位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceChargeType() 获取节点[计费类型](https://cloud.tencent.com/document/product/213/2180)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置节点[计费类型](https://cloud.tencent.com/document/product/213/2180)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SystemDisk getSystemDisk() 获取节点系统盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置节点系统盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisks() 获取节点数据盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisks(array $DataDisks) 设置节点数据盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExpansionNodeConfigOverview extends AbstractModel
{
    /**
     * @var string 节点机型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var Placement 扩容实例所在的位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Placement;

    /**
     * @var string 节点[计费类型](https://cloud.tencent.com/document/product/213/2180)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargePrepaid;

    /**
     * @var VirtualPrivateCloud 私有网络相关信息配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualPrivateCloud;

    /**
     * @var string 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetAccessible;

    /**
     * @var SystemDisk 节点系统盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDisk;

    /**
     * @var array 节点数据盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisks;

    /**
     * @param string $InstanceType 节点机型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Placement $Placement 扩容实例所在的位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceChargeType 节点[计费类型](https://cloud.tencent.com/document/product/213/2180)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SystemDisk $SystemDisk 节点系统盘配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisks 节点数据盘配置信息。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }
    }
}
