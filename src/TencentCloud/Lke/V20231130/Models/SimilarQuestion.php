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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 相似问信息
 *
 * @method string getSimBizId() 获取相似问ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimBizId(string $SimBizId) 设置相似问ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取相似问内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置相似问内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuditStatus() 获取相似问审核状态，1审核失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditStatus(integer $AuditStatus) 设置相似问审核状态，1审核失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimilarQuestion extends AbstractModel
{
    /**
     * @var string 相似问ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimBizId;

    /**
     * @var string 相似问内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var integer 相似问审核状态，1审核失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditStatus;

    /**
     * @param string $SimBizId 相似问ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 相似问内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuditStatus 相似问审核状态，1审核失败
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
        if (array_key_exists("SimBizId",$param) and $param["SimBizId"] !== null) {
            $this->SimBizId = $param["SimBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }
    }
}
