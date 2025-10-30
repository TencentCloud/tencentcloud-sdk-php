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
 * @method integer getStatusCode() 获取状态码，取值为 301、302、303、307、308 之一。
 * @method void setStatusCode(integer $StatusCode) 设置状态码，取值为 301、302、303、307、308 之一。
 * @method string getProtocol() 获取目标请求协议，取值有：
<li>http：目标请求协议 HTTP；</li>
<li>https：目标请求协议 HTTPS；</li>
<li>follow：跟随请求。</li>
 * @method void setProtocol(string $Protocol) 设置目标请求协议，取值有：
<li>http：目标请求协议 HTTP；</li>
<li>https：目标请求协议 HTTPS；</li>
<li>follow：跟随请求。</li>
 * @method HostName getHostName() 获取目标 HostName 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(HostName $HostName) 设置目标 HostName 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method URLPath getURLPath() 获取目标路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURLPath(URLPath $URLPath) 设置目标路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessURLRedirectQueryString getQueryString() 获取携带查询参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(AccessURLRedirectQueryString $QueryString) 设置携带查询参数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessURLRedirectParameters extends AbstractModel
{
    /**
     * @var integer 状态码，取值为 301、302、303、307、308 之一。
     */
    public $StatusCode;

    /**
     * @var string 目标请求协议，取值有：
<li>http：目标请求协议 HTTP；</li>
<li>https：目标请求协议 HTTPS；</li>
<li>follow：跟随请求。</li>
     */
    public $Protocol;

    /**
     * @var HostName 目标 HostName 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var URLPath 目标路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URLPath;

    /**
     * @var AccessURLRedirectQueryString 携带查询参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @param integer $StatusCode 状态码，取值为 301、302、303、307、308 之一。
     * @param string $Protocol 目标请求协议，取值有：
<li>http：目标请求协议 HTTP；</li>
<li>https：目标请求协议 HTTPS；</li>
<li>follow：跟随请求。</li>
     * @param HostName $HostName 目标 HostName 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param URLPath $URLPath 目标路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessURLRedirectQueryString $QueryString 携带查询参数。
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
