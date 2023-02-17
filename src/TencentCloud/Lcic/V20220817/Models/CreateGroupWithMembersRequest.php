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
 * CreateGroupWithMembers请求参数结构体
 *
 * @method string getGroupName() 获取待创建群组名称
 * @method void setGroupName(string $GroupName) 设置待创建群组名称
 * @method integer getSdkAppId() 获取低代码平台应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台应用ID
 * @method string getTeacherId() 获取默认绑定主讲老师ID
 * @method void setTeacherId(string $TeacherId) 设置默认绑定主讲老师ID
 * @method array getMemberIds() 获取群组成员列表,一次性最多200个
 * @method void setMemberIds(array $MemberIds) 设置群组成员列表,一次性最多200个
 */
class CreateGroupWithMembersRequest extends AbstractModel
{
    /**
     * @var string 待创建群组名称
     */
    public $GroupName;

    /**
     * @var integer 低代码平台应用ID
     */
    public $SdkAppId;

    /**
     * @var string 默认绑定主讲老师ID
     */
    public $TeacherId;

    /**
     * @var array 群组成员列表,一次性最多200个
     */
    public $MemberIds;

    /**
     * @param string $GroupName 待创建群组名称
     * @param integer $SdkAppId 低代码平台应用ID
     * @param string $TeacherId 默认绑定主讲老师ID
     * @param array $MemberIds 群组成员列表,一次性最多200个
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            $this->MemberIds = $param["MemberIds"];
        }
    }
}
