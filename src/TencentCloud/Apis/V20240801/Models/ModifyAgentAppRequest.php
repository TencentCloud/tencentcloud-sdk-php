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
 * ModifyAgentApp请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>应用ID</p>
 * @method void setID(string $ID) 设置<p>应用ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getOAuth2ResourceServerID() 获取<p>OAuth2资源服务器ID</p>
 * @method void setOAuth2ResourceServerID(string $OAuth2ResourceServerID) 设置<p>OAuth2资源服务器ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getConnectorIDs() 获取<p>凭据ID</p>
 * @method void setConnectorIDs(array $ConnectorIDs) 设置<p>凭据ID</p>
 */
class ModifyAgentAppRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>应用ID</p>
     */
    public $ID;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>OAuth2资源服务器ID</p>
     */
    public $OAuth2ResourceServerID;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>凭据ID</p>
     */
    public $ConnectorIDs;

    /**
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>应用ID</p>
     * @param string $Name <p>名称</p>
     * @param string $OAuth2ResourceServerID <p>OAuth2资源服务器ID</p>
     * @param string $Description <p>描述</p>
     * @param array $ConnectorIDs <p>凭据ID</p>
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

        if (array_key_exists("OAuth2ResourceServerID",$param) and $param["OAuth2ResourceServerID"] !== null) {
            $this->OAuth2ResourceServerID = $param["OAuth2ResourceServerID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConnectorIDs",$param) and $param["ConnectorIDs"] !== null) {
            $this->ConnectorIDs = $param["ConnectorIDs"];
        }
    }
}
