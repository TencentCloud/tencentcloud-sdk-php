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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurgeHTTPServiceCache请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getDomain() 获取<p>HTTPService域名</p>
 * @method void setDomain(string $Domain) 设置<p>HTTPService域名</p>
 * @method array getTargets() 获取<p>Targets</p><p>参数格式：Targets 刷新目标列表，语义随 PurgeType 变化</p><p>入参限制：单次请求最多传 20 个 Target，单条 URL/prefix/host 最长 2048</p>
 * @method void setTargets(array $Targets) 设置<p>Targets</p><p>参数格式：Targets 刷新目标列表，语义随 PurgeType 变化</p><p>入参限制：单次请求最多传 20 个 Target，单条 URL/prefix/host 最长 2048</p>
 * @method string getCacheType() 获取<p>需要刷新的缓存类型：CDN 或 EO</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
 * @method void setCacheType(string $CacheType) 设置<p>需要刷新的缓存类型：CDN 或 EO</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
 * @method string getPurgeType() 获取<p>PurgeType 刷新方式（purge 粒度），TCBCDN仅支持purge_url</p><p>枚举值：</p><ul><li>PURGE_URL： URL 列表（需含协议，如 https://a.com/b.jpg）</li><li>PURGE_PREFIX： URL 前缀列表（需含协议，如 https://a.com/dir/），仅EO支持</li><li>PURGE_HOST： Hostname 列表（可为 host 或 http(s)://host），仅EO支持</li></ul><p>默认值：PURGE_URL</p>
 * @method void setPurgeType(string $PurgeType) 设置<p>PurgeType 刷新方式（purge 粒度），TCBCDN仅支持purge_url</p><p>枚举值：</p><ul><li>PURGE_URL： URL 列表（需含协议，如 https://a.com/b.jpg）</li><li>PURGE_PREFIX： URL 前缀列表（需含协议，如 https://a.com/dir/），仅EO支持</li><li>PURGE_HOST： Hostname 列表（可为 host 或 http(s)://host），仅EO支持</li></ul><p>默认值：PURGE_URL</p>
 */
class PurgeHTTPServiceCacheRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>HTTPService域名</p>
     */
    public $Domain;

    /**
     * @var array <p>Targets</p><p>参数格式：Targets 刷新目标列表，语义随 PurgeType 变化</p><p>入参限制：单次请求最多传 20 个 Target，单条 URL/prefix/host 最长 2048</p>
     */
    public $Targets;

    /**
     * @var string <p>需要刷新的缓存类型：CDN 或 EO</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
     */
    public $CacheType;

    /**
     * @var string <p>PurgeType 刷新方式（purge 粒度），TCBCDN仅支持purge_url</p><p>枚举值：</p><ul><li>PURGE_URL： URL 列表（需含协议，如 https://a.com/b.jpg）</li><li>PURGE_PREFIX： URL 前缀列表（需含协议，如 https://a.com/dir/），仅EO支持</li><li>PURGE_HOST： Hostname 列表（可为 host 或 http(s)://host），仅EO支持</li></ul><p>默认值：PURGE_URL</p>
     */
    public $PurgeType;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $Domain <p>HTTPService域名</p>
     * @param array $Targets <p>Targets</p><p>参数格式：Targets 刷新目标列表，语义随 PurgeType 变化</p><p>入参限制：单次请求最多传 20 个 Target，单条 URL/prefix/host 最长 2048</p>
     * @param string $CacheType <p>需要刷新的缓存类型：CDN 或 EO</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
     * @param string $PurgeType <p>PurgeType 刷新方式（purge 粒度），TCBCDN仅支持purge_url</p><p>枚举值：</p><ul><li>PURGE_URL： URL 列表（需含协议，如 https://a.com/b.jpg）</li><li>PURGE_PREFIX： URL 前缀列表（需含协议，如 https://a.com/dir/），仅EO支持</li><li>PURGE_HOST： Hostname 列表（可为 host 或 http(s)://host），仅EO支持</li></ul><p>默认值：PURGE_URL</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }

        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }
    }
}
