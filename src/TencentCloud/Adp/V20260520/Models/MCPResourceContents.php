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
 * MCP ResourceContents，chat-manage 侧不解析内部字段，仅结构透传
 *
 * @method string getBlob() 获取<p>二进制内容，与 text 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlob(string $Blob) 设置<p>二进制内容，与 text 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMeta() 获取<p>JSON：单个资源的 _meta 原文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeta(string $Meta) 设置<p>JSON：单个资源的 _meta 原文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMimeType() 获取<p>MIME 类型，MCP App 的 HTML 为 text/html;profile=mcp-app</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMimeType(string $MimeType) 设置<p>MIME 类型，MCP App 的 HTML 为 text/html;profile=mcp-app</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取<p>文本内容，与 blob 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置<p>文本内容，与 blob 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUri() 获取<p>资源 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUri(string $Uri) 设置<p>资源 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MCPResourceContents extends AbstractModel
{
    /**
     * @var string <p>二进制内容，与 text 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Blob;

    /**
     * @var string <p>JSON：单个资源的 _meta 原文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Meta;

    /**
     * @var string <p>MIME 类型，MCP App 的 HTML 为 text/html;profile=mcp-app</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MimeType;

    /**
     * @var string <p>文本内容，与 blob 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string <p>资源 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uri;

    /**
     * @param string $Blob <p>二进制内容，与 text 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Meta <p>JSON：单个资源的 _meta 原文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MimeType <p>MIME 类型，MCP App 的 HTML 为 text/html;profile=mcp-app</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text <p>文本内容，与 blob 二选一</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uri <p>资源 URI</p>
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
        if (array_key_exists("Blob",$param) and $param["Blob"] !== null) {
            $this->Blob = $param["Blob"];
        }

        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = $param["Meta"];
        }

        if (array_key_exists("MimeType",$param) and $param["MimeType"] !== null) {
            $this->MimeType = $param["MimeType"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }
    }
}
