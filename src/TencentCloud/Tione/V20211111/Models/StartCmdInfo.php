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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启动命令信息
 *
 * @method string getStartCmd() 获取启动命令
 * @method void setStartCmd(string $StartCmd) 设置启动命令
 * @method string getPsStartCmd() 获取ps启动命令
 * @method void setPsStartCmd(string $PsStartCmd) 设置ps启动命令
 * @method string getWorkerStartCmd() 获取worker启动命令
 * @method void setWorkerStartCmd(string $WorkerStartCmd) 设置worker启动命令
 */
class StartCmdInfo extends AbstractModel
{
    /**
     * @var string 启动命令
     */
    public $StartCmd;

    /**
     * @var string ps启动命令
     */
    public $PsStartCmd;

    /**
     * @var string worker启动命令
     */
    public $WorkerStartCmd;

    /**
     * @param string $StartCmd 启动命令
     * @param string $PsStartCmd ps启动命令
     * @param string $WorkerStartCmd worker启动命令
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
        if (array_key_exists("StartCmd",$param) and $param["StartCmd"] !== null) {
            $this->StartCmd = $param["StartCmd"];
        }

        if (array_key_exists("PsStartCmd",$param) and $param["PsStartCmd"] !== null) {
            $this->PsStartCmd = $param["PsStartCmd"];
        }

        if (array_key_exists("WorkerStartCmd",$param) and $param["WorkerStartCmd"] !== null) {
            $this->WorkerStartCmd = $param["WorkerStartCmd"];
        }
    }
}
