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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 问答知识库工作流配置
 *
 * @method boolean getIsEnabled() 获取是否启用工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnabled(boolean $IsEnabled) 设置是否启用工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUsePdl() 获取是否启用PDL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsePdl(boolean $UsePdl) 设置是否启用PDL
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeWorkflow extends AbstractModel
{
    /**
     * @var boolean 是否启用工作流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEnabled;

    /**
     * @var boolean 是否启用PDL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsePdl;

    /**
     * @param boolean $IsEnabled 是否启用工作流
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UsePdl 是否启用PDL
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("UsePdl",$param) and $param["UsePdl"] !== null) {
            $this->UsePdl = $param["UsePdl"];
        }
    }
}
