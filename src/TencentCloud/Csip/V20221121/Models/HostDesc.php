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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 展示登录审计白名单时的主机信息实体
 *
 * @method string getQuuid() 获取<p>机器uuid</p>
 * @method void setQuuid(string $Quuid) 设置<p>机器uuid</p>
 * @method string getUuid() 获取<p>主机安全uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>主机安全uuid</p>
 * @method string getMachineName() 获取<p>机器名</p>
 * @method void setMachineName(string $MachineName) 设置<p>机器名</p>
 * @method string getMachineIp() 获取<p>机器IP:已销毁的服务器IP为空</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>机器IP:已销毁的服务器IP为空</p>
 * @method string getMachineWanIp() 获取<p>公网IP:已销毁的服务器IP为空</p>
 * @method void setMachineWanIp(string $MachineWanIp) 设置<p>公网IP:已销毁的服务器IP为空</p>
 * @method array getTags() 获取<p>标签信息数组</p>
 * @method void setTags(array $Tags) 设置<p>标签信息数组</p>
 */
class HostDesc extends AbstractModel
{
    /**
     * @var string <p>机器uuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>主机安全uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>机器名</p>
     */
    public $MachineName;

    /**
     * @var string <p>机器IP:已销毁的服务器IP为空</p>
     */
    public $MachineIp;

    /**
     * @var string <p>公网IP:已销毁的服务器IP为空</p>
     */
    public $MachineWanIp;

    /**
     * @var array <p>标签信息数组</p>
     */
    public $Tags;

    /**
     * @param string $Quuid <p>机器uuid</p>
     * @param string $Uuid <p>主机安全uuid</p>
     * @param string $MachineName <p>机器名</p>
     * @param string $MachineIp <p>机器IP:已销毁的服务器IP为空</p>
     * @param string $MachineWanIp <p>公网IP:已销毁的服务器IP为空</p>
     * @param array $Tags <p>标签信息数组</p>
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
