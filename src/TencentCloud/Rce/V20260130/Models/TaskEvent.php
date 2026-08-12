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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 做任务事件详情
 *
 * @method string getPromotionId() 获取<p>营销活动ID</p>
 * @method void setPromotionId(string $PromotionId) 设置<p>营销活动ID</p>
 * @method string getPromotionName() 获取<p>营销活动名称</p>
 * @method void setPromotionName(string $PromotionName) 设置<p>营销活动名称</p>
 * @method string getDescription() 获取<p>营销活动描述</p>
 * @method void setDescription(string $Description) 设置<p>营销活动描述</p>
 * @method string getInviterUserId() 获取<p>邀请人ID</p>
 * @method void setInviterUserId(string $InviterUserId) 设置<p>邀请人ID</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getTaskType() 获取<p>任务类型，如签到打卡、观看广告、累计步数等</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，如签到打卡、观看广告、累计步数等</p>
 * @method integer getTaskCostTime() 获取<p>任务完成耗时</p><p>单位：毫秒</p>
 * @method void setTaskCostTime(integer $TaskCostTime) 设置<p>任务完成耗时</p><p>单位：毫秒</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class TaskEvent extends AbstractModel
{
    /**
     * @var string <p>营销活动ID</p>
     */
    public $PromotionId;

    /**
     * @var string <p>营销活动名称</p>
     */
    public $PromotionName;

    /**
     * @var string <p>营销活动描述</p>
     */
    public $Description;

    /**
     * @var string <p>邀请人ID</p>
     */
    public $InviterUserId;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务类型，如签到打卡、观看广告、累计步数等</p>
     */
    public $TaskType;

    /**
     * @var integer <p>任务完成耗时</p><p>单位：毫秒</p>
     */
    public $TaskCostTime;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $PromotionId <p>营销活动ID</p>
     * @param string $PromotionName <p>营销活动名称</p>
     * @param string $Description <p>营销活动描述</p>
     * @param string $InviterUserId <p>邀请人ID</p>
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $TaskType <p>任务类型，如签到打卡、观看广告、累计步数等</p>
     * @param integer $TaskCostTime <p>任务完成耗时</p><p>单位：毫秒</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("PromotionId",$param) and $param["PromotionId"] !== null) {
            $this->PromotionId = $param["PromotionId"];
        }

        if (array_key_exists("PromotionName",$param) and $param["PromotionName"] !== null) {
            $this->PromotionName = $param["PromotionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InviterUserId",$param) and $param["InviterUserId"] !== null) {
            $this->InviterUserId = $param["InviterUserId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskCostTime",$param) and $param["TaskCostTime"] !== null) {
            $this->TaskCostTime = $param["TaskCostTime"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
