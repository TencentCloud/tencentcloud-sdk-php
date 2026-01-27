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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本保留规则
 *
 * @method RetentionRule getRetentionPolicy() 获取<p>版本保留规则</p>
 * @method void setRetentionPolicy(RetentionRule $RetentionPolicy) 设置<p>版本保留规则</p>
 * @method FilterSelector getTagFilter() 获取<p>标签过滤器</p>
 * @method void setTagFilter(FilterSelector $TagFilter) 设置<p>标签过滤器</p>
 * @method FilterSelector getRepositoryFilter() 获取<p>仓库过滤器</p>
 * @method void setRepositoryFilter(FilterSelector $RepositoryFilter) 设置<p>仓库过滤器</p>
 */
class RetentionRuleItem extends AbstractModel
{
    /**
     * @var RetentionRule <p>版本保留规则</p>
     */
    public $RetentionPolicy;

    /**
     * @var FilterSelector <p>标签过滤器</p>
     */
    public $TagFilter;

    /**
     * @var FilterSelector <p>仓库过滤器</p>
     */
    public $RepositoryFilter;

    /**
     * @param RetentionRule $RetentionPolicy <p>版本保留规则</p>
     * @param FilterSelector $TagFilter <p>标签过滤器</p>
     * @param FilterSelector $RepositoryFilter <p>仓库过滤器</p>
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
        if (array_key_exists("RetentionPolicy",$param) and $param["RetentionPolicy"] !== null) {
            $this->RetentionPolicy = new RetentionRule();
            $this->RetentionPolicy->deserialize($param["RetentionPolicy"]);
        }

        if (array_key_exists("TagFilter",$param) and $param["TagFilter"] !== null) {
            $this->TagFilter = new FilterSelector();
            $this->TagFilter->deserialize($param["TagFilter"]);
        }

        if (array_key_exists("RepositoryFilter",$param) and $param["RepositoryFilter"] !== null) {
            $this->RepositoryFilter = new FilterSelector();
            $this->RepositoryFilter->deserialize($param["RepositoryFilter"]);
        }
    }
}
