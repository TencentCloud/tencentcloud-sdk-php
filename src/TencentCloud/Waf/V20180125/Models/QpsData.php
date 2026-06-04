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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取弹性qps的默认相关值
 *
 * @method integer getElasticBillingDefault() 获取<p>弹性qps默认值</p>
 * @method void setElasticBillingDefault(integer $ElasticBillingDefault) 设置<p>弹性qps默认值</p>
 * @method integer getElasticBillingMin() 获取<p>弹性qps最小值</p>
 * @method void setElasticBillingMin(integer $ElasticBillingMin) 设置<p>弹性qps最小值</p>
 * @method integer getElasticBillingMax() 获取<p>弹性qps最大值</p>
 * @method void setElasticBillingMax(integer $ElasticBillingMax) 设置<p>弹性qps最大值</p>
 * @method integer getQPSExtendMax() 获取<p>业务扩展包最大qps</p>
 * @method void setQPSExtendMax(integer $QPSExtendMax) 设置<p>业务扩展包最大qps</p>
 * @method integer getQPSExtendIntlMax() 获取<p>境外业务扩展包最大qps</p>
 * @method void setQPSExtendIntlMax(integer $QPSExtendIntlMax) 设置<p>境外业务扩展包最大qps</p>
 * @method float getElasticPrepaidRatio() 获取<p>预付费/后付费QPS扩容比</p>
 * @method void setElasticPrepaidRatio(float $ElasticPrepaidRatio) 设置<p>预付费/后付费QPS扩容比</p>
 */
class QpsData extends AbstractModel
{
    /**
     * @var integer <p>弹性qps默认值</p>
     */
    public $ElasticBillingDefault;

    /**
     * @var integer <p>弹性qps最小值</p>
     */
    public $ElasticBillingMin;

    /**
     * @var integer <p>弹性qps最大值</p>
     */
    public $ElasticBillingMax;

    /**
     * @var integer <p>业务扩展包最大qps</p>
     */
    public $QPSExtendMax;

    /**
     * @var integer <p>境外业务扩展包最大qps</p>
     */
    public $QPSExtendIntlMax;

    /**
     * @var float <p>预付费/后付费QPS扩容比</p>
     */
    public $ElasticPrepaidRatio;

    /**
     * @param integer $ElasticBillingDefault <p>弹性qps默认值</p>
     * @param integer $ElasticBillingMin <p>弹性qps最小值</p>
     * @param integer $ElasticBillingMax <p>弹性qps最大值</p>
     * @param integer $QPSExtendMax <p>业务扩展包最大qps</p>
     * @param integer $QPSExtendIntlMax <p>境外业务扩展包最大qps</p>
     * @param float $ElasticPrepaidRatio <p>预付费/后付费QPS扩容比</p>
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
        if (array_key_exists("ElasticBillingDefault",$param) and $param["ElasticBillingDefault"] !== null) {
            $this->ElasticBillingDefault = $param["ElasticBillingDefault"];
        }

        if (array_key_exists("ElasticBillingMin",$param) and $param["ElasticBillingMin"] !== null) {
            $this->ElasticBillingMin = $param["ElasticBillingMin"];
        }

        if (array_key_exists("ElasticBillingMax",$param) and $param["ElasticBillingMax"] !== null) {
            $this->ElasticBillingMax = $param["ElasticBillingMax"];
        }

        if (array_key_exists("QPSExtendMax",$param) and $param["QPSExtendMax"] !== null) {
            $this->QPSExtendMax = $param["QPSExtendMax"];
        }

        if (array_key_exists("QPSExtendIntlMax",$param) and $param["QPSExtendIntlMax"] !== null) {
            $this->QPSExtendIntlMax = $param["QPSExtendIntlMax"];
        }

        if (array_key_exists("ElasticPrepaidRatio",$param) and $param["ElasticPrepaidRatio"] !== null) {
            $this->ElasticPrepaidRatio = $param["ElasticPrepaidRatio"];
        }
    }
}
