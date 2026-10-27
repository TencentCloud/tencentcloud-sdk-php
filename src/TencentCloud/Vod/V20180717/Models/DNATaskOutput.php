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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNA查重任务输出。
 *
 * @method string getRefFileId() 获取<p>命中的参考媒资 FileId。</p>
 * @method void setRefFileId(string $RefFileId) 设置<p>命中的参考媒资 FileId。</p>
 * @method float getQueryStartSec() 获取<p>查询媒资命中片段起始时间。</p><p>单位：秒</p>
 * @method void setQueryStartSec(float $QueryStartSec) 设置<p>查询媒资命中片段起始时间。</p><p>单位：秒</p>
 * @method float getQueryEndSec() 获取<p>查询媒资命中片段结束时间。</p><p>单位：秒</p>
 * @method void setQueryEndSec(float $QueryEndSec) 设置<p>查询媒资命中片段结束时间。</p><p>单位：秒</p>
 * @method float getRefStartSec() 获取<p>参考媒资对应片段起始时间。</p><p>单位：秒</p>
 * @method void setRefStartSec(float $RefStartSec) 设置<p>参考媒资对应片段起始时间。</p><p>单位：秒</p>
 * @method float getRefEndSec() 获取<p>参考媒资对应片段结束时间。</p><p>单位：秒</p>
 * @method void setRefEndSec(float $RefEndSec) 设置<p>参考媒资对应片段结束时间。</p><p>单位：秒</p>
 * @method float getConfidence() 获取<p>匹配置信度。</p><p>取值范围：[0, 1]</p>
 * @method void setConfidence(float $Confidence) 设置<p>匹配置信度。</p><p>取值范围：[0, 1]</p>
 * @method float getSpeedRatio() 获取<p>变速比（1.0 表示原速，非 1 表示加速或者减速）。</p>
 * @method void setSpeedRatio(float $SpeedRatio) 设置<p>变速比（1.0 表示原速，非 1 表示加速或者减速）。</p>
 */
class DNATaskOutput extends AbstractModel
{
    /**
     * @var string <p>命中的参考媒资 FileId。</p>
     */
    public $RefFileId;

    /**
     * @var float <p>查询媒资命中片段起始时间。</p><p>单位：秒</p>
     */
    public $QueryStartSec;

    /**
     * @var float <p>查询媒资命中片段结束时间。</p><p>单位：秒</p>
     */
    public $QueryEndSec;

    /**
     * @var float <p>参考媒资对应片段起始时间。</p><p>单位：秒</p>
     */
    public $RefStartSec;

    /**
     * @var float <p>参考媒资对应片段结束时间。</p><p>单位：秒</p>
     */
    public $RefEndSec;

    /**
     * @var float <p>匹配置信度。</p><p>取值范围：[0, 1]</p>
     */
    public $Confidence;

    /**
     * @var float <p>变速比（1.0 表示原速，非 1 表示加速或者减速）。</p>
     */
    public $SpeedRatio;

    /**
     * @param string $RefFileId <p>命中的参考媒资 FileId。</p>
     * @param float $QueryStartSec <p>查询媒资命中片段起始时间。</p><p>单位：秒</p>
     * @param float $QueryEndSec <p>查询媒资命中片段结束时间。</p><p>单位：秒</p>
     * @param float $RefStartSec <p>参考媒资对应片段起始时间。</p><p>单位：秒</p>
     * @param float $RefEndSec <p>参考媒资对应片段结束时间。</p><p>单位：秒</p>
     * @param float $Confidence <p>匹配置信度。</p><p>取值范围：[0, 1]</p>
     * @param float $SpeedRatio <p>变速比（1.0 表示原速，非 1 表示加速或者减速）。</p>
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
        if (array_key_exists("RefFileId",$param) and $param["RefFileId"] !== null) {
            $this->RefFileId = $param["RefFileId"];
        }

        if (array_key_exists("QueryStartSec",$param) and $param["QueryStartSec"] !== null) {
            $this->QueryStartSec = $param["QueryStartSec"];
        }

        if (array_key_exists("QueryEndSec",$param) and $param["QueryEndSec"] !== null) {
            $this->QueryEndSec = $param["QueryEndSec"];
        }

        if (array_key_exists("RefStartSec",$param) and $param["RefStartSec"] !== null) {
            $this->RefStartSec = $param["RefStartSec"];
        }

        if (array_key_exists("RefEndSec",$param) and $param["RefEndSec"] !== null) {
            $this->RefEndSec = $param["RefEndSec"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("SpeedRatio",$param) and $param["SpeedRatio"] !== null) {
            $this->SpeedRatio = $param["SpeedRatio"];
        }
    }
}
