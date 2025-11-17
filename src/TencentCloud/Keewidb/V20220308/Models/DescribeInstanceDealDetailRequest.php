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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDealDetail请求参数结构体
 *
 * @method array getDealIds() 获取订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealId。
 * @method void setDealIds(array $DealIds) 设置订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealId。
 * @method string getDealName() 获取订单号，订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealName。
 * @method void setDealName(string $DealName) 设置订单号，订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealName。
 */
class DescribeInstanceDealDetailRequest extends AbstractModel
{
    /**
     * @var array 订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealId。
     * @deprecated
     */
    public $DealIds;

    /**
     * @var string 订单号，订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealName。
     */
    public $DealName;

    /**
     * @param array $DealIds 订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealId。
     * @param string $DealName 订单号，订单交易ID数组，即 [CreateInstances](https://cloud.tencent.com/document/api/1520/86207) 的输出参数DealName。
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
