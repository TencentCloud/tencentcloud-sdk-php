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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result结果详情
 *
 * @method integer getHitFlag() 获取<p>违规标志<br>0 未命中<br>1 命中</p>
 * @method void setHitFlag(integer $HitFlag) 设置<p>违规标志<br>0 未命中<br>1 命中</p>
 * @method string getLabel() 获取<p>命中的标签<br>Porn 色情<br>Sexy 性感<br>Polity 政治<br>Illegal 违法<br>Abuse 谩骂<br>Terror 暴恐<br>Ad 广告</p>
 * @method void setLabel(string $Label) 设置<p>命中的标签<br>Porn 色情<br>Sexy 性感<br>Polity 政治<br>Illegal 违法<br>Abuse 谩骂<br>Terror 暴恐<br>Ad 广告</p>
 * @method string getSuggestion() 获取<p>审核建议，可选值：<br>Pass 通过，<br>Review 建议人审，<br>Block 确认违规</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>审核建议，可选值：<br>Pass 通过，<br>Review 建议人审，<br>Block 确认违规</p>
 * @method integer getScore() 获取<p>得分</p>
 * @method void setScore(integer $Score) 设置<p>得分</p>
 * @method array getResults() 获取<p>画面截帧图片结果集</p>
 * @method void setResults(array $Results) 设置<p>画面截帧图片结果集</p>
 * @method string getUrl() 获取<p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
 * @method void setUrl(string $Url) 设置<p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
 * @method string getExtra() 获取<p>附加字段</p>
 * @method void setExtra(string $Extra) 设置<p>附加字段</p>
 * @method string getSubLabel() 获取<p>二级标签</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>二级标签</p>
 * @method array getRecognitionResults() 获取<p>场景结果</p>
 * @method void setRecognitionResults(array $RecognitionResults) 设置<p>场景结果</p>
 * @method string getHitType() 获取<p>审核命中类型</p>
 * @method void setHitType(string $HitType) 设置<p>审核命中类型</p>
 * @method string getRequestId() 获取<p>截帧请求ID</p>
 * @method void setRequestId(string $RequestId) 设置<p>截帧请求ID</p>
 * @method array getHitSnippetInfos() 获取<p>命中信息</p>
 * @method void setHitSnippetInfos(array $HitSnippetInfos) 设置<p>命中信息</p>
 */
class ImageResult extends AbstractModel
{
    /**
     * @var integer <p>违规标志<br>0 未命中<br>1 命中</p>
     */
    public $HitFlag;

    /**
     * @var string <p>命中的标签<br>Porn 色情<br>Sexy 性感<br>Polity 政治<br>Illegal 违法<br>Abuse 谩骂<br>Terror 暴恐<br>Ad 广告</p>
     */
    public $Label;

    /**
     * @var string <p>审核建议，可选值：<br>Pass 通过，<br>Review 建议人审，<br>Block 确认违规</p>
     */
    public $Suggestion;

    /**
     * @var integer <p>得分</p>
     */
    public $Score;

    /**
     * @var array <p>画面截帧图片结果集</p>
     */
    public $Results;

    /**
     * @var string <p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
     */
    public $Url;

    /**
     * @var string <p>附加字段</p>
     */
    public $Extra;

    /**
     * @var string <p>二级标签</p>
     */
    public $SubLabel;

    /**
     * @var array <p>场景结果</p>
     */
    public $RecognitionResults;

    /**
     * @var string <p>审核命中类型</p>
     */
    public $HitType;

    /**
     * @var string <p>截帧请求ID</p>
     */
    public $RequestId;

    /**
     * @var array <p>命中信息</p>
     */
    public $HitSnippetInfos;

    /**
     * @param integer $HitFlag <p>违规标志<br>0 未命中<br>1 命中</p>
     * @param string $Label <p>命中的标签<br>Porn 色情<br>Sexy 性感<br>Polity 政治<br>Illegal 违法<br>Abuse 谩骂<br>Terror 暴恐<br>Ad 广告</p>
     * @param string $Suggestion <p>审核建议，可选值：<br>Pass 通过，<br>Review 建议人审，<br>Block 确认违规</p>
     * @param integer $Score <p>得分</p>
     * @param array $Results <p>画面截帧图片结果集</p>
     * @param string $Url <p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
     * @param string $Extra <p>附加字段</p>
     * @param string $SubLabel <p>二级标签</p>
     * @param array $RecognitionResults <p>场景结果</p>
     * @param string $HitType <p>审核命中类型</p>
     * @param string $RequestId <p>截帧请求ID</p>
     * @param array $HitSnippetInfos <p>命中信息</p>
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
        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ImageResultResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("RecognitionResults",$param) and $param["RecognitionResults"] !== null) {
            $this->RecognitionResults = [];
            foreach ($param["RecognitionResults"] as $key => $value){
                $obj = new RecognitionResult();
                $obj->deserialize($value);
                array_push($this->RecognitionResults, $obj);
            }
        }

        if (array_key_exists("HitType",$param) and $param["HitType"] !== null) {
            $this->HitType = $param["HitType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("HitSnippetInfos",$param) and $param["HitSnippetInfos"] !== null) {
            $this->HitSnippetInfos = [];
            foreach ($param["HitSnippetInfos"] as $key => $value){
                $obj = new HitSnippetInfo();
                $obj->deserialize($value);
                array_push($this->HitSnippetInfos, $obj);
            }
        }
    }
}
