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
 * 通过OpenAPI文件导入MCP tools的预览内容
 *
 * @method string getContentType() 获取<p>MCP Tool入参的ContentType</p><p>枚举值：</p><ul><li>application/json： json格式</li><li>application/x-www-form-urlencoded： 表单格式</li></ul>
 * @method void setContentType(string $ContentType) 设置<p>MCP Tool入参的ContentType</p><p>枚举值：</p><ul><li>application/json： json格式</li><li>application/x-www-form-urlencoded： 表单格式</li></ul>
 * @method string getDescription() 获取<p>MCP Tool的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>MCP Tool的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInputParams() 获取<p>MCP Tool的参数</p>
 * @method void setInputParams(array $InputParams) 设置<p>MCP Tool的参数</p>
 * @method string getMethod() 获取<p>MCP Tool的请求方法</p>
 * @method void setMethod(string $Method) 设置<p>MCP Tool的请求方法</p>
 * @method string getName() 获取<p>MCP Tool名字</p>
 * @method void setName(string $Name) 设置<p>MCP Tool名字</p>
 * @method string getPath() 获取<p>MCP Tool的请求路径</p>
 * @method void setPath(string $Path) 设置<p>MCP Tool的请求路径</p>
 * @method string getStatus() 获取<p>MCP Tool的状态</p><p>枚举值：</p><ul><li>Valid： 可导入</li><li>Invalid： 不可导入</li></ul>
 * @method void setStatus(string $Status) 设置<p>MCP Tool的状态</p><p>枚举值：</p><ul><li>Valid： 可导入</li><li>Invalid： 不可导入</li></ul>
 * @method string getStatusMessage() 获取<p>不可导入的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMessage(string $StatusMessage) 设置<p>不可导入的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamUrl() 获取<p>虚拟MCP Server的tools的完整url路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamUrl(string $UpstreamUrl) 设置<p>虚拟MCP Server的tools的完整url路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CNAPIGwMCPToolPreview extends AbstractModel
{
    /**
     * @var string <p>MCP Tool入参的ContentType</p><p>枚举值：</p><ul><li>application/json： json格式</li><li>application/x-www-form-urlencoded： 表单格式</li></ul>
     */
    public $ContentType;

    /**
     * @var string <p>MCP Tool的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>MCP Tool的参数</p>
     */
    public $InputParams;

    /**
     * @var string <p>MCP Tool的请求方法</p>
     */
    public $Method;

    /**
     * @var string <p>MCP Tool名字</p>
     */
    public $Name;

    /**
     * @var string <p>MCP Tool的请求路径</p>
     */
    public $Path;

    /**
     * @var string <p>MCP Tool的状态</p><p>枚举值：</p><ul><li>Valid： 可导入</li><li>Invalid： 不可导入</li></ul>
     */
    public $Status;

    /**
     * @var string <p>不可导入的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMessage;

    /**
     * @var string <p>虚拟MCP Server的tools的完整url路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamUrl;

    /**
     * @param string $ContentType <p>MCP Tool入参的ContentType</p><p>枚举值：</p><ul><li>application/json： json格式</li><li>application/x-www-form-urlencoded： 表单格式</li></ul>
     * @param string $Description <p>MCP Tool的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InputParams <p>MCP Tool的参数</p>
     * @param string $Method <p>MCP Tool的请求方法</p>
     * @param string $Name <p>MCP Tool名字</p>
     * @param string $Path <p>MCP Tool的请求路径</p>
     * @param string $Status <p>MCP Tool的状态</p><p>枚举值：</p><ul><li>Valid： 可导入</li><li>Invalid： 不可导入</li></ul>
     * @param string $StatusMessage <p>不可导入的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamUrl <p>虚拟MCP Server的tools的完整url路径</p>
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
        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputParams",$param) and $param["InputParams"] !== null) {
            $this->InputParams = [];
            foreach ($param["InputParams"] as $key => $value){
                $obj = new CNAPIGwMCPToolParam();
                $obj->deserialize($value);
                array_push($this->InputParams, $obj);
            }
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

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("UpstreamUrl",$param) and $param["UpstreamUrl"] !== null) {
            $this->UpstreamUrl = $param["UpstreamUrl"];
        }
    }
}
