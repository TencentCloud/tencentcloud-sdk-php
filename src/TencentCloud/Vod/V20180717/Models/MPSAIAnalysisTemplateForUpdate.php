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
 * MPS智能分析模板输入
 *
 * @method integer getDefinition() 获取<p>视频内容分析模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>视频内容分析模板唯一标识。</p>
 * @method string getName() 获取<p>视频内容分析模板名称，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>视频内容分析模板名称，长度限制：64 个字符。</p>
 * @method string getComment() 获取<p>视频内容分析模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>视频内容分析模板描述信息，长度限制：256 个字符。</p>
 * @method MPSAIAnalysisConfigureInfo getClassificationConfigure() 获取<p>智能分类任务控制参数。</p>
 * @method void setClassificationConfigure(MPSAIAnalysisConfigureInfo $ClassificationConfigure) 设置<p>智能分类任务控制参数。</p>
 * @method MPSAIAnalysisConfigureInfo getTagConfigure() 获取<p>智能标签任务控制参数。</p>
 * @method void setTagConfigure(MPSAIAnalysisConfigureInfo $TagConfigure) 设置<p>智能标签任务控制参数。</p>
 * @method MPSAIAnalysisConfigureInfo getCoverConfigure() 获取<p>智能封面任务控制参数。</p>
 * @method void setCoverConfigure(MPSAIAnalysisConfigureInfo $CoverConfigure) 设置<p>智能封面任务控制参数。</p>
 * @method MPSAIAnalysisConfigureInfo getFrameTagConfigure() 获取<p>智能按帧标签任务控制参数。</p>
 * @method void setFrameTagConfigure(MPSAIAnalysisConfigureInfo $FrameTagConfigure) 设置<p>智能按帧标签任务控制参数。</p>
 * @method MPSAIAnalysisConfigureInfo getSplitConfigure() 获取<p>智能拆条任务控制参数。</p>
 * @method void setSplitConfigure(MPSAIAnalysisConfigureInfo $SplitConfigure) 设置<p>智能拆条任务控制参数。</p>
 * @method MPSAIAnalysisConfigureInfo getHighlightConfigure() 获取<p>智能集锦任务控制参数。</p>
 * @method void setHighlightConfigure(MPSAIAnalysisConfigureInfo $HighlightConfigure) 设置<p>智能集锦任务控制参数。</p>
 * @method MPSAIAnalysisConfigureInfo getOpeningAndEndingConfigure() 获取<p>智能片头片尾任务控制参数。</p>
 * @method void setOpeningAndEndingConfigure(MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure) 设置<p>智能片头片尾任务控制参数。</p>
 */
class MPSAIAnalysisTemplateForUpdate extends AbstractModel
{
    /**
     * @var integer <p>视频内容分析模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var string <p>视频内容分析模板名称，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>视频内容分析模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能分类任务控制参数。</p>
     */
    public $ClassificationConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能标签任务控制参数。</p>
     */
    public $TagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能封面任务控制参数。</p>
     */
    public $CoverConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能按帧标签任务控制参数。</p>
     */
    public $FrameTagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能拆条任务控制参数。</p>
     */
    public $SplitConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能集锦任务控制参数。</p>
     */
    public $HighlightConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>智能片头片尾任务控制参数。</p>
     */
    public $OpeningAndEndingConfigure;

    /**
     * @param integer $Definition <p>视频内容分析模板唯一标识。</p>
     * @param string $Name <p>视频内容分析模板名称，长度限制：64 个字符。</p>
     * @param string $Comment <p>视频内容分析模板描述信息，长度限制：256 个字符。</p>
     * @param MPSAIAnalysisConfigureInfo $ClassificationConfigure <p>智能分类任务控制参数。</p>
     * @param MPSAIAnalysisConfigureInfo $TagConfigure <p>智能标签任务控制参数。</p>
     * @param MPSAIAnalysisConfigureInfo $CoverConfigure <p>智能封面任务控制参数。</p>
     * @param MPSAIAnalysisConfigureInfo $FrameTagConfigure <p>智能按帧标签任务控制参数。</p>
     * @param MPSAIAnalysisConfigureInfo $SplitConfigure <p>智能拆条任务控制参数。</p>
     * @param MPSAIAnalysisConfigureInfo $HighlightConfigure <p>智能集锦任务控制参数。</p>
     * @param MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure <p>智能片头片尾任务控制参数。</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ClassificationConfigure",$param) and $param["ClassificationConfigure"] !== null) {
            $this->ClassificationConfigure = new MPSAIAnalysisConfigureInfo();
            $this->ClassificationConfigure->deserialize($param["ClassificationConfigure"]);
        }

        if (array_key_exists("TagConfigure",$param) and $param["TagConfigure"] !== null) {
            $this->TagConfigure = new MPSAIAnalysisConfigureInfo();
            $this->TagConfigure->deserialize($param["TagConfigure"]);
        }

        if (array_key_exists("CoverConfigure",$param) and $param["CoverConfigure"] !== null) {
            $this->CoverConfigure = new MPSAIAnalysisConfigureInfo();
            $this->CoverConfigure->deserialize($param["CoverConfigure"]);
        }

        if (array_key_exists("FrameTagConfigure",$param) and $param["FrameTagConfigure"] !== null) {
            $this->FrameTagConfigure = new MPSAIAnalysisConfigureInfo();
            $this->FrameTagConfigure->deserialize($param["FrameTagConfigure"]);
        }

        if (array_key_exists("SplitConfigure",$param) and $param["SplitConfigure"] !== null) {
            $this->SplitConfigure = new MPSAIAnalysisConfigureInfo();
            $this->SplitConfigure->deserialize($param["SplitConfigure"]);
        }

        if (array_key_exists("HighlightConfigure",$param) and $param["HighlightConfigure"] !== null) {
            $this->HighlightConfigure = new MPSAIAnalysisConfigureInfo();
            $this->HighlightConfigure->deserialize($param["HighlightConfigure"]);
        }

        if (array_key_exists("OpeningAndEndingConfigure",$param) and $param["OpeningAndEndingConfigure"] !== null) {
            $this->OpeningAndEndingConfigure = new MPSAIAnalysisConfigureInfo();
            $this->OpeningAndEndingConfigure->deserialize($param["OpeningAndEndingConfigure"]);
        }
    }
}
