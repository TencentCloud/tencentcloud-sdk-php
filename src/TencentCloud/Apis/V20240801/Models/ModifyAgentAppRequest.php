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
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getID() 获取应用ID
 * @method void setID(string $ID) 设置应用ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getOAuth2ResourceServerID() 获取OAuth2资源服务器ID
 * @method void setOAuth2ResourceServerID(string $OAuth2ResourceServerID) 设置OAuth2资源服务器ID
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class ModifyAgentAppRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 应用ID
     */
    public $ID;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string OAuth2资源服务器ID
     */
    public $OAuth2ResourceServerID;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $InstanceID 实例ID
     * @param string $ID 应用ID
     * @param string $Name 名称
     * @param string $OAuth2ResourceServerID OAuth2资源服务器ID
     * @param string $Description 描述
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
    }
}
