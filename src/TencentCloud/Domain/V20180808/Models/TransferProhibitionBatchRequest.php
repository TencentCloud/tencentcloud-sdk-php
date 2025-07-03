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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransferProhibitionBatch请求参数结构体
 *
 * @method array getDomains() 获取批量操作的域名。
一次提交不大于4000个
 * @method void setDomains(array $Domains) 设置批量操作的域名。
一次提交不大于4000个
 * @method boolean getStatus() 获取是否开启禁止域名转移。
true: 开启禁止域名转移状态。
false：关闭禁止域名转移状态。
 * @method void setStatus(boolean $Status) 设置是否开启禁止域名转移。
true: 开启禁止域名转移状态。
false：关闭禁止域名转移状态。
 */
class TransferProhibitionBatchRequest extends AbstractModel
{
    /**
     * @var array 批量操作的域名。
一次提交不大于4000个
     */
    public $Domains;

    /**
     * @var boolean 是否开启禁止域名转移。
true: 开启禁止域名转移状态。
false：关闭禁止域名转移状态。
     */
    public $Status;

    /**
     * @param array $Domains 批量操作的域名。
一次提交不大于4000个
     * @param boolean $Status 是否开启禁止域名转移。
true: 开启禁止域名转移状态。
false：关闭禁止域名转移状态。
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
