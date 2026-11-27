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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProtectionResource请求参数结构体
 *
 * @method string getProtectionId() 获取<p>防护实例 ID。</p>
 * @method void setProtectionId(string $ProtectionId) 设置<p>防护实例 ID。</p>
 * @method string getMode() 获取<p>操作类型。</p><p>枚举值：</p><ul><li>APPEND： 向防护实例中添加新的防护资源；</li><li>UPDATE： 替换防护实例中的全部防护资源；</li><li>REMOVE： 从防护实例中移除指定的防护资源。</li></ul><p>默认值：APPEND</p>
 * @method void setMode(string $Mode) 设置<p>操作类型。</p><p>枚举值：</p><ul><li>APPEND： 向防护实例中添加新的防护资源；</li><li>UPDATE： 替换防护实例中的全部防护资源；</li><li>REMOVE： 从防护实例中移除指定的防护资源。</li></ul><p>默认值：APPEND</p>
 * @method array getResources() 获取<p>防护资源，须采用资源六段式格式。具体格式如下：<ul><li>云服务器：<code>qcs::cvm:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>轻量应用服务器：<code>qcs::lighthouse:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>负载均衡：<code>qcs::clb:${region}:uin/${uin}:clb/${LoadBalancerId}</code></li><li>弹性公网 IP：<code>qcs::cvm:${region}:uin/${uin}:eip/${AddressId}</code></li><li>Web 应用防火墙：<code>qcs::waf:${region}:uin/${uin}:waf/${InstanceId}</code></li><li>EdgeOne 域名：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/Domain/${Domain}</code></li><li>EdgeOne 四层代理：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/L4Proxy/${InstanceId}</code></li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/product/598/67350">支持 CAM 的业务接口</a></p>
 * @method void setResources(array $Resources) 设置<p>防护资源，须采用资源六段式格式。具体格式如下：<ul><li>云服务器：<code>qcs::cvm:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>轻量应用服务器：<code>qcs::lighthouse:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>负载均衡：<code>qcs::clb:${region}:uin/${uin}:clb/${LoadBalancerId}</code></li><li>弹性公网 IP：<code>qcs::cvm:${region}:uin/${uin}:eip/${AddressId}</code></li><li>Web 应用防火墙：<code>qcs::waf:${region}:uin/${uin}:waf/${InstanceId}</code></li><li>EdgeOne 域名：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/Domain/${Domain}</code></li><li>EdgeOne 四层代理：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/L4Proxy/${InstanceId}</code></li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/product/598/67350">支持 CAM 的业务接口</a></p>
 * @method string getConflictStrategy() 获取<p>冲突策略。</p><p>枚举值：</p><ul><li>REJECT： 若任一防护资源已存在于其他防护实例，则拒绝本次操作。</li><li>FORCE： 若任一防护资源已存在于其他防护实例，则强制将其添加至当前实例。</li></ul><p>默认值：REJECT</p>
 * @method void setConflictStrategy(string $ConflictStrategy) 设置<p>冲突策略。</p><p>枚举值：</p><ul><li>REJECT： 若任一防护资源已存在于其他防护实例，则拒绝本次操作。</li><li>FORCE： 若任一防护资源已存在于其他防护实例，则强制将其添加至当前实例。</li></ul><p>默认值：REJECT</p>
 */
class ModifyProtectionResourceRequest extends AbstractModel
{
    /**
     * @var string <p>防护实例 ID。</p>
     */
    public $ProtectionId;

    /**
     * @var string <p>操作类型。</p><p>枚举值：</p><ul><li>APPEND： 向防护实例中添加新的防护资源；</li><li>UPDATE： 替换防护实例中的全部防护资源；</li><li>REMOVE： 从防护实例中移除指定的防护资源。</li></ul><p>默认值：APPEND</p>
     */
    public $Mode;

    /**
     * @var array <p>防护资源，须采用资源六段式格式。具体格式如下：<ul><li>云服务器：<code>qcs::cvm:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>轻量应用服务器：<code>qcs::lighthouse:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>负载均衡：<code>qcs::clb:${region}:uin/${uin}:clb/${LoadBalancerId}</code></li><li>弹性公网 IP：<code>qcs::cvm:${region}:uin/${uin}:eip/${AddressId}</code></li><li>Web 应用防火墙：<code>qcs::waf:${region}:uin/${uin}:waf/${InstanceId}</code></li><li>EdgeOne 域名：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/Domain/${Domain}</code></li><li>EdgeOne 四层代理：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/L4Proxy/${InstanceId}</code></li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/product/598/67350">支持 CAM 的业务接口</a></p>
     */
    public $Resources;

    /**
     * @var string <p>冲突策略。</p><p>枚举值：</p><ul><li>REJECT： 若任一防护资源已存在于其他防护实例，则拒绝本次操作。</li><li>FORCE： 若任一防护资源已存在于其他防护实例，则强制将其添加至当前实例。</li></ul><p>默认值：REJECT</p>
     */
    public $ConflictStrategy;

    /**
     * @param string $ProtectionId <p>防护实例 ID。</p>
     * @param string $Mode <p>操作类型。</p><p>枚举值：</p><ul><li>APPEND： 向防护实例中添加新的防护资源；</li><li>UPDATE： 替换防护实例中的全部防护资源；</li><li>REMOVE： 从防护实例中移除指定的防护资源。</li></ul><p>默认值：APPEND</p>
     * @param array $Resources <p>防护资源，须采用资源六段式格式。具体格式如下：<ul><li>云服务器：<code>qcs::cvm:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>轻量应用服务器：<code>qcs::lighthouse:${region}:uin/${uin}:instance/${InstanceId}</code></li><li>负载均衡：<code>qcs::clb:${region}:uin/${uin}:clb/${LoadBalancerId}</code></li><li>弹性公网 IP：<code>qcs::cvm:${region}:uin/${uin}:eip/${AddressId}</code></li><li>Web 应用防火墙：<code>qcs::waf:${region}:uin/${uin}:waf/${InstanceId}</code></li><li>EdgeOne 域名：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/Domain/${Domain}</code></li><li>EdgeOne 四层代理：<code>qcs::teo::uin/${uin}:zone/${ZoneId}/L4Proxy/${InstanceId}</code></li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/product/598/67350">支持 CAM 的业务接口</a></p>
     * @param string $ConflictStrategy <p>冲突策略。</p><p>枚举值：</p><ul><li>REJECT： 若任一防护资源已存在于其他防护实例，则拒绝本次操作。</li><li>FORCE： 若任一防护资源已存在于其他防护实例，则强制将其添加至当前实例。</li></ul><p>默认值：REJECT</p>
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
        if (array_key_exists("ProtectionId",$param) and $param["ProtectionId"] !== null) {
            $this->ProtectionId = $param["ProtectionId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("ConflictStrategy",$param) and $param["ConflictStrategy"] !== null) {
            $this->ConflictStrategy = $param["ConflictStrategy"];
        }
    }
}
