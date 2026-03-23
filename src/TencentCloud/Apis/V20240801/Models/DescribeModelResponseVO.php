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
 * 查询模型详情的响应
 *
 * @method integer getAppID() 获取腾讯云AppID
 * @method void setAppID(integer $AppID) 设置腾讯云AppID
 * @method string getUin() 获取腾讯云Uin
 * @method void setUin(string $Uin) 设置腾讯云Uin
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getID() 获取模型ID
 * @method void setID(string $ID) 设置模型ID
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 * @method string getCredentialID() 获取凭据ID
 * @method void setCredentialID(string $CredentialID) 设置凭据ID
 * @method string getCredentialName() 获取凭据名称
 * @method void setCredentialName(string $CredentialName) 设置凭据名称
 * @method string getHttpProtocolType() 获取http协议类型
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置http协议类型
 * @method boolean getCheckTargetCertsError() 获取https时，是否校验目标证书
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置https时，是否校验目标证书
 * @method string getHttpProtocolVersion() 获取http协议版本：1.1/2.0
 * @method void setHttpProtocolVersion(string $HttpProtocolVersion) 设置http协议版本：1.1/2.0
 * @method string getTargetPath() 获取目标路径
 * @method void setTargetPath(string $TargetPath) 设置目标路径
 * @method array getTargetHosts() 获取目标器列表
 * @method void setTargetHosts(array $TargetHosts) 设置目标器列表
 * @method integer getModelServiceCount() 获取被模型服务使用的个数
 * @method void setModelServiceCount(integer $ModelServiceCount) 设置被模型服务使用的个数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getLastUpdateTime() 获取最后修改时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后修改时间
 */
class DescribeModelResponseVO extends AbstractModel
{
    /**
     * @var integer 腾讯云AppID
     */
    public $AppID;

    /**
     * @var string 腾讯云Uin
     */
    public $Uin;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 模型ID
     */
    public $ID;

    /**
     * @var string 模型名称
     */
    public $Name;

    /**
     * @var string 凭据ID
     */
    public $CredentialID;

    /**
     * @var string 凭据名称
     */
    public $CredentialName;

    /**
     * @var string http协议类型
     */
    public $HttpProtocolType;

    /**
     * @var boolean https时，是否校验目标证书
     */
    public $CheckTargetCertsError;

    /**
     * @var string http协议版本：1.1/2.0
     */
    public $HttpProtocolVersion;

    /**
     * @var string 目标路径
     */
    public $TargetPath;

    /**
     * @var array 目标器列表
     */
    public $TargetHosts;

    /**
     * @var integer 被模型服务使用的个数
     */
    public $ModelServiceCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间
     */
    public $LastUpdateTime;

    /**
     * @param integer $AppID 腾讯云AppID
     * @param string $Uin 腾讯云Uin
     * @param string $InstanceID 实例ID
     * @param string $ID 模型ID
     * @param string $Name 模型名称
     * @param string $CredentialID 凭据ID
     * @param string $CredentialName 凭据名称
     * @param string $HttpProtocolType http协议类型
     * @param boolean $CheckTargetCertsError https时，是否校验目标证书
     * @param string $HttpProtocolVersion http协议版本：1.1/2.0
     * @param string $TargetPath 目标路径
     * @param array $TargetHosts 目标器列表
     * @param integer $ModelServiceCount 被模型服务使用的个数
     * @param string $CreateTime 创建时间
     * @param string $LastUpdateTime 最后修改时间
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
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

        if (array_key_exists("CredentialID",$param) and $param["CredentialID"] !== null) {
            $this->CredentialID = $param["CredentialID"];
        }

        if (array_key_exists("CredentialName",$param) and $param["CredentialName"] !== null) {
            $this->CredentialName = $param["CredentialName"];
        }

        if (array_key_exists("HttpProtocolType",$param) and $param["HttpProtocolType"] !== null) {
            $this->HttpProtocolType = $param["HttpProtocolType"];
        }

        if (array_key_exists("CheckTargetCertsError",$param) and $param["CheckTargetCertsError"] !== null) {
            $this->CheckTargetCertsError = $param["CheckTargetCertsError"];
        }

        if (array_key_exists("HttpProtocolVersion",$param) and $param["HttpProtocolVersion"] !== null) {
            $this->HttpProtocolVersion = $param["HttpProtocolVersion"];
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

        if (array_key_exists("ModelServiceCount",$param) and $param["ModelServiceCount"] !== null) {
            $this->ModelServiceCount = $param["ModelServiceCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
