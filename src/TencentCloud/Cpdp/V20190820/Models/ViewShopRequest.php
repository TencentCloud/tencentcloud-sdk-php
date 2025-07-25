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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ViewShop请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getOutShopId() 获取外部商户主键编号（ShopNo或OutShopId必须传一个）
 * @method void setOutShopId(string $OutShopId) 设置外部商户主键编号（ShopNo或OutShopId必须传一个）
 * @method string getShopNo() 获取门店编号（ShopNo或OutShopId必须传一个）
 * @method void setShopNo(string $ShopNo) 设置门店编号（ShopNo或OutShopId必须传一个）
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 */
class ViewShopRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 外部商户主键编号（ShopNo或OutShopId必须传一个）
     */
    public $OutShopId;

    /**
     * @var string 门店编号（ShopNo或OutShopId必须传一个）
     */
    public $ShopNo;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $OutShopId 外部商户主键编号（ShopNo或OutShopId必须传一个）
     * @param string $ShopNo 门店编号（ShopNo或OutShopId必须传一个）
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("OutShopId",$param) and $param["OutShopId"] !== null) {
            $this->OutShopId = $param["OutShopId"];
        }

        if (array_key_exists("ShopNo",$param) and $param["ShopNo"] !== null) {
            $this->ShopNo = $param["ShopNo"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
