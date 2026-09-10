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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CAM授权信息
 *
 * @method string getRoleName() 获取<p>角色名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称</p>
 * @method integer getKeyLocation() 获取<p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 头鉴权 |<br>| 1 | 请求信息鉴权 |</p>
 * @method void setKeyLocation(integer $KeyLocation) 设置<p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 头鉴权 |<br>| 1 | 请求信息鉴权 |</p>
 * @method string getSecretIdName() 获取<p>SecretId字段名称</p>
 * @method void setSecretIdName(string $SecretIdName) 设置<p>SecretId字段名称</p>
 * @method string getSecretKeyName() 获取<p>SecretKey字段名称</p>
 * @method void setSecretKeyName(string $SecretKeyName) 设置<p>SecretKey字段名称</p>
 * @method array getParamList() 获取<p>CAM Access Key 字段配置</p>
 * @method void setParamList(array $ParamList) 设置<p>CAM Access Key 字段配置</p>
 * @method boolean getSupportRoleAuth() 获取<p>是否支持CAM角色授权</p>
 * @method void setSupportRoleAuth(boolean $SupportRoleAuth) 设置<p>是否支持CAM角色授权</p>
 */
class CamAuthConfig extends AbstractModel
{
    /**
     * @var string <p>角色名称</p>
     */
    public $RoleName;

    /**
     * @var integer <p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 头鉴权 |<br>| 1 | 请求信息鉴权 |</p>
     */
    public $KeyLocation;

    /**
     * @var string <p>SecretId字段名称</p>
     */
    public $SecretIdName;

    /**
     * @var string <p>SecretKey字段名称</p>
     */
    public $SecretKeyName;

    /**
     * @var array <p>CAM Access Key 字段配置</p>
     */
    public $ParamList;

    /**
     * @var boolean <p>是否支持CAM角色授权</p>
     */
    public $SupportRoleAuth;

    /**
     * @param string $RoleName <p>角色名称</p>
     * @param integer $KeyLocation <p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 头鉴权 |<br>| 1 | 请求信息鉴权 |</p>
     * @param string $SecretIdName <p>SecretId字段名称</p>
     * @param string $SecretKeyName <p>SecretKey字段名称</p>
     * @param array $ParamList <p>CAM Access Key 字段配置</p>
     * @param boolean $SupportRoleAuth <p>是否支持CAM角色授权</p>
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("KeyLocation",$param) and $param["KeyLocation"] !== null) {
            $this->KeyLocation = $param["KeyLocation"];
        }

        if (array_key_exists("SecretIdName",$param) and $param["SecretIdName"] !== null) {
            $this->SecretIdName = $param["SecretIdName"];
        }

        if (array_key_exists("SecretKeyName",$param) and $param["SecretKeyName"] !== null) {
            $this->SecretKeyName = $param["SecretKeyName"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new AccessKeyParamConfig();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("SupportRoleAuth",$param) and $param["SupportRoleAuth"] !== null) {
            $this->SupportRoleAuth = $param["SupportRoleAuth"];
        }
    }
}
