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
 * IP SSL相关信息
 *
 * @method string getAssociatedDomain() 获取IP SSL关联的域名。如果Status值为 unbound 时，该字段为空值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedDomain(string $AssociatedDomain) 设置IP SSL关联的域名。如果Status值为 unbound 时，该字段为空值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取关联状态， 取值如下：
<li>bound：IP SSL配置已绑定</li>
<li>binding：IP SSL配置绑定中</li>
<li>unbinding：IP SSL配置解绑中</li>
<li>unbound：IP SSL配置未绑定</li>
 * @method void setStatus(string $Status) 设置关联状态， 取值如下：
<li>bound：IP SSL配置已绑定</li>
<li>binding：IP SSL配置绑定中</li>
<li>unbinding：IP SSL配置解绑中</li>
<li>unbound：IP SSL配置未绑定</li>
 */
class IPSSLConfig extends AbstractModel
{
    /**
     * @var string IP SSL关联的域名。如果Status值为 unbound 时，该字段为空值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedDomain;

    /**
     * @var string 关联状态， 取值如下：
<li>bound：IP SSL配置已绑定</li>
<li>binding：IP SSL配置绑定中</li>
<li>unbinding：IP SSL配置解绑中</li>
<li>unbound：IP SSL配置未绑定</li>
     */
    public $Status;

    /**
     * @param string $AssociatedDomain IP SSL关联的域名。如果Status值为 unbound 时，该字段为空值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 关联状态， 取值如下：
<li>bound：IP SSL配置已绑定</li>
<li>binding：IP SSL配置绑定中</li>
<li>unbinding：IP SSL配置解绑中</li>
<li>unbound：IP SSL配置未绑定</li>
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
        if (array_key_exists("AssociatedDomain",$param) and $param["AssociatedDomain"] !== null) {
            $this->AssociatedDomain = $param["AssociatedDomain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
