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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Tools的导入结果
 *
 * @method string getFailedMessage() 获取<p>导入失败的原因信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedMessage(string $FailedMessage) 设置<p>导入失败的原因信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取<p>请求方法</p>
 * @method void setMethod(string $Method) 设置<p>请求方法</p>
 * @method string getName() 获取<p>MCP Tool 名字</p>
 * @method void setName(string $Name) 设置<p>MCP Tool 名字</p>
 * @method string getPath() 获取<p>MCP Tool的请求路径</p>
 * @method void setPath(string $Path) 设置<p>MCP Tool的请求路径</p>
 * @method string getStatus() 获取<p>导入结果</p><p>枚举值：</p><ul><li>Waiting： 等待导入</li><li>Success： 导入成功</li><li>Failed： 导入失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>导入结果</p><p>枚举值：</p><ul><li>Waiting： 等待导入</li><li>Success： 导入成功</li><li>Failed： 导入失败</li></ul>
 * @method string getUpstreamUrl() 获取<p>虚拟MCP Server的Tool的完整后端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamUrl(string $UpstreamUrl) 设置<p>虚拟MCP Server的Tool的完整后端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CNAPIGwMCPToolImportResult extends AbstractModel
{
    /**
     * @var string <p>导入失败的原因信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedMessage;

    /**
     * @var string <p>请求方法</p>
     */
    public $Method;

    /**
     * @var string <p>MCP Tool 名字</p>
     */
    public $Name;

    /**
     * @var string <p>MCP Tool的请求路径</p>
     */
    public $Path;

    /**
     * @var string <p>导入结果</p><p>枚举值：</p><ul><li>Waiting： 等待导入</li><li>Success： 导入成功</li><li>Failed： 导入失败</li></ul>
     */
    public $Status;

    /**
     * @var string <p>虚拟MCP Server的Tool的完整后端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamUrl;

    /**
     * @param string $FailedMessage <p>导入失败的原因信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method <p>请求方法</p>
     * @param string $Name <p>MCP Tool 名字</p>
     * @param string $Path <p>MCP Tool的请求路径</p>
     * @param string $Status <p>导入结果</p><p>枚举值：</p><ul><li>Waiting： 等待导入</li><li>Success： 导入成功</li><li>Failed： 导入失败</li></ul>
     * @param string $UpstreamUrl <p>虚拟MCP Server的Tool的完整后端地址</p>
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
        if (array_key_exists("FailedMessage",$param) and $param["FailedMessage"] !== null) {
            $this->FailedMessage = $param["FailedMessage"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpstreamUrl",$param) and $param["UpstreamUrl"] !== null) {
            $this->UpstreamUrl = $param["UpstreamUrl"];
        }
    }
}
