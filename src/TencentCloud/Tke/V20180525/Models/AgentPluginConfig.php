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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AgentPlugin 安装配置，包含域名、Chart 版本和外部 PostgreSQL 连接信息
 *
 * @method string getChartVersion() 获取Helm Chart 版本，一般无需指定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChartVersion(string $ChartVersion) 设置Helm Chart 版本，一般无需指定
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取外部 PostgreSQL 内网地址；配置后跳过内置 PostgreSQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置外部 PostgreSQL 内网地址；配置后跳过内置 PostgreSQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取外部 PostgreSQL 密码，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置外部 PostgreSQL 密码，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取外部 PostgreSQL 端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置外部 PostgreSQL 端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSLMode() 获取SSL 模式，取值：disable / require / verify-full
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSLMode(string $SSLMode) 设置SSL 模式，取值：disable / require / verify-full
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceDomain() 获取Agent 实例访问域名，不填则不创建域名路由
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDomain(string $ServiceDomain) 设置Agent 实例访问域名，不填则不创建域名路由
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取外部 PostgreSQL 用户名，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置外部 PostgreSQL 用户名，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentPluginConfig extends AbstractModel
{
    /**
     * @var string Helm Chart 版本，一般无需指定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChartVersion;

    /**
     * @var string 外部 PostgreSQL 内网地址；配置后跳过内置 PostgreSQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string 外部 PostgreSQL 密码，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var integer 外部 PostgreSQL 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string SSL 模式，取值：disable / require / verify-full
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSLMode;

    /**
     * @var string Agent 实例访问域名，不填则不创建域名路由
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDomain;

    /**
     * @var string 外部 PostgreSQL 用户名，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @param string $ChartVersion Helm Chart 版本，一般无需指定
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host 外部 PostgreSQL 内网地址；配置后跳过内置 PostgreSQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 外部 PostgreSQL 密码，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 外部 PostgreSQL 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSLMode SSL 模式，取值：disable / require / verify-full
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceDomain Agent 实例访问域名，不填则不创建域名路由
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 外部 PostgreSQL 用户名，配置 Host 时必填
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ChartVersion",$param) and $param["ChartVersion"] !== null) {
            $this->ChartVersion = $param["ChartVersion"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("ServiceDomain",$param) and $param["ServiceDomain"] !== null) {
            $this->ServiceDomain = $param["ServiceDomain"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
