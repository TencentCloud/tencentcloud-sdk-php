<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUGroupId() 获取RO组的ID
 * @method void setUGroupId(string $uGroupId) 设置RO组的ID
 * @method string getDstIp() 获取目标IP
 * @method void setDstIp(string $dstIp) 设置目标IP
 * @method integer getDstPort() 获取目标Port
 * @method void setDstPort(integer $dstPort) 设置目标Port
 */

/**
 *ModifyRoGroupVipVport请求参数结构体
 */
class ModifyRoGroupVipVportRequest extends AbstractModel
{
    /**
     * @var string RO组的ID
     */
    public $uGroupId;

    /**
     * @var string 目标IP
     */
    public $dstIp;

    /**
     * @var integer 目标Port
     */
    public $dstPort;
    /**
     * @param string $uGroupId RO组的ID
     * @param string $dstIp 目标IP
     * @param integer $dstPort 目标Port
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UGroupId",$param) and $param["UGroupId"] !== null) {
            $this->uGroupId = $param["UGroupId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->dstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->dstPort = $param["DstPort"];
        }
    }
}
