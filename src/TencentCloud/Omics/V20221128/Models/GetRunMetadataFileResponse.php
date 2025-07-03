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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRunMetadataFile返回参数结构体
 *
 * @method string getCosSignedUrl() 获取文件预签名链接，一分钟内有效。
 * @method void setCosSignedUrl(string $CosSignedUrl) 设置文件预签名链接，一分钟内有效。
 * @method array getCosSignedUrls() 获取批量文件预签名链接，一分钟内有效。
 * @method void setCosSignedUrls(array $CosSignedUrls) 设置批量文件预签名链接，一分钟内有效。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetRunMetadataFileResponse extends AbstractModel
{
    /**
     * @var string 文件预签名链接，一分钟内有效。
     */
    public $CosSignedUrl;

    /**
     * @var array 批量文件预签名链接，一分钟内有效。
     */
    public $CosSignedUrls;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CosSignedUrl 文件预签名链接，一分钟内有效。
     * @param array $CosSignedUrls 批量文件预签名链接，一分钟内有效。
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
        if (array_key_exists("CosSignedUrl",$param) and $param["CosSignedUrl"] !== null) {
            $this->CosSignedUrl = $param["CosSignedUrl"];
        }

        if (array_key_exists("CosSignedUrls",$param) and $param["CosSignedUrls"] !== null) {
            $this->CosSignedUrls = $param["CosSignedUrls"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
