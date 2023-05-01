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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微工卡预核身结果
 *
 * @method string getAuthNo() 获取商户核身单号
 * @method void setAuthNo(string $AuthNo) 设置商户核身单号
 * @method string getOpenId() 获取微信用户标识
 * @method void setOpenId(string $OpenId) 设置微信用户标识
 * @method string getMchId() 获取商户号
 * @method void setMchId(string $MchId) 设置商户号
 * @method string getSubMchId() 获取子商户号
 * @method void setSubMchId(string $SubMchId) 设置子商户号
 * @method string getToken() 获取预核身token值
 * @method void setToken(string $Token) 设置预核身token值
 * @method integer getExpire() 获取token有效期时间，单位：秒
 * @method void setExpire(integer $Expire) 设置token有效期时间，单位：秒
 */
class WechatPreAuthResult extends AbstractModel
{
    /**
     * @var string 商户核身单号
     */
    public $AuthNo;

    /**
     * @var string 微信用户标识
     */
    public $OpenId;

    /**
     * @var string 商户号
     */
    public $MchId;

    /**
     * @var string 子商户号
     */
    public $SubMchId;

    /**
     * @var string 预核身token值
     */
    public $Token;

    /**
     * @var integer token有效期时间，单位：秒
     */
    public $Expire;

    /**
     * @param string $AuthNo 商户核身单号
     * @param string $OpenId 微信用户标识
     * @param string $MchId 商户号
     * @param string $SubMchId 子商户号
     * @param string $Token 预核身token值
     * @param integer $Expire token有效期时间，单位：秒
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
        if (array_key_exists("AuthNo",$param) and $param["AuthNo"] !== null) {
            $this->AuthNo = $param["AuthNo"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("MchId",$param) and $param["MchId"] !== null) {
            $this->MchId = $param["MchId"];
        }

        if (array_key_exists("SubMchId",$param) and $param["SubMchId"] !== null) {
            $this->SubMchId = $param["SubMchId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}
