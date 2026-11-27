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
 * ModelAlias 积分系数配置
 *
 * @method float getInputCachedCoefficient() 获取<p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
 * @method void setInputCachedCoefficient(float $InputCachedCoefficient) 设置<p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
 * @method float getInputCacheCreationCoefficient() 获取<p>缓存创建积分系数</p>
 * @method void setInputCacheCreationCoefficient(float $InputCacheCreationCoefficient) 设置<p>缓存创建积分系数</p>
 * @method float getInputCoefficient() 获取<p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
 * @method void setInputCoefficient(float $InputCoefficient) 设置<p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
 * @method float getOutputCoefficient() 获取<p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
 * @method void setOutputCoefficient(float $OutputCoefficient) 设置<p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
 * @method float getInputImageCoefficient() 获取<p>输入图片系数</p>
 * @method void setInputImageCoefficient(float $InputImageCoefficient) 设置<p>输入图片系数</p>
 * @method float getInputVideoSecondCoefficient() 获取<p>输入视频每秒系数</p>
 * @method void setInputVideoSecondCoefficient(float $InputVideoSecondCoefficient) 设置<p>输入视频每秒系数</p>
 * @method float getOutputVideoSecondCoefficient() 获取<p>输出视频每秒系数</p>
 * @method void setOutputVideoSecondCoefficient(float $OutputVideoSecondCoefficient) 设置<p>输出视频每秒系数</p>
 * @method float getOutputImageCoefficient() 获取<p>输出图片系数</p>
 * @method void setOutputImageCoefficient(float $OutputImageCoefficient) 设置<p>输出图片系数</p>
 * @method float getInputAudioTokenCoefficient() 获取<p>Realtime 音频输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：80</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method void setInputAudioTokenCoefficient(float $InputAudioTokenCoefficient) 设置<p>Realtime 音频输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：80</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method float getInputCachedAudioTokenCoefficient() 获取<p>Realtime 音频缓存命中输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method void setInputCachedAudioTokenCoefficient(float $InputCachedAudioTokenCoefficient) 设置<p>Realtime 音频缓存命中输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method float getInputImageTokenCoefficient() 获取<p>Realtime 图像输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：12.5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method void setInputImageTokenCoefficient(float $InputImageTokenCoefficient) 设置<p>Realtime 图像输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：12.5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method float getInputCachedImageTokenCoefficient() 获取<p>Realtime 图像缓存命中输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method void setInputCachedImageTokenCoefficient(float $InputCachedImageTokenCoefficient) 设置<p>Realtime 图像缓存命中输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method float getOutputAudioTokenCoefficient() 获取<p>Realtime 音频输出积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：300</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 * @method void setOutputAudioTokenCoefficient(float $OutputAudioTokenCoefficient) 设置<p>Realtime 音频输出积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：300</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
 */
class Coefficient extends AbstractModel
{
    /**
     * @var float <p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
     */
    public $InputCachedCoefficient;

    /**
     * @var float <p>缓存创建积分系数</p>
     */
    public $InputCacheCreationCoefficient;

    /**
     * @var float <p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
     */
    public $InputCoefficient;

    /**
     * @var float <p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
     */
    public $OutputCoefficient;

    /**
     * @var float <p>输入图片系数</p>
     */
    public $InputImageCoefficient;

    /**
     * @var float <p>输入视频每秒系数</p>
     */
    public $InputVideoSecondCoefficient;

    /**
     * @var float <p>输出视频每秒系数</p>
     */
    public $OutputVideoSecondCoefficient;

    /**
     * @var float <p>输出图片系数</p>
     */
    public $OutputImageCoefficient;

    /**
     * @var float <p>Realtime 音频输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：80</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     */
    public $InputAudioTokenCoefficient;

    /**
     * @var float <p>Realtime 音频缓存命中输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     */
    public $InputCachedAudioTokenCoefficient;

    /**
     * @var float <p>Realtime 图像输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：12.5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     */
    public $InputImageTokenCoefficient;

    /**
     * @var float <p>Realtime 图像缓存命中输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     */
    public $InputCachedImageTokenCoefficient;

    /**
     * @var float <p>Realtime 音频输出积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：300</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     */
    public $OutputAudioTokenCoefficient;

