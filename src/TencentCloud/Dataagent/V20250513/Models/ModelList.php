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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型详情
 *
 * @method string getModel() 获取<p>模型版本名称</p>
 * @method void setModel(string $Model) 设置<p>模型版本名称</p>
 * @method string getVendor() 获取<p>模型厂商</p>
 * @method void setVendor(string $Vendor) 设置<p>模型厂商</p>
 * @method string getDisplayName() 获取<p>展示名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名称</p>
 * @method string getDescription() 获取<p>模型描述</p>
 * @method void setDescription(string $Description) 设置<p>模型描述</p>
 * @method integer getContextWindow() 获取<p>上下文窗口大小，单位 token</p>
 * @method void setContextWindow(integer $ContextWindow) 设置<p>上下文窗口大小，单位 token</p>
 * @method string getIconUrl() 获取<p>模型图标 URL</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>模型图标 URL</p>
 * @method float getCreditMultiplier() 获取<p>计费倍率</p>
 * @method void setCreditMultiplier(float $CreditMultiplier) 设置<p>计费倍率</p>
 * @method Thinking getThinking() 获取<p>思考配置</p>
 * @method void setThinking(Thinking $Thinking) 设置<p>思考配置</p>
 */
class ModelList extends AbstractModel
{
    /**
     * @var string <p>模型版本名称</p>
     */
    public $Model;

    /**
     * @var string <p>模型厂商</p>
     */
    public $Vendor;

    /**
     * @var string <p>展示名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>模型描述</p>
     */
    public $Description;

    /**
     * @var integer <p>上下文窗口大小，单位 token</p>
     */
    public $ContextWindow;

    /**
     * @var string <p>模型图标 URL</p>
     */
    public $IconUrl;

    /**
     * @var float <p>计费倍率</p>
     */
    public $CreditMultiplier;

    /**
     * @var Thinking <p>思考配置</p>
     */
    public $Thinking;

    /**
     * @param string $Model <p>模型版本名称</p>
     * @param string $Vendor <p>模型厂商</p>
     * @param string $DisplayName <p>展示名称</p>
     * @param string $Description <p>模型描述</p>
     * @param integer $ContextWindow <p>上下文窗口大小，单位 token</p>
     * @param string $IconUrl <p>模型图标 URL</p>
     * @param float $CreditMultiplier <p>计费倍率</p>
     * @param Thinking $Thinking <p>思考配置</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ContextWindow",$param) and $param["ContextWindow"] !== null) {
            $this->ContextWindow = $param["ContextWindow"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("CreditMultiplier",$param) and $param["CreditMultiplier"] !== null) {
            $this->CreditMultiplier = $param["CreditMultiplier"];
        }

        if (array_key_exists("Thinking",$param) and $param["Thinking"] !== null) {
            $this->Thinking = new Thinking();
            $this->Thinking->deserialize($param["Thinking"]);
        }
    }
}
