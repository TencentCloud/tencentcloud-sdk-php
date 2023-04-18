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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindEmployeeUserIdWithClientOpenId请求参数结构体
 *
 * @method UserInfo getOperator() 获取OpenId与UserId二选一必填一个，当传入客户系统openId，传入的openId需与电子签员工userId绑定，且渠道channel必填，channel值为INTEGRATE，否则传入userId
 * @method void setOperator(UserInfo $Operator) 设置OpenId与UserId二选一必填一个，当传入客户系统openId，传入的openId需与电子签员工userId绑定，且渠道channel必填，channel值为INTEGRATE，否则传入userId
 * @method string getUserId() 获取电子签系统员工UserId
 * @method void setUserId(string $UserId) 设置电子签系统员工UserId
 * @method string getOpenId() 获取客户系统OpenId
 * @method void setOpenId(string $OpenId) 设置客户系统OpenId
 */
class UnbindEmployeeUserIdWithClientOpenIdRequest extends AbstractModel
{
    /**
     * @var UserInfo OpenId与UserId二选一必填一个，当传入客户系统openId，传入的openId需与电子签员工userId绑定，且渠道channel必填，channel值为INTEGRATE，否则传入userId
     */
    public $Operator;

    /**
     * @var string 电子签系统员工UserId
     */
    public $UserId;

    /**
     * @var string 客户系统OpenId
     */
    public $OpenId;

    /**
     * @param UserInfo $Operator OpenId与UserId二选一必填一个，当传入客户系统openId，传入的openId需与电子签员工userId绑定，且渠道channel必填，channel值为INTEGRATE，否则传入userId
     * @param string $UserId 电子签系统员工UserId
     * @param string $OpenId 客户系统OpenId
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
