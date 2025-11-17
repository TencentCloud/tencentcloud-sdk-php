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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainCNAMESpeedupStatusBatch请求参数结构体
 *
 * @method array getDomainList() 获取域名列表
 * @method void setDomainList(array $DomainList) 设置域名列表
 * @method string getStatus() 获取状态。ENABLE-开启；DISABLE-关闭。
 * @method void setStatus(string $Status) 设置状态。ENABLE-开启；DISABLE-关闭。
 */
class ModifyDomainCNAMESpeedupStatusBatchRequest extends AbstractModel
{
    /**
     * @var array 域名列表
     */
    public $DomainList;

    /**
     * @var string 状态。ENABLE-开启；DISABLE-关闭。
     */
    public $Status;

    /**
     * @param array $DomainList 域名列表
     * @param string $Status 状态。ENABLE-开启；DISABLE-关闭。
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
        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
