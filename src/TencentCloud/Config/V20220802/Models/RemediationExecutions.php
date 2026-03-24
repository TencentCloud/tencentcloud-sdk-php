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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修正记录
 *
 * @method integer getExecutionStatus() 获取修正状态 1：运行中 2：成功 3：失败
 * @method void setExecutionStatus(integer $ExecutionStatus) 设置修正状态 1：运行中 2：成功 3：失败
 * @method string getExecutionResourceType() 获取资源类型
 * @method void setExecutionResourceType(string $ExecutionResourceType) 设置资源类型
 * @method string getExecutionCreateDate() 获取修复时间
 * @method void setExecutionCreateDate(string $ExecutionCreateDate) 设置修复时间
 * @method string getExecutionStatusMessage() 获取错误信息
 * @method void setExecutionStatusMessage(string $ExecutionStatusMessage) 设置错误信息
 * @method string getExecutionResourceIds() 获取资源ID
 * @method void setExecutionResourceIds(string $ExecutionResourceIds) 设置资源ID
 */
class RemediationExecutions extends AbstractModel
{
    /**
     * @var integer 修正状态 1：运行中 2：成功 3：失败
     */
    public $ExecutionStatus;

    /**
     * @var string 资源类型
     */
    public $ExecutionResourceType;

    /**
     * @var string 修复时间
     */
    public $ExecutionCreateDate;

    /**
     * @var string 错误信息
     */
    public $ExecutionStatusMessage;

    /**
     * @var string 资源ID
     */
    public $ExecutionResourceIds;

    /**
     * @param integer $ExecutionStatus 修正状态 1：运行中 2：成功 3：失败
     * @param string $ExecutionResourceType 资源类型
     * @param string $ExecutionCreateDate 修复时间
     * @param string $ExecutionStatusMessage 错误信息
     * @param string $ExecutionResourceIds 资源ID
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
        if (array_key_exists("ExecutionStatus",$param) and $param["ExecutionStatus"] !== null) {
            $this->ExecutionStatus = $param["ExecutionStatus"];
        }

        if (array_key_exists("ExecutionResourceType",$param) and $param["ExecutionResourceType"] !== null) {
            $this->ExecutionResourceType = $param["ExecutionResourceType"];
        }

        if (array_key_exists("ExecutionCreateDate",$param) and $param["ExecutionCreateDate"] !== null) {
            $this->ExecutionCreateDate = $param["ExecutionCreateDate"];
        }

        if (array_key_exists("ExecutionStatusMessage",$param) and $param["ExecutionStatusMessage"] !== null) {
            $this->ExecutionStatusMessage = $param["ExecutionStatusMessage"];
        }

        if (array_key_exists("ExecutionResourceIds",$param) and $param["ExecutionResourceIds"] !== null) {
            $this->ExecutionResourceIds = $param["ExecutionResourceIds"];
        }
    }
}
