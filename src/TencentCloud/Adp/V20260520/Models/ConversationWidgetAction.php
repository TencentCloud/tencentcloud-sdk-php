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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WidgetAction 组件交互动作信息
 *
 * @method string getActionType() 获取<p>动作类型，非枚举类型，用户自定义</p>
 * @method void setActionType(string $ActionType) 设置<p>动作类型，非枚举类型，用户自定义</p>
 * @method string getPayload() 获取<p>动作载荷</p>
 * @method void setPayload(string $Payload) 设置<p>动作载荷</p>
 * @method string getWidgetId() 获取<p>组件 ID</p>
 * @method void setWidgetId(string $WidgetId) 设置<p>组件 ID</p>
 * @method string getWidgetRunId() 获取<p>组件运行 ID</p>
 * @method void setWidgetRunId(string $WidgetRunId) 设置<p>组件运行 ID</p>
 */
class ConversationWidgetAction extends AbstractModel
{
    /**
     * @var string <p>动作类型，非枚举类型，用户自定义</p>
     */
    public $ActionType;

    /**
     * @var string <p>动作载荷</p>
     */
    public $Payload;

    /**
     * @var string <p>组件 ID</p>
     */
    public $WidgetId;

    /**
     * @var string <p>组件运行 ID</p>
     */
    public $WidgetRunId;

    /**
     * @param string $ActionType <p>动作类型，非枚举类型，用户自定义</p>
     * @param string $Payload <p>动作载荷</p>
     * @param string $WidgetId <p>组件 ID</p>
     * @param string $WidgetRunId <p>组件运行 ID</p>
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetRunId",$param) and $param["WidgetRunId"] !== null) {
            $this->WidgetRunId = $param["WidgetRunId"];
        }
    }
}
