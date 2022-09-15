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
 *
 * @method string getRecipientId() 获取签署人签署Id
 * @method void setRecipientId(string $RecipientId) 设置签署人签署Id
 * @method string getApproverSource() 获取签署人来源
WEWORKAPP: 企业微信
 * @method void setApproverSource(string $ApproverSource) 设置签署人来源
WEWORKAPP: 企业微信
 * @method string getCustomUserId() 获取企业自定义账号Id
WEWORKAPP场景下指企业自有应用获取企微明文的userid
 * @method void setCustomUserId(string $CustomUserId) 设置企业自定义账号Id
WEWORKAPP场景下指企业自有应用获取企微明文的userid
 */
class FillApproverInfo extends AbstractModel
{
    /**
     * @var string 签署人签署Id
     */
    public $RecipientId;

    /**
     * @var string 签署人来源
WEWORKAPP: 企业微信
     */
    public $ApproverSource;

    /**
     * @var string 企业自定义账号Id
WEWORKAPP场景下指企业自有应用获取企微明文的userid
     */
    public $CustomUserId;

    /**
     * @param string $RecipientId 签署人签署Id
     * @param string $ApproverSource 签署人来源
WEWORKAPP: 企业微信
     * @param string $CustomUserId 企业自定义账号Id
WEWORKAPP场景下指企业自有应用获取企微明文的userid
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
    }
}
