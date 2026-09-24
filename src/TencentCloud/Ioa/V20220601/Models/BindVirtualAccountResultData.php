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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定虚拟组结果明细项
 *
 * @method integer getAccountId() 获取<p>账号Id（通过AccountIdList传入时回显）</p>
 * @method void setAccountId(integer $AccountId) 设置<p>账号Id（通过AccountIdList传入时回显）</p>
 * @method integer getMenuId() 获取<p>目录ID（通过AccountUserList传入时回显，否则为0）</p>
 * @method void setMenuId(integer $MenuId) 设置<p>目录ID（通过AccountUserList传入时回显，否则为0）</p>
 * @method string getReason() 获取<p>失败原因，仅失败项有值：ACCOUNT_NOT_FOUND / ACCOUNT_NOT_IN_GROUP / DB_ERROR</p>
 * @method void setReason(string $Reason) 设置<p>失败原因，仅失败项有值：ACCOUNT_NOT_FOUND / ACCOUNT_NOT_IN_GROUP / DB_ERROR</p>
 * @method string getUserId() 获取<p>登录账号（通过AccountUserList传入时回显，否则为空）</p>
 * @method void setUserId(string $UserId) 设置<p>登录账号（通过AccountUserList传入时回显，否则为空）</p>
 */
class BindVirtualAccountResultData extends AbstractModel
{
    /**
     * @var integer <p>账号Id（通过AccountIdList传入时回显）</p>
     */
    public $AccountId;

    /**
     * @var integer <p>目录ID（通过AccountUserList传入时回显，否则为0）</p>
     */
    public $MenuId;

    /**
     * @var string <p>失败原因，仅失败项有值：ACCOUNT_NOT_FOUND / ACCOUNT_NOT_IN_GROUP / DB_ERROR</p>
     */
    public $Reason;

    /**
     * @var string <p>登录账号（通过AccountUserList传入时回显，否则为空）</p>
     */
    public $UserId;

    /**
     * @param integer $AccountId <p>账号Id（通过AccountIdList传入时回显）</p>
     * @param integer $MenuId <p>目录ID（通过AccountUserList传入时回显，否则为0）</p>
     * @param string $Reason <p>失败原因，仅失败项有值：ACCOUNT_NOT_FOUND / ACCOUNT_NOT_IN_GROUP / DB_ERROR</p>
     * @param string $UserId <p>登录账号（通过AccountUserList传入时回显，否则为空）</p>
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("MenuId",$param) and $param["MenuId"] !== null) {
            $this->MenuId = $param["MenuId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
