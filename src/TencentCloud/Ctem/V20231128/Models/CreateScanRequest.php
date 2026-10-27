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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScan请求参数结构体
 *
 * @method string getVulId() 获取<p>漏洞情报ID</p>
 * @method void setVulId(string $VulId) 设置<p>漏洞情报ID</p>
 * @method integer getCustomerId() 获取<p>企业ID</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>企业ID</p>
 */
class CreateScanRequest extends AbstractModel
{
    /**
     * @var string <p>漏洞情报ID</p>
     */
    public $VulId;

    /**
     * @var integer <p>企业ID</p>
     */
    public $CustomerId;

    /**
     * @param string $VulId <p>漏洞情报ID</p>
     * @param integer $CustomerId <p>企业ID</p>
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

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }
    }
}
