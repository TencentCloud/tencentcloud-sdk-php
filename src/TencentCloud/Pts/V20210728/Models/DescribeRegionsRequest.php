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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegions请求参数结构体
 *
 * @method integer getLoadType() 获取通过该参数指定不同压测网络环境，在不同网络环境下，PTS可用的地域不一样
 * @method void setLoadType(integer $LoadType) 设置通过该参数指定不同压测网络环境，在不同网络环境下，PTS可用的地域不一样
 */
class DescribeRegionsRequest extends AbstractModel
{
    /**
     * @var integer 通过该参数指定不同压测网络环境，在不同网络环境下，PTS可用的地域不一样
     */
    public $LoadType;

    /**
     * @param integer $LoadType 通过该参数指定不同压测网络环境，在不同网络环境下，PTS可用的地域不一样
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
        if (array_key_exists("LoadType",$param) and $param["LoadType"] !== null) {
            $this->LoadType = $param["LoadType"];
        }
    }
}
