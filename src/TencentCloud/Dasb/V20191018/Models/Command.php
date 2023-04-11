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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命令集合
 *
 * @method string getCmd() 获取命令
 * @method void setCmd(string $Cmd) 设置命令
 * @method string getTime() 获取命令输入的时间
 * @method void setTime(string $Time) 设置命令输入的时间
 * @method integer getTimeOffset() 获取命令执行时间相对于所属会话开始时间的偏移量，单位ms
 * @method void setTimeOffset(integer $TimeOffset) 设置命令执行时间相对于所属会话开始时间的偏移量，单位ms
 * @method integer getAction() 获取命令执行情况，1--允许，2--拒绝，3--确认
 * @method void setAction(integer $Action) 设置命令执行情况，1--允许，2--拒绝，3--确认
 */
class Command extends AbstractModel
{
    /**
     * @var string 命令
     */
    public $Cmd;

    /**
     * @var string 命令输入的时间
     */
    public $Time;

    /**
     * @var integer 命令执行时间相对于所属会话开始时间的偏移量，单位ms
     */
    public $TimeOffset;

    /**
     * @var integer 命令执行情况，1--允许，2--拒绝，3--确认
     */
    public $Action;

    /**
     * @param string $Cmd 命令
     * @param string $Time 命令输入的时间
     * @param integer $TimeOffset 命令执行时间相对于所属会话开始时间的偏移量，单位ms
     * @param integer $Action 命令执行情况，1--允许，2--拒绝，3--确认
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
        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
