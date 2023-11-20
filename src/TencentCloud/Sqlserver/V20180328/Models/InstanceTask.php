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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例异步任务
 *
 * @method integer getId() 获取唯一id
 * @method void setId(integer $Id) 设置唯一id
 * @method integer getType() 获取Job类型
 * @method void setType(integer $Type) 设置Job类型
 * @method integer getStatus() 获取Job状态
 * @method void setStatus(integer $Status) 设置Job状态
 * @method integer getProgress() 获取进度百分比0~100
 * @method void setProgress(integer $Progress) 设置进度百分比0~100
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getErrorCode() 获取错误代码
 * @method void setErrorCode(integer $ErrorCode) 设置错误代码
 * @method string getMessage() 获取错误信息描述
 * @method void setMessage(string $Message) 设置错误信息描述
 */
class InstanceTask extends AbstractModel
{
    /**
     * @var integer 唯一id
     */
    public $Id;

    /**
     * @var integer Job类型
     */
    public $Type;

    /**
     * @var integer Job状态
     */
    public $Status;

    /**
     * @var integer 进度百分比0~100
     */
    public $Progress;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 错误代码
     */
    public $ErrorCode;

    /**
     * @var string 错误信息描述
     */
    public $Message;

    /**
     * @param integer $Id 唯一id
     * @param integer $Type Job类型
     * @param integer $Status Job状态
     * @param integer $Progress 进度百分比0~100
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $ErrorCode 错误代码
     * @param string $Message 错误信息描述
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
