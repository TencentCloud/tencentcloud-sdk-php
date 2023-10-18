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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ消费组配置信息
 *
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImported() 获取导入状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImported(boolean $Imported) 设置导入状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取remark
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置remark
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQGroupConfigOutput extends AbstractModel
{
    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var boolean 导入状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Imported;

    /**
     * @var string remark
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Imported 导入状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark remark
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Imported",$param) and $param["Imported"] !== null) {
            $this->Imported = $param["Imported"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
