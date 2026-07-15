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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源端 OAuth2 认证插件配置
 *
 * @method array getHeaderNames() 获取<p>取token的头部名称</p>
 * @method void setHeaderNames(array $HeaderNames) 设置<p>取token的头部名称</p>
 * @method integer getTokenExpiration() 获取<p>过期时间</p>
 * @method void setTokenExpiration(integer $TokenExpiration) 设置<p>过期时间</p>
 * @method array getScopes() 获取<p>授权范围</p>
 * @method void setScopes(array $Scopes) 设置<p>授权范围</p>
 * @method boolean getMandatoryScope() 获取<p>是否强制判断授权范围</p>
 * @method void setMandatoryScope(boolean $MandatoryScope) 设置<p>是否强制判断授权范围</p>
 */
class AIGWOAuthAuthPluginConfig extends AbstractModel
{
    /**
     * @var array <p>取token的头部名称</p>
     */
    public $HeaderNames;

    /**
     * @var integer <p>过期时间</p>
     */
    public $TokenExpiration;

    /**
     * @var array <p>授权范围</p>
     */
    public $Scopes;

    /**
     * @var boolean <p>是否强制判断授权范围</p>
     */
    public $MandatoryScope;

    /**
     * @param array $HeaderNames <p>取token的头部名称</p>
     * @param integer $TokenExpiration <p>过期时间</p>
     * @param array $Scopes <p>授权范围</p>
     * @param boolean $MandatoryScope <p>是否强制判断授权范围</p>
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
        if (array_key_exists("HeaderNames",$param) and $param["HeaderNames"] !== null) {
            $this->HeaderNames = $param["HeaderNames"];
        }

        if (array_key_exists("TokenExpiration",$param) and $param["TokenExpiration"] !== null) {
            $this->TokenExpiration = $param["TokenExpiration"];
        }

        if (array_key_exists("Scopes",$param) and $param["Scopes"] !== null) {
            $this->Scopes = $param["Scopes"];
        }

        if (array_key_exists("MandatoryScope",$param) and $param["MandatoryScope"] !== null) {
            $this->MandatoryScope = $param["MandatoryScope"];
        }
    }
}
