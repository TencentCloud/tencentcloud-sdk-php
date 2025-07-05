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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态合同签署人结果
 *
 * @method string getRecipientId() 获取签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；	
 * @method void setRecipientId(string $RecipientId) 设置签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；	
 * @method string getSignId() 获取签署ID - 发起流程时系统自动补充 - 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息	
 * @method void setSignId(string $SignId) 设置签署ID - 发起流程时系统自动补充 - 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息	
 * @method integer getApproverStatus() 获取签署人状态信息
 * @method void setApproverStatus(integer $ApproverStatus) 设置签署人状态信息
 */
class DynamicFlowApproverResult extends AbstractModel
{
    /**
     * @var string 签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；	
     */
    public $RecipientId;

    /**
     * @var string 签署ID - 发起流程时系统自动补充 - 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息	
     */
    public $SignId;

    /**
     * @var integer 签署人状态信息
     */
    public $ApproverStatus;

    /**
     * @param string $RecipientId 签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；	
     * @param string $SignId 签署ID - 发起流程时系统自动补充 - 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息	
     * @param integer $ApproverStatus 签署人状态信息
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

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ApproverStatus",$param) and $param["ApproverStatus"] !== null) {
            $this->ApproverStatus = $param["ApproverStatus"];
        }
    }
}
