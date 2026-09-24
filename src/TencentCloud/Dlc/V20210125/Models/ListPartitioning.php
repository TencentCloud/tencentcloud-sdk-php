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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc ListPartitioning分区定义
 *
 * @method array getFieldNames() 获取<p>分区字段</p>
 * @method void setFieldNames(array $FieldNames) 设置<p>分区字段</p>
 * @method array getAssignments() 获取<p>分区列表信息</p>
 * @method void setAssignments(array $Assignments) 设置<p>分区列表信息</p>
 */
class ListPartitioning extends AbstractModel
{
    /**
     * @var array <p>分区字段</p>
     */
    public $FieldNames;

    /**
     * @var array <p>分区列表信息</p>
     */
    public $Assignments;

    /**
     * @param array $FieldNames <p>分区字段</p>
     * @param array $Assignments <p>分区列表信息</p>
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
        if (array_key_exists("FieldNames",$param) and $param["FieldNames"] !== null) {
            $this->FieldNames = $param["FieldNames"];
        }

        if (array_key_exists("Assignments",$param) and $param["Assignments"] !== null) {
            $this->Assignments = [];
            foreach ($param["Assignments"] as $key => $value){
                $obj = new ListPartition();
                $obj->deserialize($value);
                array_push($this->Assignments, $obj);
            }
        }
    }
}
