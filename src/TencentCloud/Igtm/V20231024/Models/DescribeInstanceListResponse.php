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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceList返回参数结构体
 *
 * @method array getInstanceSet() 获取实例列表
 * @method void setInstanceSet(array $InstanceSet) 设置实例列表
 * @method integer getTotalCount() 获取列表总数
 * @method void setTotalCount(integer $TotalCount) 设置列表总数
 * @method boolean getSystemAccessEnabled() 获取是否支持系统域名接入：true支持；false不支持
 * @method void setSystemAccessEnabled(boolean $SystemAccessEnabled) 设置是否支持系统域名接入：true支持；false不支持
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceListResponse extends AbstractModel
{
    /**
     * @var array 实例列表
     */
    public $InstanceSet;

    /**
     * @var integer 列表总数
     */
    public $TotalCount;

    /**
     * @var boolean 是否支持系统域名接入：true支持；false不支持
     */
    public $SystemAccessEnabled;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InstanceSet 实例列表
     * @param integer $TotalCount 列表总数
     * @param boolean $SystemAccessEnabled 是否支持系统域名接入：true支持；false不支持
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
        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SystemAccessEnabled",$param) and $param["SystemAccessEnabled"] !== null) {
            $this->SystemAccessEnabled = $param["SystemAccessEnabled"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
