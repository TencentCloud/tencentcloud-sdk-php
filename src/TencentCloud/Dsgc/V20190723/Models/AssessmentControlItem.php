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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DSPA评估控制项
 *
 * @method string getItemId() 获取评估项Id
 * @method void setItemId(string $ItemId) 设置评估项Id
 * @method string getItemName() 获取评估项名称
 * @method void setItemName(string $ItemName) 设置评估项名称
 * @method string getDescription() 获取评估项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置评估项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取评估项来源，内置/用户自定，取值（system，user）
 * @method void setSource(string $Source) 设置评估项来源，内置/用户自定，取值（system，user）
 * @method string getItemType() 获取评估项类型，问卷/自动化，取值（questionnaire，auto）
 * @method void setItemType(string $ItemType) 设置评估项类型，问卷/自动化，取值（questionnaire，auto）
 * @method string getItemSubType() 获取评估项子类型，单选/多选/时间/文本/AKSK等，取值（singlechoice，multichoice，date，text，AKSK……等）
 * @method void setItemSubType(string $ItemSubType) 设置评估项子类型，单选/多选/时间/文本/AKSK等，取值（singlechoice，multichoice，date，text，AKSK……等）
 * @method string getCreatedTime() 获取评估项创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置评估项创建时间
 * @method string getStatus() 获取评估项启用状态，启用/未启用，取值draft / launched
 * @method void setStatus(string $Status) 设置评估项启用状态，启用/未启用，取值draft / launched
 * @method integer getTemplateCount() 获取评估项关联的模版数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateCount(integer $TemplateCount) 设置评估项关联的模版数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssessmentControlItem extends AbstractModel
{
    /**
     * @var string 评估项Id
     */
    public $ItemId;

    /**
     * @var string 评估项名称
     */
    public $ItemName;

    /**
     * @var string 评估项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 评估项来源，内置/用户自定，取值（system，user）
     */
    public $Source;

    /**
     * @var string 评估项类型，问卷/自动化，取值（questionnaire，auto）
     */
    public $ItemType;

    /**
     * @var string 评估项子类型，单选/多选/时间/文本/AKSK等，取值（singlechoice，multichoice，date，text，AKSK……等）
     */
    public $ItemSubType;

    /**
     * @var string 评估项创建时间
     */
    public $CreatedTime;

    /**
     * @var string 评估项启用状态，启用/未启用，取值draft / launched
     */
    public $Status;

    /**
     * @var integer 评估项关联的模版数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateCount;

    /**
     * @param string $ItemId 评估项Id
     * @param string $ItemName 评估项名称
     * @param string $Description 评估项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 评估项来源，内置/用户自定，取值（system，user）
     * @param string $ItemType 评估项类型，问卷/自动化，取值（questionnaire，auto）
     * @param string $ItemSubType 评估项子类型，单选/多选/时间/文本/AKSK等，取值（singlechoice，multichoice，date，text，AKSK……等）
     * @param string $CreatedTime 评估项创建时间
     * @param string $Status 评估项启用状态，启用/未启用，取值draft / launched
     * @param integer $TemplateCount 评估项关联的模版数量
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }

        if (array_key_exists("ItemSubType",$param) and $param["ItemSubType"] !== null) {
            $this->ItemSubType = $param["ItemSubType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TemplateCount",$param) and $param["TemplateCount"] !== null) {
            $this->TemplateCount = $param["TemplateCount"];
        }
    }
}
