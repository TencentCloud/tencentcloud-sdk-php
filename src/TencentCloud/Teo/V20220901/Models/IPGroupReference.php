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
 * 引用 IP 组的安全模块
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getEntityType() 获取<p>实体类型。</p><p>枚举值：</p><ul><li>WebSec.ZonePolicy： 站点级防护策略</li><li>WebSec.HostPolicy： 域名级防护策略</li><li>WebSec.Template： 策略模板</li><li>DDoS.L4Proxy： 四层代理 DDoS 防护</li><li>DDoS.L3Transit： 三层代播 DDoS 防护</li></ul>
 * @method void setEntityType(string $EntityType) 设置<p>实体类型。</p><p>枚举值：</p><ul><li>WebSec.ZonePolicy： 站点级防护策略</li><li>WebSec.HostPolicy： 域名级防护策略</li><li>WebSec.Template： 策略模板</li><li>DDoS.L4Proxy： 四层代理 DDoS 防护</li><li>DDoS.L3Transit： 三层代播 DDoS 防护</li></ul>
 * @method string getEntityId() 获取<p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：站点 ID；</li><li>WebSec.HostPolicy：域名；</li><li>WebSec.Template：模板 ID；</li><li>DDoS.L4Proxy：实例 ID；</li><li>DDoS.L3Transit：实例 ID。</li></ul>
 * @method void setEntityId(string $EntityId) 设置<p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：站点 ID；</li><li>WebSec.HostPolicy：域名；</li><li>WebSec.Template：模板 ID；</li><li>DDoS.L4Proxy：实例 ID；</li><li>DDoS.L3Transit：实例 ID。</li></ul>
 * @method string getEntityName() 获取<p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：空；</li><li>WebSec.HostPolicy：空；</li><li>WebSec.Template：模板名称；</li><li>DDoS.L4Proxy：空；</li><li>DDoS.L3Transit：空。</li></ul>
 * @method void setEntityName(string $EntityName) 设置<p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：空；</li><li>WebSec.HostPolicy：空；</li><li>WebSec.Template：模板名称；</li><li>DDoS.L4Proxy：空；</li><li>DDoS.L3Transit：空。</li></ul>
 * @method string getSubEntityType() 获取<p>子实体类型。</p><p>枚举值：</p><ul><li>WebSec.ExceptionRule： 防护例外规则</li><li>WebSec.BasicAccessRule： 基础访问管控</li><li>WebSec.PreciseMatchRule： 精确匹配规则</li><li>WebSec.RateLimitRule： 精准速率限制</li><li>WebSec.BotCustomRule： 高级 Bot 管理 - 自定义规则</li><li>DDoS.L4Proxy.IpAccessControl： 四层代理 DDoS 防护 - IP 黑白名单</li><li>DDoS.L3Transit.IpAccessControl： 三层代播 DDoS 防护 - IP 黑白名单</li></ul>
 * @method void setSubEntityType(string $SubEntityType) 设置<p>子实体类型。</p><p>枚举值：</p><ul><li>WebSec.ExceptionRule： 防护例外规则</li><li>WebSec.BasicAccessRule： 基础访问管控</li><li>WebSec.PreciseMatchRule： 精确匹配规则</li><li>WebSec.RateLimitRule： 精准速率限制</li><li>WebSec.BotCustomRule： 高级 Bot 管理 - 自定义规则</li><li>DDoS.L4Proxy.IpAccessControl： 四层代理 DDoS 防护 - IP 黑白名单</li><li>DDoS.L3Transit.IpAccessControl： 三层代播 DDoS 防护 - IP 黑白名单</li></ul>
 * @method string getSubEntityId() 获取<p>子实体标识，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则 ID；</li><li>WebSec.BasicAccessRule：规则 ID；</li><li>WebSec.PreciseMatchRule：规则 ID；</li><li>WebSec.RateLimitRule：规则 ID；</li><li>WebSec.BotCustomRule：规则 ID；</li><li>DDoS.L4Proxy.IpAccessControl：空；</li><li>DDoS.L3Transit.IpAccessControl：空。</li></ul><p>EntityType 与 SubEntityType 为对应关系，不同的 EntityType 支持不同的 SubEntityType。<br>WebSec.ZonePolicy，WebSec.HostPolicy 和 WebSec.Template 支持如下 SubEntityType：</p><ul><li>WebSec.ExceptionRule；</li><li>WebSec.BasicAccessRule；</li><li>WebSec.PreciseMatchRule；</li><li>WebSec.RateLimitRule；</li><li>WebSec.BotCustomRule。</li></ul>DDoS.L4Proxy 支持如下 SubEntityType：<ul><li>DDoS.L4Proxy.IpAccessControl；</li></ul>DDoS.L3Transit 支持如下 SubEntityType：<ul><li>DDoS.L3Transit.IpAccessControl。</li></ul>
 * @method void setSubEntityId(string $SubEntityId) 设置<p>子实体标识，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则 ID；</li><li>WebSec.BasicAccessRule：规则 ID；</li><li>WebSec.PreciseMatchRule：规则 ID；</li><li>WebSec.RateLimitRule：规则 ID；</li><li>WebSec.BotCustomRule：规则 ID；</li><li>DDoS.L4Proxy.IpAccessControl：空；</li><li>DDoS.L3Transit.IpAccessControl：空。</li></ul><p>EntityType 与 SubEntityType 为对应关系，不同的 EntityType 支持不同的 SubEntityType。<br>WebSec.ZonePolicy，WebSec.HostPolicy 和 WebSec.Template 支持如下 SubEntityType：</p><ul><li>WebSec.ExceptionRule；</li><li>WebSec.BasicAccessRule；</li><li>WebSec.PreciseMatchRule；</li><li>WebSec.RateLimitRule；</li><li>WebSec.BotCustomRule。</li></ul>DDoS.L4Proxy 支持如下 SubEntityType：<ul><li>DDoS.L4Proxy.IpAccessControl；</li></ul>DDoS.L3Transit 支持如下 SubEntityType：<ul><li>DDoS.L3Transit.IpAccessControl。</li></ul>
 * @method string getSubEntityName() 获取<p>子实体名称，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则名称；</li><li>WebSec.BasicAccessRule：规则名称；</li><li>WebSec.PreciseMatchRule：规则名称；</li><li>WebSec.RateLimitRule：规则名称；</li><li>WebSec.BotCustomRule：规则名称；</li><li>DDoS.L4Proxy.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单；</li><li>DDoS.L3Transit.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单。</li></ul>
 * @method void setSubEntityName(string $SubEntityName) 设置<p>子实体名称，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则名称；</li><li>WebSec.BasicAccessRule：规则名称；</li><li>WebSec.PreciseMatchRule：规则名称；</li><li>WebSec.RateLimitRule：规则名称；</li><li>WebSec.BotCustomRule：规则名称；</li><li>DDoS.L4Proxy.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单；</li><li>DDoS.L3Transit.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单。</li></ul>
 */
