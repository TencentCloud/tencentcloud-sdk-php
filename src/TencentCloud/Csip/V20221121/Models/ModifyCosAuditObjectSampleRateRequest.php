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
 * @method integer getTargetAppId() 获取<p>appid；传 DefaultSampleRate 时必填；只修改已有桶时可选</p>
 * @method void setTargetAppId(integer $TargetAppId) 设置<p>appid；传 DefaultSampleRate 时必填；只修改已有桶时可选</p>
 * @method float getDefaultSampleRate() 获取<p>传入时修改 TargetAppId 的新增桶默认值； 不传时不修改默认值</p><p>取值范围：[0.001, 1]</p>
 * @method void setDefaultSampleRate(float $DefaultSampleRate) 设置<p>传入时修改 TargetAppId 的新增桶默认值； 不传时不修改默认值</p><p>取值范围：[0.001, 1]</p>
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
     * @var integer <p>appid；传 DefaultSampleRate 时必填；只修改已有桶时可选</p>
     */
    public $TargetAppId;

    /**
     * @var float <p>传入时修改 TargetAppId 的新增桶默认值； 不传时不修改默认值</p><p>取值范围：[0.001, 1]</p>
     */
    public $DefaultSampleRate;

    /**
     * @param array $BucketIdSet <p>存储桶资产id集合</p>
     * @param array $SampleRateSet <p>采样率集合</p>
     * @param integer $TargetAppId <p>appid；传 DefaultSampleRate 时必填；只修改已有桶时可选</p>
     * @param float $DefaultSampleRate <p>传入时修改 TargetAppId 的新增桶默认值； 不传时不修改默认值</p><p>取值范围：[0.001, 1]</p>
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

        if (array_key_exists("TargetAppId",$param) and $param["TargetAppId"] !== null) {
            $this->TargetAppId = $param["TargetAppId"];
        }

        if (array_key_exists("DefaultSampleRate",$param) and $param["DefaultSampleRate"] !== null) {
            $this->DefaultSampleRate = $param["DefaultSampleRate"];
        }
    }
}
