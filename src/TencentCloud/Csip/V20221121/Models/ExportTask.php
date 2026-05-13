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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出任务列表
 *
 * @method integer getId() 获取任务Id
 * @method void setId(integer $Id) 设置任务Id
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method integer getPercentage() 获取进度百分比
 * @method void setPercentage(integer $Percentage) 设置进度百分比
 * @method integer getTaskStatus() 获取任务状态：0.未开始 1.执行中 2.执行成功 3.执行超时 4.执行失败
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态：0.未开始 1.执行中 2.执行成功 3.执行超时 4.执行失败
 * @method integer getCreateTime() 获取任务创建时间
 * @method void setCreateTime(integer $CreateTime) 设置任务创建时间
 * @method integer getModifyTime() 获取任务更新时间
 * @method void setModifyTime(integer $ModifyTime) 设置任务更新时间
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getFileSize() 获取文件大小  字节
 * @method void setFileSize(integer $FileSize) 设置文件大小  字节
 * @method integer getRemainingTime() 获取剩余时间(单位：秒)
 * @method void setRemainingTime(integer $RemainingTime) 设置剩余时间(单位：秒)
 */
class ExportTask extends AbstractModel
{
    /**
     * @var integer 任务Id
     */
    public $Id;

    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var integer 进度百分比
     */
    public $Percentage;

    /**
     * @var integer 任务状态：0.未开始 1.执行中 2.执行成功 3.执行超时 4.执行失败
     */
    public $TaskStatus;

    /**
     * @var integer 任务创建时间
     */
    public $CreateTime;

    /**
     * @var integer 任务更新时间
     */
    public $ModifyTime;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小  字节
     */
    public $FileSize;

    /**
     * @var integer 剩余时间(单位：秒)
     */
    public $RemainingTime;

    /**
     * @param integer $Id 任务Id
     * @param integer $AppId 用户AppId
     * @param integer $Percentage 进度百分比
     * @param integer $TaskStatus 任务状态：0.未开始 1.执行中 2.执行成功 3.执行超时 4.执行失败
     * @param integer $CreateTime 任务创建时间
     * @param integer $ModifyTime 任务更新时间
     * @param string $FileName 文件名
     * @param integer $FileSize 文件大小  字节
     * @param integer $RemainingTime 剩余时间(单位：秒)
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("RemainingTime",$param) and $param["RemainingTime"] !== null) {
            $this->RemainingTime = $param["RemainingTime"];
        }
    }
}
