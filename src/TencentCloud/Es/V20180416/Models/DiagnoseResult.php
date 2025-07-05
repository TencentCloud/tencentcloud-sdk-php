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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能运维诊断结果
 *
 * @method string getInstanceId() 获取ES实例ID
 * @method void setInstanceId(string $InstanceId) 设置ES实例ID
 * @method string getRequestId() 获取诊断报告ID
 * @method void setRequestId(string $RequestId) 设置诊断报告ID
 * @method string getCreateTime() 获取诊断触发时间
 * @method void setCreateTime(string $CreateTime) 设置诊断触发时间
 * @method boolean getCompleted() 获取诊断是否完成
 * @method void setCompleted(boolean $Completed) 设置诊断是否完成
 * @method integer getScore() 获取诊断总得分
 * @method void setScore(integer $Score) 设置诊断总得分
 * @method integer getJobType() 获取诊断类型，2 定时诊断，3 客户手动触发诊断
 * @method void setJobType(integer $JobType) 设置诊断类型，2 定时诊断，3 客户手动触发诊断
 * @method JobParam getJobParam() 获取诊断参数，如诊断时间，诊断索引等
 * @method void setJobParam(JobParam $JobParam) 设置诊断参数，如诊断时间，诊断索引等
 * @method array getJobResults() 获取诊断项结果列表
 * @method void setJobResults(array $JobResults) 设置诊断项结果列表
 */
class DiagnoseResult extends AbstractModel
{
    /**
     * @var string ES实例ID
     */
    public $InstanceId;

    /**
     * @var string 诊断报告ID
     */
    public $RequestId;

    /**
     * @var string 诊断触发时间
     */
    public $CreateTime;

    /**
     * @var boolean 诊断是否完成
     */
    public $Completed;

    /**
     * @var integer 诊断总得分
     */
    public $Score;

    /**
     * @var integer 诊断类型，2 定时诊断，3 客户手动触发诊断
     */
    public $JobType;

    /**
     * @var JobParam 诊断参数，如诊断时间，诊断索引等
     */
    public $JobParam;

    /**
     * @var array 诊断项结果列表
     */
    public $JobResults;

    /**
     * @param string $InstanceId ES实例ID
     * @param string $RequestId 诊断报告ID
     * @param string $CreateTime 诊断触发时间
     * @param boolean $Completed 诊断是否完成
     * @param integer $Score 诊断总得分
     * @param integer $JobType 诊断类型，2 定时诊断，3 客户手动触发诊断
     * @param JobParam $JobParam 诊断参数，如诊断时间，诊断索引等
     * @param array $JobResults 诊断项结果列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Completed",$param) and $param["Completed"] !== null) {
            $this->Completed = $param["Completed"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobParam",$param) and $param["JobParam"] !== null) {
            $this->JobParam = new JobParam();
            $this->JobParam->deserialize($param["JobParam"]);
        }

        if (array_key_exists("JobResults",$param) and $param["JobResults"] !== null) {
            $this->JobResults = [];
            foreach ($param["JobResults"] as $key => $value){
                $obj = new DiagnoseJobResult();
                $obj->deserialize($value);
                array_push($this->JobResults, $obj);
            }
        }
    }
}
