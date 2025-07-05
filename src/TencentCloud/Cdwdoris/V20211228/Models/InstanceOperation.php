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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群操作描述
 *
 * @method string getName() 获取操作名称，例如“create_instance"、“scaleout_instance”等
 * @method void setName(string $Name) 设置操作名称，例如“create_instance"、“scaleout_instance”等
 * @method string getResult() 获取操作结果，“Success"表示成功，”Fail"表示失败
 * @method void setResult(string $Result) 设置操作结果，“Success"表示成功，”Fail"表示失败
 * @method string getDesc() 获取操作名称描述，例如“创建”，“修改集群名称”等
 * @method void setDesc(string $Desc) 设置操作名称描述，例如“创建”，“修改集群名称”等
 * @method string getLevel() 获取操作级别，例如“Critical", "Normal"等
 * @method void setLevel(string $Level) 设置操作级别，例如“Critical", "Normal"等
 * @method string getLevelDesc() 获取操作级别描述，例如“高危”，“一般”等
 * @method void setLevelDesc(string $LevelDesc) 设置操作级别描述，例如“高危”，“一般”等
 * @method string getStartTime() 获取操作开始时间
 * @method void setStartTime(string $StartTime) 设置操作开始时间
 * @method string getEndTime() 获取操作结束时间
 * @method void setEndTime(string $EndTime) 设置操作结束时间
 * @method string getResultDesc() 获取操作结果描述，例如“成功”，“失败”
 * @method void setResultDesc(string $ResultDesc) 设置操作结果描述，例如“成功”，“失败”
 * @method string getOperateUin() 获取操作用户ID
 * @method void setOperateUin(string $OperateUin) 设置操作用户ID
 * @method integer getJobId() 获取操作对应的jobid
 * @method void setJobId(integer $JobId) 设置操作对应的jobid
 * @method string getOperationDetail() 获取操作明细
 * @method void setOperationDetail(string $OperationDetail) 设置操作明细
 * @method string getComputerGroupId() 获取计算组id
 * @method void setComputerGroupId(string $ComputerGroupId) 设置计算组id
 */
class InstanceOperation extends AbstractModel
{
    /**
     * @var string 操作名称，例如“create_instance"、“scaleout_instance”等
     */
    public $Name;

    /**
     * @var string 操作结果，“Success"表示成功，”Fail"表示失败
     */
    public $Result;

    /**
     * @var string 操作名称描述，例如“创建”，“修改集群名称”等
     */
    public $Desc;

    /**
     * @var string 操作级别，例如“Critical", "Normal"等
     */
    public $Level;

    /**
     * @var string 操作级别描述，例如“高危”，“一般”等
     */
    public $LevelDesc;

    /**
     * @var string 操作开始时间
     */
    public $StartTime;

    /**
     * @var string 操作结束时间
     */
    public $EndTime;

    /**
     * @var string 操作结果描述，例如“成功”，“失败”
     */
    public $ResultDesc;

    /**
     * @var string 操作用户ID
     */
    public $OperateUin;

    /**
     * @var integer 操作对应的jobid
     */
    public $JobId;

    /**
     * @var string 操作明细
     */
    public $OperationDetail;

    /**
     * @var string 计算组id
     */
    public $ComputerGroupId;

    /**
     * @param string $Name 操作名称，例如“create_instance"、“scaleout_instance”等
     * @param string $Result 操作结果，“Success"表示成功，”Fail"表示失败
     * @param string $Desc 操作名称描述，例如“创建”，“修改集群名称”等
     * @param string $Level 操作级别，例如“Critical", "Normal"等
     * @param string $LevelDesc 操作级别描述，例如“高危”，“一般”等
     * @param string $StartTime 操作开始时间
     * @param string $EndTime 操作结束时间
     * @param string $ResultDesc 操作结果描述，例如“成功”，“失败”
     * @param string $OperateUin 操作用户ID
     * @param integer $JobId 操作对应的jobid
     * @param string $OperationDetail 操作明细
     * @param string $ComputerGroupId 计算组id
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

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelDesc",$param) and $param["LevelDesc"] !== null) {
            $this->LevelDesc = $param["LevelDesc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ResultDesc",$param) and $param["ResultDesc"] !== null) {
            $this->ResultDesc = $param["ResultDesc"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("OperationDetail",$param) and $param["OperationDetail"] !== null) {
            $this->OperationDetail = $param["OperationDetail"];
        }

        if (array_key_exists("ComputerGroupId",$param) and $param["ComputerGroupId"] !== null) {
            $this->ComputerGroupId = $param["ComputerGroupId"];
        }
    }
}
