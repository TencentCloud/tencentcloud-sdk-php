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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAIAnalysisTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取音视频内容分析模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置音视频内容分析模板唯一标识。
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getName() 获取音视频内容分析模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置音视频内容分析模板名称，长度限制：64 个字符。
 * @method string getComment() 获取音视频内容分析模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置音视频内容分析模板描述信息，长度限制：256 个字符。
 * @method ClassificationConfigureInfoForUpdate getClassificationConfigure() 获取智能分类任务控制参数。
 * @method void setClassificationConfigure(ClassificationConfigureInfoForUpdate $ClassificationConfigure) 设置智能分类任务控制参数。
 * @method TagConfigureInfoForUpdate getTagConfigure() 获取智能标签任务控制参数。
 * @method void setTagConfigure(TagConfigureInfoForUpdate $TagConfigure) 设置智能标签任务控制参数。
 * @method CoverConfigureInfoForUpdate getCoverConfigure() 获取智能封面任务控制参数。
 * @method void setCoverConfigure(CoverConfigureInfoForUpdate $CoverConfigure) 设置智能封面任务控制参数。
 * @method FrameTagConfigureInfoForUpdate getFrameTagConfigure() 获取智能按帧标签任务控制参数。
 * @method void setFrameTagConfigure(FrameTagConfigureInfoForUpdate $FrameTagConfigure) 设置智能按帧标签任务控制参数。
 * @method HighlightsConfigureInfoForUpdate getHighlightConfigure() 获取智能精彩集锦任务控制参数。
 * @method void setHighlightConfigure(HighlightsConfigureInfoForUpdate $HighlightConfigure) 设置智能精彩集锦任务控制参数。
 */
class ModifyAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer 音视频内容分析模板唯一标识。
     */
    public $Definition;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 音视频内容分析模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 音视频内容分析模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfoForUpdate 智能分类任务控制参数。
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfoForUpdate 智能标签任务控制参数。
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfoForUpdate 智能封面任务控制参数。
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfoForUpdate 智能按帧标签任务控制参数。
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfoForUpdate 智能精彩集锦任务控制参数。
     */
    public $HighlightConfigure;

    /**
     * @param integer $Definition 音视频内容分析模板唯一标识。
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Name 音视频内容分析模板名称，长度限制：64 个字符。
     * @param string $Comment 音视频内容分析模板描述信息，长度限制：256 个字符。
     * @param ClassificationConfigureInfoForUpdate $ClassificationConfigure 智能分类任务控制参数。
     * @param TagConfigureInfoForUpdate $TagConfigure 智能标签任务控制参数。
     * @param CoverConfigureInfoForUpdate $CoverConfigure 智能封面任务控制参数。
     * @param FrameTagConfigureInfoForUpdate $FrameTagConfigure 智能按帧标签任务控制参数。
     * @param HighlightsConfigureInfoForUpdate $HighlightConfigure 智能精彩集锦任务控制参数。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ClassificationConfigure",$param) and $param["ClassificationConfigure"] !== null) {
            $this->ClassificationConfigure = new ClassificationConfigureInfoForUpdate();
            $this->ClassificationConfigure->deserialize($param["ClassificationConfigure"]);
        }

        if (array_key_exists("TagConfigure",$param) and $param["TagConfigure"] !== null) {
            $this->TagConfigure = new TagConfigureInfoForUpdate();
            $this->TagConfigure->deserialize($param["TagConfigure"]);
        }

        if (array_key_exists("CoverConfigure",$param) and $param["CoverConfigure"] !== null) {
            $this->CoverConfigure = new CoverConfigureInfoForUpdate();
            $this->CoverConfigure->deserialize($param["CoverConfigure"]);
        }

        if (array_key_exists("FrameTagConfigure",$param) and $param["FrameTagConfigure"] !== null) {
            $this->FrameTagConfigure = new FrameTagConfigureInfoForUpdate();
            $this->FrameTagConfigure->deserialize($param["FrameTagConfigure"]);
        }

        if (array_key_exists("HighlightConfigure",$param) and $param["HighlightConfigure"] !== null) {
            $this->HighlightConfigure = new HighlightsConfigureInfoForUpdate();
            $this->HighlightConfigure->deserialize($param["HighlightConfigure"]);
        }
    }
}
