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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话内容
 *
 * @method string getRole() 获取角色，可选值包括 system、user、assistant、 tool。
 * @method void setRole(string $Role) 设置角色，可选值包括 system、user、assistant、 tool。
 * @method string getContent() 获取文本内容
 * @method void setContent(string $Content) 设置文本内容
 * @method array getContents() 获取多种类型内容（目前支持图片和文本），仅 hunyuan-vision 模型支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContents(array $Contents) 设置多种类型内容（目前支持图片和文本），仅 hunyuan-vision 模型支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToolCallId() 获取当role为tool时传入，标识具体的函数调用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolCallId(string $ToolCallId) 设置当role为tool时传入，标识具体的函数调用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getToolCalls() 获取模型生成的工具调用，仅 hunyuan-pro 或者 hunyuan-functioncall 模型支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolCalls(array $ToolCalls) 设置模型生成的工具调用，仅 hunyuan-pro 或者 hunyuan-functioncall 模型支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileIDs() 获取文件标识符。单次最大 50 个文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileIDs(array $FileIDs) 设置文件标识符。单次最大 50 个文件。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Message extends AbstractModel
{
    /**
     * @var string 角色，可选值包括 system、user、assistant、 tool。
     */
    public $Role;

    /**
     * @var string 文本内容
     */
    public $Content;

    /**
     * @var array 多种类型内容（目前支持图片和文本），仅 hunyuan-vision 模型支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contents;

    /**
     * @var string 当role为tool时传入，标识具体的函数调用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolCallId;

    /**
     * @var array 模型生成的工具调用，仅 hunyuan-pro 或者 hunyuan-functioncall 模型支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolCalls;

    /**
     * @var array 文件标识符。单次最大 50 个文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileIDs;

    /**
     * @param string $Role 角色，可选值包括 system、user、assistant、 tool。
     * @param string $Content 文本内容
     * @param array $Contents 多种类型内容（目前支持图片和文本），仅 hunyuan-vision 模型支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ToolCallId 当role为tool时传入，标识具体的函数调用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ToolCalls 模型生成的工具调用，仅 hunyuan-pro 或者 hunyuan-functioncall 模型支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileIDs 文件标识符。单次最大 50 个文件。
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new Content();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }

        if (array_key_exists("ToolCallId",$param) and $param["ToolCallId"] !== null) {
            $this->ToolCallId = $param["ToolCallId"];
        }

        if (array_key_exists("ToolCalls",$param) and $param["ToolCalls"] !== null) {
            $this->ToolCalls = [];
            foreach ($param["ToolCalls"] as $key => $value){
                $obj = new ToolCall();
                $obj->deserialize($value);
                array_push($this->ToolCalls, $obj);
            }
        }

        if (array_key_exists("FileIDs",$param) and $param["FileIDs"] !== null) {
            $this->FileIDs = $param["FileIDs"];
        }
    }
}
