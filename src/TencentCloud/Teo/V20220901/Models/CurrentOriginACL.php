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
 * 当前生效的回源 IP 网段。
 *
 * @method Addresses getEntireAddresses() 获取回源 IP 网段详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntireAddresses(Addresses $EntireAddresses) 设置回源 IP 网段详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveTime() 获取版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveTime(string $ActiveTime) 设置版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsPlaned() 获取本参数用于记录当前版本生效前是否完成「我已更新至最新回源 IP 网段」的确认。取值有：
<li>true：版本生效时，已完成更新至最新回源 IP 的确认；</li>
<li>false：版本生效时，仍未完成已更新至最新回源 IP 的确认，回源 IP 网段由后台强制更新至最新版本。</li>注意：本参数返回 false 时，请及时确认您的源站防火墙配置是否已更新至最新的回源 IP 网段，以避免出现回源失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPlaned(string $IsPlaned) 设置本参数用于记录当前版本生效前是否完成「我已更新至最新回源 IP 网段」的确认。取值有：
<li>true：版本生效时，已完成更新至最新回源 IP 的确认；</li>
<li>false：版本生效时，仍未完成已更新至最新回源 IP 的确认，回源 IP 网段由后台强制更新至最新版本。</li>注意：本参数返回 false 时，请及时确认您的源站防火墙配置是否已更新至最新的回源 IP 网段，以避免出现回源失败。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CurrentOriginACL extends AbstractModel
{
    /**
     * @var Addresses 回源 IP 网段详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntireAddresses;

    /**
     * @var string 版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveTime;

    /**
     * @var string 本参数用于记录当前版本生效前是否完成「我已更新至最新回源 IP 网段」的确认。取值有：
<li>true：版本生效时，已完成更新至最新回源 IP 的确认；</li>
<li>false：版本生效时，仍未完成已更新至最新回源 IP 的确认，回源 IP 网段由后台强制更新至最新版本。</li>注意：本参数返回 false 时，请及时确认您的源站防火墙配置是否已更新至最新的回源 IP 网段，以避免出现回源失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPlaned;

    /**
     * @param Addresses $EntireAddresses 回源 IP 网段详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveTime 版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsPlaned 本参数用于记录当前版本生效前是否完成「我已更新至最新回源 IP 网段」的确认。取值有：
<li>true：版本生效时，已完成更新至最新回源 IP 的确认；</li>
<li>false：版本生效时，仍未完成已更新至最新回源 IP 的确认，回源 IP 网段由后台强制更新至最新版本。</li>注意：本参数返回 false 时，请及时确认您的源站防火墙配置是否已更新至最新的回源 IP 网段，以避免出现回源失败。
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
        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("IsPlaned",$param) and $param["IsPlaned"] !== null) {
            $this->IsPlaned = $param["IsPlaned"];
        }
    }
}
