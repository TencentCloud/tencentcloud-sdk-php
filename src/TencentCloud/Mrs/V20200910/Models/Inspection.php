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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查报告内容
 *
 * @method Finding getFinding() 获取检查所见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinding(Finding $Finding) 设置检查所见
注意：此字段可能返回 null，表示取不到有效值。
 * @method Conclusion getConclusion() 获取检查结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConclusion(Conclusion $Conclusion) 设置检查结论
注意：此字段可能返回 null，表示取不到有效值。
 */
class Inspection extends AbstractModel
{
    /**
     * @var Finding 检查所见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Finding;

    /**
     * @var Conclusion 检查结论
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conclusion;

    /**
     * @param Finding $Finding 检查所见
注意：此字段可能返回 null，表示取不到有效值。
     * @param Conclusion $Conclusion 检查结论
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
        if (array_key_exists("Finding",$param) and $param["Finding"] !== null) {
            $this->Finding = new Finding();
            $this->Finding->deserialize($param["Finding"]);
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = new Conclusion();
            $this->Conclusion->deserialize($param["Conclusion"]);
        }
    }
}
