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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冷热分层backend节点信息
 *
 * @method string getHost() 获取字段：Host
 * @method void setHost(string $Host) 设置字段：Host
 * @method string getDataUsedCapacity() 获取字段：DataUsedCapacity
 * @method void setDataUsedCapacity(string $DataUsedCapacity) 设置字段：DataUsedCapacity
 * @method string getTotalCapacity() 获取字段：TotalCapacity
 * @method void setTotalCapacity(string $TotalCapacity) 设置字段：TotalCapacity
 * @method string getRemoteUsedCapacity() 获取字段：RemoteUsedCapacity
 * @method void setRemoteUsedCapacity(string $RemoteUsedCapacity) 设置字段：RemoteUsedCapacity
 */
class CoolDownBackend extends AbstractModel
{
    /**
     * @var string 字段：Host
     */
    public $Host;

    /**
     * @var string 字段：DataUsedCapacity
     */
    public $DataUsedCapacity;

    /**
     * @var string 字段：TotalCapacity
     */
    public $TotalCapacity;

    /**
     * @var string 字段：RemoteUsedCapacity
     */
    public $RemoteUsedCapacity;

    /**
     * @param string $Host 字段：Host
     * @param string $DataUsedCapacity 字段：DataUsedCapacity
     * @param string $TotalCapacity 字段：TotalCapacity
     * @param string $RemoteUsedCapacity 字段：RemoteUsedCapacity
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DataUsedCapacity",$param) and $param["DataUsedCapacity"] !== null) {
            $this->DataUsedCapacity = $param["DataUsedCapacity"];
        }

        if (array_key_exists("TotalCapacity",$param) and $param["TotalCapacity"] !== null) {
            $this->TotalCapacity = $param["TotalCapacity"];
        }

        if (array_key_exists("RemoteUsedCapacity",$param) and $param["RemoteUsedCapacity"] !== null) {
            $this->RemoteUsedCapacity = $param["RemoteUsedCapacity"];
        }
    }
}
