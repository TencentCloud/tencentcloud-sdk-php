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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重试策略
 *
 * @method string getPolicyType() 获取重试策略类型，枚举值如下：

- EXPONENTIAL：固定间隔
- CUSTOMIZED：阶梯退避
 * @method void setPolicyType(string $PolicyType) 设置重试策略类型，枚举值如下：

- EXPONENTIAL：固定间隔
- CUSTOMIZED：阶梯退避
 * @method integer getRetryInterval() 获取固定重试间隔，仅在重试策略为固定间隔时生效
 * @method void setRetryInterval(integer $RetryInterval) 设置固定重试间隔，仅在重试策略为固定间隔时生效
 */
class RetryPolicy extends AbstractModel
{
    /**
     * @var string 重试策略类型，枚举值如下：

- EXPONENTIAL：固定间隔
- CUSTOMIZED：阶梯退避
     */
    public $PolicyType;

    /**
     * @var integer 固定重试间隔，仅在重试策略为固定间隔时生效
     */
    public $RetryInterval;

    /**
     * @param string $PolicyType 重试策略类型，枚举值如下：

- EXPONENTIAL：固定间隔
- CUSTOMIZED：阶梯退避
     * @param integer $RetryInterval 固定重试间隔，仅在重试策略为固定间隔时生效
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }
    }
}
