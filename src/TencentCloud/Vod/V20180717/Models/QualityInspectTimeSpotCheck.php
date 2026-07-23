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
 * 音画质检测的时间抽检策略。
 *
 * @method integer getCheckDuration() 获取<p>每次循环检测的时长。</p><p>取值范围：[10, 86400]</p><p>单位：秒。</p>
 * @method void setCheckDuration(integer $CheckDuration) 设置<p>每次循环检测的时长。</p><p>取值范围：[10, 86400]</p><p>单位：秒。</p>
 * @method integer getCheckInterval() 获取<p>抽检间隔，表示在一次检测结束后，等待多长时间后，再次检测</p><p>取值范围：[10, 3600]</p><p>单位：秒。</p>
 * @method void setCheckInterval(integer $CheckInterval) 设置<p>抽检间隔，表示在一次检测结束后，等待多长时间后，再次检测</p><p>取值范围：[10, 3600]</p><p>单位：秒。</p>
 * @method integer getSkipDuration() 获取<p>片头跳过时长。</p><p>取值范围：[1, 1800]</p><p>单位：秒。</p>
 * @method void setSkipDuration(integer $SkipDuration) 设置<p>片头跳过时长。</p><p>取值范围：[1, 1800]</p><p>单位：秒。</p>
 * @method integer getCirclesNumber() 获取<p>循环次数。</p><p>取值范围：[0, 1000]</p>
 * @method void setCirclesNumber(integer $CirclesNumber) 设置<p>循环次数。</p><p>取值范围：[0, 1000]</p>
 */
class QualityInspectTimeSpotCheck extends AbstractModel
{
    /**
     * @var integer <p>每次循环检测的时长。</p><p>取值范围：[10, 86400]</p><p>单位：秒。</p>
     */
    public $CheckDuration;

    /**
     * @var integer <p>抽检间隔，表示在一次检测结束后，等待多长时间后，再次检测</p><p>取值范围：[10, 3600]</p><p>单位：秒。</p>
     */
    public $CheckInterval;

    /**
     * @var integer <p>片头跳过时长。</p><p>取值范围：[1, 1800]</p><p>单位：秒。</p>
     */
    public $SkipDuration;

    /**
     * @var integer <p>循环次数。</p><p>取值范围：[0, 1000]</p>
     */
    public $CirclesNumber;

    /**
     * @param integer $CheckDuration <p>每次循环检测的时长。</p><p>取值范围：[10, 86400]</p><p>单位：秒。</p>
     * @param integer $CheckInterval <p>抽检间隔，表示在一次检测结束后，等待多长时间后，再次检测</p><p>取值范围：[10, 3600]</p><p>单位：秒。</p>
     * @param integer $SkipDuration <p>片头跳过时长。</p><p>取值范围：[1, 1800]</p><p>单位：秒。</p>
     * @param integer $CirclesNumber <p>循环次数。</p><p>取值范围：[0, 1000]</p>
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
        if (array_key_exists("CheckDuration",$param) and $param["CheckDuration"] !== null) {
            $this->CheckDuration = $param["CheckDuration"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }

        if (array_key_exists("SkipDuration",$param) and $param["SkipDuration"] !== null) {
            $this->SkipDuration = $param["SkipDuration"];
        }

        if (array_key_exists("CirclesNumber",$param) and $param["CirclesNumber"] !== null) {
            $this->CirclesNumber = $param["CirclesNumber"];
        }
    }
}
