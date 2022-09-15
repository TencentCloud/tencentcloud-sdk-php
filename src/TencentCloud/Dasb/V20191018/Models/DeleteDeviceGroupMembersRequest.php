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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDeviceGroupMembers请求参数结构体
 *
 * @method integer getId() 获取资产组ID
 * @method void setId(integer $Id) 设置资产组ID
 * @method array getMemberIdSet() 获取需要删除的资产ID集合
 * @method void setMemberIdSet(array $MemberIdSet) 设置需要删除的资产ID集合
 */
class DeleteDeviceGroupMembersRequest extends AbstractModel
{
    /**
     * @var integer 资产组ID
     */
    public $Id;

    /**
     * @var array 需要删除的资产ID集合
     */
    public $MemberIdSet;

    /**
     * @param integer $Id 资产组ID
     * @param array $MemberIdSet 需要删除的资产ID集合
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MemberIdSet",$param) and $param["MemberIdSet"] !== null) {
            $this->MemberIdSet = $param["MemberIdSet"];
        }
    }
}
