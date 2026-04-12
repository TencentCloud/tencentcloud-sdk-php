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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用分类标签
 *
 * @method string getTagId() 获取<p>应用分类标签ID</p>
 * @method void setTagId(string $TagId) 设置<p>应用分类标签ID</p>
 * @method string getTagName() 获取<p>应用分类标签名称</p>
 * @method void setTagName(string $TagName) 设置<p>应用分类标签名称</p>
 */
class ToolRepoTag extends AbstractModel
{
    /**
     * @var string <p>应用分类标签ID</p>
     */
    public $TagId;

    /**
     * @var string <p>应用分类标签名称</p>
     */
    public $TagName;

    /**
     * @param string $TagId <p>应用分类标签ID</p>
     * @param string $TagName <p>应用分类标签名称</p>
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }
    }
}
