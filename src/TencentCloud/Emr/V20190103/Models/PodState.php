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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个pod状态
 *
 * @method string getName() 获取pod的名称
 * @method void setName(string $Name) 设置pod的名称
 * @method string getUuid() 获取pod uuid
 * @method void setUuid(string $Uuid) 设置pod uuid
 * @method string getState() 获取pod的状态
 * @method void setState(string $State) 设置pod的状态
 * @method string getReason() 获取pod处于该状态原因
 * @method void setReason(string $Reason) 设置pod处于该状态原因
 * @method string getOwnerCluster() 获取pod所属集群
 * @method void setOwnerCluster(string $OwnerCluster) 设置pod所属集群
 * @method integer getMemory() 获取pod内存大小
 * @method void setMemory(integer $Memory) 设置pod内存大小
 */
class PodState extends AbstractModel
{
    /**
     * @var string pod的名称
     */
    public $Name;

    /**
     * @var string pod uuid
     */
    public $Uuid;

    /**
     * @var string pod的状态
     */
    public $State;

    /**
     * @var string pod处于该状态原因
     */
    public $Reason;

    /**
     * @var string pod所属集群
     */
    public $OwnerCluster;

    /**
     * @var integer pod内存大小
     */
    public $Memory;

    /**
     * @param string $Name pod的名称
     * @param string $Uuid pod uuid
     * @param string $State pod的状态
     * @param string $Reason pod处于该状态原因
     * @param string $OwnerCluster pod所属集群
     * @param integer $Memory pod内存大小
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("OwnerCluster",$param) and $param["OwnerCluster"] !== null) {
            $this->OwnerCluster = $param["OwnerCluster"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
