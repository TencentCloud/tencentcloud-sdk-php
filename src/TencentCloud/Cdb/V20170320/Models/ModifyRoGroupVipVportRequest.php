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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoGroupVipVport请求参数结构体
 *
 * @method string getUGroupId() 获取RO组的ID。
 * @method void setUGroupId(string $UGroupId) 设置RO组的ID。
 * @method string getDstIp() 获取目标IP。
 * @method void setDstIp(string $DstIp) 设置目标IP。
 * @method integer getDstPort() 获取目标Port。
 * @method void setDstPort(integer $DstPort) 设置目标Port。
 */
class ModifyRoGroupVipVportRequest extends AbstractModel
{
    /**
     * @var string RO组的ID。
     */
    public $UGroupId;

    /**
     * @var string 目标IP。
     */
    public $DstIp;

    /**
     * @var integer 目标Port。
     */
    public $DstPort;

    /**
     * @param string $UGroupId RO组的ID。
     * @param string $DstIp 目标IP。
     * @param integer $DstPort 目标Port。
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
        if (array_key_exists("UGroupId",$param) and $param["UGroupId"] !== null) {
            $this->UGroupId = $param["UGroupId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }
    }
}
