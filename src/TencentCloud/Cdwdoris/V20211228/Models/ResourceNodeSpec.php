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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群内节点的规格描述
 *
 * @method string getType() 获取节点类型，“DATA"数据节点，”COMMON" zookeeper节点
 * @method void setType(string $Type) 设置节点类型，“DATA"数据节点，”COMMON" zookeeper节点
 * @method string getSpecName() 获取节点规格名称，例如 “SCH1","SCH2”等
 * @method void setSpecName(string $SpecName) 设置节点规格名称，例如 “SCH1","SCH2”等
 * @method integer getCount() 获取节点数目
 * @method void setCount(integer $Count) 设置节点数目
 * @method ResourceNodeDiskSpec getDiskSpec() 获取磁盘规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSpec(ResourceNodeDiskSpec $DiskSpec) 设置磁盘规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEncrypt() 获取云盘是否加密，0不加密/1加密  默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(integer $Encrypt) 设置云盘是否加密，0不加密/1加密  默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method SpecExtra getExtra() 获取额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(SpecExtra $Extra) 设置额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceNodeDiskSpec getAttachCBSSpec() 获取挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachCBSSpec(ResourceNodeDiskSpec $AttachCBSSpec) 设置挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceNodeSpec extends AbstractModel
{
    /**
     * @var string 节点类型，“DATA"数据节点，”COMMON" zookeeper节点
     */
    public $Type;

    /**
     * @var string 节点规格名称，例如 “SCH1","SCH2”等
     */
    public $SpecName;

    /**
     * @var integer 节点数目
     */
    public $Count;

    /**
     * @var ResourceNodeDiskSpec 磁盘规格描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSpec;

    /**
     * @var integer 云盘是否加密，0不加密/1加密  默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @var SpecExtra 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var ResourceNodeDiskSpec 挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachCBSSpec;

    /**
     * @param string $Type 节点类型，“DATA"数据节点，”COMMON" zookeeper节点
     * @param string $SpecName 节点规格名称，例如 “SCH1","SCH2”等
     * @param integer $Count 节点数目
     * @param ResourceNodeDiskSpec $DiskSpec 磁盘规格描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Encrypt 云盘是否加密，0不加密/1加密  默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param SpecExtra $Extra 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceNodeDiskSpec $AttachCBSSpec 挂载云盘信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new ResourceNodeDiskSpec();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = new SpecExtra();
            $this->Extra->deserialize($param["Extra"]);
        }

        if (array_key_exists("AttachCBSSpec",$param) and $param["AttachCBSSpec"] !== null) {
            $this->AttachCBSSpec = new ResourceNodeDiskSpec();
            $this->AttachCBSSpec->deserialize($param["AttachCBSSpec"]);
        }
    }
}
