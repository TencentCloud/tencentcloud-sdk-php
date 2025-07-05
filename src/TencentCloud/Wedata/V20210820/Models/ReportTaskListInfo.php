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
 * 上报任务信息
 *
 * @method array getRows() 获取任务列表详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRows(array $Rows) 设置任务列表详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取每页条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置每页条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPageNumber() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReportTaskListInfo extends AbstractModel
{
    /**
     * @var array 任务列表详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rows;

    /**
     * @var integer 页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @var integer 每页条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPageNumber;

    /**
     * @param array $Rows 任务列表详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 每页条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPageNumber 总页数
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
        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new TaskInfoVo();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }
    }
}
