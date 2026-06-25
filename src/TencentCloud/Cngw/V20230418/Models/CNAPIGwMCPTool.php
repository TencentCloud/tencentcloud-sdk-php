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
 * MCP Tool 信息
 *
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getDisplayName() 获取<p>展示名字</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名字</p>
 * @method string getMethod() 获取<p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
 * @method void setMethod(string $Method) 设置<p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getToolId() 获取<p>工具 id</p>
 * @method void setToolId(string $ToolId) 设置<p>工具 id</p>
 * @method string getContentType() 获取<p>报文格式</p>
 * @method void setContentType(string $ContentType) 设置<p>报文格式</p>
 * @method string getServiceId() 获取<p>服务 id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置<p>服务 id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>路径</p>
 * @method void setPath(string $Path) 设置<p>路径</p>
 * @method array getInputParams() 获取<p>参数</p>
 * @method void setInputParams(array $InputParams) 设置<p>参数</p>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method string getStatus() 获取<p>tool状态</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>tool状态</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
 * @method string getCurrentVersion() 获取<p>当前版本号</p>
 * @method void setCurrentVersion(string $CurrentVersion) 设置<p>当前版本号</p>
 */
class CNAPIGwMCPTool extends AbstractModel
{
    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>展示名字</p>
     */
    public $DisplayName;

    /**
     * @var string <p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
     */
    public $Method;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>工具 id</p>
     */
    public $ToolId;

    /**
     * @var string <p>报文格式</p>
     */
    public $ContentType;

    /**
     * @var string <p>服务 id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string <p>路径</p>
     */
    public $Path;

    /**
     * @var array <p>参数</p>
     */
    public $InputParams;

    /**
     * @var string <p>创建时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>tool状态</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>当前版本号</p>
     */
    public $CurrentVersion;

    /**
     * @param string $Name <p>名字</p>
     * @param string $DisplayName <p>展示名字</p>
     * @param string $Method <p>方法</p><p>枚举值：</p><ul><li>GET： GET</li><li>POST： POST</li><li>PUT： PUT</li><li>DELETE： DELETE</li><li>PATCH： PATCH</li></ul>
     * @param string $Description <p>描述</p>
     * @param string $ToolId <p>工具 id</p>
     * @param string $ContentType <p>报文格式</p>
     * @param string $ServiceId <p>服务 id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>路径</p>
     * @param array $InputParams <p>参数</p>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     * @param string $Status <p>tool状态</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
     * @param string $CurrentVersion <p>当前版本号</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("InputParams",$param) and $param["InputParams"] !== null) {
            $this->InputParams = [];
            foreach ($param["InputParams"] as $key => $value){
                $obj = new CNAPIGwMCPToolParam();
                $obj->deserialize($value);
                array_push($this->InputParams, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentVersion",$param) and $param["CurrentVersion"] !== null) {
            $this->CurrentVersion = $param["CurrentVersion"];
        }
    }
}
