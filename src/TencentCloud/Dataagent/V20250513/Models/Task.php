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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息
 *
 * @method integer getId() 获取任务ID
 * @method void setId(integer $Id) 设置任务ID
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method array getStepInfoList() 获取任务步骤列表
 * @method void setStepInfoList(array $StepInfoList) 设置任务步骤列表
 */
class Task extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $Id;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var array 任务步骤列表
     */
    public $StepInfoList;

    /**
     * @param integer $Id 任务ID
     * @param string $Name 任务名称
     * @param string $Status 任务状态
     * @param array $StepInfoList 任务步骤列表
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StepInfoList",$param) and $param["StepInfoList"] !== null) {
            $this->StepInfoList = [];
            foreach ($param["StepInfoList"] as $key => $value){
                $obj = new StepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfoList, $obj);
            }
        }
    }
}
