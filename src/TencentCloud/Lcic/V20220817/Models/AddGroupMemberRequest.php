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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddGroupMember请求参数结构体
 *
 * @method string getGroupId() 获取群组ID
 * @method void setGroupId(string $GroupId) 设置群组ID
 * @method integer getSdkAppId() 获取低代码平台应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台应用ID
 * @method array getMemberIds() 获取成员列表，最大值200
 * @method void setMemberIds(array $MemberIds) 设置成员列表，最大值200
 */
class AddGroupMemberRequest extends AbstractModel
{
    /**
     * @var string 群组ID
     */
    public $GroupId;

    /**
     * @var integer 低代码平台应用ID
     */
    public $SdkAppId;

    /**
     * @var array 成员列表，最大值200
     */
    public $MemberIds;

    /**
     * @param string $GroupId 群组ID
     * @param integer $SdkAppId 低代码平台应用ID
     * @param array $MemberIds 成员列表，最大值200
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            $this->MemberIds = $param["MemberIds"];
        }
    }
}
