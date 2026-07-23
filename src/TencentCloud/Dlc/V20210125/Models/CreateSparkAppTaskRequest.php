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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSparkAppTask请求参数结构体
 *
 * @method string getJobName() 获取<p>spark作业名</p>
 * @method void setJobName(string $JobName) 设置<p>spark作业名</p>
 * @method string getCmdArgs() 获取<p>spark作业程序入参，以空格分隔；一般用于周期性调用使用</p>
 * @method void setCmdArgs(string $CmdArgs) 设置<p>spark作业程序入参，以空格分隔；一般用于周期性调用使用</p>
 * @method array getSourceInfo() 获取<p>任务来源信息</p>
 * @method void setSourceInfo(array $SourceInfo) 设置<p>任务来源信息</p>
 */
class CreateSparkAppTaskRequest extends AbstractModel
{
    /**
     * @var string <p>spark作业名</p>
     */
    public $JobName;

    /**
     * @var string <p>spark作业程序入参，以空格分隔；一般用于周期性调用使用</p>
     */
    public $CmdArgs;

    /**
     * @var array <p>任务来源信息</p>
     */
    public $SourceInfo;

    /**
     * @param string $JobName <p>spark作业名</p>
     * @param string $CmdArgs <p>spark作业程序入参，以空格分隔；一般用于周期性调用使用</p>
     * @param array $SourceInfo <p>任务来源信息</p>
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

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = [];
            foreach ($param["SourceInfo"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->SourceInfo, $obj);
            }
        }
    }
}
