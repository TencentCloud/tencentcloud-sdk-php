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
 * 报告内容
 *
 * @method ImageText getImageText() 获取报告文本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageText(ImageText $ImageText) 设置报告文本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKindSet() 获取报告类别信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKindSet(array $KindSet) 设置报告类别信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BasicInfo getBasicInfo() 获取基本信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicInfo(BasicInfo $BasicInfo) 设置基本信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method PersonalInfo getPersonalInfo() 获取个人隐私信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalInfo(PersonalInfo $PersonalInfo) 设置个人隐私信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTestList() 获取检验指标内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestList(array $TestList) 设置检验指标内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method Inspection getInspection() 获取检查报告内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspection(Inspection $Inspection) 设置检查报告内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method CaseHistory getCaseHistory() 获取病历资料内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaseHistory(CaseHistory $CaseHistory) 设置病历资料内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method Pathology getPathology() 获取病理报告内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathology(Pathology $Pathology) 设置病理报告内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageReport extends AbstractModel
{
    /**
     * @var ImageText 报告文本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageText;

    /**
     * @var array 报告类别信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KindSet;

    /**
     * @var BasicInfo 基本信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicInfo;

    /**
     * @var PersonalInfo 个人隐私信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalInfo;

    /**
     * @var array 检验指标内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestList;

    /**
     * @var Inspection 检查报告内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Inspection;

    /**
     * @var CaseHistory 病历资料内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaseHistory;

    /**
     * @var Pathology 病理报告内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pathology;

    /**
     * @param ImageText $ImageText 报告文本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KindSet 报告类别信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BasicInfo $BasicInfo 基本信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param PersonalInfo $PersonalInfo 个人隐私信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TestList 检验指标内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param Inspection $Inspection 检查报告内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param CaseHistory $CaseHistory 病历资料内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param Pathology $Pathology 病理报告内容
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
        if (array_key_exists("ImageText",$param) and $param["ImageText"] !== null) {
            $this->ImageText = new ImageText();
            $this->ImageText->deserialize($param["ImageText"]);
        }

        if (array_key_exists("KindSet",$param) and $param["KindSet"] !== null) {
            $this->KindSet = [];
            foreach ($param["KindSet"] as $key => $value){
                $obj = new KindItem();
                $obj->deserialize($value);
                array_push($this->KindSet, $obj);
            }
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new BasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("PersonalInfo",$param) and $param["PersonalInfo"] !== null) {
            $this->PersonalInfo = new PersonalInfo();
            $this->PersonalInfo->deserialize($param["PersonalInfo"]);
        }

        if (array_key_exists("TestList",$param) and $param["TestList"] !== null) {
            $this->TestList = [];
            foreach ($param["TestList"] as $key => $value){
                $obj = new TestItem();
                $obj->deserialize($value);
                array_push($this->TestList, $obj);
            }
        }

        if (array_key_exists("Inspection",$param) and $param["Inspection"] !== null) {
            $this->Inspection = new Inspection();
            $this->Inspection->deserialize($param["Inspection"]);
        }

        if (array_key_exists("CaseHistory",$param) and $param["CaseHistory"] !== null) {
            $this->CaseHistory = new CaseHistory();
            $this->CaseHistory->deserialize($param["CaseHistory"]);
        }

        if (array_key_exists("Pathology",$param) and $param["Pathology"] !== null) {
            $this->Pathology = new Pathology();
            $this->Pathology->deserialize($param["Pathology"]);
        }
    }
}
