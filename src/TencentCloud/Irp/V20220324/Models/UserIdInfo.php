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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method integer getUserIdType() 获取用户ID类型：
1 - qq
2 - qq_md5：md5后的qq
3 - imei：设备imei（安卓10之后不会再授权imei，安卓10之后的imei映射关系可能拿不到，故安卓10之后的设备建议用oaid）
4 - imei_md5：md5后的imei
5 - idfa: Apple 向用户设备随机分配的设备标识符
6 - idfa_md5：md5之后的idfa
7 - gdt_openid：广点通生成的openid
8 - oaid：安卓10之后一种非永久性设备标识符
9 - oaid_md5：md5后的oaid
10 - wx_openid：微信openid
11 - qq_openid：QQ的openid
12 - phone：电话号码
13 - phone_md5：md5后的电话号码
14 - phone_sha256：SHA256加密的手机号
15 - phone_sm3：国密SM3加密的手机号
1000 - 客户自定义id
 * @method void setUserIdType(integer $UserIdType) 设置用户ID类型：
1 - qq
2 - qq_md5：md5后的qq
3 - imei：设备imei（安卓10之后不会再授权imei，安卓10之后的imei映射关系可能拿不到，故安卓10之后的设备建议用oaid）
4 - imei_md5：md5后的imei
5 - idfa: Apple 向用户设备随机分配的设备标识符
6 - idfa_md5：md5之后的idfa
7 - gdt_openid：广点通生成的openid
8 - oaid：安卓10之后一种非永久性设备标识符
9 - oaid_md5：md5后的oaid
10 - wx_openid：微信openid
11 - qq_openid：QQ的openid
12 - phone：电话号码
13 - phone_md5：md5后的电话号码
14 - phone_sha256：SHA256加密的手机号
15 - phone_sm3：国密SM3加密的手机号
1000 - 客户自定义id
 * @method string getUserId() 获取用户id
 * @method void setUserId(string $UserId) 设置用户id
 */
class UserIdInfo extends AbstractModel
{
    /**
     * @var integer 用户ID类型：
1 - qq
2 - qq_md5：md5后的qq
3 - imei：设备imei（安卓10之后不会再授权imei，安卓10之后的imei映射关系可能拿不到，故安卓10之后的设备建议用oaid）
4 - imei_md5：md5后的imei
5 - idfa: Apple 向用户设备随机分配的设备标识符
6 - idfa_md5：md5之后的idfa
7 - gdt_openid：广点通生成的openid
8 - oaid：安卓10之后一种非永久性设备标识符
9 - oaid_md5：md5后的oaid
10 - wx_openid：微信openid
11 - qq_openid：QQ的openid
12 - phone：电话号码
13 - phone_md5：md5后的电话号码
14 - phone_sha256：SHA256加密的手机号
15 - phone_sm3：国密SM3加密的手机号
1000 - 客户自定义id
     */
    public $UserIdType;

    /**
     * @var string 用户id
     */
    public $UserId;

    /**
     * @param integer $UserIdType 用户ID类型：
1 - qq
2 - qq_md5：md5后的qq
3 - imei：设备imei（安卓10之后不会再授权imei，安卓10之后的imei映射关系可能拿不到，故安卓10之后的设备建议用oaid）
4 - imei_md5：md5后的imei
5 - idfa: Apple 向用户设备随机分配的设备标识符
6 - idfa_md5：md5之后的idfa
7 - gdt_openid：广点通生成的openid
8 - oaid：安卓10之后一种非永久性设备标识符
9 - oaid_md5：md5后的oaid
10 - wx_openid：微信openid
11 - qq_openid：QQ的openid
12 - phone：电话号码
13 - phone_md5：md5后的电话号码
14 - phone_sha256：SHA256加密的手机号
15 - phone_sm3：国密SM3加密的手机号
1000 - 客户自定义id
     * @param string $UserId 用户id
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
        if (array_key_exists("UserIdType",$param) and $param["UserIdType"] !== null) {
            $this->UserIdType = $param["UserIdType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
