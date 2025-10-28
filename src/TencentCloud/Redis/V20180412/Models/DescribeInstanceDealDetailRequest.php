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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDealDetail请求参数结构体
 *
 * @method array getDealIds() 获取订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealId。数组最大长度限制为10
 * @method void setDealIds(array $DealIds) 设置订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealId。数组最大长度限制为10
 * @method string getDealName() 获取订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealName。数组最大长度限制为10
 * @method void setDealName(string $DealName) 设置订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealName。数组最大长度限制为10
 */
class DescribeInstanceDealDetailRequest extends AbstractModel
{
    /**
     * @var array 订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealId。数组最大长度限制为10
     * @deprecated
     */
    public $DealIds;

    /**
     * @var string 订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealName。数组最大长度限制为10
     */
    public $DealName;

    /**
     * @param array $DealIds 订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealId。数组最大长度限制为10
     * @param string $DealName 订单号，即 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的输出参数DealName。数组最大长度限制为10
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
        if (array_key_exists("DealIds",$param) and $param["DealIds"] !== null) {
            $this->DealIds = $param["DealIds"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }
    }
}
