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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人签署链接信息
 *
 * @method string getSignUrl() 获取签署链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
 * @method void setSignUrl(string $SignUrl) 设置签署链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
 * @method string getApproverType() 获取签署人类型 PERSON-个人
 * @method void setApproverType(string $ApproverType) 设置签署人类型 PERSON-个人
 * @method string getName() 获取签署人姓名
 * @method void setName(string $Name) 设置签署人姓名
 * @method string getMobile() 获取签署人手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号
 * @method string getLongUrl() 获取签署长链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLongUrl(string $LongUrl) 设置签署长链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowApproverUrlInfo extends AbstractModel
{
    /**
     * @var string 签署链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
     */
    public $SignUrl;

    /**
     * @var string 签署人类型 PERSON-个人
     */
    public $ApproverType;

    /**
     * @var string 签署人姓名
     */
    public $Name;

    /**
     * @var string 签署人手机号
     */
    public $Mobile;

    /**
     * @var string 签署长链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LongUrl;

    /**
     * @param string $SignUrl 签署链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
     * @param string $ApproverType 签署人类型 PERSON-个人
     * @param string $Name 签署人姓名
     * @param string $Mobile 签署人手机号
     * @param string $LongUrl 签署长链接。注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SignUrl",$param) and $param["SignUrl"] !== null) {
            $this->SignUrl = $param["SignUrl"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("LongUrl",$param) and $param["LongUrl"] !== null) {
            $this->LongUrl = $param["LongUrl"];
        }
    }
}
