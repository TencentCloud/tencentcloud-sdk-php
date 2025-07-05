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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描任务结果信息
 *
 * @method integer getId() 获取任务最新一次运行结果ID
 * @method void setId(integer $Id) 设置任务最新一次运行结果ID
 * @method string getEndTime() 获取任务扫描结束的时间，格式如：2021-12-12 12:12:12
 * @method void setEndTime(string $EndTime) 设置任务扫描结束的时间，格式如：2021-12-12 12:12:12
 * @method integer getStatus() 获取任务状态，-1待触发 0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
 * @method void setStatus(integer $Status) 设置任务状态，-1待触发 0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
 * @method string getResult() 获取扫描任务结果展示，如果扫描失败，则显示失败原因
 * @method void setResult(string $Result) 设置扫描任务结果展示，如果扫描失败，则显示失败原因
 * @method string getResultDescription() 获取结果描述
 * @method void setResultDescription(string $ResultDescription) 设置结果描述
 * @method string getSuggestion() 获取结果建议
 * @method void setSuggestion(string $Suggestion) 设置结果建议
 * @method float getProgress() 获取扫描进度
 * @method void setProgress(float $Progress) 设置扫描进度
 */
class ScanTaskResult extends AbstractModel
{
    /**
     * @var integer 任务最新一次运行结果ID
     */
    public $Id;

    /**
     * @var string 任务扫描结束的时间，格式如：2021-12-12 12:12:12
     */
    public $EndTime;

    /**
     * @var integer 任务状态，-1待触发 0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
     */
    public $Status;

    /**
     * @var string 扫描任务结果展示，如果扫描失败，则显示失败原因
     */
    public $Result;

    /**
     * @var string 结果描述
     */
    public $ResultDescription;

    /**
     * @var string 结果建议
     */
    public $Suggestion;

    /**
     * @var float 扫描进度
     */
    public $Progress;

    /**
     * @param integer $Id 任务最新一次运行结果ID
     * @param string $EndTime 任务扫描结束的时间，格式如：2021-12-12 12:12:12
     * @param integer $Status 任务状态，-1待触发 0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
     * @param string $Result 扫描任务结果展示，如果扫描失败，则显示失败原因
     * @param string $ResultDescription 结果描述
     * @param string $Suggestion 结果建议
     * @param float $Progress 扫描进度
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ResultDescription",$param) and $param["ResultDescription"] !== null) {
            $this->ResultDescription = $param["ResultDescription"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
