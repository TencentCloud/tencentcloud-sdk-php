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
 * @method DifferenceDetail getDifference() 获取数据不一致的表详情
 * @method void setDifference(DifferenceDetail $Difference) 设置数据不一致的表详情
 * @method SkippedDetail getSkipped() 获取跳过校验的表详情
 * @method void setSkipped(SkippedDetail $Skipped) 设置跳过校验的表详情
 * @method DifferenceAdvancedObjectsDetail getDifferenceAdvancedObjects() 获取数据库不一致的详情，mongodb业务用到
 * @method void setDifferenceAdvancedObjects(DifferenceAdvancedObjectsDetail $DifferenceAdvancedObjects) 设置数据库不一致的详情，mongodb业务用到
 * @method DifferenceDataDetail getDifferenceData() 获取数据不一致的详情，mongodb业务用到
 * @method void setDifferenceData(DifferenceDataDetail $DifferenceData) 设置数据不一致的详情，mongodb业务用到
 * @method DifferenceRowDetail getDifferenceRow() 获取数据行不一致的详情，mongodb业务用到
 * @method void setDifferenceRow(DifferenceRowDetail $DifferenceRow) 设置数据行不一致的详情，mongodb业务用到
 */
class CompareDetailInfo extends AbstractModel
{
    /**
     * @var DifferenceDetail 数据不一致的表详情
     */
    public $Difference;

    /**
     * @var SkippedDetail 跳过校验的表详情
     */
    public $Skipped;

    /**
     * @var DifferenceAdvancedObjectsDetail 数据库不一致的详情，mongodb业务用到
     */
    public $DifferenceAdvancedObjects;

    /**
     * @var DifferenceDataDetail 数据不一致的详情，mongodb业务用到
     */
    public $DifferenceData;

    /**
     * @var DifferenceRowDetail 数据行不一致的详情，mongodb业务用到
     */
    public $DifferenceRow;

    /**
     * @param DifferenceDetail $Difference 数据不一致的表详情
     * @param SkippedDetail $Skipped 跳过校验的表详情
     * @param DifferenceAdvancedObjectsDetail $DifferenceAdvancedObjects 数据库不一致的详情，mongodb业务用到
     * @param DifferenceDataDetail $DifferenceData 数据不一致的详情，mongodb业务用到
     * @param DifferenceRowDetail $DifferenceRow 数据行不一致的详情，mongodb业务用到
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
    }
}
