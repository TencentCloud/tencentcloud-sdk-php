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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SlotSharingGroup 描述
 *
 * @method string getName() 获取SlotSharingGroup的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置SlotSharingGroup的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method SlotSharingGroupSpec getSpec() 获取SlotSharingGroup的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(SlotSharingGroupSpec $Spec) 设置SlotSharingGroup的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取SlotSharingGroup的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置SlotSharingGroup的描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlotSharingGroup extends AbstractModel
{
    /**
     * @var string SlotSharingGroup的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var SlotSharingGroupSpec SlotSharingGroup的规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var string SlotSharingGroup的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Name SlotSharingGroup的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param SlotSharingGroupSpec $Spec SlotSharingGroup的规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description SlotSharingGroup的描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new SlotSharingGroupSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
