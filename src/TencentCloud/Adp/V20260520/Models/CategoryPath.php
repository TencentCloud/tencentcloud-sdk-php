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
 * 分类路径信息
 *
 * @method string getCategoryId() 获取<p>分类 ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>分类 ID</p>
 * @method array getCategoryIdPath() 获取<p>从根节点开始的路径分类 ID 列表</p>
 * @method void setCategoryIdPath(array $CategoryIdPath) 设置<p>从根节点开始的路径分类 ID 列表</p>
 * @method array getCategoryNamePath() 获取<p>从根节点开始的路径分类名称列表</p>
 * @method void setCategoryNamePath(array $CategoryNamePath) 设置<p>从根节点开始的路径分类名称列表</p>
 */
class CategoryPath extends AbstractModel
{
    /**
     * @var string <p>分类 ID</p>
     */
    public $CategoryId;

    /**
     * @var array <p>从根节点开始的路径分类 ID 列表</p>
     */
    public $CategoryIdPath;

    /**
     * @var array <p>从根节点开始的路径分类名称列表</p>
     */
    public $CategoryNamePath;

    /**
     * @param string $CategoryId <p>分类 ID</p>
     * @param array $CategoryIdPath <p>从根节点开始的路径分类 ID 列表</p>
     * @param array $CategoryNamePath <p>从根节点开始的路径分类名称列表</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryIdPath",$param) and $param["CategoryIdPath"] !== null) {
            $this->CategoryIdPath = $param["CategoryIdPath"];
        }

        if (array_key_exists("CategoryNamePath",$param) and $param["CategoryNamePath"] !== null) {
            $this->CategoryNamePath = $param["CategoryNamePath"];
        }
    }
}
