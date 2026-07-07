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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosAuditObjectSampleRate请求参数结构体
 *
 * @method array getBucketIdSet() 获取<p>存储桶资产id集合</p>
 * @method void setBucketIdSet(array $BucketIdSet) 设置<p>存储桶资产id集合</p>
 * @method array getSampleRateSet() 获取<p>采样率集合</p>
 * @method void setSampleRateSet(array $SampleRateSet) 设置<p>采样率集合</p>
 */
class ModifyCosAuditObjectSampleRateRequest extends AbstractModel
{
    /**
     * @var array <p>存储桶资产id集合</p>
     */
    public $BucketIdSet;

    /**
     * @var array <p>采样率集合</p>
     */
    public $SampleRateSet;

    /**
     * @param array $BucketIdSet <p>存储桶资产id集合</p>
     * @param array $SampleRateSet <p>采样率集合</p>
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
        if (array_key_exists("BucketIdSet",$param) and $param["BucketIdSet"] !== null) {
            $this->BucketIdSet = $param["BucketIdSet"];
        }

        if (array_key_exists("SampleRateSet",$param) and $param["SampleRateSet"] !== null) {
            $this->SampleRateSet = $param["SampleRateSet"];
        }
    }
}
