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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EventCaseOpsDto
 *
 * @method string getCaseId() 获取案例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaseId(string $CaseId) 设置案例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取案例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置案例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimension() 获取时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimension(string $Dimension) 设置时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTimestamp() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTimestamp(string $CreationTimestamp) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerId() 获取消费者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerId(string $ConsumerId) 设置消费者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventCaseOpsDto extends AbstractModel
{
    /**
     * @var string 案例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaseId;

    /**
     * @var string 案例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 时间格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimension;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTimestamp;

    /**
     * @var string 消费者id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerId;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $CaseId 案例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 案例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dimension 时间格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTimestamp 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerId 消费者id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
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
        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
