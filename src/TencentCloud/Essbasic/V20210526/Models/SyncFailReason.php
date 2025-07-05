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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步员工失败原因
 *
 * @method string getId() 获取企业员工标识(即OpenId)
 * @method void setId(string $Id) 设置企业员工标识(即OpenId)
 * @method string getMessage() 获取新增员工或者员工离职失败原因, 可能存证ID不符合规范、证件号码不合法等原因
 * @method void setMessage(string $Message) 设置新增员工或者员工离职失败原因, 可能存证ID不符合规范、证件号码不合法等原因
 */
class SyncFailReason extends AbstractModel
{
    /**
     * @var string 企业员工标识(即OpenId)
     */
    public $Id;

    /**
     * @var string 新增员工或者员工离职失败原因, 可能存证ID不符合规范、证件号码不合法等原因
     */
    public $Message;

    /**
     * @param string $Id 企业员工标识(即OpenId)
     * @param string $Message 新增员工或者员工离职失败原因, 可能存证ID不符合规范、证件号码不合法等原因
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
