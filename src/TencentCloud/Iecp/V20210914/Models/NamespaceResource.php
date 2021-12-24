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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间下资源描述
 *
 * @method string getType() 获取类型(workload|grid|configmap|secret)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型(workload|grid|configmap|secret)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNames() 获取名称(最多返回5个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNames(array $Names) 设置名称(最多返回5个）
注意：此字段可能返回 null，表示取不到有效值。
 */
class NamespaceResource extends AbstractModel
{
    /**
     * @var string 类型(workload|grid|configmap|secret)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var array 名称(最多返回5个）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Names;

    /**
     * @param string $Type 类型(workload|grid|configmap|secret)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Names 名称(最多返回5个）
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }
    }
}
