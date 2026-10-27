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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesBindStatus请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>拉取的桌面id列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>拉取的桌面id列表</p>
 * @method string getInstanceRegion() 获取<p>实例所在区域</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>实例所在区域</p>
 */
class DescribeInstancesBindStatusRequest extends AbstractModel
{
    /**
     * @var array <p>拉取的桌面id列表</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>实例所在区域</p>
     */
    public $InstanceRegion;

    /**
     * @param array $InstanceIds <p>拉取的桌面id列表</p>
     * @param string $InstanceRegion <p>实例所在区域</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }
    }
}
