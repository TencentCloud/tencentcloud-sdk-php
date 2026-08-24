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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePriceCreateCopyPairs请求参数结构体
 *
 * @method array getDataCapacities() 获取每个复制对的容量列表，长度 1~10。数组长度即为询价的复制对个数，每个元素对应一个复制对的容量
 * @method void setDataCapacities(array $DataCapacities) 设置每个复制对的容量列表，长度 1~10。数组长度即为询价的复制对个数，每个元素对应一个复制对的容量
 */
class DescribePriceCreateCopyPairsRequest extends AbstractModel
{
    /**
     * @var array 每个复制对的容量列表，长度 1~10。数组长度即为询价的复制对个数，每个元素对应一个复制对的容量
     */
    public $DataCapacities;

    /**
     * @param array $DataCapacities 每个复制对的容量列表，长度 1~10。数组长度即为询价的复制对个数，每个元素对应一个复制对的容量
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
        if (array_key_exists("DataCapacities",$param) and $param["DataCapacities"] !== null) {
            $this->DataCapacities = $param["DataCapacities"];
        }
    }
}
