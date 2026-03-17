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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表一行数据
 *
 * @method array getTableRecordFieldSet() 获取表一行数据，包含多个Field
 * @method void setTableRecordFieldSet(array $TableRecordFieldSet) 设置表一行数据，包含多个Field
 */
class TableRecord extends AbstractModel
{
    /**
     * @var array 表一行数据，包含多个Field
     */
    public $TableRecordFieldSet;

    /**
     * @param array $TableRecordFieldSet 表一行数据，包含多个Field
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
        if (array_key_exists("TableRecordFieldSet",$param) and $param["TableRecordFieldSet"] !== null) {
            $this->TableRecordFieldSet = [];
            foreach ($param["TableRecordFieldSet"] as $key => $value){
                $obj = new TableRecordField();
                $obj->deserialize($value);
                array_push($this->TableRecordFieldSet, $obj);
            }
        }
    }
}
