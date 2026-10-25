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
 * 修改表字段描述响应
 *
 * @method boolean getResult() 获取整体结果，true表示全部成功
 * @method void setResult(boolean $Result) 设置整体结果，true表示全部成功
 * @method array getFailedColumns() 获取失败的字段列表（部分成功场景），全部成功时为空
 * @method void setFailedColumns(array $FailedColumns) 设置失败的字段列表（部分成功场景），全部成功时为空
 */
class UpdateTableColumnRsp extends AbstractModel
{
    /**
     * @var boolean 整体结果，true表示全部成功
     */
    public $Result;

    /**
     * @var array 失败的字段列表（部分成功场景），全部成功时为空
     */
    public $FailedColumns;

    /**
     * @param boolean $Result 整体结果，true表示全部成功
     * @param array $FailedColumns 失败的字段列表（部分成功场景），全部成功时为空
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("FailedColumns",$param) and $param["FailedColumns"] !== null) {
            $this->FailedColumns = [];
            foreach ($param["FailedColumns"] as $key => $value){
                $obj = new ColumnErrorMessages();
                $obj->deserialize($value);
                array_push($this->FailedColumns, $obj);
            }
        }
    }
}
