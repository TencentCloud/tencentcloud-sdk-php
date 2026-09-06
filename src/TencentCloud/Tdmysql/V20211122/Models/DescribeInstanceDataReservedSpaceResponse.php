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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDataReservedSpace返回参数结构体
 *
 * @method float getReservedRate() 获取<p>实际保留比例（%，单节点）</p>
 * @method void setReservedRate(float $ReservedRate) 设置<p>实际保留比例（%，单节点）</p>
 * @method float getReservedSpaceGB() 获取<p>实际保留空间 GB（单节点）</p><p>单位：GB</p>
 * @method void setReservedSpaceGB(float $ReservedSpaceGB) 设置<p>实际保留空间 GB（单节点）</p><p>单位：GB</p>
 * @method float getUsableSpaceGB() 获取<p>用户可用空间 GB（单节点）</p><p>单位：GB</p>
 * @method void setUsableSpaceGB(float $UsableSpaceGB) 设置<p>用户可用空间 GB（单节点）</p><p>单位：GB</p>
 * @method boolean getIsLegacy() 获取<p>true=旧版本（&lt;21.6.4.0），值取自老参数 tdstore_enter_readonly_threshold；false=新版本</p>
 * @method void setIsLegacy(boolean $IsLegacy) 设置<p>true=旧版本（&lt;21.6.4.0），值取自老参数 tdstore_enter_readonly_threshold；false=新版本</p>
 * @method string getKernelVersion() 获取<p>内核版本号</p>
 * @method void setKernelVersion(string $KernelVersion) 设置<p>内核版本号</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceDataReservedSpaceResponse extends AbstractModel
{
    /**
     * @var float <p>实际保留比例（%，单节点）</p>
     */
    public $ReservedRate;

    /**
     * @var float <p>实际保留空间 GB（单节点）</p><p>单位：GB</p>
     */
    public $ReservedSpaceGB;

    /**
     * @var float <p>用户可用空间 GB（单节点）</p><p>单位：GB</p>
     */
    public $UsableSpaceGB;

    /**
     * @var boolean <p>true=旧版本（&lt;21.6.4.0），值取自老参数 tdstore_enter_readonly_threshold；false=新版本</p>
     */
    public $IsLegacy;

    /**
     * @var string <p>内核版本号</p>
     */
    public $KernelVersion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $ReservedRate <p>实际保留比例（%，单节点）</p>
     * @param float $ReservedSpaceGB <p>实际保留空间 GB（单节点）</p><p>单位：GB</p>
     * @param float $UsableSpaceGB <p>用户可用空间 GB（单节点）</p><p>单位：GB</p>
     * @param boolean $IsLegacy <p>true=旧版本（&lt;21.6.4.0），值取自老参数 tdstore_enter_readonly_threshold；false=新版本</p>
     * @param string $KernelVersion <p>内核版本号</p>
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
        if (array_key_exists("ReservedRate",$param) and $param["ReservedRate"] !== null) {
            $this->ReservedRate = $param["ReservedRate"];
        }

        if (array_key_exists("ReservedSpaceGB",$param) and $param["ReservedSpaceGB"] !== null) {
            $this->ReservedSpaceGB = $param["ReservedSpaceGB"];
        }

        if (array_key_exists("UsableSpaceGB",$param) and $param["UsableSpaceGB"] !== null) {
            $this->UsableSpaceGB = $param["UsableSpaceGB"];
        }

        if (array_key_exists("IsLegacy",$param) and $param["IsLegacy"] !== null) {
            $this->IsLegacy = $param["IsLegacy"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
