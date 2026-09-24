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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSkillPackageDownloadURL返回参数结构体
 *
 * @method string getDownloadURL() 获取<p>COS GET 预签名 URL；带 response-content-disposition；默认 TTL 5 分钟；bearer 凭证禁止持久化。</p>
 * @method void setDownloadURL(string $DownloadURL) 设置<p>COS GET 预签名 URL；带 response-content-disposition；默认 TTL 5 分钟；bearer 凭证禁止持久化。</p>
 * @method string getExpireTime() 获取<p>URL 过期时间。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>URL 过期时间。</p>
 * @method string getSHA256() 获取<p>服务端记录的 SHA-256；下载后应本地自检。</p>
 * @method void setSHA256(string $SHA256) 设置<p>服务端记录的 SHA-256；下载后应本地自检。</p>
 * @method string getResolvedVersionId() 获取<p>解析出的 Version ID（Stable Version）。</p>
 * @method void setResolvedVersionId(string $ResolvedVersionId) 设置<p>解析出的 Version ID（Stable Version）。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetSkillPackageDownloadURLResponse extends AbstractModel
{
    /**
     * @var string <p>COS GET 预签名 URL；带 response-content-disposition；默认 TTL 5 分钟；bearer 凭证禁止持久化。</p>
     */
    public $DownloadURL;

    /**
     * @var string <p>URL 过期时间。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>服务端记录的 SHA-256；下载后应本地自检。</p>
     */
    public $SHA256;

    /**
     * @var string <p>解析出的 Version ID（Stable Version）。</p>
     */
    public $ResolvedVersionId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DownloadURL <p>COS GET 预签名 URL；带 response-content-disposition；默认 TTL 5 分钟；bearer 凭证禁止持久化。</p>
     * @param string $ExpireTime <p>URL 过期时间。</p>
     * @param string $SHA256 <p>服务端记录的 SHA-256；下载后应本地自检。</p>
     * @param string $ResolvedVersionId <p>解析出的 Version ID（Stable Version）。</p>
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
        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SHA256",$param) and $param["SHA256"] !== null) {
            $this->SHA256 = $param["SHA256"];
        }

        if (array_key_exists("ResolvedVersionId",$param) and $param["ResolvedVersionId"] !== null) {
            $this->ResolvedVersionId = $param["ResolvedVersionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
