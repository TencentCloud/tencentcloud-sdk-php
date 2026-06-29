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
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method integer getKeyLocation() 获取密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 头鉴权 |
| 1 | 请求信息鉴权 |
 * @method void setKeyLocation(integer $KeyLocation) 设置密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 头鉴权 |
| 1 | 请求信息鉴权 |
 * @method string getSecretIdName() 获取SecretId字段名称
 * @method void setSecretIdName(string $SecretIdName) 设置SecretId字段名称
 * @method string getSecretKeyName() 获取SecretKey字段名称
 * @method void setSecretKeyName(string $SecretKeyName) 设置SecretKey字段名称
 */
class CamAuthConfig extends AbstractModel
{
    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var integer 密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 头鉴权 |
| 1 | 请求信息鉴权 |
     */
    public $KeyLocation;

    /**
     * @var string SecretId字段名称
     */
    public $SecretIdName;

    /**
     * @var string SecretKey字段名称
     */
    public $SecretKeyName;

    /**
     * @param string $RoleName 角色名称
     * @param integer $KeyLocation 密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 头鉴权 |
| 1 | 请求信息鉴权 |
     * @param string $SecretIdName SecretId字段名称
     * @param string $SecretKeyName SecretKey字段名称
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
    }
}
