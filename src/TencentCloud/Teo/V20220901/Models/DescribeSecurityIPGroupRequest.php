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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityIPGroup请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID ，用于指定查询的站点范围。
 * @method void setZoneId(string $ZoneId) 设置站点 ID ，用于指定查询的站点范围。
 * @method array getGroupIds() 获取指定安全 IP 组 ID。 <li>提供该参数时，仅查询指定 ID 的安全 IP 组配置；</li> <li>不传递参数时，返回站点下所有安全 IP 组信息。</li>
 * @method void setGroupIds(array $GroupIds) 设置指定安全 IP 组 ID。 <li>提供该参数时，仅查询指定 ID 的安全 IP 组配置；</li> <li>不传递参数时，返回站点下所有安全 IP 组信息。</li>
 */
class DescribeSecurityIPGroupRequest extends AbstractModel
{
    /**
     * @var string 站点 ID ，用于指定查询的站点范围。
     */
    public $ZoneId;

    /**
     * @var array 指定安全 IP 组 ID。 <li>提供该参数时，仅查询指定 ID 的安全 IP 组配置；</li> <li>不传递参数时，返回站点下所有安全 IP 组信息。</li>
     */
    public $GroupIds;

    /**
     * @param string $ZoneId 站点 ID ，用于指定查询的站点范围。
     * @param array $GroupIds 指定安全 IP 组 ID。 <li>提供该参数时，仅查询指定 ID 的安全 IP 组配置；</li> <li>不传递参数时，返回站点下所有安全 IP 组信息。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
