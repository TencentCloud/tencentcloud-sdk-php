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
 * 更新员工信息失败返回的数据信息
 *
 * @method string getDisplayName() 获取用户传入的名称
 * @method void setDisplayName(string $DisplayName) 设置用户传入的名称
 * @method string getMobile() 获取用户传入的手机号
 * @method void setMobile(string $Mobile) 设置用户传入的手机号
 * @method string getReason() 获取失败原因
 * @method void setReason(string $Reason) 设置失败原因
 * @method string getUserId() 获取用户Id
 * @method void setUserId(string $UserId) 设置用户Id
 * @method string getOpenId() 获取用户OpenId
 * @method void setOpenId(string $OpenId) 设置用户OpenId
 */
class FailedUpdateStaffData extends AbstractModel
{
    /**
     * @var string 用户传入的名称
     */
    public $DisplayName;

    /**
     * @var string 用户传入的手机号
     */
    public $Mobile;

    /**
     * @var string 失败原因
     */
    public $Reason;

    /**
     * @var string 用户Id
     */
    public $UserId;

    /**
     * @var string 用户OpenId
     */
    public $OpenId;

    /**
     * @param string $DisplayName 用户传入的名称
     * @param string $Mobile 用户传入的手机号
     * @param string $Reason 失败原因
     * @param string $UserId 用户Id
     * @param string $OpenId 用户OpenId
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
