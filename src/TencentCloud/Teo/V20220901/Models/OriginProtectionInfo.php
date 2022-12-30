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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站防护信息
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method array getHosts() 获取域名列表。
 * @method void setHosts(array $Hosts) 设置域名列表。
 * @method array getProxyIds() 获取代理ID列表。
 * @method void setProxyIds(array $ProxyIds) 设置代理ID列表。
 * @method IPWhitelist getCurrentIPWhitelist() 获取当前版本的IP白名单。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentIPWhitelist(IPWhitelist $CurrentIPWhitelist) 设置当前版本的IP白名单。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeedUpdate() 获取该站点是否需要更新源站白名单，取值有：
<li>true ：需要更新IP白名单 ；</li>
<li>false ：无需更新IP白名单。</li>
 * @method void setNeedUpdate(boolean $NeedUpdate) 设置该站点是否需要更新源站白名单，取值有：
<li>true ：需要更新IP白名单 ；</li>
<li>false ：无需更新IP白名单。</li>
 * @method string getStatus() 获取源站防护状态，取值有：
<li>online ：源站防护启用中 ；</li>
<li>offline ：源站防护已停用 ；</li>
<li>nonactivate ：源站防护未激活，仅在从未使用过源站防护功能的站点调用中返回。</li>
 * @method void setStatus(string $Status) 设置源站防护状态，取值有：
<li>online ：源站防护启用中 ；</li>
<li>offline ：源站防护已停用 ；</li>
<li>nonactivate ：源站防护未激活，仅在从未使用过源站防护功能的站点调用中返回。</li>
 * @method boolean getPlanSupport() 获取站点套餐是否支持源站防护，取值有：
<li>true ：支持 ；</li>
<li>false ：不支持。</li>
 * @method void setPlanSupport(boolean $PlanSupport) 设置站点套餐是否支持源站防护，取值有：
<li>true ：支持 ；</li>
<li>false ：不支持。</li>
 * @method DiffIPWhitelist getDiffIPWhitelist() 获取最新IP白名单与当前IP白名单的对比。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiffIPWhitelist(DiffIPWhitelist $DiffIPWhitelist) 设置最新IP白名单与当前IP白名单的对比。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginProtectionInfo extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var array 域名列表。
     */
    public $Hosts;

    /**
     * @var array 代理ID列表。
     */
    public $ProxyIds;

    /**
     * @var IPWhitelist 当前版本的IP白名单。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentIPWhitelist;

    /**
     * @var boolean 该站点是否需要更新源站白名单，取值有：
<li>true ：需要更新IP白名单 ；</li>
<li>false ：无需更新IP白名单。</li>
     */
    public $NeedUpdate;

    /**
     * @var string 源站防护状态，取值有：
<li>online ：源站防护启用中 ；</li>
<li>offline ：源站防护已停用 ；</li>
<li>nonactivate ：源站防护未激活，仅在从未使用过源站防护功能的站点调用中返回。</li>
     */
    public $Status;

    /**
     * @var boolean 站点套餐是否支持源站防护，取值有：
<li>true ：支持 ；</li>
<li>false ：不支持。</li>
     */
    public $PlanSupport;

    /**
     * @var DiffIPWhitelist 最新IP白名单与当前IP白名单的对比。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiffIPWhitelist;

    /**
     * @param string $ZoneId 站点ID。
     * @param array $Hosts 域名列表。
     * @param array $ProxyIds 代理ID列表。
     * @param IPWhitelist $CurrentIPWhitelist 当前版本的IP白名单。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NeedUpdate 该站点是否需要更新源站白名单，取值有：
<li>true ：需要更新IP白名单 ；</li>
<li>false ：无需更新IP白名单。</li>
     * @param string $Status 源站防护状态，取值有：
<li>online ：源站防护启用中 ；</li>
<li>offline ：源站防护已停用 ；</li>
<li>nonactivate ：源站防护未激活，仅在从未使用过源站防护功能的站点调用中返回。</li>
     * @param boolean $PlanSupport 站点套餐是否支持源站防护，取值有：
<li>true ：支持 ；</li>
<li>false ：不支持。</li>
     * @param DiffIPWhitelist $DiffIPWhitelist 最新IP白名单与当前IP白名单的对比。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("CurrentIPWhitelist",$param) and $param["CurrentIPWhitelist"] !== null) {
            $this->CurrentIPWhitelist = new IPWhitelist();
            $this->CurrentIPWhitelist->deserialize($param["CurrentIPWhitelist"]);
        }

        if (array_key_exists("NeedUpdate",$param) and $param["NeedUpdate"] !== null) {
            $this->NeedUpdate = $param["NeedUpdate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PlanSupport",$param) and $param["PlanSupport"] !== null) {
            $this->PlanSupport = $param["PlanSupport"];
        }

        if (array_key_exists("DiffIPWhitelist",$param) and $param["DiffIPWhitelist"] !== null) {
            $this->DiffIPWhitelist = new DiffIPWhitelist();
            $this->DiffIPWhitelist->deserialize($param["DiffIPWhitelist"]);
        }
    }
}
