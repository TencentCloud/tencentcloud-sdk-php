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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动外呼任务列表项
 *
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method integer getCalleeCount() 获取被叫数量
 * @method void setCalleeCount(integer $CalleeCount) 设置被叫数量
 * @method array getCallers() 获取主叫号码列表
 * @method void setCallers(array $Callers) 设置主叫号码列表
 * @method integer getNotBefore() 获取起始时间戳
 * @method void setNotBefore(integer $NotBefore) 设置起始时间戳
 * @method integer getNotAfter() 获取结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotAfter(integer $NotAfter) 设置结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIvrId() 获取任务使用的IvrId
 * @method void setIvrId(integer $IvrId) 设置任务使用的IvrId
 * @method integer getState() 获取任务状态：
0初始：任务创建，呼叫未开始
1运行中
2 已完成：任务中所有呼叫完成
3结束中：任务到期，但仍有部分呼叫未结束
4已结束：任务到期终止
5已暂停：可恢复继续执行
 * @method void setState(integer $State) 设置任务状态：
0初始：任务创建，呼叫未开始
1运行中
2 已完成：任务中所有呼叫完成
3结束中：任务到期，但仍有部分呼叫未结束
4已结束：任务到期终止
5已暂停：可恢复继续执行
 * @method integer getTaskId() 获取任务Id
 * @method void setTaskId(integer $TaskId) 设置任务Id
 * @method integer getMaxRingTimeoutSecond() 获取最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) 设置最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
 */
class AutoCalloutTaskInfo extends AbstractModel
{
    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var integer 被叫数量
     */
    public $CalleeCount;

    /**
     * @var array 主叫号码列表
     */
    public $Callers;

    /**
     * @var integer 起始时间戳
     */
    public $NotBefore;

    /**
     * @var integer 结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotAfter;

    /**
     * @var integer 任务使用的IvrId
     */
    public $IvrId;

    /**
     * @var integer 任务状态：
0初始：任务创建，呼叫未开始
1运行中
2 已完成：任务中所有呼叫完成
3结束中：任务到期，但仍有部分呼叫未结束
4已结束：任务到期终止
5已暂停：可恢复继续执行
     */
    public $State;

    /**
     * @var integer 任务Id
     */
    public $TaskId;

    /**
     * @var integer 最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
     */
    public $MaxRingTimeoutSecond;

    /**
     * @param string $Name 任务名
     * @param integer $CalleeCount 被叫数量
     * @param array $Callers 主叫号码列表
     * @param integer $NotBefore 起始时间戳
     * @param integer $NotAfter 结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IvrId 任务使用的IvrId
     * @param integer $State 任务状态：
0初始：任务创建，呼叫未开始
1运行中
2 已完成：任务中所有呼叫完成
3结束中：任务到期，但仍有部分呼叫未结束
4已结束：任务到期终止
5已暂停：可恢复继续执行
     * @param integer $TaskId 任务Id
     * @param integer $MaxRingTimeoutSecond 最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CalleeCount",$param) and $param["CalleeCount"] !== null) {
            $this->CalleeCount = $param["CalleeCount"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("IvrId",$param) and $param["IvrId"] !== null) {
            $this->IvrId = $param["IvrId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }
    }
}
