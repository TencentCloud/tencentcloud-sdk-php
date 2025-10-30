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
 * @method string getClientType() 获取客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView。</li>
 * @method void setClientType(string $ClientType) 设置客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView。</li>
 * @method integer getHighRiskMinScore() 获取判定请求为高风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 50，对应含义 51～100 为高风险。
 * @method void setHighRiskMinScore(integer $HighRiskMinScore) 设置判定请求为高风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 50，对应含义 51～100 为高风险。
 * @method SecurityAction getHighRiskRequestAction() 获取高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
 * @method void setHighRiskRequestAction(SecurityAction $HighRiskRequestAction) 设置高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
 * @method integer getMediumRiskMinScore() 获取判定请求为中风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 15，对应含义 16～50 为中风险。
 * @method void setMediumRiskMinScore(integer $MediumRiskMinScore) 设置判定请求为中风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 15，对应含义 16～50 为中风险。
 * @method SecurityAction getMediumRiskRequestAction() 获取中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
 * @method void setMediumRiskRequestAction(SecurityAction $MediumRiskRequestAction) 设置中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
 */
class DeviceProfile extends AbstractModel
{
    /**
     * @var string 客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView。</li>
     */
    public $ClientType;

    /**
     * @var integer 判定请求为高风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 50，对应含义 51～100 为高风险。
     */
    public $HighRiskMinScore;

    /**
     * @var SecurityAction 高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
     */
    public $HighRiskRequestAction;

    /**
     * @var integer 判定请求为中风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 15，对应含义 16～50 为中风险。
     */
    public $MediumRiskMinScore;

    /**
     * @var SecurityAction 中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
     */
    public $MediumRiskRequestAction;

    /**
     * @param string $ClientType 客户端设备类型。取值有：<li>iOS；</li><li>Android；</li><li>WebView。</li>
     * @param integer $HighRiskMinScore 判定请求为高风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 50，对应含义 51～100 为高风险。
     * @param SecurityAction $HighRiskRequestAction 高风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
     * @param integer $MediumRiskMinScore 判定请求为中风险的最低值，取值范围为 1～99。数值越大请求风险越高越接近 Bot 客户端发起的请求。默认值为 15，对应含义 16～50 为中风险。
     * @param SecurityAction $MediumRiskRequestAction 中风险请求的处置方式。SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Redirect：重定向；</li><li>Challenge：挑战。</li>默认值为 Monitor。
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
