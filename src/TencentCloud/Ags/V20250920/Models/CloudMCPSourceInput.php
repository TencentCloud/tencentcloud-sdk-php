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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Record 内容来源。Type 判别 MANUAL 与 URL_IMPORT。
 *
 * @method string getType() 获取<p>来源类型。MANUAL：直接提交 MCP Descriptors JSON 文本；URL_IMPORT：从远端 MCP server.json URL 导入。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>来源类型。MANUAL：直接提交 MCP Descriptors JSON 文本；URL_IMPORT：从远端 MCP server.json URL 导入。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptors() 获取<p>Type=MANUAL 时必填；值为完整 MCP server.json 对象的 JSON 文本；完整 MCP 2025-12-11 标准校验由后端执行。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptors(string $Descriptors) 设置<p>Type=MANUAL 时必填；值为完整 MCP server.json 对象的 JSON 文本；完整 MCP 2025-12-11 标准校验由后端执行。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpointURL() 获取<p>远端 MCP server.json URL；HTTPS。Type=URL_IMPORT 时必填。Version 从远端 initialize.serverInfo.version 观测获得，无需请求参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointURL(string $EndpointURL) 设置<p>远端 MCP server.json URL；HTTPS。Type=URL_IMPORT 时必填。Version 从远端 initialize.serverInfo.version 观测获得，无需请求参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudMCPSourceInput extends AbstractModel
{
    /**
     * @var string <p>来源类型。MANUAL：直接提交 MCP Descriptors JSON 文本；URL_IMPORT：从远端 MCP server.json URL 导入。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>Type=MANUAL 时必填；值为完整 MCP server.json 对象的 JSON 文本；完整 MCP 2025-12-11 标准校验由后端执行。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Descriptors;

    /**
     * @var string <p>远端 MCP server.json URL；HTTPS。Type=URL_IMPORT 时必填。Version 从远端 initialize.serverInfo.version 观测获得，无需请求参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointURL;

    /**
     * @param string $Type <p>来源类型。MANUAL：直接提交 MCP Descriptors JSON 文本；URL_IMPORT：从远端 MCP server.json URL 导入。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Descriptors <p>Type=MANUAL 时必填；值为完整 MCP server.json 对象的 JSON 文本；完整 MCP 2025-12-11 标准校验由后端执行。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndpointURL <p>远端 MCP server.json URL；HTTPS。Type=URL_IMPORT 时必填。Version 从远端 initialize.serverInfo.version 观测获得，无需请求参数。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Descriptors",$param) and $param["Descriptors"] !== null) {
            $this->Descriptors = $param["Descriptors"];
        }

        if (array_key_exists("EndpointURL",$param) and $param["EndpointURL"] !== null) {
            $this->EndpointURL = $param["EndpointURL"];
        }
    }
}
