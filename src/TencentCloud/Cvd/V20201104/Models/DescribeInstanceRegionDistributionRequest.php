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
 * DescribeInstanceRegionDistribution请求参数结构体
 *
 * @method array getRegions() 获取<p>查询区域列表</p>
 * @method void setRegions(array $Regions) 设置<p>查询区域列表</p>
 * @method array getTypes() 获取<p>查询实例类型列表</p>
 * @method void setTypes(array $Types) 设置<p>查询实例类型列表</p>
 * @method string getUserId() 获取<p>查询用户拥有的云桌面地域分布信息</p>
 * @method void setUserId(string $UserId) 设置<p>查询用户拥有的云桌面地域分布信息</p>
 */
class DescribeInstanceRegionDistributionRequest extends AbstractModel
{
    /**
     * @var array <p>查询区域列表</p>
     */
    public $Regions;

    /**
     * @var array <p>查询实例类型列表</p>
     */
    public $Types;

    /**
     * @var string <p>查询用户拥有的云桌面地域分布信息</p>
     */
    public $UserId;

    /**
     * @param array $Regions <p>查询区域列表</p>
     * @param array $Types <p>查询实例类型列表</p>
     * @param string $UserId <p>查询用户拥有的云桌面地域分布信息</p>
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
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
