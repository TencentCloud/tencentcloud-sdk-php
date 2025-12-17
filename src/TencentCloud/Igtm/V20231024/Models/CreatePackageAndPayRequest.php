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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePackageAndPay请求参数结构体
 *
 * @method string getDealType() 获取下单类型：CREATE 新购；RENEW 续费；MODIFY 变配
 * @method void setDealType(string $DealType) 设置下单类型：CREATE 新购；RENEW 续费；MODIFY 变配
 * @method string getGoodsType() 获取套餐类型：STANDARD 标准版；ULTIMATE 旗舰版；TASK 任务探测
 * @method void setGoodsType(string $GoodsType) 设置套餐类型：STANDARD 标准版；ULTIMATE 旗舰版；TASK 任务探测
 * @method integer getGoodsNum() 获取商品数量：STANDARD和ULTIMATE固定为1，TASK为任务探测数量。取值范围：1～10000
 * @method void setGoodsNum(integer $GoodsNum) 设置商品数量：STANDARD和ULTIMATE固定为1，TASK为任务探测数量。取值范围：1～10000
 * @method integer getAutoRenew() 获取自动续费：1 开启自动续费；2 关闭自动续费
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费：1 开启自动续费；2 关闭自动续费
 * @method string getResourceId() 获取资源ID，续费和变配的时候需要传
 * @method void setResourceId(string $ResourceId) 设置资源ID，续费和变配的时候需要传
 * @method integer getTimeSpan() 获取套餐时长，以月为单位，创建和续费的时候需要传。取值范围：1～120
 * @method void setTimeSpan(integer $TimeSpan) 设置套餐时长，以月为单位，创建和续费的时候需要传。取值范围：1～120
 * @method string getNewPackageType() 获取升级的套餐类型，暂时只支持传ULTIMATE，不支持降配
 * @method void setNewPackageType(string $NewPackageType) 设置升级的套餐类型，暂时只支持传ULTIMATE，不支持降配
 * @method integer getAutoVoucher() 获取是否自动选择代金券，1 是；0否，默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券，1 是；0否，默认为0
 */
class CreatePackageAndPayRequest extends AbstractModel
{
    /**
     * @var string 下单类型：CREATE 新购；RENEW 续费；MODIFY 变配
     */
    public $DealType;

    /**
     * @var string 套餐类型：STANDARD 标准版；ULTIMATE 旗舰版；TASK 任务探测
     */
    public $GoodsType;

    /**
     * @var integer 商品数量：STANDARD和ULTIMATE固定为1，TASK为任务探测数量。取值范围：1～10000
     */
    public $GoodsNum;

    /**
     * @var integer 自动续费：1 开启自动续费；2 关闭自动续费
     */
    public $AutoRenew;

    /**
     * @var string 资源ID，续费和变配的时候需要传
     */
    public $ResourceId;

    /**
     * @var integer 套餐时长，以月为单位，创建和续费的时候需要传。取值范围：1～120
     */
    public $TimeSpan;

    /**
     * @var string 升级的套餐类型，暂时只支持传ULTIMATE，不支持降配
     */
    public $NewPackageType;

    /**
     * @var integer 是否自动选择代金券，1 是；0否，默认为0
     */
    public $AutoVoucher;

    /**
     * @param string $DealType 下单类型：CREATE 新购；RENEW 续费；MODIFY 变配
     * @param string $GoodsType 套餐类型：STANDARD 标准版；ULTIMATE 旗舰版；TASK 任务探测
     * @param integer $GoodsNum 商品数量：STANDARD和ULTIMATE固定为1，TASK为任务探测数量。取值范围：1～10000
     * @param integer $AutoRenew 自动续费：1 开启自动续费；2 关闭自动续费
     * @param string $ResourceId 资源ID，续费和变配的时候需要传
     * @param integer $TimeSpan 套餐时长，以月为单位，创建和续费的时候需要传。取值范围：1～120
     * @param string $NewPackageType 升级的套餐类型，暂时只支持传ULTIMATE，不支持降配
     * @param integer $AutoVoucher 是否自动选择代金券，1 是；0否，默认为0
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
        if (array_key_exists("DealType",$param) and $param["DealType"] !== null) {
            $this->DealType = $param["DealType"];
        }

        if (array_key_exists("GoodsType",$param) and $param["GoodsType"] !== null) {
            $this->GoodsType = $param["GoodsType"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("NewPackageType",$param) and $param["NewPackageType"] !== null) {
            $this->NewPackageType = $param["NewPackageType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
