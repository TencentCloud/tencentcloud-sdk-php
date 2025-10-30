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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BidDetailPage请求参数结构体
 *
 * @method string getBusinessId() 获取预约ID
可通过[DescribeBiddingList](https://cloud.tencent.com/document/api/242/106598)接口获取
 * @method void setBusinessId(string $BusinessId) 设置预约ID
可通过[DescribeBiddingList](https://cloud.tencent.com/document/api/242/106598)接口获取
 */
class BidDetailPageRequest extends AbstractModel
{
    /**
     * @var string 预约ID
可通过[DescribeBiddingList](https://cloud.tencent.com/document/api/242/106598)接口获取
     */
    public $BusinessId;

    /**
     * @param string $BusinessId 预约ID
可通过[DescribeBiddingList](https://cloud.tencent.com/document/api/242/106598)接口获取
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
        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
