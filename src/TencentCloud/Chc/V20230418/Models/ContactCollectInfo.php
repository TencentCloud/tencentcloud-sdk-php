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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 归集业务联系人信息
 *
 * @method string getContactName() 获取业务联系人姓名
 * @method void setContactName(string $ContactName) 设置业务联系人姓名
 * @method string getContactPhone() 获取联系人电话
 * @method void setContactPhone(string $ContactPhone) 设置联系人电话
 */
class ContactCollectInfo extends AbstractModel
{
    /**
     * @var string 业务联系人姓名
     */
    public $ContactName;

    /**
     * @var string 联系人电话
     */
    public $ContactPhone;

    /**
     * @param string $ContactName 业务联系人姓名
     * @param string $ContactPhone 联系人电话
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
        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }
    }
}
