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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 纠错结果列表
 *
 * @method integer getOrder() 获取纠错句子的序号。
 * @method void setOrder(integer $Order) 设置纠错句子的序号。
 * @method integer getBeginOffset() 获取错误的起始位置，从0开始。
 * @method void setBeginOffset(integer $BeginOffset) 设置错误的起始位置，从0开始。
 * @method integer getLen() 获取错误内容长度。
 * @method void setLen(integer $Len) 设置错误内容长度。
 * @method string getWord() 获取错误内容。
 * @method void setWord(string $Word) 设置错误内容。
 * @method array getCorrectWord() 获取纠错结果，当为删除类错误时，结果为null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorrectWord(array $CorrectWord) 设置纠错结果，当为删除类错误时，结果为null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCorrectionType() 获取纠错类型。0：替换；1：插入；2：删除。
 * @method void setCorrectionType(integer $CorrectionType) 设置纠错类型。0：替换；1：插入；2：删除。
 * @method integer getConfidence() 获取纠错信息置信度。0：error；1：warning；error的置信度更高。（仅供参考）
 * @method void setConfidence(integer $Confidence) 设置纠错信息置信度。0：error；1：warning；error的置信度更高。（仅供参考）
 * @method string getDescriptionZh() 获取纠错信息中文描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptionZh(string $DescriptionZh) 设置纠错信息中文描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptionEn() 获取纠错信息英文描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptionEn(string $DescriptionEn) 设置纠错信息英文描述。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CorrectionItem extends AbstractModel
{
    /**
     * @var integer 纠错句子的序号。
     */
    public $Order;

    /**
     * @var integer 错误的起始位置，从0开始。
     */
    public $BeginOffset;

    /**
     * @var integer 错误内容长度。
     */
    public $Len;

    /**
     * @var string 错误内容。
     */
    public $Word;

    /**
     * @var array 纠错结果，当为删除类错误时，结果为null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorrectWord;

    /**
     * @var integer 纠错类型。0：替换；1：插入；2：删除。
     */
    public $CorrectionType;

    /**
     * @var integer 纠错信息置信度。0：error；1：warning；error的置信度更高。（仅供参考）
     */
    public $Confidence;

    /**
     * @var string 纠错信息中文描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptionZh;

    /**
     * @var string 纠错信息英文描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptionEn;

    /**
     * @param integer $Order 纠错句子的序号。
     * @param integer $BeginOffset 错误的起始位置，从0开始。
     * @param integer $Len 错误内容长度。
     * @param string $Word 错误内容。
     * @param array $CorrectWord 纠错结果，当为删除类错误时，结果为null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CorrectionType 纠错类型。0：替换；1：插入；2：删除。
     * @param integer $Confidence 纠错信息置信度。0：error；1：warning；error的置信度更高。（仅供参考）
     * @param string $DescriptionZh 纠错信息中文描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescriptionEn 纠错信息英文描述。
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
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("BeginOffset",$param) and $param["BeginOffset"] !== null) {
            $this->BeginOffset = $param["BeginOffset"];
        }

        if (array_key_exists("Len",$param) and $param["Len"] !== null) {
            $this->Len = $param["Len"];
        }

        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("CorrectWord",$param) and $param["CorrectWord"] !== null) {
            $this->CorrectWord = $param["CorrectWord"];
        }

        if (array_key_exists("CorrectionType",$param) and $param["CorrectionType"] !== null) {
            $this->CorrectionType = $param["CorrectionType"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("DescriptionZh",$param) and $param["DescriptionZh"] !== null) {
            $this->DescriptionZh = $param["DescriptionZh"];
        }

        if (array_key_exists("DescriptionEn",$param) and $param["DescriptionEn"] !== null) {
            $this->DescriptionEn = $param["DescriptionEn"];
        }
    }
}
