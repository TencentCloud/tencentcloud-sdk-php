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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModel请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例</p>
 * @method string getID() 获取<p>模型ID</p>
 * @method void setID(string $ID) 设置<p>模型ID</p>
 * @method string getName() 获取<p>模型名称</p>
 * @method void setName(string $Name) 设置<p>模型名称</p>
 * @method string getHttpProtocolType() 获取<p>协议类型：http/https</p>
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置<p>协议类型：http/https</p>
 * @method string getTargetPath() 获取<p>目标路径</p>
 * @method void setTargetPath(string $TargetPath) 设置<p>目标路径</p>
 * @method array getTargetHosts() 获取<p>目标服务器</p>
 * @method void setTargetHosts(array $TargetHosts) 设置<p>目标服务器</p>
 * @method string getCredentialID() 获取<p>凭据ID</p>
 * @method void setCredentialID(string $CredentialID) 设置<p>凭据ID</p>
 * @method boolean getCheckTargetCertsError() 获取<p>https时，是否检查证书合法</p>
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置<p>https时，是否检查证书合法</p>
 * @method string getHttpProtocolVersion() 获取<p>http协议版本：1.1/2.0</p>
 * @method void setHttpProtocolVersion(string $HttpProtocolVersion) 设置<p>http协议版本：1.1/2.0</p>
 * @method string getModelID() 获取<p>model ID</p>
 * @method void setModelID(string $ModelID) 设置<p>model ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class ModifyModelRequest extends AbstractModel
{
    /**
     * @var string <p>实例</p>
     */
    public $InstanceID;

    /**
     * @var string <p>模型ID</p>
     */
    public $ID;

    /**
     * @var string <p>模型名称</p>
     */
    public $Name;

    /**
     * @var string <p>协议类型：http/https</p>
     */
    public $HttpProtocolType;

    /**
     * @var string <p>目标路径</p>
     */
    public $TargetPath;

    /**
     * @var array <p>目标服务器</p>
     */
    public $TargetHosts;

    /**
     * @var string <p>凭据ID</p>
     */
    public $CredentialID;

    /**
     * @var boolean <p>https时，是否检查证书合法</p>
     */
    public $CheckTargetCertsError;

    /**
     * @var string <p>http协议版本：1.1/2.0</p>
     */
    public $HttpProtocolVersion;

    /**
     * @var string <p>model ID</p>
     */
    public $ModelID;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param string $InstanceID <p>实例</p>
     * @param string $ID <p>模型ID</p>
     * @param string $Name <p>模型名称</p>
     * @param string $HttpProtocolType <p>协议类型：http/https</p>
     * @param string $TargetPath <p>目标路径</p>
     * @param array $TargetHosts <p>目标服务器</p>
     * @param string $CredentialID <p>凭据ID</p>
     * @param boolean $CheckTargetCertsError <p>https时，是否检查证书合法</p>
     * @param string $HttpProtocolVersion <p>http协议版本：1.1/2.0</p>
     * @param string $ModelID <p>model ID</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("HttpProtocolType",$param) and $param["HttpProtocolType"] !== null) {
            $this->HttpProtocolType = $param["HttpProtocolType"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("TargetHosts",$param) and $param["TargetHosts"] !== null) {
            $this->TargetHosts = [];
            foreach ($param["TargetHosts"] as $key => $value){
                $obj = new TargetHostDTO();
                $obj->deserialize($value);
                array_push($this->TargetHosts, $obj);
            }
        }

        if (array_key_exists("CredentialID",$param) and $param["CredentialID"] !== null) {
            $this->CredentialID = $param["CredentialID"];
        }

        if (array_key_exists("CheckTargetCertsError",$param) and $param["CheckTargetCertsError"] !== null) {
            $this->CheckTargetCertsError = $param["CheckTargetCertsError"];
        }

        if (array_key_exists("HttpProtocolVersion",$param) and $param["HttpProtocolVersion"] !== null) {
            $this->HttpProtocolVersion = $param["HttpProtocolVersion"];
        }

        if (array_key_exists("ModelID",$param) and $param["ModelID"] !== null) {
            $this->ModelID = $param["ModelID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
