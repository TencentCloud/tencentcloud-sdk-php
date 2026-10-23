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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserKey请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getName() 获取<p>用户密钥名称</p>
 * @method void setName(string $Name) 设置<p>用户密钥名称</p>
 * @method string getKeyID() 获取<p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
 * @method void setKeyID(string $KeyID) 设置<p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
 * @method string getDescription() 获取<p>密钥对描述</p>
 * @method void setDescription(string $Description) 设置<p>密钥对描述</p>
 * @method string getAuthTypeCode() 获取<p>授权类型code</p>
 * @method void setAuthTypeCode(string $AuthTypeCode) 设置<p>授权类型code</p>
 * @method string getExt() 获取<p>根据授权类型的不同，ext会有不同的子结构</p>
 * @method void setExt(string $Ext) 设置<p>根据授权类型的不同，ext会有不同的子结构</p>
 * @method string getBusiness() 获取<p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
 * @method void setBusiness(string $Business) 设置<p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
 * @method AgentRuntimeConfig getRuntimeConfig() 获取<p>创建集成时创建对应的示例代码云函数需要的参数</p>
 * @method void setRuntimeConfig(AgentRuntimeConfig $RuntimeConfig) 设置<p>创建集成时创建对应的示例代码云函数需要的参数</p>
 * @method string getDemoCodeFunctionName() 获取<p>创建集成时创建对应的示例代码云函数需要的函数名</p>
 * @method void setDemoCodeFunctionName(string $DemoCodeFunctionName) 设置<p>创建集成时创建对应的示例代码云函数需要的函数名</p>
 */
class UpdateUserKeyRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>用户密钥名称</p>
     */
    public $Name;

    /**
     * @var string <p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
     */
    public $KeyID;

    /**
     * @var string <p>密钥对描述</p>
     */
    public $Description;

    /**
     * @var string <p>授权类型code</p>
     */
    public $AuthTypeCode;

    /**
     * @var string <p>根据授权类型的不同，ext会有不同的子结构</p>
     */
    public $Ext;

    /**
     * @var string <p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
     */
    public $Business;

    /**
     * @var AgentRuntimeConfig <p>创建集成时创建对应的示例代码云函数需要的参数</p>
     */
    public $RuntimeConfig;

    /**
     * @var string <p>创建集成时创建对应的示例代码云函数需要的函数名</p>
     */
    public $DemoCodeFunctionName;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $Name <p>用户密钥名称</p>
     * @param string $KeyID <p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
     * @param string $Description <p>密钥对描述</p>
     * @param string $AuthTypeCode <p>授权类型code</p>
     * @param string $Ext <p>根据授权类型的不同，ext会有不同的子结构</p>
     * @param string $Business <p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
     * @param AgentRuntimeConfig $RuntimeConfig <p>创建集成时创建对应的示例代码云函数需要的参数</p>
     * @param string $DemoCodeFunctionName <p>创建集成时创建对应的示例代码云函数需要的函数名</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KeyID",$param) and $param["KeyID"] !== null) {
            $this->KeyID = $param["KeyID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AuthTypeCode",$param) and $param["AuthTypeCode"] !== null) {
            $this->AuthTypeCode = $param["AuthTypeCode"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new AgentRuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
        }

        if (array_key_exists("DemoCodeFunctionName",$param) and $param["DemoCodeFunctionName"] !== null) {
            $this->DemoCodeFunctionName = $param["DemoCodeFunctionName"];
        }
    }
}
