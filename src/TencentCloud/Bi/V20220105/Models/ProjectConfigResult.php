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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定制化查询
 *
 * @method string getModuleId() 获取配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleId(string $ModuleId) 设置配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncludeType() 获取配置方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeType(string $IncludeType) 设置配置方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取额外参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置额外参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectConfigResult extends AbstractModel
{
    /**
     * @var string 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleId;

    /**
     * @var string 配置方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeType;

    /**
     * @var string 额外参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $ModuleId 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncludeType 配置方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 额外参数
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("IncludeType",$param) and $param["IncludeType"] !== null) {
            $this->IncludeType = $param["IncludeType"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
