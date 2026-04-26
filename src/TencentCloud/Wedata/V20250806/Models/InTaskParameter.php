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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数传递-引用参数
 *
 * @method string getParamKey() 获取<p>参数名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamKey(string $ParamKey) 设置<p>参数名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDesc() 获取<p>参数描述：格式为 项目标识.任务名称.参数名；例：project_wedata_1.sh_250820_104107.pp_out</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDesc(string $ParamDesc) 设置<p>参数描述：格式为 项目标识.任务名称.参数名；例：project_wedata_1.sh_250820_104107.pp_out</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromTaskId() 获取<p>父任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromTaskId(string $FromTaskId) 设置<p>父任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromParamKey() 获取<p>父任务参数key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromParamKey(string $FromParamKey) 设置<p>父任务参数key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>任务输入类型，默认使用TASK</p><p>枚举值：</p><ul><li>TASK： 来源为父任务</li><li>CONSTANT： 常量值，目前仅for-each节点支持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>任务输入类型，默认使用TASK</p><p>枚举值：</p><ul><li>TASK： 来源为父任务</li><li>CONSTANT： 常量值，目前仅for-each节点支持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InTaskParameter extends AbstractModel
{
    /**
     * @var string <p>参数名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamKey;

    /**
     * @var string <p>参数描述：格式为 项目标识.任务名称.参数名；例：project_wedata_1.sh_250820_104107.pp_out</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDesc;

    /**
     * @var string <p>父任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromTaskId;

    /**
     * @var string <p>父任务参数key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromParamKey;

    /**
     * @var string <p>任务输入类型，默认使用TASK</p><p>枚举值：</p><ul><li>TASK： 来源为父任务</li><li>CONSTANT： 常量值，目前仅for-each节点支持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $ParamKey <p>参数名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDesc <p>参数描述：格式为 项目标识.任务名称.参数名；例：project_wedata_1.sh_250820_104107.pp_out</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromTaskId <p>父任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromParamKey <p>父任务参数key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>任务输入类型，默认使用TASK</p><p>枚举值：</p><ul><li>TASK： 来源为父任务</li><li>CONSTANT： 常量值，目前仅for-each节点支持</li></ul>
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
        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("FromTaskId",$param) and $param["FromTaskId"] !== null) {
            $this->FromTaskId = $param["FromTaskId"];
        }

        if (array_key_exists("FromParamKey",$param) and $param["FromParamKey"] !== null) {
            $this->FromParamKey = $param["FromParamKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
