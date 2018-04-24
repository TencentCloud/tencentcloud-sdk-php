<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSubmittedCount() 获取已经完成提交的计算节点数量
 * @method void setSubmittedCount(string $SubmittedCount) 设置已经完成提交的计算节点数量
 * @method string getCreatingCount() 获取创建中的计算节点数量
 * @method void setCreatingCount(string $CreatingCount) 设置创建中的计算节点数量
 * @method string getCreationFailedCount() 获取创建失败的计算节点数量
 * @method void setCreationFailedCount(string $CreationFailedCount) 设置创建失败的计算节点数量
 * @method string getCreatedCount() 获取完成创建的计算节点数量
 * @method void setCreatedCount(string $CreatedCount) 设置完成创建的计算节点数量
 * @method string getRunningCount() 获取运行中的计算节点数量
 * @method void setRunningCount(string $RunningCount) 设置运行中的计算节点数量
 * @method string getDeletingCount() 获取销毁中的计算节点数量
 * @method void setDeletingCount(string $DeletingCount) 设置销毁中的计算节点数量
 * @method string getAbnormalCount() 获取异常的计算节点数量
 * @method void setAbnormalCount(string $AbnormalCount) 设置异常的计算节点数量
 */

/**
 *计算节点统计指标
 */
class ComputeNodeMetrics extends AbstractModel
{
    /**
     * @var string 已经完成提交的计算节点数量
     */
    public $SubmittedCount;

    /**
     * @var string 创建中的计算节点数量
     */
    public $CreatingCount;

    /**
     * @var string 创建失败的计算节点数量
     */
    public $CreationFailedCount;

    /**
     * @var string 完成创建的计算节点数量
     */
    public $CreatedCount;

    /**
     * @var string 运行中的计算节点数量
     */
    public $RunningCount;

    /**
     * @var string 销毁中的计算节点数量
     */
    public $DeletingCount;

    /**
     * @var string 异常的计算节点数量
     */
    public $AbnormalCount;
    /**
     * @param string $SubmittedCount 已经完成提交的计算节点数量
     * @param string $CreatingCount 创建中的计算节点数量
     * @param string $CreationFailedCount 创建失败的计算节点数量
     * @param string $CreatedCount 完成创建的计算节点数量
     * @param string $RunningCount 运行中的计算节点数量
     * @param string $DeletingCount 销毁中的计算节点数量
     * @param string $AbnormalCount 异常的计算节点数量
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SubmittedCount",$param) and $param["SubmittedCount"] !== null) {
            $this->SubmittedCount = $param["SubmittedCount"];
        }

        if (array_key_exists("CreatingCount",$param) and $param["CreatingCount"] !== null) {
            $this->CreatingCount = $param["CreatingCount"];
        }

        if (array_key_exists("CreationFailedCount",$param) and $param["CreationFailedCount"] !== null) {
            $this->CreationFailedCount = $param["CreationFailedCount"];
        }

        if (array_key_exists("CreatedCount",$param) and $param["CreatedCount"] !== null) {
            $this->CreatedCount = $param["CreatedCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("DeletingCount",$param) and $param["DeletingCount"] !== null) {
            $this->DeletingCount = $param["DeletingCount"];
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }
    }
}