    /**
     * @param float $InputCachedCoefficient <p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
     * @param float $InputCacheCreationCoefficient <p>缓存创建积分系数</p>
     * @param float $InputCoefficient <p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
     * @param float $OutputCoefficient <p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
     * @param float $InputImageCoefficient <p>输入图片系数</p>
     * @param float $InputVideoSecondCoefficient <p>输入视频每秒系数</p>
     * @param float $OutputVideoSecondCoefficient <p>输出视频每秒系数</p>
     * @param float $OutputImageCoefficient <p>输出图片系数</p>
     * @param float $InputAudioTokenCoefficient <p>Realtime 音频输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：80</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     * @param float $InputCachedAudioTokenCoefficient <p>Realtime 音频缓存命中输入积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     * @param float $InputImageTokenCoefficient <p>Realtime 图像输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：12.5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     * @param float $InputCachedImageTokenCoefficient <p>Realtime 图像缓存命中输入积分系数，单位为积分/百万图像 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：5</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
     * @param float $OutputAudioTokenCoefficient <p>Realtime 音频输出积分系数，单位为积分/百万音频 Token。</p><p>取值范围：[0, 5000]</p><p>默认值：300</p><p>仅 Capability=realtime 支持，最多 6 位小数。修改时未提供此字段则保留旧值；0 表示零价，不接受 null。</p>
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
        if (array_key_exists("InputCachedCoefficient",$param) and $param["InputCachedCoefficient"] !== null) {
            $this->InputCachedCoefficient = $param["InputCachedCoefficient"];
        }

        if (array_key_exists("InputCacheCreationCoefficient",$param) and $param["InputCacheCreationCoefficient"] !== null) {
            $this->InputCacheCreationCoefficient = $param["InputCacheCreationCoefficient"];
        }

        if (array_key_exists("InputCoefficient",$param) and $param["InputCoefficient"] !== null) {
            $this->InputCoefficient = $param["InputCoefficient"];
        }

        if (array_key_exists("OutputCoefficient",$param) and $param["OutputCoefficient"] !== null) {
            $this->OutputCoefficient = $param["OutputCoefficient"];
        }

        if (array_key_exists("InputImageCoefficient",$param) and $param["InputImageCoefficient"] !== null) {
            $this->InputImageCoefficient = $param["InputImageCoefficient"];
        }

        if (array_key_exists("InputVideoSecondCoefficient",$param) and $param["InputVideoSecondCoefficient"] !== null) {
            $this->InputVideoSecondCoefficient = $param["InputVideoSecondCoefficient"];
        }

        if (array_key_exists("OutputVideoSecondCoefficient",$param) and $param["OutputVideoSecondCoefficient"] !== null) {
            $this->OutputVideoSecondCoefficient = $param["OutputVideoSecondCoefficient"];
        }

        if (array_key_exists("OutputImageCoefficient",$param) and $param["OutputImageCoefficient"] !== null) {
            $this->OutputImageCoefficient = $param["OutputImageCoefficient"];
        }

        if (array_key_exists("InputAudioTokenCoefficient",$param) and $param["InputAudioTokenCoefficient"] !== null) {
            $this->InputAudioTokenCoefficient = $param["InputAudioTokenCoefficient"];
        }

        if (array_key_exists("InputCachedAudioTokenCoefficient",$param) and $param["InputCachedAudioTokenCoefficient"] !== null) {
            $this->InputCachedAudioTokenCoefficient = $param["InputCachedAudioTokenCoefficient"];
        }

        if (array_key_exists("InputImageTokenCoefficient",$param) and $param["InputImageTokenCoefficient"] !== null) {
            $this->InputImageTokenCoefficient = $param["InputImageTokenCoefficient"];
        }

        if (array_key_exists("InputCachedImageTokenCoefficient",$param) and $param["InputCachedImageTokenCoefficient"] !== null) {
            $this->InputCachedImageTokenCoefficient = $param["InputCachedImageTokenCoefficient"];
        }

        if (array_key_exists("OutputAudioTokenCoefficient",$param) and $param["OutputAudioTokenCoefficient"] !== null) {
            $this->OutputAudioTokenCoefficient = $param["OutputAudioTokenCoefficient"];
        }
    }
}
