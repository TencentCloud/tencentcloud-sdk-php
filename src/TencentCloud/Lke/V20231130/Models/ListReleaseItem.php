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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布列表详情
 *
 * @method string getReleaseBizId() 获取版本ID
 * @method void setReleaseBizId(string $ReleaseBizId) 设置版本ID
 * @method string getOperator() 获取发布人
 * @method void setOperator(string $Operator) 设置发布人
 * @method string getDesc() 获取发布描述
 * @method void setDesc(string $Desc) 设置发布描述
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getStatus() 获取发布状态
 * @method void setStatus(integer $Status) 设置发布状态
 * @method string getStatusDesc() 获取发布状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置发布状态描述
 * @method string getReason() 获取失败原因
 * @method void setReason(string $Reason) 设置失败原因
 * @method integer getSuccessCount() 获取发布成功数
 * @method void setSuccessCount(integer $SuccessCount) 设置发布成功数
 * @method integer getFailCount() 获取发布失败数
 * @method void setFailCount(integer $FailCount) 设置发布失败数
 */
class ListReleaseItem extends AbstractModel
{
    /**
     * @var string 版本ID
     */
    public $ReleaseBizId;

    /**
     * @var string 发布人
     */
    public $Operator;

    /**
     * @var string 发布描述
     */
    public $Desc;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 发布状态
     */
    public $Status;

    /**
     * @var string 发布状态描述
     */
    public $StatusDesc;

    /**
     * @var string 失败原因
     */
    public $Reason;

    /**
     * @var integer 发布成功数
     */
    public $SuccessCount;

    /**
     * @var integer 发布失败数
     */
    public $FailCount;

    /**
     * @param string $ReleaseBizId 版本ID
     * @param string $Operator 发布人
     * @param string $Desc 发布描述
     * @param string $UpdateTime 更新时间
     * @param integer $Status 发布状态
     * @param string $StatusDesc 发布状态描述
     * @param string $Reason 失败原因
     * @param integer $SuccessCount 发布成功数
     * @param integer $FailCount 发布失败数
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
        if (array_key_exists("ReleaseBizId",$param) and $param["ReleaseBizId"] !== null) {
            $this->ReleaseBizId = $param["ReleaseBizId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }
    }
}
