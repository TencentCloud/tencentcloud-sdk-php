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
 * 知识摘要输出配置
 *
 * @method integer getMethod() 获取输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(integer $Method) 设置输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRequirement() 获取输出要求 1：文本总结 2：自定义要求
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequirement(integer $Requirement) 设置输出要求 1：文本总结 2：自定义要求
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequireCommand() 获取自定义要求指令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequireCommand(string $RequireCommand) 设置自定义要求指令
注意：此字段可能返回 null，表示取不到有效值。
 */
class SummaryOutput extends AbstractModel
{
    /**
     * @var integer 输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var integer 输出要求 1：文本总结 2：自定义要求
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Requirement;

    /**
     * @var string 自定义要求指令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequireCommand;

    /**
     * @param integer $Method 输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Requirement 输出要求 1：文本总结 2：自定义要求
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequireCommand 自定义要求指令
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Requirement",$param) and $param["Requirement"] !== null) {
            $this->Requirement = $param["Requirement"];
        }

        if (array_key_exists("RequireCommand",$param) and $param["RequireCommand"] !== null) {
            $this->RequireCommand = $param["RequireCommand"];
        }
    }
}
