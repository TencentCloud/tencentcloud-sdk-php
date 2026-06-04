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
 * @method integer getWhiteListType() 获取白名单类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非白名单插件，全量开放 |
| 1 | 在白名单里 |
| 2 | 不在白名单里，需要提交申请 |
 * @method void setWhiteListType(integer $WhiteListType) 设置白名单类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非白名单插件，全量开放 |
| 1 | 在白名单里 |
| 2 | 不在白名单里，需要提交申请 |
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
     * @var integer 白名单类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非白名单插件，全量开放 |
| 1 | 在白名单里 |
| 2 | 不在白名单里，需要提交申请 |
     */
    public $WhiteListType;

    /**
     * @param boolean $IsFavorite 是否已收藏该插件
     * @param boolean $IsInWhiteList 是否在插件白名单内
     * @param integer $WhiteListType 白名单类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非白名单插件，全量开放 |
| 1 | 在白名单里 |
| 2 | 不在白名单里，需要提交申请 |
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
