<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBandwidthPackage返回参数结构体
 *
 * @method string getBandwidthPackageId() 获取带宽包唯一ID
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一ID
 * @method array getBandwidthPackageIds() 获取带宽包唯一ID列表(申请数量大于1时有效)
 * @method void setBandwidthPackageIds(array $BandwidthPackageIds) 设置带宽包唯一ID列表(申请数量大于1时有效)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBandwidthPackageResponse extends AbstractModel
{
    /**
     * @var string 带宽包唯一ID
     */
    public $BandwidthPackageId;

    /**
     * @var array 带宽包唯一ID列表(申请数量大于1时有效)
     */
    public $BandwidthPackageIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BandwidthPackageId 带宽包唯一ID
     * @param array $BandwidthPackageIds 带宽包唯一ID列表(申请数量大于1时有效)
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('BandwidthPackageId',$param) and $param['BandwidthPackageId'] !== null) {
            $this->BandwidthPackageId = $param['BandwidthPackageId'];
        }

        if (array_key_exists('BandwidthPackageIds',$param) and $param['BandwidthPackageIds'] !== null) {
            $this->BandwidthPackageIds = $param['BandwidthPackageIds'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
