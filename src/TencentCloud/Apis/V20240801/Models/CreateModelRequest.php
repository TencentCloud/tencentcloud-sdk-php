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
 * CreateModel请求参数结构体
 *
 * @method string getInstanceID() 获取实例
 * @method void setInstanceID(string $InstanceID) 设置实例
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 * @method string getHttpProtocolType() 获取协议类型：http/https
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置协议类型：http/https
 * @method string getTargetPath() 获取目标路径
 * @method void setTargetPath(string $TargetPath) 设置目标路径
 * @method array getTargetHosts() 获取目标服务器
 * @method void setTargetHosts(array $TargetHosts) 设置目标服务器
 * @method string getCredentialID() 获取凭据ID
 * @method void setCredentialID(string $CredentialID) 设置凭据ID
 * @method boolean getCheckTargetCertsError() 获取https时，是否检查证书合法
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置https时，是否检查证书合法
 * @method string getHttpProtocolVersion() 获取http协议版本：1.1/2.0
 * @method void setHttpProtocolVersion(string $HttpProtocolVersion) 设置http协议版本：1.1/2.0
 */
class CreateModelRequest extends AbstractModel
{
    /**
     * @var string 实例
     */
    public $InstanceID;

    /**
     * @var string 模型名称
     */
    public $Name;

    /**
     * @var string 协议类型：http/https
     */
    public $HttpProtocolType;

    /**
     * @var string 目标路径
     */
    public $TargetPath;

    /**
     * @var array 目标服务器
     */
    public $TargetHosts;

    /**
     * @var string 凭据ID
     */
    public $CredentialID;

    /**
     * @var boolean https时，是否检查证书合法
     */
    public $CheckTargetCertsError;

    /**
     * @var string http协议版本：1.1/2.0
     */
    public $HttpProtocolVersion;

    /**
     * @param string $InstanceID 实例
     * @param string $Name 模型名称
     * @param string $HttpProtocolType 协议类型：http/https
     * @param string $TargetPath 目标路径
     * @param array $TargetHosts 目标服务器
     * @param string $CredentialID 凭据ID
     * @param boolean $CheckTargetCertsError https时，是否检查证书合法
     * @param string $HttpProtocolVersion http协议版本：1.1/2.0
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
    }
}
