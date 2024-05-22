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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDeviceTWeCallAuthorizeStatus请求参数结构体
 *
 * @method integer getStatus() 获取TweCall授权状态：0未授权，1已授权
 * @method void setStatus(integer $Status) 设置TweCall授权状态：0未授权，1已授权
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getWechatOpenId() 获取微信用户的openId
 * @method void setWechatOpenId(string $WechatOpenId) 设置微信用户的openId
 */
class UpdateDeviceTWeCallAuthorizeStatusRequest extends AbstractModel
{
    /**
     * @var integer TweCall授权状态：0未授权，1已授权
     */
    public $Status;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 微信用户的openId
     */
    public $WechatOpenId;

    /**
     * @param integer $Status TweCall授权状态：0未授权，1已授权
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名
     * @param string $WechatOpenId 微信用户的openId
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("WechatOpenId",$param) and $param["WechatOpenId"] !== null) {
            $this->WechatOpenId = $param["WechatOpenId"];
        }
    }
}
