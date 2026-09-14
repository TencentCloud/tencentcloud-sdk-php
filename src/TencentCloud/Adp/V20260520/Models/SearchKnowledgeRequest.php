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
 * SearchKnowledge请求参数结构体
 *
 * @method SearchAdvancedConfig getAdvancedConfig() 获取<p>检索高级配置</p>
 * @method void setAdvancedConfig(SearchAdvancedConfig $AdvancedConfig) 设置<p>检索高级配置</p>
 * @method SearchInput getInput() 获取<p>检索输入</p>
 * @method void setInput(SearchInput $Input) 设置<p>检索输入</p>
 * @method SearchContext getContext() 获取<p>检索上下文</p>
 * @method void setContext(SearchContext $Context) 设置<p>检索上下文</p>
 * @method SearchBilling getSearchBilling() 获取<p>计费信息</p>
 * @method void setSearchBilling(SearchBilling $SearchBilling) 设置<p>计费信息</p>
 */
class SearchKnowledgeRequest extends AbstractModel
{
    /**
     * @var SearchAdvancedConfig <p>检索高级配置</p>
     */
    public $AdvancedConfig;

    /**
     * @var SearchInput <p>检索输入</p>
     */
    public $Input;

    /**
     * @var SearchContext <p>检索上下文</p>
     */
    public $Context;

    /**
     * @var SearchBilling <p>计费信息</p>
     */
    public $SearchBilling;

    /**
     * @param SearchAdvancedConfig $AdvancedConfig <p>检索高级配置</p>
     * @param SearchInput $Input <p>检索输入</p>
     * @param SearchContext $Context <p>检索上下文</p>
     * @param SearchBilling $SearchBilling <p>计费信息</p>
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
        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new SearchAdvancedConfig();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SearchInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = new SearchContext();
            $this->Context->deserialize($param["Context"]);
        }

        if (array_key_exists("SearchBilling",$param) and $param["SearchBilling"] !== null) {
            $this->SearchBilling = new SearchBilling();
            $this->SearchBilling->deserialize($param["SearchBilling"]);
        }
    }
}
