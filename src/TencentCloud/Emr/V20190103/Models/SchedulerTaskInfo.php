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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * yarn资源调度历史
 *
 * @method string getSchedulerName() 获取调度器类型
 * @method void setSchedulerName(string $SchedulerName) 设置调度器类型
 * @method string getOperatorName() 获取操作类型
 * @method void setOperatorName(string $OperatorName) 设置操作类型
 * @method string getCreateTime() 获取开始时间
 * @method void setCreateTime(string $CreateTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getState() 获取状态
 * @method void setState(integer $State) 设置状态
 * @method array getDetails() 获取详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class SchedulerTaskInfo extends AbstractModel
{
    /**
     * @var string 调度器类型
     */
    public $SchedulerName;

    /**
     * @var string 操作类型
     */
    public $OperatorName;

    /**
     * @var string 开始时间
     */
    public $CreateTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 状态
     */
    public $State;

    /**
     * @var array 详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @param string $SchedulerName 调度器类型
     * @param string $OperatorName 操作类型
     * @param string $CreateTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $State 状态
     * @param array $Details 详情
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
        if (array_key_exists("SchedulerName",$param) and $param["SchedulerName"] !== null) {
            $this->SchedulerName = $param["SchedulerName"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new SchedulerTaskDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
