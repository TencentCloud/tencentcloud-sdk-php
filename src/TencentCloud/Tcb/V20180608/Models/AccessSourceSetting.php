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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名访问来源配置
 *
 * @method string getSourceType() 获取<p>来源类型</p><p>枚举值：</p><ul><li>PUBLIC： 公网请求</li><li>VPC： VPC 请求</li><li>WOA： 办公网请求</li></ul>
 * @method void setSourceType(string $SourceType) 设置<p>来源类型</p><p>枚举值：</p><ul><li>PUBLIC： 公网请求</li><li>VPC： VPC 请求</li><li>WOA： 办公网请求</li></ul>
 * @method string getAction() 获取<p>来源请求状态</p><p>枚举值：</p><ul><li>OPEN： 放通</li><li>CLOSE： 拦截</li></ul>
 * @method void setAction(string $Action) 设置<p>来源请求状态</p><p>枚举值：</p><ul><li>OPEN： 放通</li><li>CLOSE： 拦截</li></ul>
 * @method string getWOAAuth() 获取<p>是否开启 WOA 鉴权</p><p>枚举值：</p><ul><li>FORCE_AUTH： 强制鉴权</li><li>NO_AUTH： 不鉴权</li></ul><p>默认值：NO_AUTH</p><p>仅 SourceType = WOA 且 Action= OPEN 时生效</p>
 * @method void setWOAAuth(string $WOAAuth) 设置<p>是否开启 WOA 鉴权</p><p>枚举值：</p><ul><li>FORCE_AUTH： 强制鉴权</li><li>NO_AUTH： 不鉴权</li></ul><p>默认值：NO_AUTH</p><p>仅 SourceType = WOA 且 Action= OPEN 时生效</p>
 * @method string getAuthToken() 获取<p>WOA 鉴权需要的 Token</p><p>仅 Source Type=WOA 且 WOAAuth = FORCE_AUTH 时必填</p>
 * @method void setAuthToken(string $AuthToken) 设置<p>WOA 鉴权需要的 Token</p><p>仅 Source Type=WOA 且 WOAAuth = FORCE_AUTH 时必填</p>
 * @method VPCWhiteListConfig getVPCWhiteList() 获取<p>VPC 白名单信息</p><p>仅 SourceType = VPC 时有效; 不传表示不修改</p>
 * @method void setVPCWhiteList(VPCWhiteListConfig $VPCWhiteList) 设置<p>VPC 白名单信息</p><p>仅 SourceType = VPC 时有效; 不传表示不修改</p>
 */
class AccessSourceSetting extends AbstractModel
{
    /**
     * @var string <p>来源类型</p><p>枚举值：</p><ul><li>PUBLIC： 公网请求</li><li>VPC： VPC 请求</li><li>WOA： 办公网请求</li></ul>
     */
    public $SourceType;

    /**
     * @var string <p>来源请求状态</p><p>枚举值：</p><ul><li>OPEN： 放通</li><li>CLOSE： 拦截</li></ul>
     */
    public $Action;

    /**
     * @var string <p>是否开启 WOA 鉴权</p><p>枚举值：</p><ul><li>FORCE_AUTH： 强制鉴权</li><li>NO_AUTH： 不鉴权</li></ul><p>默认值：NO_AUTH</p><p>仅 SourceType = WOA 且 Action= OPEN 时生效</p>
     */
    public $WOAAuth;

    /**
     * @var string <p>WOA 鉴权需要的 Token</p><p>仅 Source Type=WOA 且 WOAAuth = FORCE_AUTH 时必填</p>
     */
    public $AuthToken;

    /**
     * @var VPCWhiteListConfig <p>VPC 白名单信息</p><p>仅 SourceType = VPC 时有效; 不传表示不修改</p>
     */
    public $VPCWhiteList;

    /**
     * @param string $SourceType <p>来源类型</p><p>枚举值：</p><ul><li>PUBLIC： 公网请求</li><li>VPC： VPC 请求</li><li>WOA： 办公网请求</li></ul>
     * @param string $Action <p>来源请求状态</p><p>枚举值：</p><ul><li>OPEN： 放通</li><li>CLOSE： 拦截</li></ul>
     * @param string $WOAAuth <p>是否开启 WOA 鉴权</p><p>枚举值：</p><ul><li>FORCE_AUTH： 强制鉴权</li><li>NO_AUTH： 不鉴权</li></ul><p>默认值：NO_AUTH</p><p>仅 SourceType = WOA 且 Action= OPEN 时生效</p>
     * @param string $AuthToken <p>WOA 鉴权需要的 Token</p><p>仅 Source Type=WOA 且 WOAAuth = FORCE_AUTH 时必填</p>
     * @param VPCWhiteListConfig $VPCWhiteList <p>VPC 白名单信息</p><p>仅 SourceType = VPC 时有效; 不传表示不修改</p>
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("WOAAuth",$param) and $param["WOAAuth"] !== null) {
            $this->WOAAuth = $param["WOAAuth"];
        }

        if (array_key_exists("AuthToken",$param) and $param["AuthToken"] !== null) {
            $this->AuthToken = $param["AuthToken"];
        }

        if (array_key_exists("VPCWhiteList",$param) and $param["VPCWhiteList"] !== null) {
            $this->VPCWhiteList = new VPCWhiteListConfig();
            $this->VPCWhiteList->deserialize($param["VPCWhiteList"]);
        }
    }
}
