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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendOrgMemberAccountBindEmail请求参数结构体
 *
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method integer getBindId() 获取绑定ID。可以通过[DescribeOrganizationMemberEmailBind](https://cloud.tencent.com/document/product/850/93332)获取
 * @method void setBindId(integer $BindId) 设置绑定ID。可以通过[DescribeOrganizationMemberEmailBind](https://cloud.tencent.com/document/product/850/93332)获取
 */
class SendOrgMemberAccountBindEmailRequest extends AbstractModel
{
    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var integer 绑定ID。可以通过[DescribeOrganizationMemberEmailBind](https://cloud.tencent.com/document/product/850/93332)获取
     */
    public $BindId;

    /**
     * @param integer $MemberUin 成员Uin。
     * @param integer $BindId 绑定ID。可以通过[DescribeOrganizationMemberEmailBind](https://cloud.tencent.com/document/product/850/93332)获取
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("BindId",$param) and $param["BindId"] !== null) {
            $this->BindId = $param["BindId"];
        }
    }
}
