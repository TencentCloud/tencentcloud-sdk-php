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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限速配置
 *
 * @method integer getMaxParallelRequest() 获取<p>最大并发请求数量</p><p>单位：次</p>
 * @method void setMaxParallelRequest(integer $MaxParallelRequest) 设置<p>最大并发请求数量</p><p>单位：次</p>
 * @method integer getRPM() 获取<p>每分钟限制的请求数量</p><p>单位：次/分钟</p>
 * @method void setRPM(integer $RPM) 设置<p>每分钟限制的请求数量</p><p>单位：次/分钟</p>
 * @method integer getTPM() 获取<p>每分钟限制的Token数量</p><p>单位：个/分钟</p>
 * @method void setTPM(integer $TPM) 设置<p>每分钟限制的Token数量</p><p>单位：个/分钟</p>
 */
class RateLimitConfigForKey extends AbstractModel
{
    /**
     * @var integer <p>最大并发请求数量</p><p>单位：次</p>
     */
    public $MaxParallelRequest;

    /**
     * @var integer <p>每分钟限制的请求数量</p><p>单位：次/分钟</p>
     */
    public $RPM;

    /**
     * @var integer <p>每分钟限制的Token数量</p><p>单位：个/分钟</p>
     */
    public $TPM;

    /**
     * @param integer $MaxParallelRequest <p>最大并发请求数量</p><p>单位：次</p>
     * @param integer $RPM <p>每分钟限制的请求数量</p><p>单位：次/分钟</p>
     * @param integer $TPM <p>每分钟限制的Token数量</p><p>单位：个/分钟</p>
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
        if (array_key_exists("MaxParallelRequest",$param) and $param["MaxParallelRequest"] !== null) {
            $this->MaxParallelRequest = $param["MaxParallelRequest"];
        }

        if (array_key_exists("RPM",$param) and $param["RPM"] !== null) {
            $this->RPM = $param["RPM"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }
    }
}
