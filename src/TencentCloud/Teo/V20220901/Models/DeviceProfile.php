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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端设备配置
 *
 * @method string getClientType() 获取<p>客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView；</li><li>WeChatMiniProgram。</li></p>
 * @method void setClientType(string $ClientType) 设置<p>客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView；</li><li>WeChatMiniProgram。</li></p>
 * @method integer getHighRiskMinScore() 获取<p>高风险请求的最低风险分数。分数大于等于该值时，判定为高风险。</p><p>取值范围：[2, 99]</p><p>默认值：50</p>
 * @method void setHighRiskMinScore(integer $HighRiskMinScore) 设置<p>高风险请求的最低风险分数。分数大于等于该值时，判定为高风险。</p><p>取值范围：[2, 99]</p><p>默认值：50</p>
 * @method SecurityAction getHighRiskRequestAction() 获取<p>高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
 * @method void setHighRiskRequestAction(SecurityAction $HighRiskRequestAction) 设置<p>高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
 * @method integer getMediumRiskMinScore() 获取<p>中风险请求的最低风险分数。分数大于等于该值且小于 HighRiskMinScore 时，判定为中风险；低于该值时，判定为低风险。</p><p>取值范围：[1, 98]</p><p>默认值：15</p>
 * @method void setMediumRiskMinScore(integer $MediumRiskMinScore) 设置<p>中风险请求的最低风险分数。分数大于等于该值且小于 HighRiskMinScore 时，判定为中风险；低于该值时，判定为低风险。</p><p>取值范围：[1, 98]</p><p>默认值：15</p>
 * @method SecurityAction getMediumRiskRequestAction() 获取<p>中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
 * @method void setMediumRiskRequestAction(SecurityAction $MediumRiskRequestAction) 设置<p>中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
 */
class DeviceProfile extends AbstractModel
{
    /**
     * @var string <p>客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView；</li><li>WeChatMiniProgram。</li></p>
     */
    public $ClientType;

    /**
     * @var integer <p>高风险请求的最低风险分数。分数大于等于该值时，判定为高风险。</p><p>取值范围：[2, 99]</p><p>默认值：50</p>
     */
    public $HighRiskMinScore;

    /**
     * @var SecurityAction <p>高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
     */
    public $HighRiskRequestAction;

    /**
     * @var integer <p>中风险请求的最低风险分数。分数大于等于该值且小于 HighRiskMinScore 时，判定为中风险；低于该值时，判定为低风险。</p><p>取值范围：[1, 98]</p><p>默认值：15</p>
     */
    public $MediumRiskMinScore;

    /**
     * @var SecurityAction <p>中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
     */
    public $MediumRiskRequestAction;

    /**
     * @param string $ClientType <p>客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView；</li><li>WeChatMiniProgram。</li></p>
     * @param integer $HighRiskMinScore <p>高风险请求的最低风险分数。分数大于等于该值时，判定为高风险。</p><p>取值范围：[2, 99]</p><p>默认值：50</p>
     * @param SecurityAction $HighRiskRequestAction <p>高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
     * @param integer $MediumRiskMinScore <p>中风险请求的最低风险分数。分数大于等于该值且小于 HighRiskMinScore 时，判定为中风险；低于该值时，判定为低风险。</p><p>取值范围：[1, 98]</p><p>默认值：15</p>
     * @param SecurityAction $MediumRiskRequestAction <p>中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。</p>
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
        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("HighRiskMinScore",$param) and $param["HighRiskMinScore"] !== null) {
            $this->HighRiskMinScore = $param["HighRiskMinScore"];
        }

        if (array_key_exists("HighRiskRequestAction",$param) and $param["HighRiskRequestAction"] !== null) {
            $this->HighRiskRequestAction = new SecurityAction();
            $this->HighRiskRequestAction->deserialize($param["HighRiskRequestAction"]);
        }

        if (array_key_exists("MediumRiskMinScore",$param) and $param["MediumRiskMinScore"] !== null) {
            $this->MediumRiskMinScore = $param["MediumRiskMinScore"];
        }

        if (array_key_exists("MediumRiskRequestAction",$param) and $param["MediumRiskRequestAction"] !== null) {
            $this->MediumRiskRequestAction = new SecurityAction();
            $this->MediumRiskRequestAction->deserialize($param["MediumRiskRequestAction"]);
        }
    }
}
