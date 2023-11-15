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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 建筑模型信息
 *
 * @method string getElementId() 获取构件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElementId(string $ElementId) 设置构件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElementName() 获取构件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElementName(string $ElementName) 设置构件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取模型类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置模型类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelUrl() 获取模型URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelUrl(string $ModelUrl) 设置模型URL
注意：此字段可能返回 null，表示取不到有效值。
 */
class BuildingModel extends AbstractModel
{
    /**
     * @var string 构件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElementId;

    /**
     * @var string 构件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElementName;

    /**
     * @var string 模型类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var string 模型URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelUrl;

    /**
     * @param string $ElementId 构件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElementName 构件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType 模型类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelUrl 模型URL
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
        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ModelUrl",$param) and $param["ModelUrl"] !== null) {
            $this->ModelUrl = $param["ModelUrl"];
        }
    }
}
