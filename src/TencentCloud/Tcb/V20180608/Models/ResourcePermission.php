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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源权限
 *
 * @method string getResourceType() 获取资源类型。
 * @method void setResourceType(string $ResourceType) 设置资源类型。
 * @method string getResource() 获取资源标识
 * @method void setResource(string $Resource) 设置资源标识
 * @method string getPermission() 获取权限级别。取值：READONLY、PRIVATE、ADMINWRITE、ADMINONLY、CUSTOM。
 * @method void setPermission(string $Permission) 设置权限级别。取值：READONLY、PRIVATE、ADMINWRITE、ADMINONLY、CUSTOM。
 * @method string getSecurityRule() 获取自定义安全规则配置，当 Permission 为 CUSTOM 时返回。
 * @method void setSecurityRule(string $SecurityRule) 设置自定义安全规则配置，当 Permission 为 CUSTOM 时返回。
 */
class ResourcePermission extends AbstractModel
{
    /**
     * @var string 资源类型。
     */
    public $ResourceType;

    /**
     * @var string 资源标识
     */
    public $Resource;

    /**
     * @var string 权限级别。取值：READONLY、PRIVATE、ADMINWRITE、ADMINONLY、CUSTOM。
     */
    public $Permission;

    /**
     * @var string 自定义安全规则配置，当 Permission 为 CUSTOM 时返回。
     */
    public $SecurityRule;

    /**
     * @param string $ResourceType 资源类型。
     * @param string $Resource 资源标识
     * @param string $Permission 权限级别。取值：READONLY、PRIVATE、ADMINWRITE、ADMINONLY、CUSTOM。
     * @param string $SecurityRule 自定义安全规则配置，当 Permission 为 CUSTOM 时返回。
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("SecurityRule",$param) and $param["SecurityRule"] !== null) {
            $this->SecurityRule = $param["SecurityRule"];
        }
    }
}
