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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceFamilies请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。</p>
 * @method string getVendor() 获取<p>GPU 厂商过滤条件。</p>
 * @method void setVendor(string $Vendor) 设置<p>GPU 厂商过滤条件。</p>
 */
class DescribeInstanceFamiliesRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>GPU 厂商过滤条件。</p>
     */
    public $Vendor;

    /**
     * @param string $ClusterId <p>集群 ID。</p>
     * @param string $Vendor <p>GPU 厂商过滤条件。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }
    }
}
