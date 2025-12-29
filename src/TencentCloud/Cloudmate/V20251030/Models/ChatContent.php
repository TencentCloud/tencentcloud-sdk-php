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
namespace TencentCloud\Cloudmate\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能诊断结果内容结构
 *
 * @method string getRole() 获取角色，可选值：
 - user
 - model_thinking
 - model_output
 - knowledge
 * @method void setRole(string $Role) 设置角色，可选值：
 - user
 - model_thinking
 - model_output
 - knowledge
 * @method array getParts() 获取内容分片
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParts(array $Parts) 设置内容分片
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChatContent extends AbstractModel
{
    /**
     * @var string 角色，可选值：
 - user
 - model_thinking
 - model_output
 - knowledge
     */
    public $Role;

    /**
     * @var array 内容分片
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parts;

    /**
     * @param string $Role 角色，可选值：
 - user
 - model_thinking
 - model_output
 - knowledge
     * @param array $Parts 内容分片
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Parts",$param) and $param["Parts"] !== null) {
            $this->Parts = [];
            foreach ($param["Parts"] as $key => $value){
                $obj = new ChatEventContentPart();
                $obj->deserialize($value);
                array_push($this->Parts, $obj);
            }
        }
    }
}
