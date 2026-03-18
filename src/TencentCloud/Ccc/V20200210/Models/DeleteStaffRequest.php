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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteStaff请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method array getStaffList() 获取<p>待删除客服邮箱列表，一次最大支持200个。</p>
 * @method void setStaffList(array $StaffList) 设置<p>待删除客服邮箱列表，一次最大支持200个。</p>
 */
class DeleteStaffRequest extends AbstractModel
{
    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var array <p>待删除客服邮箱列表，一次最大支持200个。</p>
     */
    public $StaffList;

    /**
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param array $StaffList <p>待删除客服邮箱列表，一次最大支持200个。</p>
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

        if (array_key_exists("StaffList",$param) and $param["StaffList"] !== null) {
            $this->StaffList = $param["StaffList"];
        }
    }
}
