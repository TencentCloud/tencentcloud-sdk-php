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
 * AI网关模型可用范围
 *
 * @method string getScopeType() 获取<p>范围类型</p><p>枚举值：</p><ul><li>ALL： 允许全部访问</li><li>ALLOWLIST： 允许访问的模型列表</li><li>MAG： 模型访问组</li></ul>
 * @method void setScopeType(string $ScopeType) 设置<p>范围类型</p><p>枚举值：</p><ul><li>ALL： 允许全部访问</li><li>ALLOWLIST： 允许访问的模型列表</li><li>MAG： 模型访问组</li></ul>
 * @method array getAllowList() 获取<p>允许访问的模型列表，ScopeType=ALLOWLIST时设置</p>
 * @method void setAllowList(array $AllowList) 设置<p>允许访问的模型列表，ScopeType=ALLOWLIST时设置</p>
 * @method array getMagRefs() 获取<p>模型访问组，ScopeType=MAG时设置</p>
 * @method void setMagRefs(array $MagRefs) 设置<p>模型访问组，ScopeType=MAG时设置</p>
 */
class AIGWModelScope extends AbstractModel
{
    /**
     * @var string <p>范围类型</p><p>枚举值：</p><ul><li>ALL： 允许全部访问</li><li>ALLOWLIST： 允许访问的模型列表</li><li>MAG： 模型访问组</li></ul>
     */
    public $ScopeType;

    /**
     * @var array <p>允许访问的模型列表，ScopeType=ALLOWLIST时设置</p>
     */
    public $AllowList;

    /**
     * @var array <p>模型访问组，ScopeType=MAG时设置</p>
     */
    public $MagRefs;

    /**
     * @param string $ScopeType <p>范围类型</p><p>枚举值：</p><ul><li>ALL： 允许全部访问</li><li>ALLOWLIST： 允许访问的模型列表</li><li>MAG： 模型访问组</li></ul>
     * @param array $AllowList <p>允许访问的模型列表，ScopeType=ALLOWLIST时设置</p>
     * @param array $MagRefs <p>模型访问组，ScopeType=MAG时设置</p>
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
        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("AllowList",$param) and $param["AllowList"] !== null) {
            $this->AllowList = $param["AllowList"];
        }

        if (array_key_exists("MagRefs",$param) and $param["MagRefs"] !== null) {
            $this->MagRefs = $param["MagRefs"];
        }
    }
}
