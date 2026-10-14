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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行实例状态信息
 *
 * @method integer getStatus() 获取运行状态。1: 排队中；2: 运行中；3: 运行成功；4: 运行失败； 5: 已取消
 * @method void setStatus(integer $Status) 设置运行状态。1: 排队中；2: 运行中；3: 运行成功；4: 运行失败； 5: 已取消
 * @method string getFailMessage() 获取错误信息
 * @method void setFailMessage(string $FailMessage) 设置错误信息
 * @method integer getTotalTokens() 获取消耗的token总数
 * @method void setTotalTokens(integer $TotalTokens) 设置消耗的token总数
 */
class WorkflowRunResult extends AbstractModel
{
    /**
     * @var integer 运行状态。1: 排队中；2: 运行中；3: 运行成功；4: 运行失败； 5: 已取消
     */
    public $Status;

    /**
     * @var string 错误信息
     */
    public $FailMessage;

    /**
     * @var integer 消耗的token总数
     */
    public $TotalTokens;

    /**
     * @param integer $Status 运行状态。1: 排队中；2: 运行中；3: 运行成功；4: 运行失败； 5: 已取消
     * @param string $FailMessage 错误信息
     * @param integer $TotalTokens 消耗的token总数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
