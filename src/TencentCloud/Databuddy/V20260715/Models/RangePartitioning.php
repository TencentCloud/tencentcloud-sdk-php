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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 范围分区策略
 *
 * @method string getFieldName() 获取分区字段
 * @method void setFieldName(string $FieldName) 设置分区字段
 * @method array getAssignments() 获取分区
 * @method void setAssignments(array $Assignments) 设置分区
 */
class RangePartitioning extends AbstractModel
{
    /**
     * @var string 分区字段
     */
    public $FieldName;

    /**
     * @var array 分区
     */
    public $Assignments;

    /**
     * @param string $FieldName 分区字段
     * @param array $Assignments 分区
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Assignments",$param) and $param["Assignments"] !== null) {
            $this->Assignments = [];
            foreach ($param["Assignments"] as $key => $value){
                $obj = new RangePartition();
                $obj->deserialize($value);
                array_push($this->Assignments, $obj);
            }
        }
    }
}
