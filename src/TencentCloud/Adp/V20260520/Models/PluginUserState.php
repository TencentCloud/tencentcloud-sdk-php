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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PluginUserState
 *
 * @method boolean getIsFavorite() 获取是否已收藏该插件
 * @method void setIsFavorite(boolean $IsFavorite) 设置是否已收藏该插件
 * @method boolean getIsInWhiteList() 获取是否在插件白名单内
 * @method void setIsInWhiteList(boolean $IsInWhiteList) 设置是否在插件白名单内
 * @method integer getWhiteListType() 获取<p>白名单类型，用于表示当前用户是否可直接使用该插件。</p><p>枚举值：</p><ul><li>0：非白名单插件，全量开放</li><li>1：当前用户在白名单内</li><li>2：当前用户不在白名单内，需提交申请</li></ul>
 * @method void setWhiteListType(integer $WhiteListType) 设置<p>白名单类型，用于表示当前用户是否可直接使用该插件。</p><p>枚举值：</p><ul><li>0：非白名单插件，全量开放</li><li>1：当前用户在白名单内</li><li>2：当前用户不在白名单内，需提交申请</li></ul>
 */
class PluginUserState extends AbstractModel
{
    /**
     * @var boolean 是否已收藏该插件
     */
    public $IsFavorite;

    /**
     * @var boolean 是否在插件白名单内
     */
    public $IsInWhiteList;

    /**
     * @var integer <p>白名单类型，用于表示当前用户是否可直接使用该插件。</p><p>枚举值：</p><ul><li>0：非白名单插件，全量开放</li><li>1：当前用户在白名单内</li><li>2：当前用户不在白名单内，需提交申请</li></ul>
     */
    public $WhiteListType;

    /**
     * @param boolean $IsFavorite 是否已收藏该插件
     * @param boolean $IsInWhiteList 是否在插件白名单内
     * @param integer $WhiteListType <p>白名单类型，用于表示当前用户是否可直接使用该插件。</p><p>枚举值：</p><ul><li>0：非白名单插件，全量开放</li><li>1：当前用户在白名单内</li><li>2：当前用户不在白名单内，需提交申请</li></ul>
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
        if (array_key_exists("IsFavorite",$param) and $param["IsFavorite"] !== null) {
            $this->IsFavorite = $param["IsFavorite"];
        }

        if (array_key_exists("IsInWhiteList",$param) and $param["IsInWhiteList"] !== null) {
            $this->IsInWhiteList = $param["IsInWhiteList"];
        }

        if (array_key_exists("WhiteListType",$param) and $param["WhiteListType"] !== null) {
            $this->WhiteListType = $param["WhiteListType"];
        }
    }
}
