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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncUserAndOrderInfo请求参数结构体
 *
 * @method WeChatUserInfo getUserInfo() 获取企业微信用户信息
 * @method void setUserInfo(WeChatUserInfo $UserInfo) 设置企业微信用户信息
 * @method WeChatOrderInfo getOrderInfo() 获取企业微信订单信息
 * @method void setOrderInfo(WeChatOrderInfo $OrderInfo) 设置企业微信订单信息
 */
class SyncUserAndOrderInfoRequest extends AbstractModel
{
    /**
     * @var WeChatUserInfo 企业微信用户信息
     */
    public $UserInfo;

    /**
     * @var WeChatOrderInfo 企业微信订单信息
     */
    public $OrderInfo;

    /**
     * @param WeChatUserInfo $UserInfo 企业微信用户信息
     * @param WeChatOrderInfo $OrderInfo 企业微信订单信息
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new WeChatUserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("OrderInfo",$param) and $param["OrderInfo"] !== null) {
            $this->OrderInfo = new WeChatOrderInfo();
            $this->OrderInfo->deserialize($param["OrderInfo"]);
        }
    }
}
