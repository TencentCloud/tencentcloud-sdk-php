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
 * CreateEmergencyVulScan请求参数结构体
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method array getUuids() 获取自选服务器时生效，主机uuid的string数组
 * @method void setUuids(array $Uuids) 设置自选服务器时生效，主机uuid的string数组
 * @method integer getTimeoutPeriod() 获取扫描超时时长 ，单位秒
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) 设置扫描超时时长 ，单位秒
 */
class CreateEmergencyVulScanRequest extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var array 自选服务器时生效，主机uuid的string数组
     */
    public $Uuids;

    /**
     * @var integer 扫描超时时长 ，单位秒
     */
    public $TimeoutPeriod;

    /**
     * @param integer $VulId 漏洞id
     * @param array $Uuids 自选服务器时生效，主机uuid的string数组
     * @param integer $TimeoutPeriod 扫描超时时长 ，单位秒
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }
    }
}
