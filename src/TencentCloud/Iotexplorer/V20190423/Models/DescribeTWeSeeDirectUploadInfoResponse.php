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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTWeSeeDirectUploadInfo返回参数结构体
 *
 * @method string getCOSURI() 获取<p>TWeSee 直传目录的 COS URI</p>
 * @method void setCOSURI(string $COSURI) 设置<p>TWeSee 直传目录的 COS URI</p>
 * @method string getStorageBucket() 获取<p>TWeSee 直传存储桶</p>
 * @method void setStorageBucket(string $StorageBucket) 设置<p>TWeSee 直传存储桶</p>
 * @method string getStoragePath() 获取<p>TWeSee 直传目录路径</p>
 * @method void setStoragePath(string $StoragePath) 设置<p>TWeSee 直传目录路径</p>
 * @method string getStorageRegion() 获取<p>TWeSee 直传存储地域</p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>TWeSee 直传存储地域</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTWeSeeDirectUploadInfoResponse extends AbstractModel
{
    /**
     * @var string <p>TWeSee 直传目录的 COS URI</p>
     */
    public $COSURI;

    /**
     * @var string <p>TWeSee 直传存储桶</p>
     */
    public $StorageBucket;

    /**
     * @var string <p>TWeSee 直传目录路径</p>
     */
    public $StoragePath;

    /**
     * @var string <p>TWeSee 直传存储地域</p>
     */
    public $StorageRegion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $COSURI <p>TWeSee 直传目录的 COS URI</p>
     * @param string $StorageBucket <p>TWeSee 直传存储桶</p>
     * @param string $StoragePath <p>TWeSee 直传目录路径</p>
     * @param string $StorageRegion <p>TWeSee 直传存储地域</p>
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
        if (array_key_exists("COSURI",$param) and $param["COSURI"] !== null) {
            $this->COSURI = $param["COSURI"];
        }

        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
