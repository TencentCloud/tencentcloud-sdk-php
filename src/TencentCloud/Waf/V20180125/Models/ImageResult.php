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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * llm要检测的图片的检测结果
 *
 * @method string getCategory() 获取<p>命中类别标识</p>
 * @method void setCategory(string $Category) 设置<p>命中类别标识</p>
 * @method string getCategoryName() 获取<p>类别的名称</p>
 * @method void setCategoryName(string $CategoryName) 设置<p>类别的名称</p>
 */
class ImageResult extends AbstractModel
{
    /**
     * @var string <p>命中类别标识</p>
     */
    public $Category;

    /**
     * @var string <p>类别的名称</p>
     */
    public $CategoryName;

    /**
     * @param string $Category <p>命中类别标识</p>
     * @param string $CategoryName <p>类别的名称</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }
    }
}
