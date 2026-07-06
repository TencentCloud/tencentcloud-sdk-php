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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一致性校验详细信息
 *
 * @method DifferenceDetail getDifference() 获取<p>数据不一致的表详情</p>
 * @method void setDifference(DifferenceDetail $Difference) 设置<p>数据不一致的表详情</p>
 * @method SkippedDetail getSkipped() 获取<p>跳过校验的表详情</p>
 * @method void setSkipped(SkippedDetail $Skipped) 设置<p>跳过校验的表详情</p>
 * @method DifferenceAdvancedObjectsDetail getDifferenceAdvancedObjects() 获取<p>数据库不一致的详情，mongodb业务用到</p>
 * @method void setDifferenceAdvancedObjects(DifferenceAdvancedObjectsDetail $DifferenceAdvancedObjects) 设置<p>数据库不一致的详情，mongodb业务用到</p>
 * @method DifferenceDataDetail getDifferenceData() 获取<p>数据不一致的详情，mongodb业务用到</p>
 * @method void setDifferenceData(DifferenceDataDetail $DifferenceData) 设置<p>数据不一致的详情，mongodb业务用到</p>
 * @method DifferenceRowDetail getDifferenceRow() 获取<p>数据行不一致的详情，mongodb业务用到</p>
 * @method void setDifferenceRow(DifferenceRowDetail $DifferenceRow) 设置<p>数据行不一致的详情，mongodb业务用到</p>
 * @method DifferenceSchemaDetail getDifferenceSchema() 获取<p>表结构不一致详情，pg用</p>
 * @method void setDifferenceSchema(DifferenceSchemaDetail $DifferenceSchema) 设置<p>表结构不一致详情，pg用</p>
 * @method DifferenceOwnerDetail getDifferenceOwner() 获取<p>对象owner不一致详情，pg用</p>
 * @method void setDifferenceOwner(DifferenceOwnerDetail $DifferenceOwner) 设置<p>对象owner不一致详情，pg用</p>
 * @method CompareTableInfo getFullProgress() 获取<p>全量阶段表的校验进度。该字段后续逐步取代Difference</p>
 * @method void setFullProgress(CompareTableInfo $FullProgress) 设置<p>全量阶段表的校验进度。该字段后续逐步取代Difference</p>
 * @method CompareTableInfo getIncDifference() 获取<p>增量阶段表的校验进度</p>
 * @method void setIncDifference(CompareTableInfo $IncDifference) 设置<p>增量阶段表的校验进度</p>
 */
class CompareDetailInfo extends AbstractModel
{
    /**
     * @var DifferenceDetail <p>数据不一致的表详情</p>
     */
    public $Difference;

    /**
     * @var SkippedDetail <p>跳过校验的表详情</p>
     */
    public $Skipped;

    /**
     * @var DifferenceAdvancedObjectsDetail <p>数据库不一致的详情，mongodb业务用到</p>
     */
    public $DifferenceAdvancedObjects;

    /**
     * @var DifferenceDataDetail <p>数据不一致的详情，mongodb业务用到</p>
     */
    public $DifferenceData;

    /**
     * @var DifferenceRowDetail <p>数据行不一致的详情，mongodb业务用到</p>
     */
    public $DifferenceRow;

    /**
     * @var DifferenceSchemaDetail <p>表结构不一致详情，pg用</p>
     */
    public $DifferenceSchema;

    /**
     * @var DifferenceOwnerDetail <p>对象owner不一致详情，pg用</p>
     */
    public $DifferenceOwner;

    /**
     * @var CompareTableInfo <p>全量阶段表的校验进度。该字段后续逐步取代Difference</p>
     */
    public $FullProgress;

    /**
     * @var CompareTableInfo <p>增量阶段表的校验进度</p>
     */
    public $IncDifference;

    /**
     * @param DifferenceDetail $Difference <p>数据不一致的表详情</p>
     * @param SkippedDetail $Skipped <p>跳过校验的表详情</p>
     * @param DifferenceAdvancedObjectsDetail $DifferenceAdvancedObjects <p>数据库不一致的详情，mongodb业务用到</p>
     * @param DifferenceDataDetail $DifferenceData <p>数据不一致的详情，mongodb业务用到</p>
     * @param DifferenceRowDetail $DifferenceRow <p>数据行不一致的详情，mongodb业务用到</p>
     * @param DifferenceSchemaDetail $DifferenceSchema <p>表结构不一致详情，pg用</p>
     * @param DifferenceOwnerDetail $DifferenceOwner <p>对象owner不一致详情，pg用</p>
     * @param CompareTableInfo $FullProgress <p>全量阶段表的校验进度。该字段后续逐步取代Difference</p>
     * @param CompareTableInfo $IncDifference <p>增量阶段表的校验进度</p>
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
        if (array_key_exists("Difference",$param) and $param["Difference"] !== null) {
            $this->Difference = new DifferenceDetail();
            $this->Difference->deserialize($param["Difference"]);
        }

        if (array_key_exists("Skipped",$param) and $param["Skipped"] !== null) {
            $this->Skipped = new SkippedDetail();
            $this->Skipped->deserialize($param["Skipped"]);
        }

        if (array_key_exists("DifferenceAdvancedObjects",$param) and $param["DifferenceAdvancedObjects"] !== null) {
            $this->DifferenceAdvancedObjects = new DifferenceAdvancedObjectsDetail();
            $this->DifferenceAdvancedObjects->deserialize($param["DifferenceAdvancedObjects"]);
        }

        if (array_key_exists("DifferenceData",$param) and $param["DifferenceData"] !== null) {
            $this->DifferenceData = new DifferenceDataDetail();
            $this->DifferenceData->deserialize($param["DifferenceData"]);
        }

        if (array_key_exists("DifferenceRow",$param) and $param["DifferenceRow"] !== null) {
            $this->DifferenceRow = new DifferenceRowDetail();
            $this->DifferenceRow->deserialize($param["DifferenceRow"]);
        }

        if (array_key_exists("DifferenceSchema",$param) and $param["DifferenceSchema"] !== null) {
            $this->DifferenceSchema = new DifferenceSchemaDetail();
            $this->DifferenceSchema->deserialize($param["DifferenceSchema"]);
        }

        if (array_key_exists("DifferenceOwner",$param) and $param["DifferenceOwner"] !== null) {
            $this->DifferenceOwner = new DifferenceOwnerDetail();
            $this->DifferenceOwner->deserialize($param["DifferenceOwner"]);
        }

        if (array_key_exists("FullProgress",$param) and $param["FullProgress"] !== null) {
            $this->FullProgress = new CompareTableInfo();
            $this->FullProgress->deserialize($param["FullProgress"]);
        }

        if (array_key_exists("IncDifference",$param) and $param["IncDifference"] !== null) {
            $this->IncDifference = new CompareTableInfo();
            $this->IncDifference->deserialize($param["IncDifference"]);
        }
    }
}
