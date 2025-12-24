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
 * @method integer getHitFlag() 获取违规标志
0 未命中
1 命中
 * @method void setHitFlag(integer $HitFlag) 设置违规标志
0 未命中
1 命中
 * @method string getLabel() 获取命中的标签
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
 * @method void setLabel(string $Label) 设置命中的标签
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
 * @method string getSuggestion() 获取审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
 * @method void setSuggestion(string $Suggestion) 设置审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
 * @method integer getScore() 获取得分
 * @method void setScore(integer $Score) 设置得分
 * @method array getResults() 获取画面截帧图片结果集
 * @method void setResults(array $Results) 设置画面截帧图片结果集
 * @method string getUrl() 获取该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
 * @method void setUrl(string $Url) 设置该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
 * @method string getExtra() 获取附加字段
 * @method void setExtra(string $Extra) 设置附加字段
 * @method string getSubLabel() 获取二级标签
 * @method void setSubLabel(string $SubLabel) 设置二级标签
 * @method array getRecognitionResults() 获取场景结果
 * @method void setRecognitionResults(array $RecognitionResults) 设置场景结果
 * @method string getHitType() 获取审核命中类型
 * @method void setHitType(string $HitType) 设置审核命中类型
 * @method string getRequestId() 获取截帧请求ID
 * @method void setRequestId(string $RequestId) 设置截帧请求ID
 */
class ImageResult extends AbstractModel
{
    /**
     * @var integer 违规标志
0 未命中
1 命中
     */
    public $HitFlag;

    /**
     * @var string 命中的标签
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
     */
    public $Label;

    /**
     * @var string 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
     */
    public $Suggestion;

    /**
     * @var integer 得分
     */
    public $Score;

    /**
     * @var array 画面截帧图片结果集
     */
    public $Results;

    /**
     * @var string 该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
     */
    public $Url;

    /**
     * @var string 附加字段
     */
    public $Extra;

    /**
     * @var string 二级标签
     */
    public $SubLabel;

    /**
     * @var array 场景结果
     */
    public $RecognitionResults;

    /**
     * @var string 审核命中类型
     */
    public $HitType;

    /**
     * @var string 截帧请求ID
     */
    public $RequestId;

    /**
     * @param integer $HitFlag 违规标志
0 未命中
1 命中
     * @param string $Label 命中的标签
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
     * @param string $Suggestion 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
     * @param integer $Score 得分
     * @param array $Results 画面截帧图片结果集
     * @param string $Url 该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
     * @param string $Extra 附加字段
     * @param string $SubLabel 二级标签
     * @param array $RecognitionResults 场景结果
     * @param string $HitType 审核命中类型
     * @param string $RequestId 截帧请求ID
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
    }
}
