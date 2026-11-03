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
 * CreateCloudNativeAPIGatewayMCPTool请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例 id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 id</p>
 * @method string getServerId() 获取<p>MCP Server Id</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP Server Id</p>
 * @method string getContentType() 获取<p>内容类型</p>
 * @method void setContentType(string $ContentType) 设置<p>内容类型</p>
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getMethod() 获取<p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
 * @method void setMethod(string $Method) 设置<p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
 * @method string getPath() 获取<p>路径</p>
 * @method void setPath(string $Path) 设置<p>路径</p>
 * @method string getDisplayName() 获取<p>展示名字</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名字</p>
 * @method string getServiceId() 获取<p>服务 id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务 id</p>
 * @method array getInputParams() 获取<p>输入</p>
 * @method void setInputParams(array $InputParams) 设置<p>输入</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class CreateCloudNativeAPIGatewayMCPToolRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例 id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP Server Id</p>
     */
    public $ServerId;

    /**
     * @var string <p>内容类型</p>
     */
    public $ContentType;

    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
     */
    public $Method;

    /**
     * @var string <p>路径</p>
     */
    public $Path;

    /**
     * @var string <p>展示名字</p>
     */
    public $DisplayName;

    /**
     * @var string <p>服务 id</p>
     */
    public $ServiceId;

    /**
     * @var array <p>输入</p>
     */
    public $InputParams;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param string $GatewayId <p>网关实例 id</p>
     * @param string $ServerId <p>MCP Server Id</p>
     * @param string $ContentType <p>内容类型</p>
     * @param string $Name <p>名字</p>
     * @param string $Method <p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
     * @param string $Path <p>路径</p>
     * @param string $DisplayName <p>展示名字</p>
     * @param string $ServiceId <p>服务 id</p>
     * @param array $InputParams <p>输入</p>
     * @param string $Description <p>描述</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("InputParams",$param) and $param["InputParams"] !== null) {
            $this->InputParams = [];
            foreach ($param["InputParams"] as $key => $value){
                $obj = new CNAPIGwMCPToolParam();
                $obj->deserialize($value);
                array_push($this->InputParams, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
