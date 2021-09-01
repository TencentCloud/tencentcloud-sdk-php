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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvDealRegion请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getDealType() 获取订单类型：
ENV_PREPAY_MINIAPP= 预付费环境(微信小程序)
ENV_PREPAY_CLOUD= 预付费环境(腾讯云)
ENV_POSTPAY = 后付费环境
HOSTING_PREPAY = 预付费静态托管
PACKAGE=套餐包
 * @method void setDealType(string $DealType) 设置订单类型：
ENV_PREPAY_MINIAPP= 预付费环境(微信小程序)
ENV_PREPAY_CLOUD= 预付费环境(腾讯云)
ENV_POSTPAY = 后付费环境
HOSTING_PREPAY = 预付费静态托管
PACKAGE=套餐包
 * @method string getDealAction() 获取下单类型：
CREATE = 新购
RENEW = 续费
MODIFY = 套餐调整(升级/降级)
REFUND = 退费
 * @method void setDealAction(string $DealAction) 设置下单类型：
CREATE = 新购
RENEW = 续费
MODIFY = 套餐调整(升级/降级)
REFUND = 退费
 * @method string getDealRegion() 获取下单地域：
ap-guangzhou = 广州地域
ap-shanghai = 上海地域
ap-beijing = 北京地域
 * @method void setDealRegion(string $DealRegion) 设置下单地域：
ap-guangzhou = 广州地域
ap-shanghai = 上海地域
ap-beijing = 北京地域
 */
class DescribeEnvDealRegionRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 订单类型：
ENV_PREPAY_MINIAPP= 预付费环境(微信小程序)
ENV_PREPAY_CLOUD= 预付费环境(腾讯云)
ENV_POSTPAY = 后付费环境
HOSTING_PREPAY = 预付费静态托管
PACKAGE=套餐包
     */
    public $DealType;

    /**
     * @var string 下单类型：
CREATE = 新购
RENEW = 续费
MODIFY = 套餐调整(升级/降级)
REFUND = 退费
     */
    public $DealAction;

    /**
     * @var string 下单地域：
ap-guangzhou = 广州地域
ap-shanghai = 上海地域
ap-beijing = 北京地域
     */
    public $DealRegion;

    /**
     * @param string $EnvId 环境ID
     * @param string $DealType 订单类型：
ENV_PREPAY_MINIAPP= 预付费环境(微信小程序)
ENV_PREPAY_CLOUD= 预付费环境(腾讯云)
ENV_POSTPAY = 后付费环境
HOSTING_PREPAY = 预付费静态托管
PACKAGE=套餐包
     * @param string $DealAction 下单类型：
CREATE = 新购
RENEW = 续费
MODIFY = 套餐调整(升级/降级)
REFUND = 退费
     * @param string $DealRegion 下单地域：
ap-guangzhou = 广州地域
ap-shanghai = 上海地域
ap-beijing = 北京地域
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("DealType",$param) and $param["DealType"] !== null) {
            $this->DealType = $param["DealType"];
        }

        if (array_key_exists("DealAction",$param) and $param["DealAction"] !== null) {
            $this->DealAction = $param["DealAction"];
        }

        if (array_key_exists("DealRegion",$param) and $param["DealRegion"] !== null) {
            $this->DealRegion = $param["DealRegion"];
        }
    }
}
