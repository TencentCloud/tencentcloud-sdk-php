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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResumeSubscribe请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
 */
class ResumeSubscribeRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
     */
    public $SubscribeId;

    /**
     * @param string $SubscribeId 数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }
    }
}
