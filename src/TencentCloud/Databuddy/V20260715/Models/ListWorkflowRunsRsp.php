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
 * ListWorkflowRunsRsp
 *
 * @method integer getPageNumber() 获取当前页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置当前页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取每页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置每页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPageNumber() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取工作流运行列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置工作流运行列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizStateEnumInfos() 获取工作流运行状态数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizStateEnumInfos(array $BizStateEnumInfos) 设置工作流运行状态数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizErrorCodeEnumInfos() 获取工作流运行错误码数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizErrorCodeEnumInfos(array $BizErrorCodeEnumInfos) 设置工作流运行错误码数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListWorkflowRunsRsp extends AbstractModel
{
    /**
     * @var integer 当前页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
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
     * @var array 工作流运行列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var array 工作流运行状态数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizStateEnumInfos;

    /**
     * @var array 工作流运行错误码数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizErrorCodeEnumInfos;

    /**
     * @param integer $PageNumber 当前页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 每页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPageNumber 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 工作流运行列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizStateEnumInfos 工作流运行状态数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizErrorCodeEnumInfos 工作流运行错误码数量统计。
统计口径为当前筛选条件下的全量数据，不受 PageNumber / PageSize 影响
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

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new WorkflowRun();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("BizStateEnumInfos",$param) and $param["BizStateEnumInfos"] !== null) {
            $this->BizStateEnumInfos = [];
            foreach ($param["BizStateEnumInfos"] as $key => $value){
                $obj = new ScheduleBizEnumBrief();
                $obj->deserialize($value);
                array_push($this->BizStateEnumInfos, $obj);
            }
        }

        if (array_key_exists("BizErrorCodeEnumInfos",$param) and $param["BizErrorCodeEnumInfos"] !== null) {
            $this->BizErrorCodeEnumInfos = [];
            foreach ($param["BizErrorCodeEnumInfos"] as $key => $value){
                $obj = new ScheduleBizEnumBrief();
                $obj->deserialize($value);
                array_push($this->BizErrorCodeEnumInfos, $obj);
            }
        }
    }
}
