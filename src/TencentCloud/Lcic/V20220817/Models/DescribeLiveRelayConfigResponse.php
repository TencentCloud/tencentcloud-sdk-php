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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveRelayConfig返回参数结构体
 *
 * @method integer getRelayType() 获取<p>转推类型</p><p>枚举值：</p><ul><li>0： 单流</li><li>1： 混流</li></ul>
 * @method void setRelayType(integer $RelayType) 设置<p>转推类型</p><p>枚举值：</p><ul><li>0： 单流</li><li>1： 混流</li></ul>
 * @method array getUrls() 获取<p>转推URL</p>
 * @method void setUrls(array $Urls) 设置<p>转推URL</p>
 * @method integer getIsTencentCdn() 获取<p>是否是腾讯云CDN。</p><p>枚举值：</p><ul><li>0： 转推非腾讯云CDN</li><li>1： 转推腾讯CDN</li></ul>
 * @method void setIsTencentCdn(integer $IsTencentCdn) 设置<p>是否是腾讯云CDN。</p><p>枚举值：</p><ul><li>0： 转推非腾讯云CDN</li><li>1： 转推腾讯CDN</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveRelayConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>转推类型</p><p>枚举值：</p><ul><li>0： 单流</li><li>1： 混流</li></ul>
     */
    public $RelayType;

    /**
     * @var array <p>转推URL</p>
     */
    public $Urls;

    /**
     * @var integer <p>是否是腾讯云CDN。</p><p>枚举值：</p><ul><li>0： 转推非腾讯云CDN</li><li>1： 转推腾讯CDN</li></ul>
     */
    public $IsTencentCdn;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RelayType <p>转推类型</p><p>枚举值：</p><ul><li>0： 单流</li><li>1： 混流</li></ul>
     * @param array $Urls <p>转推URL</p>
     * @param integer $IsTencentCdn <p>是否是腾讯云CDN。</p><p>枚举值：</p><ul><li>0： 转推非腾讯云CDN</li><li>1： 转推腾讯CDN</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RelayType",$param) and $param["RelayType"] !== null) {
            $this->RelayType = $param["RelayType"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("IsTencentCdn",$param) and $param["IsTencentCdn"] !== null) {
            $this->IsTencentCdn = $param["IsTencentCdn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
