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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检报告-外科-泌尿生殖系统
 *
 * @method KeyValueItem getText() 获取泌尿生殖系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置泌尿生殖系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getProstate() 获取前列腺
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProstate(KeyValueItem $Prostate) 设置前列腺
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getExternalReproductiveOrgans() 获取外生殖器（男性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReproductiveOrgans(KeyValueItem $ExternalReproductiveOrgans) 设置外生殖器（男性）
注意：此字段可能返回 null，表示取不到有效值。
 */
class SurgeryUrogenitalSystem extends AbstractModel
{
    /**
     * @var KeyValueItem 泌尿生殖系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 前列腺
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prostate;

    /**
     * @var KeyValueItem 外生殖器（男性）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReproductiveOrgans;

    /**
     * @param KeyValueItem $Text 泌尿生殖系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Prostate 前列腺
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $ExternalReproductiveOrgans 外生殖器（男性）
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new KeyValueItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("Prostate",$param) and $param["Prostate"] !== null) {
            $this->Prostate = new KeyValueItem();
            $this->Prostate->deserialize($param["Prostate"]);
        }

        if (array_key_exists("ExternalReproductiveOrgans",$param) and $param["ExternalReproductiveOrgans"] !== null) {
            $this->ExternalReproductiveOrgans = new KeyValueItem();
            $this->ExternalReproductiveOrgans->deserialize($param["ExternalReproductiveOrgans"]);
        }
    }
}
