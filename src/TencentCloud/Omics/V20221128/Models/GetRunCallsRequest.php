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
 * GetRunCalls请求参数结构体
 *
 * @method string getRunUuid() 获取任务Uuid。
 * @method void setRunUuid(string $RunUuid) 设置任务Uuid。
 * @method string getPath() 获取作业路径
 * @method void setPath(string $Path) 设置作业路径
 * @method string getProjectId() 获取项目ID。
（不填使用指定地域下的默认项目）
 * @method void setProjectId(string $ProjectId) 设置项目ID。
（不填使用指定地域下的默认项目）
 */
class GetRunCallsRequest extends AbstractModel
{
    /**
     * @var string 任务Uuid。
     */
    public $RunUuid;

    /**
     * @var string 作业路径
     */
    public $Path;

    /**
     * @var string 项目ID。
（不填使用指定地域下的默认项目）
     */
    public $ProjectId;

    /**
     * @param string $RunUuid 任务Uuid。
     * @param string $Path 作业路径
     * @param string $ProjectId 项目ID。
（不填使用指定地域下的默认项目）
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
        if (array_key_exists("RunUuid",$param) and $param["RunUuid"] !== null) {
            $this->RunUuid = $param["RunUuid"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
