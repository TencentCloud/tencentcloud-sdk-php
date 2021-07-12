<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的授权关系信息。
 *
 * @method string getAppId() 获取应用唯一ID。
 * @method void setAppId(string $AppId) 设置应用唯一ID。
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getEntityName() 获取类型名称。
 * @method void setEntityName(string $EntityName) 设置类型名称。
 * @method string getEntityId() 获取类型唯一ID。
 * @method void setEntityId(string $EntityId) 设置类型唯一ID。
 * @method string getLastModifiedDate() 获取上次更新时间，符合 ISO8601 标准。
 * @method void setLastModifiedDate(string $LastModifiedDate) 设置上次更新时间，符合 ISO8601 标准。
 * @method string getAuthorizationId() 获取授权类型唯一ID。
 * @method void setAuthorizationId(string $AuthorizationId) 设置授权类型唯一ID。
 */
class AuthorizationInfo extends AbstractModel
{
    /**
     * @var string 应用唯一ID。
     */
    public $AppId;

    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 类型名称。
     */
    public $EntityName;

    /**
     * @var string 类型唯一ID。
     */
    public $EntityId;

    /**
     * @var string 上次更新时间，符合 ISO8601 标准。
     */
    public $LastModifiedDate;

    /**
     * @var string 授权类型唯一ID。
     */
    public $AuthorizationId;

    /**
     * @param string $AppId 应用唯一ID。
     * @param string $AppName 应用名称。
     * @param string $EntityName 类型名称。
     * @param string $EntityId 类型唯一ID。
     * @param string $LastModifiedDate 上次更新时间，符合 ISO8601 标准。
     * @param string $AuthorizationId 授权类型唯一ID。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("AuthorizationId",$param) and $param["AuthorizationId"] !== null) {
            $this->AuthorizationId = $param["AuthorizationId"];
        }
    }
}
