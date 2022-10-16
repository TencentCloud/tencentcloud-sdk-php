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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核验流程详细信息
 *
 * @method integer getErrorCode() 获取本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(integer $ErrorCode) 设置本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLivenessErrorCode() 获取本次核验活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessErrorCode(integer $LivenessErrorCode) 设置本次核验活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLivenessErrorMsg() 获取本次核验活体结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessErrorMsg(string $LivenessErrorMsg) 设置本次核验活体结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompareErrorCode() 获取本次核验比对结果。0为视频流中采集的最佳人脸照片和上传的比对照片是同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareErrorCode(integer $CompareErrorCode) 设置本次核验比对结果。0为视频流中采集的最佳人脸照片和上传的比对照片是同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareErrorMsg() 获取本次核验比对结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareErrorMsg(string $CompareErrorMsg) 设置本次核验比对结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReqTimestamp() 获取本次核验时间戳(毫秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReqTimestamp(integer $ReqTimestamp) 设置本次核验时间戳(毫秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSimilarity() 获取本次核验视频流中采集的最佳人脸照片和上传的比对照片的相似度， 范围[0.00, 100.00]，默认大于等于70时判断为同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarity(float $Similarity) 设置本次核验视频流中采集的最佳人脸照片和上传的比对照片的相似度， 范围[0.00, 100.00]，默认大于等于70时判断为同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeq() 获取本次核验的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeq(string $Seq) 设置本次核验的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class VerificationDetail extends AbstractModel
{
    /**
     * @var integer 本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var integer 本次核验活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessErrorCode;

    /**
     * @var string 本次核验活体结果描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessErrorMsg;

    /**
     * @var integer 本次核验比对结果。0为视频流中采集的最佳人脸照片和上传的比对照片是同一人。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareErrorCode;

    /**
     * @var string 本次核验比对结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareErrorMsg;

    /**
     * @var integer 本次核验时间戳(毫秒)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReqTimestamp;

    /**
     * @var float 本次核验视频流中采集的最佳人脸照片和上传的比对照片的相似度， 范围[0.00, 100.00]，默认大于等于70时判断为同一人。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Similarity;

    /**
     * @var string 本次核验的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seq;

    /**
     * @param integer $ErrorCode 本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LivenessErrorCode 本次核验活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LivenessErrorMsg 本次核验活体结果描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompareErrorCode 本次核验比对结果。0为视频流中采集的最佳人脸照片和上传的比对照片是同一人。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareErrorMsg 本次核验比对结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReqTimestamp 本次核验时间戳(毫秒)
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Similarity 本次核验视频流中采集的最佳人脸照片和上传的比对照片的相似度， 范围[0.00, 100.00]，默认大于等于70时判断为同一人。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seq 本次核验的唯一标识
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("LivenessErrorCode",$param) and $param["LivenessErrorCode"] !== null) {
            $this->LivenessErrorCode = $param["LivenessErrorCode"];
        }

        if (array_key_exists("LivenessErrorMsg",$param) and $param["LivenessErrorMsg"] !== null) {
            $this->LivenessErrorMsg = $param["LivenessErrorMsg"];
        }

        if (array_key_exists("CompareErrorCode",$param) and $param["CompareErrorCode"] !== null) {
            $this->CompareErrorCode = $param["CompareErrorCode"];
        }

        if (array_key_exists("CompareErrorMsg",$param) and $param["CompareErrorMsg"] !== null) {
            $this->CompareErrorMsg = $param["CompareErrorMsg"];
        }

        if (array_key_exists("ReqTimestamp",$param) and $param["ReqTimestamp"] !== null) {
            $this->ReqTimestamp = $param["ReqTimestamp"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }
    }
}
