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
 * 核酸报告结论结构
 *
 * @method BaseItem getSampleTime() 获取采样时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleTime(BaseItem $SampleTime) 设置采样时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getTestTime() 获取检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestTime(BaseItem $TestTime) 设置检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getTestOrganization() 获取检测机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestOrganization(BaseItem $TestOrganization) 设置检测机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getTestResult() 获取检测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestResult(BaseItem $TestResult) 设置检测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getCodeColor() 获取健康码颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeColor(BaseItem $CodeColor) 设置健康码颜色
注意：此字段可能返回 null，表示取不到有效值。
 */
class CovidItem extends AbstractModel
{
    /**
     * @var BaseItem 采样时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleTime;

    /**
     * @var BaseItem 检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestTime;

    /**
     * @var BaseItem 检测机构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestOrganization;

    /**
     * @var BaseItem 检测结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestResult;

    /**
     * @var BaseItem 健康码颜色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeColor;

    /**
     * @param BaseItem $SampleTime 采样时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $TestTime 检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $TestOrganization 检测机构
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $TestResult 检测结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $CodeColor 健康码颜色
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
        if (array_key_exists("SampleTime",$param) and $param["SampleTime"] !== null) {
            $this->SampleTime = new BaseItem();
            $this->SampleTime->deserialize($param["SampleTime"]);
        }

        if (array_key_exists("TestTime",$param) and $param["TestTime"] !== null) {
            $this->TestTime = new BaseItem();
            $this->TestTime->deserialize($param["TestTime"]);
        }

        if (array_key_exists("TestOrganization",$param) and $param["TestOrganization"] !== null) {
            $this->TestOrganization = new BaseItem();
            $this->TestOrganization->deserialize($param["TestOrganization"]);
        }

        if (array_key_exists("TestResult",$param) and $param["TestResult"] !== null) {
            $this->TestResult = new BaseItem();
            $this->TestResult->deserialize($param["TestResult"]);
        }

        if (array_key_exists("CodeColor",$param) and $param["CodeColor"] !== null) {
            $this->CodeColor = new BaseItem();
            $this->CodeColor->deserialize($param["CodeColor"]);
        }
    }
}
