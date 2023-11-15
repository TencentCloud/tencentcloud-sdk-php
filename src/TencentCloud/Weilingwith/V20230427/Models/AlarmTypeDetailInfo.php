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
 * 告警类型详情信息
 *
 * @method integer getId() 获取告警类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置告警类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取父节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置父节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取0-标准告警类型，1-自定义告警类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置0-标准告警类型，1-自定义告警类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取告警名称类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置告警名称类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnglishName() 获取告警类型英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnglishName(string $EnglishName) 设置告警类型英文名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmTypeDetailInfo extends AbstractModel
{
    /**
     * @var integer 告警类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 父节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var integer 0-标准告警类型，1-自定义告警类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 告警名称类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 告警类型英文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnglishName;

    /**
     * @param integer $Id 告警类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 父节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 0-标准告警类型，1-自定义告警类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 告警名称类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnglishName 告警类型英文名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }
    }
}
