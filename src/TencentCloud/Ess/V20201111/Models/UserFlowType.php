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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户自定义合同类型， 自定义合同类型的管理可以[点击查看在控制台位置的截图](https://qcloudimg.tencent-cloud.cn/raw/85a9b2ebce07b0cd6d75d5327d538235.png)
 *
 * @method string getUserFlowTypeId() 获取合同类型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置合同类型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取合同类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置合同类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取合同类型说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置合同类型说明
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserFlowType extends AbstractModel
{
    /**
     * @var string 合同类型ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserFlowTypeId;

    /**
     * @var string 合同类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 合同类型说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $UserFlowTypeId 合同类型ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 合同类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 合同类型说明
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
        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
