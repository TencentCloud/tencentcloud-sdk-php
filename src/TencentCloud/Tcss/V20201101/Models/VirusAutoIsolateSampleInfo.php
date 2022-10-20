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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 木马自动隔离样本信息
 *
 * @method string getMD5() 获取文件MD5值
 * @method void setMD5(string $MD5) 设置文件MD5值
 * @method string getVirusName() 获取病毒名
 * @method void setVirusName(string $VirusName) 设置病毒名
 * @method string getModifyTime() 获取最近编辑时间
 * @method void setModifyTime(string $ModifyTime) 设置最近编辑时间
 * @method boolean getAutoIsolateSwitch() 获取自动隔离开关(true:开 false:关)
 * @method void setAutoIsolateSwitch(boolean $AutoIsolateSwitch) 设置自动隔离开关(true:开 false:关)
 */
class VirusAutoIsolateSampleInfo extends AbstractModel
{
    /**
     * @var string 文件MD5值
     */
    public $MD5;

    /**
     * @var string 病毒名
     */
    public $VirusName;

    /**
     * @var string 最近编辑时间
     */
    public $ModifyTime;

    /**
     * @var boolean 自动隔离开关(true:开 false:关)
     */
    public $AutoIsolateSwitch;

    /**
     * @param string $MD5 文件MD5值
     * @param string $VirusName 病毒名
     * @param string $ModifyTime 最近编辑时间
     * @param boolean $AutoIsolateSwitch 自动隔离开关(true:开 false:关)
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
        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AutoIsolateSwitch",$param) and $param["AutoIsolateSwitch"] !== null) {
            $this->AutoIsolateSwitch = $param["AutoIsolateSwitch"];
        }
    }
}
