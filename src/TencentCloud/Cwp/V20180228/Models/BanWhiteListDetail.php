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
 * 阻断白名单展示列表，包含了机器的信息
 *
 * @method string getId() 获取白名单ID
 * @method void setId(string $Id) 设置白名单ID
 * @method string getRemark() 获取白名单别名
 * @method void setRemark(string $Remark) 设置白名单别名
 * @method string getSrcIp() 获取阻断来源IP
 * @method void setSrcIp(string $SrcIp) 设置阻断来源IP
 * @method string getModifyTime() 获取修改白名单时间
 * @method void setModifyTime(string $ModifyTime) 设置修改白名单时间
 * @method string getCreateTime() 获取创建白名单时间
 * @method void setCreateTime(string $CreateTime) 设置创建白名单时间
 * @method boolean getIsGlobal() 获取白名单是否全局
 * @method void setIsGlobal(boolean $IsGlobal) 设置白名单是否全局
 * @method string getQuuid() 获取机器的UUID
 * @method void setQuuid(string $Quuid) 设置机器的UUID
 * @method string getUuid() 获取主机安全程序的UUID
 * @method void setUuid(string $Uuid) 设置主机安全程序的UUID
 * @method string getMachineIp() 获取机器IP
 * @method void setMachineIp(string $MachineIp) 设置机器IP
 * @method string getMachineName() 获取机器名称
 * @method void setMachineName(string $MachineName) 设置机器名称
 */
class BanWhiteListDetail extends AbstractModel
{
    /**
     * @var string 白名单ID
     */
    public $Id;

    /**
     * @var string 白名单别名
     */
    public $Remark;

    /**
     * @var string 阻断来源IP
     */
    public $SrcIp;

    /**
     * @var string 修改白名单时间
     */
    public $ModifyTime;

    /**
     * @var string 创建白名单时间
     */
    public $CreateTime;

    /**
     * @var boolean 白名单是否全局
     */
    public $IsGlobal;

    /**
     * @var string 机器的UUID
     */
    public $Quuid;

    /**
     * @var string 主机安全程序的UUID
     */
    public $Uuid;

    /**
     * @var string 机器IP
     */
    public $MachineIp;

    /**
     * @var string 机器名称
     */
    public $MachineName;

    /**
     * @param string $Id 白名单ID
     * @param string $Remark 白名单别名
     * @param string $SrcIp 阻断来源IP
     * @param string $ModifyTime 修改白名单时间
     * @param string $CreateTime 创建白名单时间
     * @param boolean $IsGlobal 白名单是否全局
     * @param string $Quuid 机器的UUID
     * @param string $Uuid 主机安全程序的UUID
     * @param string $MachineIp 机器IP
     * @param string $MachineName 机器名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }
    }
}
