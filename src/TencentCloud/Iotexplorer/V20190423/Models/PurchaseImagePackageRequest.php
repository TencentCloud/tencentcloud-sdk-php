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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurchaseImagePackage请求参数结构体
 *
 * @method integer getRetentionDays() 获取<p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
 * @method void setRetentionDays(integer $RetentionDays) 设置<p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名</p>
 * @method string getValidityPeriod() 获取<p>卡有效期类型：monthly_card=月卡（12 个月有效期），annual_card=年卡（24 个月有效期）</p>
 * @method void setValidityPeriod(string $ValidityPeriod) 设置<p>卡有效期类型：monthly_card=月卡（12 个月有效期），annual_card=年卡（24 个月有效期）</p>
 * @method string getImageCapacity() 获取<p>图片档位：每日可上传的图片张数上限，&quot;300&quot;=300 张/日，&quot;1000&quot;=1000 张/日</p>
 * @method void setImageCapacity(string $ImageCapacity) 设置<p>图片档位：每日可上传的图片张数上限，&quot;300&quot;=300 张/日，&quot;1000&quot;=1000 张/日</p>
 * @method integer getGoodsNum() 获取<p>同规格资源包个数（默认 1）</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>同规格资源包个数（默认 1）</p>
 * @method integer getChannelId() 获取<p>通道 ID</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID</p>
 * @method string getPackageQueue() 获取<p>套餐生效策略：&quot;&quot;=默认语义，front=插队生效，end=排队末尾</p>
 * @method void setPackageQueue(string $PackageQueue) 设置<p>套餐生效策略：&quot;&quot;=默认语义，front=插队生效，end=排队末尾</p>
 * @method integer getOverride() 获取<p>覆盖当前生效套餐：0=否，1=是</p>
 * @method void setOverride(integer $Override) 设置<p>覆盖当前生效套餐：0=否，1=是</p>
 * @method string getOrderId() 获取<p>订单id</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单id</p>
 */
class PurchaseImagePackageRequest extends AbstractModel
{
    /**
     * @var integer <p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
     */
    public $RetentionDays;

    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名</p>
     */
    public $DeviceName;

    /**
     * @var string <p>卡有效期类型：monthly_card=月卡（12 个月有效期），annual_card=年卡（24 个月有效期）</p>
     */
    public $ValidityPeriod;

    /**
     * @var string <p>图片档位：每日可上传的图片张数上限，&quot;300&quot;=300 张/日，&quot;1000&quot;=1000 张/日</p>
     */
    public $ImageCapacity;

    /**
     * @var integer <p>同规格资源包个数（默认 1）</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>通道 ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>套餐生效策略：&quot;&quot;=默认语义，front=插队生效，end=排队末尾</p>
     */
    public $PackageQueue;

    /**
     * @var integer <p>覆盖当前生效套餐：0=否，1=是</p>
     */
    public $Override;

    /**
     * @var string <p>订单id</p>
     */
    public $OrderId;

    /**
     * @param integer $RetentionDays <p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名</p>
     * @param string $ValidityPeriod <p>卡有效期类型：monthly_card=月卡（12 个月有效期），annual_card=年卡（24 个月有效期）</p>
     * @param string $ImageCapacity <p>图片档位：每日可上传的图片张数上限，&quot;300&quot;=300 张/日，&quot;1000&quot;=1000 张/日</p>
     * @param integer $GoodsNum <p>同规格资源包个数（默认 1）</p>
     * @param integer $ChannelId <p>通道 ID</p>
     * @param string $PackageQueue <p>套餐生效策略：&quot;&quot;=默认语义，front=插队生效，end=排队末尾</p>
     * @param integer $Override <p>覆盖当前生效套餐：0=否，1=是</p>
     * @param string $OrderId <p>订单id</p>
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
        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("ImageCapacity",$param) and $param["ImageCapacity"] !== null) {
            $this->ImageCapacity = $param["ImageCapacity"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("PackageQueue",$param) and $param["PackageQueue"] !== null) {
            $this->PackageQueue = $param["PackageQueue"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
