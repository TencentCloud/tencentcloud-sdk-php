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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空闲检测配置信息。
 *
 * @method integer getRetryCount() 获取重试次数（1-3）
 * @method void setRetryCount(integer $RetryCount) 设置重试次数（1-3）
 * @method string getMessage() 获取响应信息
 * @method void setMessage(string $Message) 设置响应信息
 */
class IdleResponseInfo extends AbstractModel
{
    /**
     * @var integer 重试次数（1-3）
     */
    public $RetryCount;

    /**
     * @var string 响应信息
     */
    public $Message;

    /**
     * @param integer $RetryCount 重试次数（1-3）
     * @param string $Message 响应信息
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
        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
