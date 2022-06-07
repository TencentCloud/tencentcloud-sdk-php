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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicy返回参数结构体
 *
 * @method integer getAppId() 获取用户id
 * @method void setAppId(integer $AppId) 设置用户id
 * @method string getZoneId() 获取一级域名
 * @method void setZoneId(string $ZoneId) 设置一级域名
 * @method string getEntity() 获取二级域名
 * @method void setEntity(string $Entity) 设置二级域名
 * @method SecurityConfig getConfig() 获取安全配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(SecurityConfig $Config) 设置安全配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityPolicyResponse extends AbstractModel
{
    /**
     * @var integer 用户id
     */
    public $AppId;

    /**
     * @var string 一级域名
     */
    public $ZoneId;

    /**
     * @var string 二级域名
     */
    public $Entity;

    /**
     * @var SecurityConfig 安全配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppId 用户id
     * @param string $ZoneId 一级域名
     * @param string $Entity 二级域名
     * @param SecurityConfig $Config 安全配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new SecurityConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
