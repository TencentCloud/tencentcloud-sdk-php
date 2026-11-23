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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤条件
 *
 * @method string getName() 获取过滤字段名（ApplicationId 应用Id、ApplicationName 应用名称、ApplicationRunStatus 运行状态、ApplicationUpdateStatus 更新状态）
 * @method void setName(string $Name) 设置过滤字段名（ApplicationId 应用Id、ApplicationName 应用名称、ApplicationRunStatus 运行状态、ApplicationUpdateStatus 更新状态）
 * @method array getValues() 获取过滤值集合（当过滤 Name 为 ApplicationRunStatus 时，Values 取值为 [ApplicationDeleting 应用删除中、ApplicationCreateFail 应用创建失败、ApplicationCreating 应用创建中、ApplicationRunning 正常运行、ApplicationNoConfigured 主执行程序路径未配置 ]。当过滤 Name 为 ApplicationUpdateStatus 时，Values 取值 [ApplicationUpdateCreating 版本创建中、ApplicationUpdateCreateFail 版本创建失败、ApplicationUpdateNoReleased 版本待发布、ApplicationUpdateReleased 版本发布完成、ApplicationUpdateNormal 无]）
 * @method void setValues(array $Values) 设置过滤值集合（当过滤 Name 为 ApplicationRunStatus 时，Values 取值为 [ApplicationDeleting 应用删除中、ApplicationCreateFail 应用创建失败、ApplicationCreating 应用创建中、ApplicationRunning 正常运行、ApplicationNoConfigured 主执行程序路径未配置 ]。当过滤 Name 为 ApplicationUpdateStatus 时，Values 取值 [ApplicationUpdateCreating 版本创建中、ApplicationUpdateCreateFail 版本创建失败、ApplicationUpdateNoReleased 版本待发布、ApplicationUpdateReleased 版本发布完成、ApplicationUpdateNormal 无]）
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤字段名（ApplicationId 应用Id、ApplicationName 应用名称、ApplicationRunStatus 运行状态、ApplicationUpdateStatus 更新状态）
     */
    public $Name;

    /**
     * @var array 过滤值集合（当过滤 Name 为 ApplicationRunStatus 时，Values 取值为 [ApplicationDeleting 应用删除中、ApplicationCreateFail 应用创建失败、ApplicationCreating 应用创建中、ApplicationRunning 正常运行、ApplicationNoConfigured 主执行程序路径未配置 ]。当过滤 Name 为 ApplicationUpdateStatus 时，Values 取值 [ApplicationUpdateCreating 版本创建中、ApplicationUpdateCreateFail 版本创建失败、ApplicationUpdateNoReleased 版本待发布、ApplicationUpdateReleased 版本发布完成、ApplicationUpdateNormal 无]）
     */
    public $Values;

    /**
     * @param string $Name 过滤字段名（ApplicationId 应用Id、ApplicationName 应用名称、ApplicationRunStatus 运行状态、ApplicationUpdateStatus 更新状态）
     * @param array $Values 过滤值集合（当过滤 Name 为 ApplicationRunStatus 时，Values 取值为 [ApplicationDeleting 应用删除中、ApplicationCreateFail 应用创建失败、ApplicationCreating 应用创建中、ApplicationRunning 正常运行、ApplicationNoConfigured 主执行程序路径未配置 ]。当过滤 Name 为 ApplicationUpdateStatus 时，Values 取值 [ApplicationUpdateCreating 版本创建中、ApplicationUpdateCreateFail 版本创建失败、ApplicationUpdateNoReleased 版本待发布、ApplicationUpdateReleased 版本发布完成、ApplicationUpdateNormal 无]）
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
