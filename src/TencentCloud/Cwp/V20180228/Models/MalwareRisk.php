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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 恶意文件风险提示列表信息
 *
 * @method string getMachineIp() 获取机器IP
 * @method void setMachineIp(string $MachineIp) 设置机器IP
 * @method string getVirusName() 获取病毒名
 * @method void setVirusName(string $VirusName) 设置病毒名
 * @method string getCreateTime() 获取发现时间
 * @method void setCreateTime(string $CreateTime) 设置发现时间
 * @method integer getId() 获取唯一ID
 * @method void setId(integer $Id) 设置唯一ID
 */
class MalwareRisk extends AbstractModel
{
    /**
     * @var string 机器IP
     */
    public $MachineIp;

    /**
     * @var string 病毒名
     */
    public $VirusName;

    /**
     * @var string 发现时间
     */
    public $CreateTime;

    /**
     * @var integer 唯一ID
     */
    public $Id;

    /**
     * @param string $MachineIp 机器IP
     * @param string $VirusName 病毒名
     * @param string $CreateTime 发现时间
     * @param integer $Id 唯一ID
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
