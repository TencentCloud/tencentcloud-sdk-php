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
 * 对话端Widget动作提交结构
 *
 * @method string getWidgetId() 获取Widget配置ID
 * @method void setWidgetId(string $WidgetId) 设置Widget配置ID
 * @method string getWidgetRunId() 获取Widget实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetRunId(string $WidgetRunId) 设置Widget实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionType() 获取Widget动作
 * @method void setActionType(string $ActionType) 设置Widget动作
 * @method string getPayload() 获取Widget动作提交的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayload(string $Payload) 设置Widget动作提交的数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class WidgetAction extends AbstractModel
{
    /**
     * @var string Widget配置ID
     */
    public $WidgetId;

    /**
     * @var string Widget实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetRunId;

    /**
     * @var string Widget动作
     */
    public $ActionType;

    /**
     * @var string Widget动作提交的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Payload;

    /**
     * @param string $WidgetId Widget配置ID
     * @param string $WidgetRunId Widget实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionType Widget动作
     * @param string $Payload Widget动作提交的数据
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
        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetRunId",$param) and $param["WidgetRunId"] !== null) {
            $this->WidgetRunId = $param["WidgetRunId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
