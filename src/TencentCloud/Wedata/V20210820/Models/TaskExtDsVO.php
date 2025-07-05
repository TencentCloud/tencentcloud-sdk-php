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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 属性配置
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取任务属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置任务属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDryRunExtAttributes() 获取任务试运行扩展业务属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDryRunExtAttributes(array $DryRunExtAttributes) 设置任务试运行扩展业务属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDryRunParameter() 获取任务试运行动态传参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDryRunParameter(array $DryRunParameter) 设置任务试运行动态传参
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskExtDsVO extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var array 任务属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var array 任务试运行扩展业务属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DryRunExtAttributes;

    /**
     * @var array 任务试运行动态传参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DryRunParameter;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 任务属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DryRunExtAttributes 任务试运行扩展业务属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DryRunParameter 任务试运行动态传参
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

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("DryRunExtAttributes",$param) and $param["DryRunExtAttributes"] !== null) {
            $this->DryRunExtAttributes = [];
            foreach ($param["DryRunExtAttributes"] as $key => $value){
                $obj = new AttributeItemDsVO();
                $obj->deserialize($value);
                array_push($this->DryRunExtAttributes, $obj);
            }
        }

        if (array_key_exists("DryRunParameter",$param) and $param["DryRunParameter"] !== null) {
            $this->DryRunParameter = [];
            foreach ($param["DryRunParameter"] as $key => $value){
                $obj = new AttributeItemDsVO();
                $obj->deserialize($value);
                array_push($this->DryRunParameter, $obj);
            }
        }
    }
}
