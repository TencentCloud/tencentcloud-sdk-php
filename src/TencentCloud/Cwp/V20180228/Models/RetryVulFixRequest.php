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
 * RetryVulFix请求参数结构体
 *
 * @method integer getFixId() 获取漏洞id
 * @method void setFixId(integer $FixId) 设置漏洞id
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method integer getKbId() 获取Kb Id 
 * @method void setKbId(integer $KbId) 设置Kb Id 
 */
class RetryVulFixRequest extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $FixId;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var integer Kb Id 
     */
    public $KbId;

    /**
     * @param integer $FixId 漏洞id
     * @param string $Quuid 主机Quuid
     * @param integer $VulId 漏洞id
     * @param integer $KbId Kb Id 
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
        if (array_key_exists("FixId",$param) and $param["FixId"] !== null) {
            $this->FixId = $param["FixId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }
    }
}
