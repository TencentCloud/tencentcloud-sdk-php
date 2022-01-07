<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用来描述一个ckafka投递目标的重试策略
 *
 * @method integer getRetryInterval() 获取重试间隔 单位:秒
 * @method void setRetryInterval(integer $RetryInterval) 设置重试间隔 单位:秒
 * @method integer getMaxRetryAttempts() 获取最大重试次数
 * @method void setMaxRetryAttempts(integer $MaxRetryAttempts) 设置最大重试次数
 */
class RetryPolicy extends AbstractModel
{
    /**
     * @var integer 重试间隔 单位:秒
     */
    public $RetryInterval;

    /**
     * @var integer 最大重试次数
     */
    public $MaxRetryAttempts;

    /**
     * @param integer $RetryInterval 重试间隔 单位:秒
     * @param integer $MaxRetryAttempts 最大重试次数
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
        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("MaxRetryAttempts",$param) and $param["MaxRetryAttempts"] !== null) {
            $this->MaxRetryAttempts = $param["MaxRetryAttempts"];
        }
    }
}
