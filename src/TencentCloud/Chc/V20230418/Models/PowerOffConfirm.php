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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关电确认信息
 *
 * @method string getConfirmContact() 获取联系人
 * @method void setConfirmContact(string $ConfirmContact) 设置联系人
 * @method string getConfirmContactNumber() 获取联系人电话
 * @method void setConfirmContactNumber(string $ConfirmContactNumber) 设置联系人电话
 */
class PowerOffConfirm extends AbstractModel
{
    /**
     * @var string 联系人
     */
    public $ConfirmContact;

    /**
     * @var string 联系人电话
     */
    public $ConfirmContactNumber;

    /**
     * @param string $ConfirmContact 联系人
     * @param string $ConfirmContactNumber 联系人电话
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
        if (array_key_exists("ConfirmContact",$param) and $param["ConfirmContact"] !== null) {
            $this->ConfirmContact = $param["ConfirmContact"];
        }

        if (array_key_exists("ConfirmContactNumber",$param) and $param["ConfirmContactNumber"] !== null) {
            $this->ConfirmContactNumber = $param["ConfirmContactNumber"];
        }
    }
}
