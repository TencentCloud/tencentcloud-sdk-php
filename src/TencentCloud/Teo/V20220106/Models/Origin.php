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
 * 源站配置。
 *
 * @method array getOrigins() 获取主源站列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigins(array $Origins) 设置主源站列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupOrigins() 获取备源站列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupOrigins(array $BackupOrigins) 设置备源站列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginPullProtocol() 获取回源协议配置，取值有：
<li>http：强制 http 回源；</li>
<li>follow：协议跟随回源；</li>
<li>https：强制 https 回源，https 回源时仅支持源站 443 端口。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullProtocol(string $OriginPullProtocol) 设置回源协议配置，取值有：
<li>http：强制 http 回源；</li>
<li>follow：协议跟随回源；</li>
<li>https：强制 https 回源，https 回源时仅支持源站 443 端口。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosPrivateAccess() 获取OriginType 为对象存储（COS）时，可以指定是否允许访问私有 bucket。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPrivateAccess(string $CosPrivateAccess) 设置OriginType 为对象存储（COS）时，可以指定是否允许访问私有 bucket。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Origin extends AbstractModel
{
    /**
     * @var array 主源站列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Origins;

    /**
     * @var array 备源站列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupOrigins;

    /**
     * @var string 回源协议配置，取值有：
<li>http：强制 http 回源；</li>
<li>follow：协议跟随回源；</li>
<li>https：强制 https 回源，https 回源时仅支持源站 443 端口。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullProtocol;

    /**
     * @var string OriginType 为对象存储（COS）时，可以指定是否允许访问私有 bucket。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPrivateAccess;

    /**
     * @param array $Origins 主源站列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupOrigins 备源站列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginPullProtocol 回源协议配置，取值有：
<li>http：强制 http 回源；</li>
<li>follow：协议跟随回源；</li>
<li>https：强制 https 回源，https 回源时仅支持源站 443 端口。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosPrivateAccess OriginType 为对象存储（COS）时，可以指定是否允许访问私有 bucket。
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
        if (array_key_exists("Origins",$param) and $param["Origins"] !== null) {
            $this->Origins = $param["Origins"];
        }

        if (array_key_exists("BackupOrigins",$param) and $param["BackupOrigins"] !== null) {
            $this->BackupOrigins = $param["BackupOrigins"];
        }

        if (array_key_exists("OriginPullProtocol",$param) and $param["OriginPullProtocol"] !== null) {
            $this->OriginPullProtocol = $param["OriginPullProtocol"];
        }

        if (array_key_exists("CosPrivateAccess",$param) and $param["CosPrivateAccess"] !== null) {
            $this->CosPrivateAccess = $param["CosPrivateAccess"];
        }
    }
}
