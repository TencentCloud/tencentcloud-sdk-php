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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGrafanaWhiteList请求参数结构体
 *
 * @method string getInstanceId() 获取Grafana 实例 ID，例如：grafana-abcdefgh
 * @method void setInstanceId(string $InstanceId) 设置Grafana 实例 ID，例如：grafana-abcdefgh
 * @method array getWhitelist() 获取白名单数组，输入白名单 IP 或 CIDR，如：127.0.0.1或127.0.0.1/24
如有多个 IP 可换行输入
 * @method void setWhitelist(array $Whitelist) 设置白名单数组，输入白名单 IP 或 CIDR，如：127.0.0.1或127.0.0.1/24
如有多个 IP 可换行输入
 */
class UpdateGrafanaWhiteListRequest extends AbstractModel
{
    /**
     * @var string Grafana 实例 ID，例如：grafana-abcdefgh
     */
    public $InstanceId;

    /**
     * @var array 白名单数组，输入白名单 IP 或 CIDR，如：127.0.0.1或127.0.0.1/24
如有多个 IP 可换行输入
     */
    public $Whitelist;

    /**
     * @param string $InstanceId Grafana 实例 ID，例如：grafana-abcdefgh
     * @param array $Whitelist 白名单数组，输入白名单 IP 或 CIDR，如：127.0.0.1或127.0.0.1/24
如有多个 IP 可换行输入
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = $param["Whitelist"];
        }
    }
}
