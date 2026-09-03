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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPGInstanceSpec请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境 id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境 id</p>
 * @method integer getCpu() 获取<p>cpu 核数</p><p>单位：核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>cpu 核数</p><p>单位：核数</p>
 * @method integer getMemory() 获取<p>内存容量</p><p>单位：GB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存容量</p><p>单位：GB</p>
 * @method integer getStorage() 获取<p>磁盘容量</p><p>单位：GB</p>
 * @method void setStorage(integer $Storage) 设置<p>磁盘容量</p><p>单位：GB</p>
 * @method integer getSwitchTag() 获取<p>类型</p><p>枚举值：</p><ul><li>0： 立即执行</li><li>1： 指定时间执行</li><li>2： 维护时间执行</li></ul>
 * @method void setSwitchTag(integer $SwitchTag) 设置<p>类型</p><p>枚举值：</p><ul><li>0： 立即执行</li><li>1： 指定时间执行</li><li>2： 维护时间执行</li></ul>
 * @method string getSwitchStartTime() 获取<p>SwitchTag=1 时，启动时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>SwitchTag=1 时，启动时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
 * @method string getSwitchEndTime() 获取<p>SwitchTag=1 时结束时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>SwitchTag=1 时结束时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
 * @method boolean getDryRun() 获取<p>预检</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>预检</p>
 */
class ModifyPGInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string <p>环境 id</p>
     */
    public $EnvId;

    /**
     * @var integer <p>cpu 核数</p><p>单位：核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存容量</p><p>单位：GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>磁盘容量</p><p>单位：GB</p>
     */
    public $Storage;

    /**
     * @var integer <p>类型</p><p>枚举值：</p><ul><li>0： 立即执行</li><li>1： 指定时间执行</li><li>2： 维护时间执行</li></ul>
     */
    public $SwitchTag;

    /**
     * @var string <p>SwitchTag=1 时，启动时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>SwitchTag=1 时结束时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
     */
    public $SwitchEndTime;

    /**
     * @var boolean <p>预检</p>
     */
    public $DryRun;

    /**
     * @param string $EnvId <p>环境 id</p>
     * @param integer $Cpu <p>cpu 核数</p><p>单位：核数</p>
     * @param integer $Memory <p>内存容量</p><p>单位：GB</p>
     * @param integer $Storage <p>磁盘容量</p><p>单位：GB</p>
     * @param integer $SwitchTag <p>类型</p><p>枚举值：</p><ul><li>0： 立即执行</li><li>1： 指定时间执行</li><li>2： 维护时间执行</li></ul>
     * @param string $SwitchStartTime <p>SwitchTag=1 时，启动时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
     * @param string $SwitchEndTime <p>SwitchTag=1 时结束时间</p><p>参数格式：YYYY-MM-dd HH:mm:ss</p>
     * @param boolean $DryRun <p>预检</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
