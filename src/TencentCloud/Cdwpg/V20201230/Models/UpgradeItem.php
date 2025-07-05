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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 升级信息
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getSourceVersion() 获取原有内核版本
 * @method void setSourceVersion(string $SourceVersion) 设置原有内核版本
 * @method string getTargetVersion() 获取目标内核版本
 * @method void setTargetVersion(string $TargetVersion) 设置目标内核版本
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getStatus() 获取任务完成状态
 * @method void setStatus(string $Status) 设置任务完成状态
 * @method string getOperateUin() 获取操作者
 * @method void setOperateUin(string $OperateUin) 设置操作者
 */
class UpgradeItem extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 原有内核版本
     */
    public $SourceVersion;

    /**
     * @var string 目标内核版本
     */
    public $TargetVersion;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 任务完成状态
     */
    public $Status;

    /**
     * @var string 操作者
     */
    public $OperateUin;

    /**
     * @param string $TaskName 任务名称
     * @param string $SourceVersion 原有内核版本
     * @param string $TargetVersion 目标内核版本
     * @param string $CreateTime 任务创建时间
     * @param string $EndTime 任务结束时间
     * @param string $Status 任务完成状态
     * @param string $OperateUin 操作者
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }

        if (array_key_exists("TargetVersion",$param) and $param["TargetVersion"] !== null) {
            $this->TargetVersion = $param["TargetVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
