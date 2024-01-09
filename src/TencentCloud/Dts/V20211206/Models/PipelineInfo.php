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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongo输出聚合设置。输出默认 Change Event
 *
 * @method string getAggOp() 获取聚合运算符：$addFields、$match、$project、$replaceRoot、$redact、$replaceWith、$set、$unset。其中 $replaceWith、$set、$unset 只有当订阅实例是4.2及以上版本可选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggOp(string $AggOp) 设置聚合运算符：$addFields、$match、$project、$replaceRoot、$redact、$replaceWith、$set、$unset。其中 $replaceWith、$set、$unset 只有当订阅实例是4.2及以上版本可选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAggCmd() 获取聚合表达式。必须是json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggCmd(string $AggCmd) 设置聚合表达式。必须是json格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class PipelineInfo extends AbstractModel
{
    /**
     * @var string 聚合运算符：$addFields、$match、$project、$replaceRoot、$redact、$replaceWith、$set、$unset。其中 $replaceWith、$set、$unset 只有当订阅实例是4.2及以上版本可选。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AggOp;

    /**
     * @var string 聚合表达式。必须是json格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AggCmd;

    /**
     * @param string $AggOp 聚合运算符：$addFields、$match、$project、$replaceRoot、$redact、$replaceWith、$set、$unset。其中 $replaceWith、$set、$unset 只有当订阅实例是4.2及以上版本可选。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AggCmd 聚合表达式。必须是json格式
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
        if (array_key_exists("AggOp",$param) and $param["AggOp"] !== null) {
            $this->AggOp = $param["AggOp"];
        }

        if (array_key_exists("AggCmd",$param) and $param["AggCmd"] !== null) {
            $this->AggCmd = $param["AggCmd"];
        }
    }
}
