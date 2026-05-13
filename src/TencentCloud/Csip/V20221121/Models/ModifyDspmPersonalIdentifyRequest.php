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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmPersonalIdentify请求参数结构体
 *
 * @method string getPersonId() 获取身份id
 * @method void setPersonId(string $PersonId) 设置身份id
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModifyDspmPersonalIdentifyRequest extends AbstractModel
{
    /**
     * @var string 身份id
     */
    public $PersonId;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $PersonId 身份id
     * @param string $Phone 手机号
     * @param string $Remark 备注
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
