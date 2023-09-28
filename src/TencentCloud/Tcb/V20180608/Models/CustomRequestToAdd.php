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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全网关请求自定义头部
 *
 * @method string getKey() 获取Header名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置Header名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取Header值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置Header值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppendAction() 获取Header类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppendAction(string $AppendAction) 设置Header类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomRequestToAdd extends AbstractModel
{
    /**
     * @var string Header名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string Header值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string Header类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppendAction;

    /**
     * @param string $Key Header名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value Header值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppendAction Header类型
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("AppendAction",$param) and $param["AppendAction"] !== null) {
            $this->AppendAction = $param["AppendAction"];
        }
    }
}
