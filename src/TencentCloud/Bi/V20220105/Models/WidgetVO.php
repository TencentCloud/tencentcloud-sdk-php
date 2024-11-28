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
 * 组件信息
 *
 * @method string getWidgetId() 获取组件Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetId(string $WidgetId) 设置组件Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWidgetName() 获取组件name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetName(string $WidgetName) 设置组件name
注意：此字段可能返回 null，表示取不到有效值。
 */
class WidgetVO extends AbstractModel
{
    /**
     * @var string 组件Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetId;

    /**
     * @var string 组件name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetName;

    /**
     * @param string $WidgetId 组件Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WidgetName 组件name
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

        if (array_key_exists("WidgetName",$param) and $param["WidgetName"] !== null) {
            $this->WidgetName = $param["WidgetName"];
        }
    }
}
