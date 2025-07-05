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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RetryRuns请求参数结构体
 *
 * @method string getProjectId() 获取项目ID。（不填使用指定地域下的默认项目）
 * @method void setProjectId(string $ProjectId) 设置项目ID。（不填使用指定地域下的默认项目）
 * @method string getRunGroupId() 获取需要重试的任务批次ID。
 * @method void setRunGroupId(string $RunGroupId) 设置需要重试的任务批次ID。
 * @method array getRunUuids() 获取需要重试的任务UUID。
 * @method void setRunUuids(array $RunUuids) 设置需要重试的任务UUID。
 * @method RunOption getWDLOption() 获取WDL运行选项，不填使用被重试的任务批次运行选项。
 * @method void setWDLOption(RunOption $WDLOption) 设置WDL运行选项，不填使用被重试的任务批次运行选项。
 * @method NFOption getNFOption() 获取Nextflow运行选项，不填使用被重试的任务批次运行选项。
 * @method void setNFOption(NFOption $NFOption) 设置Nextflow运行选项，不填使用被重试的任务批次运行选项。
 */
class RetryRunsRequest extends AbstractModel
{
    /**
     * @var string 项目ID。（不填使用指定地域下的默认项目）
     */
    public $ProjectId;

    /**
     * @var string 需要重试的任务批次ID。
     */
    public $RunGroupId;

    /**
     * @var array 需要重试的任务UUID。
     */
    public $RunUuids;

    /**
     * @var RunOption WDL运行选项，不填使用被重试的任务批次运行选项。
     */
    public $WDLOption;

    /**
     * @var NFOption Nextflow运行选项，不填使用被重试的任务批次运行选项。
     */
    public $NFOption;

    /**
     * @param string $ProjectId 项目ID。（不填使用指定地域下的默认项目）
     * @param string $RunGroupId 需要重试的任务批次ID。
     * @param array $RunUuids 需要重试的任务UUID。
     * @param RunOption $WDLOption WDL运行选项，不填使用被重试的任务批次运行选项。
     * @param NFOption $NFOption Nextflow运行选项，不填使用被重试的任务批次运行选项。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("RunUuids",$param) and $param["RunUuids"] !== null) {
            $this->RunUuids = $param["RunUuids"];
        }

        if (array_key_exists("WDLOption",$param) and $param["WDLOption"] !== null) {
            $this->WDLOption = new RunOption();
            $this->WDLOption->deserialize($param["WDLOption"]);
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }
    }
}
