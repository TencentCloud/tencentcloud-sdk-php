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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 展示登录审计白名单时的主机信息实体
 *
 * @method string getQuuid() 获取机器uuid
 * @method void setQuuid(string $Quuid) 设置机器uuid
 * @method string getUuid() 获取主机安全uuid
 * @method void setUuid(string $Uuid) 设置主机安全uuid
 * @method string getMachineName() 获取机器名
 * @method void setMachineName(string $MachineName) 设置机器名
 * @method string getMachineIp() 获取机器IP:已销毁的服务器IP为空
 * @method void setMachineIp(string $MachineIp) 设置机器IP:已销毁的服务器IP为空
 * @method string getMachineWanIp() 获取公网IP:已销毁的服务器IP为空
 * @method void setMachineWanIp(string $MachineWanIp) 设置公网IP:已销毁的服务器IP为空
 * @method array getTags() 获取标签信息数组
 * @method void setTags(array $Tags) 设置标签信息数组
 */
class HostDesc extends AbstractModel
{
    /**
     * @var string 机器uuid
     */
    public $Quuid;

    /**
     * @var string 主机安全uuid
     */
    public $Uuid;

    /**
     * @var string 机器名
     */
    public $MachineName;

    /**
     * @var string 机器IP:已销毁的服务器IP为空
     */
    public $MachineIp;

    /**
     * @var string 公网IP:已销毁的服务器IP为空
     */
    public $MachineWanIp;

    /**
     * @var array 标签信息数组
     */
    public $Tags;

    /**
     * @param string $Quuid 机器uuid
     * @param string $Uuid 主机安全uuid
     * @param string $MachineName 机器名
     * @param string $MachineIp 机器IP:已销毁的服务器IP为空
     * @param string $MachineWanIp 公网IP:已销毁的服务器IP为空
     * @param array $Tags 标签信息数组
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
