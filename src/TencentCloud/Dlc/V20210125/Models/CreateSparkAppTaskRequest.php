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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSparkAppTask请求参数结构体
 *
 * @method string getJobName() 获取spark作业名
 * @method void setJobName(string $JobName) 设置spark作业名
 * @method string getCmdArgs() 获取spark作业的命令行参数，以空格分隔；一般用于周期性调用使用
 * @method void setCmdArgs(string $CmdArgs) 设置spark作业的命令行参数，以空格分隔；一般用于周期性调用使用
 */
class CreateSparkAppTaskRequest extends AbstractModel
{
    /**
     * @var string spark作业名
     */
    public $JobName;

    /**
     * @var string spark作业的命令行参数，以空格分隔；一般用于周期性调用使用
     */
    public $CmdArgs;

    /**
     * @param string $JobName spark作业名
     * @param string $CmdArgs spark作业的命令行参数，以空格分隔；一般用于周期性调用使用
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }
    }
}
