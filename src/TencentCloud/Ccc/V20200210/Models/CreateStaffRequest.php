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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStaff请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method array getStaffs() 获取客服信息，个数不超过 10
 * @method void setStaffs(array $Staffs) 设置客服信息，个数不超过 10
 * @method boolean getSendPassword() 获取是否发送密码邮件，默认true
 * @method void setSendPassword(boolean $SendPassword) 设置是否发送密码邮件，默认true
 */
class CreateStaffRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var array 客服信息，个数不超过 10
     */
    public $Staffs;

    /**
     * @var boolean 是否发送密码邮件，默认true
     */
    public $SendPassword;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param array $Staffs 客服信息，个数不超过 10
     * @param boolean $SendPassword 是否发送密码邮件，默认true
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Staffs",$param) and $param["Staffs"] !== null) {
            $this->Staffs = [];
            foreach ($param["Staffs"] as $key => $value){
                $obj = new SeatUserInfo();
                $obj->deserialize($value);
                array_push($this->Staffs, $obj);
            }
        }

        if (array_key_exists("SendPassword",$param) and $param["SendPassword"] !== null) {
            $this->SendPassword = $param["SendPassword"];
        }
    }
}
