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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 营销活动码
 *
 * @method string getId() 获取<p>活动码ID</p>
 * @method void setId(string $Id) 设置<p>活动码ID</p>
 * @method string getType() 获取<p>活动码类型，例如：qrcode-二维码、barcode-条形码、miniprogram_code-小程序码</p>
 * @method void setType(string $Type) 设置<p>活动码类型，例如：qrcode-二维码、barcode-条形码、miniprogram_code-小程序码</p>
 * @method string getImageLink() 获取<p>活动码图片URL或链接</p>
 * @method void setImageLink(string $ImageLink) 设置<p>活动码图片URL或链接</p>
 * @method Address getAddress() 获取<p>营销活动码使用地址</p>
 * @method void setAddress(Address $Address) 设置<p>营销活动码使用地址</p>
 * @method array getItems() 获取<p>营销活动码关联的商品</p>
 * @method void setItems(array $Items) 设置<p>营销活动码关联的商品</p>
 */
class PromotionCode extends AbstractModel
{
    /**
     * @var string <p>活动码ID</p>
     */
    public $Id;

    /**
     * @var string <p>活动码类型，例如：qrcode-二维码、barcode-条形码、miniprogram_code-小程序码</p>
     */
    public $Type;

    /**
     * @var string <p>活动码图片URL或链接</p>
     */
    public $ImageLink;

    /**
     * @var Address <p>营销活动码使用地址</p>
     */
    public $Address;

    /**
     * @var array <p>营销活动码关联的商品</p>
     */
    public $Items;

    /**
     * @param string $Id <p>活动码ID</p>
     * @param string $Type <p>活动码类型，例如：qrcode-二维码、barcode-条形码、miniprogram_code-小程序码</p>
     * @param string $ImageLink <p>活动码图片URL或链接</p>
     * @param Address $Address <p>营销活动码使用地址</p>
     * @param array $Items <p>营销活动码关联的商品</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImageLink",$param) and $param["ImageLink"] !== null) {
            $this->ImageLink = $param["ImageLink"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
