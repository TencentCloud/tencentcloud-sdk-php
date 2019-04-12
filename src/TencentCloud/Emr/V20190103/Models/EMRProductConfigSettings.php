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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getSoftInfo() 获取集群软件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftInfo(array $SoftInfo) 设置集群软件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMasterNodeSize() 获取master节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterNodeSize(integer $MasterNodeSize) 设置master节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoreNodeSize() 获取core节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreNodeSize(integer $CoreNodeSize) 设置core节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskNodeSize() 获取task节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNodeSize(integer $TaskNodeSize) 设置task节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComNodeSize() 获取common节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComNodeSize(integer $ComNodeSize) 设置common节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeSpec getMasterResourceSpec() 获取master规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterResourceSpec(NodeSpec $MasterResourceSpec) 设置master规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeSpec getCoreResourceSpec() 获取core规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreResourceSpec(NodeSpec $CoreResourceSpec) 设置core规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeSpec getTaskResourceSpec() 获取task规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskResourceSpec(NodeSpec $TaskResourceSpec) 设置task规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeSpec getCommonResourceSpec() 获取common规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonResourceSpec(NodeSpec $CommonResourceSpec) 设置common规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOncos() 获取是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOncos(boolean $Oncos) 设置是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method COSSettings getCOSSettings() 获取COS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSSettings(COSSettings $COSSettings) 设置COS配置
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *集群的config信息
 */
class EMRProductConfigSettings extends AbstractModel
{
    /**
     * @var array 集群软件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftInfo;

    /**
     * @var integer master节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterNodeSize;

    /**
     * @var integer core节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreNodeSize;

    /**
     * @var integer task节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNodeSize;

    /**
     * @var integer common节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComNodeSize;

    /**
     * @var NodeSpec master规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterResourceSpec;

    /**
     * @var NodeSpec core规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreResourceSpec;

    /**
     * @var NodeSpec task规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskResourceSpec;

    /**
     * @var NodeSpec common规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonResourceSpec;

    /**
     * @var boolean 是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Oncos;

    /**
     * @var COSSettings COS配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSSettings;
    /**
     * @param array $SoftInfo 集群软件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MasterNodeSize master节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoreNodeSize core节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskNodeSize task节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComNodeSize common节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeSpec $MasterResourceSpec master规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeSpec $CoreResourceSpec core规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeSpec $TaskResourceSpec task规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeSpec $CommonResourceSpec common规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Oncos 是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
     * @param COSSettings $COSSettings COS配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SoftInfo",$param) and $param["SoftInfo"] !== null) {
            $this->SoftInfo = $param["SoftInfo"];
        }

        if (array_key_exists("MasterNodeSize",$param) and $param["MasterNodeSize"] !== null) {
            $this->MasterNodeSize = $param["MasterNodeSize"];
        }

        if (array_key_exists("CoreNodeSize",$param) and $param["CoreNodeSize"] !== null) {
            $this->CoreNodeSize = $param["CoreNodeSize"];
        }

        if (array_key_exists("TaskNodeSize",$param) and $param["TaskNodeSize"] !== null) {
            $this->TaskNodeSize = $param["TaskNodeSize"];
        }

        if (array_key_exists("ComNodeSize",$param) and $param["ComNodeSize"] !== null) {
            $this->ComNodeSize = $param["ComNodeSize"];
        }

        if (array_key_exists("MasterResourceSpec",$param) and $param["MasterResourceSpec"] !== null) {
            $this->MasterResourceSpec = new NodeSpec();
            $this->MasterResourceSpec->deserialize($param["MasterResourceSpec"]);
        }

        if (array_key_exists("CoreResourceSpec",$param) and $param["CoreResourceSpec"] !== null) {
            $this->CoreResourceSpec = new NodeSpec();
            $this->CoreResourceSpec->deserialize($param["CoreResourceSpec"]);
        }

        if (array_key_exists("TaskResourceSpec",$param) and $param["TaskResourceSpec"] !== null) {
            $this->TaskResourceSpec = new NodeSpec();
            $this->TaskResourceSpec->deserialize($param["TaskResourceSpec"]);
        }

        if (array_key_exists("CommonResourceSpec",$param) and $param["CommonResourceSpec"] !== null) {
            $this->CommonResourceSpec = new NodeSpec();
            $this->CommonResourceSpec->deserialize($param["CommonResourceSpec"]);
        }

        if (array_key_exists("Oncos",$param) and $param["Oncos"] !== null) {
            $this->Oncos = $param["Oncos"];
        }

        if (array_key_exists("COSSettings",$param) and $param["COSSettings"] !== null) {
            $this->COSSettings = new COSSettings();
            $this->COSSettings->deserialize($param["COSSettings"]);
        }
    }
}
