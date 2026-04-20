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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 催办邮件结构体
 *
 * @method string getSignId() 获取<p>签署编号</p>
 * @method void setSignId(string $SignId) 设置<p>签署编号</p>
 * @method string getApproverEmail() 获取<p>指定邮箱地址，催办时使用此邮箱替代 DB 中存储的邮箱</p>
 * @method void setApproverEmail(string $ApproverEmail) 设置<p>指定邮箱地址，催办时使用此邮箱替代 DB 中存储的邮箱</p>
 */
class RemindEmailInfo extends AbstractModel
{
    /**
     * @var string <p>签署编号</p>
     */
    public $SignId;

    /**
     * @var string <p>指定邮箱地址，催办时使用此邮箱替代 DB 中存储的邮箱</p>
     */
    public $ApproverEmail;

    /**
     * @param string $SignId <p>签署编号</p>
     * @param string $ApproverEmail <p>指定邮箱地址，催办时使用此邮箱替代 DB 中存储的邮箱</p>
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ApproverEmail",$param) and $param["ApproverEmail"] !== null) {
            $this->ApproverEmail = $param["ApproverEmail"];
        }
    }
}
