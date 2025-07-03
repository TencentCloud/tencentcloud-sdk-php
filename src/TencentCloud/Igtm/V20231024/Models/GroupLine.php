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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线路列表
 *
 * @method integer getDnsLineId() 获取分组线路id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsLineId(integer $DnsLineId) 设置分组线路id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParent() 获取父节点 0为根节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParent(integer $Parent) 设置父节点 0为根节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineName() 获取线路名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineName(string $LineName) 设置线路名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineId() 获取10=9 DNSPod 线路 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineId(string $LineId) 设置10=9 DNSPod 线路 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseful() 获取是否已使用过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseful(boolean $Useful) 设置是否已使用过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubGroup() 获取0为未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubGroup(integer $SubGroup) 设置0为未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLinePackage() 获取权限标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinePackage(integer $LinePackage) 设置权限标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupLine extends AbstractModel
{
    /**
     * @var integer 分组线路id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsLineId;

    /**
     * @var integer 父节点 0为根节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parent;

    /**
     * @var string 线路名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineName;

    /**
     * @var string 10=9 DNSPod 线路 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineId;

    /**
     * @var boolean 是否已使用过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Useful;

    /**
     * @var integer 0为未使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubGroup;

    /**
     * @var integer 权限标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinePackage;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param integer $DnsLineId 分组线路id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Parent 父节点 0为根节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineName 线路名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineId 10=9 DNSPod 线路 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Useful 是否已使用过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubGroup 0为未使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LinePackage 权限标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 1
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
        if (array_key_exists("DnsLineId",$param) and $param["DnsLineId"] !== null) {
            $this->DnsLineId = $param["DnsLineId"];
        }

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = $param["Parent"];
        }

        if (array_key_exists("LineName",$param) and $param["LineName"] !== null) {
            $this->LineName = $param["LineName"];
        }

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Useful",$param) and $param["Useful"] !== null) {
            $this->Useful = $param["Useful"];
        }

        if (array_key_exists("SubGroup",$param) and $param["SubGroup"] !== null) {
            $this->SubGroup = $param["SubGroup"];
        }

        if (array_key_exists("LinePackage",$param) and $param["LinePackage"] !== null) {
            $this->LinePackage = $param["LinePackage"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
