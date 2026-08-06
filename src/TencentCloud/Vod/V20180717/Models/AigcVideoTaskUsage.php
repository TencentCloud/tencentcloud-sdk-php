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
 * AIGC 生视频任务的用量。
 *
 * @method integer getInputTokens() 获取<p>输入 Token 数目。</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入 Token 数目。</p>
 * @method integer getThoughtTokens() 获取<p>思考产生的 Token 数目。</p>
 * @method void setThoughtTokens(integer $ThoughtTokens) 设置<p>思考产生的 Token 数目。</p>
 * @method integer getInputImageCount() 获取<p>输入图片数目。</p>
 * @method void setInputImageCount(integer $InputImageCount) 设置<p>输入图片数目。</p>
 * @method integer getInputSeconds() 获取<p>输入视频的时长。</p><p>单位：秒。</p>
 * @method void setInputSeconds(integer $InputSeconds) 设置<p>输入视频的时长。</p><p>单位：秒。</p>
 * @method integer getOutputSeconds() 获取<p>输出视频时长。</p><p>单位：秒。</p>
 * @method void setOutputSeconds(integer $OutputSeconds) 设置<p>输出视频时长。</p><p>单位：秒。</p>
 * @method integer getTotalSeconds() 获取<p>输入输出总时长。</p><p>默认值：秒。</p>
 * @method void setTotalSeconds(integer $TotalSeconds) 设置<p>输入输出总时长。</p><p>默认值：秒。</p>
 */
class AigcVideoTaskUsage extends AbstractModel
{
    /**
     * @var integer <p>输入 Token 数目。</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>思考产生的 Token 数目。</p>
     */
    public $ThoughtTokens;

    /**
     * @var integer <p>输入图片数目。</p>
     */
    public $InputImageCount;

    /**
     * @var integer <p>输入视频的时长。</p><p>单位：秒。</p>
     */
    public $InputSeconds;

    /**
     * @var integer <p>输出视频时长。</p><p>单位：秒。</p>
     */
    public $OutputSeconds;

    /**
     * @var integer <p>输入输出总时长。</p><p>默认值：秒。</p>
     */
    public $TotalSeconds;

    /**
     * @param integer $InputTokens <p>输入 Token 数目。</p>
     * @param integer $ThoughtTokens <p>思考产生的 Token 数目。</p>
     * @param integer $InputImageCount <p>输入图片数目。</p>
     * @param integer $InputSeconds <p>输入视频的时长。</p><p>单位：秒。</p>
     * @param integer $OutputSeconds <p>输出视频时长。</p><p>单位：秒。</p>
     * @param integer $TotalSeconds <p>输入输出总时长。</p><p>默认值：秒。</p>
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
        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("ThoughtTokens",$param) and $param["ThoughtTokens"] !== null) {
            $this->ThoughtTokens = $param["ThoughtTokens"];
        }

        if (array_key_exists("InputImageCount",$param) and $param["InputImageCount"] !== null) {
            $this->InputImageCount = $param["InputImageCount"];
        }

        if (array_key_exists("InputSeconds",$param) and $param["InputSeconds"] !== null) {
            $this->InputSeconds = $param["InputSeconds"];
        }

        if (array_key_exists("OutputSeconds",$param) and $param["OutputSeconds"] !== null) {
            $this->OutputSeconds = $param["OutputSeconds"];
        }

        if (array_key_exists("TotalSeconds",$param) and $param["TotalSeconds"] !== null) {
            $this->TotalSeconds = $param["TotalSeconds"];
        }
    }
}
