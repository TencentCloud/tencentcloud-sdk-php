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
 * @method integer getAppID() 获取<p>腾讯云AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>腾讯云AppID</p>
 * @method string getUin() 获取<p>腾讯云Uin</p>
 * @method void setUin(string $Uin) 设置<p>腾讯云Uin</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>模型ID</p>
 * @method void setID(string $ID) 设置<p>模型ID</p>
 * @method string getName() 获取<p>模型名称</p>
 * @method void setName(string $Name) 设置<p>模型名称</p>
 * @method string getCredentialID() 获取<p>凭据ID</p>
 * @method void setCredentialID(string $CredentialID) 设置<p>凭据ID</p>
 * @method string getCredentialName() 获取<p>凭据名称</p>
 * @method void setCredentialName(string $CredentialName) 设置<p>凭据名称</p>
 * @method string getHttpProtocolType() 获取<p>http协议类型</p>
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置<p>http协议类型</p>
 * @method boolean getCheckTargetCertsError() 获取<p>https时，是否校验目标证书</p>
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置<p>https时，是否校验目标证书</p>
 * @method string getHttpProtocolVersion() 获取<p>http协议版本：1.1/2.0</p>
 * @method void setHttpProtocolVersion(string $HttpProtocolVersion) 设置<p>http协议版本：1.1/2.0</p>
 * @method string getTargetPath() 获取<p>目标路径</p>
 * @method void setTargetPath(string $TargetPath) 设置<p>目标路径</p>
 * @method array getTargetHosts() 获取<p>目标器列表</p>
 * @method void setTargetHosts(array $TargetHosts) 设置<p>目标器列表</p>
 * @method integer getModelServiceCount() 获取<p>被模型服务使用的个数</p>
 * @method void setModelServiceCount(integer $ModelServiceCount) 设置<p>被模型服务使用的个数</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getLastUpdateTime() 获取<p>最后修改时间</p>
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置<p>最后修改时间</p>
 * @method string getModelID() 获取<p>model ID</p>
 * @method void setModelID(string $ModelID) 设置<p>model ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class DescribeModelResponseVO extends AbstractModel
{
    /**
     * @var integer <p>腾讯云AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>腾讯云Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>实例ID</p>
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
     * @var string <p>凭据ID</p>
     */
    public $CredentialID;

    /**
     * @var string <p>凭据名称</p>
     */
    public $CredentialName;

    /**
     * @var string <p>http协议类型</p>
     */
    public $HttpProtocolType;

    /**
     * @var boolean <p>https时，是否校验目标证书</p>
     */
    public $CheckTargetCertsError;

    /**
     * @var string <p>http协议版本：1.1/2.0</p>
     */
    public $HttpProtocolVersion;

    /**
     * @var string <p>目标路径</p>
     */
    public $TargetPath;

    /**
     * @var array <p>目标器列表</p>
     */
    public $TargetHosts;

    /**
     * @var integer <p>被模型服务使用的个数</p>
     */
    public $ModelServiceCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间</p>
     */
    public $LastUpdateTime;

    /**
     * @var string <p>model ID</p>
     */
    public $ModelID;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param integer $AppID <p>腾讯云AppID</p>
     * @param string $Uin <p>腾讯云Uin</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>模型ID</p>
     * @param string $Name <p>模型名称</p>
     * @param string $CredentialID <p>凭据ID</p>
     * @param string $CredentialName <p>凭据名称</p>
     * @param string $HttpProtocolType <p>http协议类型</p>
     * @param boolean $CheckTargetCertsError <p>https时，是否校验目标证书</p>
     * @param string $HttpProtocolVersion <p>http协议版本：1.1/2.0</p>
     * @param string $TargetPath <p>目标路径</p>
     * @param array $TargetHosts <p>目标器列表</p>
     * @param integer $ModelServiceCount <p>被模型服务使用的个数</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $LastUpdateTime <p>最后修改时间</p>
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

        if (array_key_exists("ModelID",$param) and $param["ModelID"] !== null) {
            $this->ModelID = $param["ModelID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
