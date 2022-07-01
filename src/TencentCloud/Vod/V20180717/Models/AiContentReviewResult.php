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
 * 音视频审核结果
 *
 * @method string getType() 获取任务的类型，可以取的值有：
<li>Porn：图片鉴别是否涉及令人反感的信息</li>
<li>Terrorism：图片鉴别是否涉及令人不安全的信息</li>
<li>Political：图片鉴别是否涉及令人不适宜的信息</li>
<li>Porn.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人反感的信息</li>
<li>Porn.Ocr：Ocr 文字鉴别是否涉及令人反感的信息</li>
<li>Political.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人不适宜的信息</li>
<li>Political.Ocr：Ocr 文字鉴别是否涉及令人不适宜的信息</li>
<li>Terrorism.Ocr：Ocr 文字鉴别是否涉及令人不安全的信息</li>
<li>Prohibited.Asr：Asr 文字（ 音频中的文字）鉴违禁</li>
<li>Prohibited.Ocr：Ocr 文字鉴违禁</li>
 * @method void setType(string $Type) 设置任务的类型，可以取的值有：
<li>Porn：图片鉴别是否涉及令人反感的信息</li>
<li>Terrorism：图片鉴别是否涉及令人不安全的信息</li>
<li>Political：图片鉴别是否涉及令人不适宜的信息</li>
<li>Porn.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人反感的信息</li>
<li>Porn.Ocr：Ocr 文字鉴别是否涉及令人反感的信息</li>
<li>Political.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人不适宜的信息</li>
<li>Political.Ocr：Ocr 文字鉴别是否涉及令人不适宜的信息</li>
<li>Terrorism.Ocr：Ocr 文字鉴别是否涉及令人不安全的信息</li>
<li>Prohibited.Asr：Asr 文字（ 音频中的文字）鉴违禁</li>
<li>Prohibited.Ocr：Ocr 文字鉴违禁</li>
 * @method AiReviewTaskPornResult getPornTask() 获取视频音视频审核任务（画面涉及令人反感的信息）的查询结果，当任务类型为 Porn 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornTask(AiReviewTaskPornResult $PornTask) 设置视频音视频审核任务（画面涉及令人反感的信息）的查询结果，当任务类型为 Porn 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskTerrorismResult getTerrorismTask() 获取视频音视频审核任务（画面涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerrorismTask(AiReviewTaskTerrorismResult $TerrorismTask) 设置视频音视频审核任务（画面涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskPoliticalResult getPoliticalTask() 获取视频音视频审核任务（画面涉及令人不适宜的信息）的查询结果，当任务类型为 Political 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticalTask(AiReviewTaskPoliticalResult $PoliticalTask) 设置视频音视频审核任务（画面涉及令人不适宜的信息）的查询结果，当任务类型为 Political 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskPornAsrResult getPornAsrTask() 获取视频音视频审核任务（Asr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornAsrTask(AiReviewTaskPornAsrResult $PornAsrTask) 设置视频音视频审核任务（Asr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskPornOcrResult getPornOcrTask() 获取视频音视频审核任务（Ocr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornOcrTask(AiReviewTaskPornOcrResult $PornOcrTask) 设置视频音视频审核任务（Ocr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskPoliticalAsrResult getPoliticalAsrTask() 获取视频音视频审核任务（Asr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticalAsrTask(AiReviewTaskPoliticalAsrResult $PoliticalAsrTask) 设置视频音视频审核任务（Asr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskPoliticalOcrResult getPoliticalOcrTask() 获取视频音视频审核任务（Ocr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticalOcrTask(AiReviewTaskPoliticalOcrResult $PoliticalOcrTask) 设置视频音视频审核任务（Ocr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskTerrorismOcrResult getTerrorismOcrTask() 获取视频音视频审核任务（ Ocr 文字涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerrorismOcrTask(AiReviewTaskTerrorismOcrResult $TerrorismOcrTask) 设置视频音视频审核任务（ Ocr 文字涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskProhibitedOcrResult getProhibitedOcrTask() 获取视频音视频审核 Ocr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProhibitedOcrTask(AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask) 设置视频音视频审核 Ocr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiReviewTaskProhibitedAsrResult getProhibitedAsrTask() 获取视频音视频审核 Asr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProhibitedAsrTask(AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask) 设置视频音视频审核 Asr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiContentReviewResult extends AbstractModel
{
    /**
     * @var string 任务的类型，可以取的值有：
<li>Porn：图片鉴别是否涉及令人反感的信息</li>
<li>Terrorism：图片鉴别是否涉及令人不安全的信息</li>
<li>Political：图片鉴别是否涉及令人不适宜的信息</li>
<li>Porn.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人反感的信息</li>
<li>Porn.Ocr：Ocr 文字鉴别是否涉及令人反感的信息</li>
<li>Political.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人不适宜的信息</li>
<li>Political.Ocr：Ocr 文字鉴别是否涉及令人不适宜的信息</li>
<li>Terrorism.Ocr：Ocr 文字鉴别是否涉及令人不安全的信息</li>
<li>Prohibited.Asr：Asr 文字（ 音频中的文字）鉴违禁</li>
<li>Prohibited.Ocr：Ocr 文字鉴违禁</li>
     */
    public $Type;

    /**
     * @var AiReviewTaskPornResult 视频音视频审核任务（画面涉及令人反感的信息）的查询结果，当任务类型为 Porn 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornTask;

    /**
     * @var AiReviewTaskTerrorismResult 视频音视频审核任务（画面涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerrorismTask;

    /**
     * @var AiReviewTaskPoliticalResult 视频音视频审核任务（画面涉及令人不适宜的信息）的查询结果，当任务类型为 Political 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticalTask;

    /**
     * @var AiReviewTaskPornAsrResult 视频音视频审核任务（Asr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornAsrTask;

    /**
     * @var AiReviewTaskPornOcrResult 视频音视频审核任务（Ocr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornOcrTask;

    /**
     * @var AiReviewTaskPoliticalAsrResult 视频音视频审核任务（Asr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticalAsrTask;

    /**
     * @var AiReviewTaskPoliticalOcrResult 视频音视频审核任务（Ocr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticalOcrTask;

    /**
     * @var AiReviewTaskTerrorismOcrResult 视频音视频审核任务（ Ocr 文字涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerrorismOcrTask;

    /**
     * @var AiReviewTaskProhibitedOcrResult 视频音视频审核 Ocr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProhibitedOcrTask;

    /**
     * @var AiReviewTaskProhibitedAsrResult 视频音视频审核 Asr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProhibitedAsrTask;

    /**
     * @param string $Type 任务的类型，可以取的值有：
<li>Porn：图片鉴别是否涉及令人反感的信息</li>
<li>Terrorism：图片鉴别是否涉及令人不安全的信息</li>
<li>Political：图片鉴别是否涉及令人不适宜的信息</li>
<li>Porn.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人反感的信息</li>
<li>Porn.Ocr：Ocr 文字鉴别是否涉及令人反感的信息</li>
<li>Political.Asr：Asr 文字（ 音频中的文字）鉴别是否涉及令人不适宜的信息</li>
<li>Political.Ocr：Ocr 文字鉴别是否涉及令人不适宜的信息</li>
<li>Terrorism.Ocr：Ocr 文字鉴别是否涉及令人不安全的信息</li>
<li>Prohibited.Asr：Asr 文字（ 音频中的文字）鉴违禁</li>
<li>Prohibited.Ocr：Ocr 文字鉴违禁</li>
     * @param AiReviewTaskPornResult $PornTask 视频音视频审核任务（画面涉及令人反感的信息）的查询结果，当任务类型为 Porn 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskTerrorismResult $TerrorismTask 视频音视频审核任务（画面涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskPoliticalResult $PoliticalTask 视频音视频审核任务（画面涉及令人不适宜的信息）的查询结果，当任务类型为 Political 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskPornAsrResult $PornAsrTask 视频音视频审核任务（Asr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskPornOcrResult $PornOcrTask 视频音视频审核任务（Ocr 文字涉及令人反感的信息）的查询结果，当任务类型为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskPoliticalAsrResult $PoliticalAsrTask 视频音视频审核任务（Asr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Asr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskPoliticalOcrResult $PoliticalOcrTask 视频音视频审核任务（Ocr 文字涉及令人不适宜的信息）的查询结果，当任务类型为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskTerrorismOcrResult $TerrorismOcrTask 视频音视频审核任务（ Ocr 文字涉及令人不安全的信息）的查询结果，当任务类型为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask 视频音视频审核 Ocr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask 视频音视频审核 Asr 文字鉴违禁任务的查询结果，当任务类型为 Prohibited.Asr 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PornTask",$param) and $param["PornTask"] !== null) {
            $this->PornTask = new AiReviewTaskPornResult();
            $this->PornTask->deserialize($param["PornTask"]);
        }

        if (array_key_exists("TerrorismTask",$param) and $param["TerrorismTask"] !== null) {
            $this->TerrorismTask = new AiReviewTaskTerrorismResult();
            $this->TerrorismTask->deserialize($param["TerrorismTask"]);
        }

        if (array_key_exists("PoliticalTask",$param) and $param["PoliticalTask"] !== null) {
            $this->PoliticalTask = new AiReviewTaskPoliticalResult();
            $this->PoliticalTask->deserialize($param["PoliticalTask"]);
        }

        if (array_key_exists("PornAsrTask",$param) and $param["PornAsrTask"] !== null) {
            $this->PornAsrTask = new AiReviewTaskPornAsrResult();
            $this->PornAsrTask->deserialize($param["PornAsrTask"]);
        }

        if (array_key_exists("PornOcrTask",$param) and $param["PornOcrTask"] !== null) {
            $this->PornOcrTask = new AiReviewTaskPornOcrResult();
            $this->PornOcrTask->deserialize($param["PornOcrTask"]);
        }

        if (array_key_exists("PoliticalAsrTask",$param) and $param["PoliticalAsrTask"] !== null) {
            $this->PoliticalAsrTask = new AiReviewTaskPoliticalAsrResult();
            $this->PoliticalAsrTask->deserialize($param["PoliticalAsrTask"]);
        }

        if (array_key_exists("PoliticalOcrTask",$param) and $param["PoliticalOcrTask"] !== null) {
            $this->PoliticalOcrTask = new AiReviewTaskPoliticalOcrResult();
            $this->PoliticalOcrTask->deserialize($param["PoliticalOcrTask"]);
        }

        if (array_key_exists("TerrorismOcrTask",$param) and $param["TerrorismOcrTask"] !== null) {
            $this->TerrorismOcrTask = new AiReviewTaskTerrorismOcrResult();
            $this->TerrorismOcrTask->deserialize($param["TerrorismOcrTask"]);
        }

        if (array_key_exists("ProhibitedOcrTask",$param) and $param["ProhibitedOcrTask"] !== null) {
            $this->ProhibitedOcrTask = new AiReviewTaskProhibitedOcrResult();
            $this->ProhibitedOcrTask->deserialize($param["ProhibitedOcrTask"]);
        }

        if (array_key_exists("ProhibitedAsrTask",$param) and $param["ProhibitedAsrTask"] !== null) {
            $this->ProhibitedAsrTask = new AiReviewTaskProhibitedAsrResult();
            $this->ProhibitedAsrTask->deserialize($param["ProhibitedAsrTask"]);
        }
    }
}
