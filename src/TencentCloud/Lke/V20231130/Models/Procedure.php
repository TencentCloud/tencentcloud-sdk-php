<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 执行过程信息记录
 *
 * @method string getName() 获取执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcedureDebugging getDebugging() 获取调试信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDebugging(ProcedureDebugging $Debugging) 设置调试信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceStatus() 获取计费资源状态，1：可用，2：不可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceStatus(integer $ResourceStatus) 设置计费资源状态，1：可用，2：不可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputCount() 获取输入消耗 token 数
 * @method void setInputCount(integer $InputCount) 设置输入消耗 token 数
 * @method integer getOutputCount() 获取输出消耗 token 数
 * @method void setOutputCount(integer $OutputCount) 设置输出消耗 token 数
 */
class Procedure extends AbstractModel
{
    /**
     * @var string 执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var ProcedureDebugging 调试信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Debugging;

    /**
     * @var integer 计费资源状态，1：可用，2：不可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceStatus;

    /**
     * @var integer 输入消耗 token 数
     */
    public $InputCount;

    /**
     * @var integer 输出消耗 token 数
     */
    public $OutputCount;

    /**
     * @param string $Name 执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcedureDebugging $Debugging 调试信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceStatus 计费资源状态，1：可用，2：不可用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputCount 输入消耗 token 数
     * @param integer $OutputCount 输出消耗 token 数
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Debugging",$param) and $param["Debugging"] !== null) {
            $this->Debugging = new ProcedureDebugging();
            $this->Debugging->deserialize($param["Debugging"]);
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("InputCount",$param) and $param["InputCount"] !== null) {
            $this->InputCount = $param["InputCount"];
        }

        if (array_key_exists("OutputCount",$param) and $param["OutputCount"] !== null) {
            $this->OutputCount = $param["OutputCount"];
        }
    }
}
