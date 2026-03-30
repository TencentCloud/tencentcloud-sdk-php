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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提示词安全配置
 *
 * @method string getAction() 获取执行动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置执行动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInterceptMessage() 获取响应拦截内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptMessage(string $InterceptMessage) 设置响应拦截内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class PromptModerateConfigDTO extends AbstractModel
{
    /**
     * @var string 执行动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 响应拦截内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptMessage;

    /**
     * @param string $Action 执行动作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InterceptMessage 响应拦截内容
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("InterceptMessage",$param) and $param["InterceptMessage"] !== null) {
            $this->InterceptMessage = $param["InterceptMessage"];
        }
    }
}
