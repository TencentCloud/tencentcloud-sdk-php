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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询任务绑定的事件的响应
 *
 * @method integer getPageNumber() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取单页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置单页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedTaskList() 获取任务直接关联的上下游任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedTaskList(array $RelatedTaskList) 设置任务直接关联的上下游任务列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeRelatedTasksByTaskIdResp extends AbstractModel
{
    /**
     * @var integer 页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 单页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 任务直接关联的上下游任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedTaskList;

    /**
     * @param integer $PageNumber 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 单页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedTaskList 任务直接关联的上下游任务列表
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RelatedTaskList",$param) and $param["RelatedTaskList"] !== null) {
            $this->RelatedTaskList = [];
            foreach ($param["RelatedTaskList"] as $key => $value){
                $obj = new RelatedTask();
                $obj->deserialize($value);
                array_push($this->RelatedTaskList, $obj);
            }
        }
    }
}
