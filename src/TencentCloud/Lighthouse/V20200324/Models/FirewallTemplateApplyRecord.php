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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙模板应用记录。
 *
 * @method string getTaskId() 获取任务ID。
 * @method void setTaskId(string $TaskId) 设置任务ID。
 * @method string getApplyTime() 获取应用模板的时间。
 * @method void setApplyTime(string $ApplyTime) 设置应用模板的时间。
 * @method array getTemplateRuleSet() 获取模板规则列表。
 * @method void setTemplateRuleSet(array $TemplateRuleSet) 设置模板规则列表。
 * @method string getApplyState() 获取应用模板的执行状态。
 * @method void setApplyState(string $ApplyState) 设置应用模板的执行状态。
 * @method integer getSuccessCount() 获取应用成功的实例数量。
 * @method void setSuccessCount(integer $SuccessCount) 设置应用成功的实例数量。
 * @method integer getFailedCount() 获取应用失败的实例数量。
 * @method void setFailedCount(integer $FailedCount) 设置应用失败的实例数量。
 * @method integer getRunningCount() 获取正在应用中的实例数量。
 * @method void setRunningCount(integer $RunningCount) 设置正在应用中的实例数量。
 * @method array getApplyDetailSet() 获取应用模板的执行细节。
 * @method void setApplyDetailSet(array $ApplyDetailSet) 设置应用模板的执行细节。
 */
class FirewallTemplateApplyRecord extends AbstractModel
{
    /**
     * @var string 任务ID。
     */
    public $TaskId;

    /**
     * @var string 应用模板的时间。
     */
    public $ApplyTime;

    /**
     * @var array 模板规则列表。
     */
    public $TemplateRuleSet;

    /**
     * @var string 应用模板的执行状态。
     */
    public $ApplyState;

    /**
     * @var integer 应用成功的实例数量。
     */
    public $SuccessCount;

    /**
     * @var integer 应用失败的实例数量。
     */
    public $FailedCount;

    /**
     * @var integer 正在应用中的实例数量。
     */
    public $RunningCount;

    /**
     * @var array 应用模板的执行细节。
     */
    public $ApplyDetailSet;

    /**
     * @param string $TaskId 任务ID。
     * @param string $ApplyTime 应用模板的时间。
     * @param array $TemplateRuleSet 模板规则列表。
     * @param string $ApplyState 应用模板的执行状态。
     * @param integer $SuccessCount 应用成功的实例数量。
     * @param integer $FailedCount 应用失败的实例数量。
     * @param integer $RunningCount 正在应用中的实例数量。
     * @param array $ApplyDetailSet 应用模板的执行细节。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("TemplateRuleSet",$param) and $param["TemplateRuleSet"] !== null) {
            $this->TemplateRuleSet = [];
            foreach ($param["TemplateRuleSet"] as $key => $value){
                $obj = new FirewallTemplateRule();
                $obj->deserialize($value);
                array_push($this->TemplateRuleSet, $obj);
            }
        }

        if (array_key_exists("ApplyState",$param) and $param["ApplyState"] !== null) {
            $this->ApplyState = $param["ApplyState"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("ApplyDetailSet",$param) and $param["ApplyDetailSet"] !== null) {
            $this->ApplyDetailSet = [];
            foreach ($param["ApplyDetailSet"] as $key => $value){
                $obj = new FirewallTemplateApplyRecordDetail();
                $obj->deserialize($value);
                array_push($this->ApplyDetailSet, $obj);
            }
        }
    }
}
