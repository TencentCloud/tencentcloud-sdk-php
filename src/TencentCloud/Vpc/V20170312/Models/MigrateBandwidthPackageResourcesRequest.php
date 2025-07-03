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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MigrateBandwidthPackageResources请求参数结构体
 *
 * @method string getBandwidthPackageId() 获取当前资源所在的共享带宽包ID
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置当前资源所在的共享带宽包ID
 * @method string getTargetBandwidthPackageId() 获取要迁移的目标共享带宽包的ID
 * @method void setTargetBandwidthPackageId(string $TargetBandwidthPackageId) 设置要迁移的目标共享带宽包的ID
 * @method array getResourceIds() 获取要迁移的资源的ID列表
 * @method void setResourceIds(array $ResourceIds) 设置要迁移的资源的ID列表
 */
class MigrateBandwidthPackageResourcesRequest extends AbstractModel
{
    /**
     * @var string 当前资源所在的共享带宽包ID
     */
    public $BandwidthPackageId;

    /**
     * @var string 要迁移的目标共享带宽包的ID
     */
    public $TargetBandwidthPackageId;

    /**
     * @var array 要迁移的资源的ID列表
     */
    public $ResourceIds;

    /**
     * @param string $BandwidthPackageId 当前资源所在的共享带宽包ID
     * @param string $TargetBandwidthPackageId 要迁移的目标共享带宽包的ID
     * @param array $ResourceIds 要迁移的资源的ID列表
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
        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("TargetBandwidthPackageId",$param) and $param["TargetBandwidthPackageId"] !== null) {
            $this->TargetBandwidthPackageId = $param["TargetBandwidthPackageId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
