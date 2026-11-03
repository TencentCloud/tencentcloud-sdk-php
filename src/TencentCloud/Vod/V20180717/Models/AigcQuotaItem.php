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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 配额
 *
 * @method string getQuotaType() 获取<p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
 * @method void setQuotaType(string $QuotaType) 设置<p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
 * @method string getApiToken() 获取<p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
 * @method void setApiToken(string $ApiToken) 设置<p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
 * @method integer getQuotaLimit() 获取<p>任务的配额数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
 * @method void setQuotaLimit(integer $QuotaLimit) 设置<p>任务的配额数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
 * @method integer getUsage() 获取<p>已经使用的用量数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
 * @method void setUsage(integer $Usage) 设置<p>已经使用的用量数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
 * @method string getQuotaPeriod() 获取<p>配额重置周期。</p><p>枚举值：</p><ul><li>Day： 每天重置。</li><li>Month： 每月指定日期重置。</li><li>Total： 永不重置，QuotaLimit参数即为总额度。</li></ul>
 * @method void setQuotaPeriod(string $QuotaPeriod) 设置<p>配额重置周期。</p><p>枚举值：</p><ul><li>Day： 每天重置。</li><li>Month： 每月指定日期重置。</li><li>Total： 永不重置，QuotaLimit参数即为总额度。</li></ul>
 * @method integer getResetDay() 获取<p>每月配额的重置日期，仅QuotaPeriod=Month时有效。</p><p>如果当月无所选日期时，顺延至次月 1 日 00:00 重置。</p>
 * @method void setResetDay(integer $ResetDay) 设置<p>每月配额的重置日期，仅QuotaPeriod=Month时有效。</p><p>如果当月无所选日期时，顺延至次月 1 日 00:00 重置。</p>
 * @method string getModelQuotaSwitch() 获取<p>是否开启按单个模型设置配额</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method void setModelQuotaSwitch(string $ModelQuotaSwitch) 设置<p>是否开启按单个模型设置配额</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method array getModelQuotas() 获取<p>按单个模型设置的配额，仅ModelQuotaSwitch=ON时有效。</p>
 * @method void setModelQuotas(array $ModelQuotas) 设置<p>按单个模型设置的配额，仅ModelQuotaSwitch=ON时有效。</p>
 */
class AigcQuotaItem extends AbstractModel
{
    /**
     * @var string <p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
     */
    public $ApiToken;

    /**
     * @var integer <p>任务的配额数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
     */
    public $QuotaLimit;

    /**
     * @var integer <p>已经使用的用量数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
     */
    public $Usage;

    /**
     * @var string <p>配额重置周期。</p><p>枚举值：</p><ul><li>Day： 每天重置。</li><li>Month： 每月指定日期重置。</li><li>Total： 永不重置，QuotaLimit参数即为总额度。</li></ul>
     */
    public $QuotaPeriod;

    /**
     * @var integer <p>每月配额的重置日期，仅QuotaPeriod=Month时有效。</p><p>如果当月无所选日期时，顺延至次月 1 日 00:00 重置。</p>
     */
    public $ResetDay;

    /**
     * @var string <p>是否开启按单个模型设置配额</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     */
    public $ModelQuotaSwitch;

    /**
     * @var array <p>按单个模型设置的配额，仅ModelQuotaSwitch=ON时有效。</p>
     */
    public $ModelQuotas;

    /**
     * @param string $QuotaType <p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
     * @param string $ApiToken <p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
     * @param integer $QuotaLimit <p>任务的配额数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
     * @param integer $Usage <p>已经使用的用量数</p><p>单位：</p><ul><li>当QuotaLimit=Image时，单位为张</li><li>当QuotaLimit=Video时，单位为秒</li><li>当QuotaLimit=Text时，单位为token</li></ul>
     * @param string $QuotaPeriod <p>配额重置周期。</p><p>枚举值：</p><ul><li>Day： 每天重置。</li><li>Month： 每月指定日期重置。</li><li>Total： 永不重置，QuotaLimit参数即为总额度。</li></ul>
     * @param integer $ResetDay <p>每月配额的重置日期，仅QuotaPeriod=Month时有效。</p><p>如果当月无所选日期时，顺延至次月 1 日 00:00 重置。</p>
     * @param string $ModelQuotaSwitch <p>是否开启按单个模型设置配额</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     * @param array $ModelQuotas <p>按单个模型设置的配额，仅ModelQuotaSwitch=ON时有效。</p>
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
        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("QuotaPeriod",$param) and $param["QuotaPeriod"] !== null) {
            $this->QuotaPeriod = $param["QuotaPeriod"];
        }

        if (array_key_exists("ResetDay",$param) and $param["ResetDay"] !== null) {
            $this->ResetDay = $param["ResetDay"];
        }

        if (array_key_exists("ModelQuotaSwitch",$param) and $param["ModelQuotaSwitch"] !== null) {
            $this->ModelQuotaSwitch = $param["ModelQuotaSwitch"];
        }

        if (array_key_exists("ModelQuotas",$param) and $param["ModelQuotas"] !== null) {
            $this->ModelQuotas = [];
            foreach ($param["ModelQuotas"] as $key => $value){
                $obj = new AigcModelQuotaWithUsage();
                $obj->deserialize($value);
                array_push($this->ModelQuotas, $obj);
            }
        }
    }
}
