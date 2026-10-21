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
 * 访问 URL 重定向 配置参数。
 *
 * @method integer getStatusCode() 获取<p>状态码，取值为 301、302、303、307、308 之一。</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>状态码，取值为 301、302、303、307、308 之一。</p>
 * @method string getProtocol() 获取<p>目标请求协议。</p><p>枚举值：</p><ul><li>http： 目标请求协议为 HTTP。</li><li>https： 目标请求协议为 HTTPS。</li><li>follow： 跟随请求。</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>目标请求协议。</p><p>枚举值：</p><ul><li>http： 目标请求协议为 HTTP。</li><li>https： 目标请求协议为 HTTPS。</li><li>follow： 跟随请求。</li></ul>
 * @method HostName getHostName() 获取<p>目标 HostName。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(HostName $HostName) 设置<p>目标 HostName。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method URLPath getURLPath() 获取<p>目标路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURLPath(URLPath $URLPath) 设置<p>目标路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessURLRedirectQueryString getQueryString() 获取<p>携带查询参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(AccessURLRedirectQueryString $QueryString) 设置<p>携带查询参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessURLRedirectParameters extends AbstractModel
{
    /**
     * @var integer <p>状态码，取值为 301、302、303、307、308 之一。</p>
     */
    public $StatusCode;

    /**
     * @var string <p>目标请求协议。</p><p>枚举值：</p><ul><li>http： 目标请求协议为 HTTP。</li><li>https： 目标请求协议为 HTTPS。</li><li>follow： 跟随请求。</li></ul>
     */
    public $Protocol;

    /**
     * @var HostName <p>目标 HostName。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var URLPath <p>目标路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URLPath;

    /**
     * @var AccessURLRedirectQueryString <p>携带查询参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @param integer $StatusCode <p>状态码，取值为 301、302、303、307、308 之一。</p>
     * @param string $Protocol <p>目标请求协议。</p><p>枚举值：</p><ul><li>http： 目标请求协议为 HTTP。</li><li>https： 目标请求协议为 HTTPS。</li><li>follow： 跟随请求。</li></ul>
     * @param HostName $HostName <p>目标 HostName。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param URLPath $URLPath <p>目标路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessURLRedirectQueryString $QueryString <p>携带查询参数。</p>
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = new HostName();
            $this->HostName->deserialize($param["HostName"]);
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = new URLPath();
            $this->URLPath->deserialize($param["URLPath"]);
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new AccessURLRedirectQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
