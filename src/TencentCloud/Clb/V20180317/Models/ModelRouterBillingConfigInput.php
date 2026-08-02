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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型路由计费信息
 *
 * @method string getChargeType() 获取<p>模型路由计费模式</p><p>枚举值：</p><ul><li>POSTPAID_BY_HOUR： 按量计费</li><li>RESOURCE_PACKAGE： 按资源包抵扣</li></ul>
 * @method void setChargeType(string $ChargeType) 设置<p>模型路由计费模式</p><p>枚举值：</p><ul><li>POSTPAID_BY_HOUR： 按量计费</li><li>RESOURCE_PACKAGE： 按资源包抵扣</li></ul>
 * @method string getSlaType() 获取<p>实例规格</p><p>枚举值：</p><ul><li>t1.nano-01： 入门版</li><li>t1.nano-02： 轻量版</li><li>t1.nano-03： 轻量增强版</li><li>t1.micro-01： 微型版</li><li>t1.micro-02： 基础版</li><li>t1.small-01： 标准版</li><li>t1.small-02： 标准增强版</li><li>t1.medium-01： 进阶版</li><li>t1.medium-02： 进阶增强版</li><li>t1.large-01： 专业版</li><li>t1.large-02： 专业增强版</li><li>t1.xlarge-01： 旗舰版</li><li>t1.xlarge-02： 至尊版</li></ul>
 * @method void setSlaType(string $SlaType) 设置<p>实例规格</p><p>枚举值：</p><ul><li>t1.nano-01： 入门版</li><li>t1.nano-02： 轻量版</li><li>t1.nano-03： 轻量增强版</li><li>t1.micro-01： 微型版</li><li>t1.micro-02： 基础版</li><li>t1.small-01： 标准版</li><li>t1.small-02： 标准增强版</li><li>t1.medium-01： 进阶版</li><li>t1.medium-02： 进阶增强版</li><li>t1.large-01： 专业版</li><li>t1.large-02： 专业增强版</li><li>t1.xlarge-01： 旗舰版</li><li>t1.xlarge-02： 至尊版</li></ul>
 * @method boolean getAssociateResourcePackage() 获取<p>是否关联资源包抵扣</p><p>枚举值：</p><ul><li>true： 关联</li><li>false： 不关联</li></ul>
 * @method void setAssociateResourcePackage(boolean $AssociateResourcePackage) 设置<p>是否关联资源包抵扣</p><p>枚举值：</p><ul><li>true： 关联</li><li>false： 不关联</li></ul>
 */
class ModelRouterBillingConfigInput extends AbstractModel
{
    /**
     * @var string <p>模型路由计费模式</p><p>枚举值：</p><ul><li>POSTPAID_BY_HOUR： 按量计费</li><li>RESOURCE_PACKAGE： 按资源包抵扣</li></ul>
     */
    public $ChargeType;

    /**
     * @var string <p>实例规格</p><p>枚举值：</p><ul><li>t1.nano-01： 入门版</li><li>t1.nano-02： 轻量版</li><li>t1.nano-03： 轻量增强版</li><li>t1.micro-01： 微型版</li><li>t1.micro-02： 基础版</li><li>t1.small-01： 标准版</li><li>t1.small-02： 标准增强版</li><li>t1.medium-01： 进阶版</li><li>t1.medium-02： 进阶增强版</li><li>t1.large-01： 专业版</li><li>t1.large-02： 专业增强版</li><li>t1.xlarge-01： 旗舰版</li><li>t1.xlarge-02： 至尊版</li></ul>
     */
    public $SlaType;

    /**
     * @var boolean <p>是否关联资源包抵扣</p><p>枚举值：</p><ul><li>true： 关联</li><li>false： 不关联</li></ul>
     */
    public $AssociateResourcePackage;

    /**
     * @param string $ChargeType <p>模型路由计费模式</p><p>枚举值：</p><ul><li>POSTPAID_BY_HOUR： 按量计费</li><li>RESOURCE_PACKAGE： 按资源包抵扣</li></ul>
     * @param string $SlaType <p>实例规格</p><p>枚举值：</p><ul><li>t1.nano-01： 入门版</li><li>t1.nano-02： 轻量版</li><li>t1.nano-03： 轻量增强版</li><li>t1.micro-01： 微型版</li><li>t1.micro-02： 基础版</li><li>t1.small-01： 标准版</li><li>t1.small-02： 标准增强版</li><li>t1.medium-01： 进阶版</li><li>t1.medium-02： 进阶增强版</li><li>t1.large-01： 专业版</li><li>t1.large-02： 专业增强版</li><li>t1.xlarge-01： 旗舰版</li><li>t1.xlarge-02： 至尊版</li></ul>
     * @param boolean $AssociateResourcePackage <p>是否关联资源包抵扣</p><p>枚举值：</p><ul><li>true： 关联</li><li>false： 不关联</li></ul>
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("AssociateResourcePackage",$param) and $param["AssociateResourcePackage"] !== null) {
            $this->AssociateResourcePackage = $param["AssociateResourcePackage"];
        }
    }
}
