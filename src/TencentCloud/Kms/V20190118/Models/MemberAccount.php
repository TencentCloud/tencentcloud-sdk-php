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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享成员账号信息
 *
 * @method integer getMemberAppId() 获取成员账号appid

 * @method void setMemberAppId(integer $MemberAppId) 设置成员账号appid

 * @method integer getMemberUin() 获取成员账号uin
 * @method void setMemberUin(integer $MemberUin) 设置成员账号uin
 */
class MemberAccount extends AbstractModel
{
    /**
     * @var integer 成员账号appid

     */
    public $MemberAppId;

    /**
     * @var integer 成员账号uin
     */
    public $MemberUin;

    /**
     * @param integer $MemberAppId 成员账号appid

     * @param integer $MemberUin 成员账号uin
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
        if (array_key_exists("MemberAppId",$param) and $param["MemberAppId"] !== null) {
            $this->MemberAppId = $param["MemberAppId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }
    }
}
