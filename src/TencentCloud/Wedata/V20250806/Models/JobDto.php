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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索任务JOB
 *
 * @method string getJobId() 获取数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取数据探索任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置数据探索任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(string $JobType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptId() 获取脚本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptId(string $ScriptId) 设置脚本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getJobExecutionList() 获取子任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobExecutionList(array $JobExecutionList) 设置子任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取云主账号UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置云主账号UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取账号UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置账号UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeCost() 获取耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeCost(integer $TimeCost) 设置耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptContentTruncate() 获取是否脚本内容被截断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContentTruncate(boolean $ScriptContentTruncate) 设置是否脚本内容被截断
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobDto extends AbstractModel
{
    /**
     * @var string 数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 数据探索任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var string 脚本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptId;

    /**
     * @var array 子任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobExecutionList;

    /**
     * @var string 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 云主账号UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 账号UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var integer 耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeCost;

    /**
     * @var boolean 是否脚本内容被截断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContentTruncate;

    /**
     * @param string $JobId 数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName 数据探索任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptId 脚本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $JobExecutionList 子任务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 云主账号UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 账号UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeCost 耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptContentTruncate 是否脚本内容被截断
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("JobExecutionList",$param) and $param["JobExecutionList"] !== null) {
            $this->JobExecutionList = [];
            foreach ($param["JobExecutionList"] as $key => $value){
                $obj = new JobExecutionDto();
                $obj->deserialize($value);
                array_push($this->JobExecutionList, $obj);
            }
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("ScriptContentTruncate",$param) and $param["ScriptContentTruncate"] !== null) {
            $this->ScriptContentTruncate = $param["ScriptContentTruncate"];
        }
    }
}