class IPGroupReference extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>实体类型。</p><p>枚举值：</p><ul><li>WebSec.ZonePolicy： 站点级防护策略</li><li>WebSec.HostPolicy： 域名级防护策略</li><li>WebSec.Template： 策略模板</li><li>DDoS.L4Proxy： 四层代理 DDoS 防护</li><li>DDoS.L3Transit： 三层代播 DDoS 防护</li></ul>
     */
    public $EntityType;

    /**
     * @var string <p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：站点 ID；</li><li>WebSec.HostPolicy：域名；</li><li>WebSec.Template：模板 ID；</li><li>DDoS.L4Proxy：实例 ID；</li><li>DDoS.L3Transit：实例 ID。</li></ul>
     */
    public $EntityId;

    /**
     * @var string <p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：空；</li><li>WebSec.HostPolicy：空；</li><li>WebSec.Template：模板名称；</li><li>DDoS.L4Proxy：空；</li><li>DDoS.L3Transit：空。</li></ul>
     */
    public $EntityName;

    /**
     * @var string <p>子实体类型。</p><p>枚举值：</p><ul><li>WebSec.ExceptionRule： 防护例外规则</li><li>WebSec.BasicAccessRule： 基础访问管控</li><li>WebSec.PreciseMatchRule： 精确匹配规则</li><li>WebSec.RateLimitRule： 精准速率限制</li><li>WebSec.BotCustomRule： 高级 Bot 管理 - 自定义规则</li><li>DDoS.L4Proxy.IpAccessControl： 四层代理 DDoS 防护 - IP 黑白名单</li><li>DDoS.L3Transit.IpAccessControl： 三层代播 DDoS 防护 - IP 黑白名单</li></ul>
     */
    public $SubEntityType;

    /**
     * @var string <p>子实体标识，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则 ID；</li><li>WebSec.BasicAccessRule：规则 ID；</li><li>WebSec.PreciseMatchRule：规则 ID；</li><li>WebSec.RateLimitRule：规则 ID；</li><li>WebSec.BotCustomRule：规则 ID；</li><li>DDoS.L4Proxy.IpAccessControl：空；</li><li>DDoS.L3Transit.IpAccessControl：空。</li></ul><p>EntityType 与 SubEntityType 为对应关系，不同的 EntityType 支持不同的 SubEntityType。<br>WebSec.ZonePolicy，WebSec.HostPolicy 和 WebSec.Template 支持如下 SubEntityType：</p><ul><li>WebSec.ExceptionRule；</li><li>WebSec.BasicAccessRule；</li><li>WebSec.PreciseMatchRule；</li><li>WebSec.RateLimitRule；</li><li>WebSec.BotCustomRule。</li></ul>DDoS.L4Proxy 支持如下 SubEntityType：<ul><li>DDoS.L4Proxy.IpAccessControl；</li></ul>DDoS.L3Transit 支持如下 SubEntityType：<ul><li>DDoS.L3Transit.IpAccessControl。</li></ul>
     */
    public $SubEntityId;

    /**
     * @var string <p>子实体名称，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则名称；</li><li>WebSec.BasicAccessRule：规则名称；</li><li>WebSec.PreciseMatchRule：规则名称；</li><li>WebSec.RateLimitRule：规则名称；</li><li>WebSec.BotCustomRule：规则名称；</li><li>DDoS.L4Proxy.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单；</li><li>DDoS.L3Transit.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单。</li></ul>
     */
    public $SubEntityName;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $EntityType <p>实体类型。</p><p>枚举值：</p><ul><li>WebSec.ZonePolicy： 站点级防护策略</li><li>WebSec.HostPolicy： 域名级防护策略</li><li>WebSec.Template： 策略模板</li><li>DDoS.L4Proxy： 四层代理 DDoS 防护</li><li>DDoS.L3Transit： 三层代播 DDoS 防护</li></ul>
     * @param string $EntityId <p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：站点 ID；</li><li>WebSec.HostPolicy：域名；</li><li>WebSec.Template：模板 ID；</li><li>DDoS.L4Proxy：实例 ID；</li><li>DDoS.L3Transit：实例 ID。</li></ul>
     * @param string $EntityName <p>实体标识，根据 EntityType 不同代表不同的含义：</p><ul><li>WebSec.ZonePolicy：空；</li><li>WebSec.HostPolicy：空；</li><li>WebSec.Template：模板名称；</li><li>DDoS.L4Proxy：空；</li><li>DDoS.L3Transit：空。</li></ul>
     * @param string $SubEntityType <p>子实体类型。</p><p>枚举值：</p><ul><li>WebSec.ExceptionRule： 防护例外规则</li><li>WebSec.BasicAccessRule： 基础访问管控</li><li>WebSec.PreciseMatchRule： 精确匹配规则</li><li>WebSec.RateLimitRule： 精准速率限制</li><li>WebSec.BotCustomRule： 高级 Bot 管理 - 自定义规则</li><li>DDoS.L4Proxy.IpAccessControl： 四层代理 DDoS 防护 - IP 黑白名单</li><li>DDoS.L3Transit.IpAccessControl： 三层代播 DDoS 防护 - IP 黑白名单</li></ul>
     * @param string $SubEntityId <p>子实体标识，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则 ID；</li><li>WebSec.BasicAccessRule：规则 ID；</li><li>WebSec.PreciseMatchRule：规则 ID；</li><li>WebSec.RateLimitRule：规则 ID；</li><li>WebSec.BotCustomRule：规则 ID；</li><li>DDoS.L4Proxy.IpAccessControl：空；</li><li>DDoS.L3Transit.IpAccessControl：空。</li></ul><p>EntityType 与 SubEntityType 为对应关系，不同的 EntityType 支持不同的 SubEntityType。<br>WebSec.ZonePolicy，WebSec.HostPolicy 和 WebSec.Template 支持如下 SubEntityType：</p><ul><li>WebSec.ExceptionRule；</li><li>WebSec.BasicAccessRule；</li><li>WebSec.PreciseMatchRule；</li><li>WebSec.RateLimitRule；</li><li>WebSec.BotCustomRule。</li></ul>DDoS.L4Proxy 支持如下 SubEntityType：<ul><li>DDoS.L4Proxy.IpAccessControl；</li></ul>DDoS.L3Transit 支持如下 SubEntityType：<ul><li>DDoS.L3Transit.IpAccessControl。</li></ul>
     * @param string $SubEntityName <p>子实体名称，根据 SubEntityType 不同代表不同的含义：</p><ul><li>WebSec.ExceptionRule：规则名称；</li><li>WebSec.BasicAccessRule：规则名称；</li><li>WebSec.PreciseMatchRule：规则名称；</li><li>WebSec.RateLimitRule：规则名称；</li><li>WebSec.BotCustomRule：规则名称；</li><li>DDoS.L4Proxy.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单；</li><li>DDoS.L3Transit.IpAccessControl：规则名称，block 表示黑名单，allow 表示白名单。</li></ul>
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

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("SubEntityType",$param) and $param["SubEntityType"] !== null) {
            $this->SubEntityType = $param["SubEntityType"];
        }

        if (array_key_exists("SubEntityId",$param) and $param["SubEntityId"] !== null) {
            $this->SubEntityId = $param["SubEntityId"];
        }

        if (array_key_exists("SubEntityName",$param) and $param["SubEntityName"] !== null) {
            $this->SubEntityName = $param["SubEntityName"];
        }
    }
}
