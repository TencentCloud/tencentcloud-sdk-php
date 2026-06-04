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
 * PluginOperation
 *
 * @method boolean getAllowExternalAccess() 获取是否允许外部调用
 * @method void setAllowExternalAccess(boolean $AllowExternalAccess) 设置是否允许外部调用
 * @method integer getBillingType() 获取计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
 * @method void setBillingType(integer $BillingType) 设置计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
 * @method string getCategoryKey() 获取插件分类标识
 * @method void setCategoryKey(string $CategoryKey) 设置插件分类标识
 * @method string getIntroduction() 获取插件概述
 * @method void setIntroduction(string $Introduction) 设置插件概述
 * @method boolean getIsRecommended() 获取是否精选
 * @method void setIsRecommended(boolean $IsRecommended) 设置是否精选
 */
class PluginOperation extends AbstractModel
{
    /**
     * @var boolean 是否允许外部调用
     */
    public $AllowExternalAccess;

    /**
     * @var integer 计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
     */
    public $BillingType;

    /**
     * @var string 插件分类标识
     */
    public $CategoryKey;

    /**
     * @var string 插件概述
     */
    public $Introduction;

    /**
     * @var boolean 是否精选
     */
    public $IsRecommended;

    /**
     * @param boolean $AllowExternalAccess 是否允许外部调用
     * @param integer $BillingType 计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
     * @param string $CategoryKey 插件分类标识
     * @param string $Introduction 插件概述
     * @param boolean $IsRecommended 是否精选
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
        if (array_key_exists("AllowExternalAccess",$param) and $param["AllowExternalAccess"] !== null) {
            $this->AllowExternalAccess = $param["AllowExternalAccess"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("CategoryKey",$param) and $param["CategoryKey"] !== null) {
            $this->CategoryKey = $param["CategoryKey"];
        }

        if (array_key_exists("Introduction",$param) and $param["Introduction"] !== null) {
            $this->Introduction = $param["Introduction"];
        }

        if (array_key_exists("IsRecommended",$param) and $param["IsRecommended"] !== null) {
            $this->IsRecommended = $param["IsRecommended"];
        }
    }
}
