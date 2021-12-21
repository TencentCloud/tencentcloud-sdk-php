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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result结果详情
 *
 * @method integer getHitFlag() 获取该参数用于标识审核内容是否命中恶意标签，取值：0（**未命中**）和1（**命中**）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitFlag(integer $HitFlag) 设置该参数用于标识审核内容是否命中恶意标签，取值：0（**未命中**）和1（**命中**）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 -性行为 99*，则表明该文本非常有可能属于色情性行为内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 -性行为 99*，则表明该文本非常有可能属于色情性行为内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取该字段用于返回图像审核结果的子结果，详细内容敬请参考ImageResultResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置该字段用于返回图像审核结果的子结果，详细内容敬请参考ImageResultResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取该字段用于返回审核结果的访问链接（URL），图片支持PNG、JPG、JPEG、BMP、GIF、WEBP格式。<br>备注：数据**默认有效期为12小时**。如您需要更长时间的保存，请在数据储存的COS桶中配置对应的储存时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置该字段用于返回审核结果的访问链接（URL），图片支持PNG、JPG、JPEG、BMP、GIF、WEBP格式。<br>备注：数据**默认有效期为12小时**。如您需要更长时间的保存，请在数据储存的COS桶中配置对应的储存时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubLabel() 获取该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageResult extends AbstractModel
{
    /**
     * @var integer 该参数用于标识审核内容是否命中恶意标签，取值：0（**未命中**）和1（**命中**）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitFlag;

    /**
     * @var string 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var integer 该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 -性行为 99*，则表明该文本非常有可能属于色情性行为内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var array 该字段用于返回图像审核结果的子结果，详细内容敬请参考ImageResultResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var string 该字段用于返回审核结果的访问链接（URL），图片支持PNG、JPG、JPEG、BMP、GIF、WEBP格式。<br>备注：数据**默认有效期为12小时**。如您需要更长时间的保存，请在数据储存的COS桶中配置对应的储存时长。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string 该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubLabel;

    /**
     * @param integer $HitFlag 该参数用于标识审核内容是否命中恶意标签，取值：0（**未命中**）和1（**命中**）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 -性行为 99*，则表明该文本非常有可能属于色情性行为内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 该字段用于返回图像审核结果的子结果，详细内容敬请参考ImageResultResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 该字段用于返回审核结果的访问链接（URL），图片支持PNG、JPG、JPEG、BMP、GIF、WEBP格式。<br>备注：数据**默认有效期为12小时**。如您需要更长时间的保存，请在数据储存的COS桶中配置对应的储存时长。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubLabel 该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
