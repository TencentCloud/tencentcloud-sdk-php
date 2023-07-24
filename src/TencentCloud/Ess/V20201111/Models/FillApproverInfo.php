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
 * 补充签署人信息
- RecipientId 必须指定
-  通过企业自定义账号ID补充签署人时，ApproverSource 和 CustomUserId 必填
- 通过二要素（姓名/手机号）补充签署人时，ApproverName 和 ApproverMobile 必填
 *
 * @method string getRecipientId() 获取对应模板中的参与方ID
 * @method void setRecipientId(string $RecipientId) 设置对应模板中的参与方ID
 * @method string getApproverSource() 获取签署人来源
WEWORKAPP: 企业微信
 * @method void setApproverSource(string $ApproverSource) 设置签署人来源
WEWORKAPP: 企业微信
 * @method string getCustomUserId() 获取企业自定义账号ID
WEWORKAPP场景下指企业自有应用获取企微明文的userid
 * @method void setCustomUserId(string $CustomUserId) 设置企业自定义账号ID
WEWORKAPP场景下指企业自有应用获取企微明文的userid
 * @method string getApproverName() 获取补充签署人姓名
 * @method void setApproverName(string $ApproverName) 设置补充签署人姓名
 * @method string getApproverMobile() 获取补充签署人手机号
 * @method void setApproverMobile(string $ApproverMobile) 设置补充签署人手机号
 */
class FillApproverInfo extends AbstractModel
{
    /**
     * @var string 对应模板中的参与方ID
     */
    public $RecipientId;

    /**
     * @var string 签署人来源
WEWORKAPP: 企业微信
     */
    public $ApproverSource;

    /**
     * @var string 企业自定义账号ID
WEWORKAPP场景下指企业自有应用获取企微明文的userid
     */
    public $CustomUserId;

    /**
     * @var string 补充签署人姓名
     */
    public $ApproverName;

    /**
     * @var string 补充签署人手机号
     */
    public $ApproverMobile;

    /**
     * @param string $RecipientId 对应模板中的参与方ID
     * @param string $ApproverSource 签署人来源
WEWORKAPP: 企业微信
     * @param string $CustomUserId 企业自定义账号ID
WEWORKAPP场景下指企业自有应用获取企微明文的userid
     * @param string $ApproverName 补充签署人姓名
     * @param string $ApproverMobile 补充签署人手机号
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("ApproverSource",$param) and $param["ApproverSource"] !== null) {
            $this->ApproverSource = $param["ApproverSource"];
        }

        if (array_key_exists("CustomUserId",$param) and $param["CustomUserId"] !== null) {
            $this->CustomUserId = $param["CustomUserId"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }
    }
}
