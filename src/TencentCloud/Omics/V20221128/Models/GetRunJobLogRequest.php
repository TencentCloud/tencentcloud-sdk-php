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
 * GetRunJobLog请求参数结构体
 *
 * @method string getRunUuid() 获取<p>任务Uuid。</p>
 * @method void setRunUuid(string $RunUuid) 设置<p>任务Uuid。</p>
 * @method string getJobId() 获取<p>子任务id</p>
 * @method void setJobId(string $JobId) 设置<p>子任务id</p>
 * @method string getLogType() 获取<p>日志类型</p><p>枚举值：</p><ul><li>stdout： 标准输出</li><li>stderr： 标准错误</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型</p><p>枚举值：</p><ul><li>stdout： 标准输出</li><li>stderr： 标准错误</li></ul>
 * @method string getProjectId() 获取<p>项目ID。<br>（不填使用指定地域下的默认项目）</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID。<br>（不填使用指定地域下的默认项目）</p>
 * @method string getPath() 获取<p>子任务路径，无子任务可填空</p>
 * @method void setPath(string $Path) 设置<p>子任务路径，无子任务可填空</p>
 */
class GetRunJobLogRequest extends AbstractModel
{
    /**
     * @var string <p>任务Uuid。</p>
     */
    public $RunUuid;

    /**
     * @var string <p>子任务id</p>
     */
    public $JobId;

    /**
     * @var string <p>日志类型</p><p>枚举值：</p><ul><li>stdout： 标准输出</li><li>stderr： 标准错误</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>项目ID。<br>（不填使用指定地域下的默认项目）</p>
     */
    public $ProjectId;

    /**
     * @var string <p>子任务路径，无子任务可填空</p>
     */
    public $Path;

    /**
     * @param string $RunUuid <p>任务Uuid。</p>
     * @param string $JobId <p>子任务id</p>
     * @param string $LogType <p>日志类型</p><p>枚举值：</p><ul><li>stdout： 标准输出</li><li>stderr： 标准错误</li></ul>
     * @param string $ProjectId <p>项目ID。<br>（不填使用指定地域下的默认项目）</p>
     * @param string $Path <p>子任务路径，无子任务可填空</p>
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

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
