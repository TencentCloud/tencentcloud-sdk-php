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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对象
 *
 * @method string getObjectId() 获取对象id
 * @method void setObjectId(string $ObjectId) 设置对象id
 * @method integer getMemberAppId() 获取成员appid
 * @method void setMemberAppId(integer $MemberAppId) 设置成员appid
 * @method string getMemberUin() 获取成员uin
 * @method void setMemberUin(string $MemberUin) 设置成员uin
 * @method string getMemberNickName() 获取成员昵称
 * @method void setMemberNickName(string $MemberNickName) 设置成员昵称
 */
class Object extends AbstractModel
{
    /**
     * @var string 对象id
     */
    public $ObjectId;

    /**
     * @var integer 成员appid
     */
    public $MemberAppId;

    /**
     * @var string 成员uin
     */
    public $MemberUin;

    /**
     * @var string 成员昵称
     */
    public $MemberNickName;

    /**
     * @param string $ObjectId 对象id
     * @param integer $MemberAppId 成员appid
     * @param string $MemberUin 成员uin
     * @param string $MemberNickName 成员昵称
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("MemberAppId",$param) and $param["MemberAppId"] !== null) {
            $this->MemberAppId = $param["MemberAppId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberNickName",$param) and $param["MemberNickName"] !== null) {
            $this->MemberNickName = $param["MemberNickName"];
        }
    }
}
