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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命令耗时
 *
 * @method string getCmd() 获取命令名。
 * @method void setCmd(string $Cmd) 设置命令名。
 * @method integer getTook() 获取耗时时长。单位：ms。
 * @method void setTook(integer $Took) 设置耗时时长。单位：ms。
 */
class CommandTake extends AbstractModel
{
    /**
     * @var string 命令名。
     */
    public $Cmd;

    /**
     * @var integer 耗时时长。单位：ms。
     */
    public $Took;

    /**
     * @param string $Cmd 命令名。
     * @param integer $Took 耗时时长。单位：ms。
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

        if (array_key_exists("Took",$param) and $param["Took"] !== null) {
            $this->Took = $param["Took"];
        }
    }
}
