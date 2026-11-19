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
 * 定时任务列表分页结果
 *
 * @method array getTasks() 获取<p>当前页任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>当前页任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取<p>符合筛选条件的任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置<p>符合筛选条件的任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPage() 获取<p>当前页码（从 1 开始）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPage(integer $Page) 设置<p>当前页码（从 1 开始）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取<p>实际生效的每页数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置<p>实际生效的每页数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListScheduledTasksRsp extends AbstractModel
{
    /**
     * @var array <p>当前页任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var integer <p>符合筛选条件的任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer <p>当前页码（从 1 开始）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Page;

    /**
     * @var integer <p>实际生效的每页数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @param array $Tasks <p>当前页任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total <p>符合筛选条件的任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Page <p>当前页码（从 1 开始）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize <p>实际生效的每页数量</p>
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ScheduledTaskDetail();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
