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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getAlias() 获取实例别名
 * @method void setAlias(string $Alias) 设置实例别名
 * @method integer getMemory() 获取实例内存大小，单位：MB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB
 * @method integer getVolume() 获取实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB
 * @method string getEngineVersion() 获取MySQL 版本，值包括: 5.7
 * @method void setEngineVersion(string $EngineVersion) 设置MySQL 版本，值包括: 5.7
 */

/**
 *UpgradeMysqlInstance请求参数结构体
 */
class UpgradeMysqlInstanceRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 实例别名
     */
    public $Alias;

    /**
     * @var integer 实例内存大小，单位：MB
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var string MySQL 版本，值包括: 5.7
     */
    public $EngineVersion;
    /**
     * @param string $EnvId 环境id
     * @param string $Alias 实例别名
     * @param integer $Memory 实例内存大小，单位：MB
     * @param integer $Volume 实例硬盘大小，单位：GB
     * @param string $EngineVersion MySQL 版本，值包括: 5.7
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
