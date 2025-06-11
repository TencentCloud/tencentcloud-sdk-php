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
 * 任务参数Dto
 *
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamKey() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamKey(string $ParamKey) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDefine() 获取参数定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDefine(string $ParamDefine) 设置参数定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamValue() 获取参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamValue(string $ParamValue) 设置参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取任务参数输入类型, 取值示例

- text    文本输入

- kv     k-v输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置任务参数输入类型, 取值示例

- text    文本输入

- kv     k-v输入
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParameterTaskDsDto extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamKey;

    /**
     * @var string 参数定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDefine;

    /**
     * @var string 参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamValue;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 任务参数输入类型, 取值示例

- text    文本输入

- kv     k-v输入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamKey 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDefine 参数定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamValue 参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType 任务参数输入类型, 取值示例

- text    文本输入

- kv     k-v输入
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamDefine",$param) and $param["ParamDefine"] !== null) {
            $this->ParamDefine = $param["ParamDefine"];
        }

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }
    }
}
