<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线规则或项的分类
 *
 * @method integer getCategoryId() 获取分类Id
 * @method void setCategoryId(integer $CategoryId) 设置分类Id
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 * @method integer getParentCategoryId() 获取父分类ID,如果为0则没有父分类
 * @method void setParentCategoryId(integer $ParentCategoryId) 设置父分类ID,如果为0则没有父分类
 */
class BaselineCategory extends AbstractModel
{
    /**
     * @var integer 分类Id
     */
    public $CategoryId;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @var integer 父分类ID,如果为0则没有父分类
     */
    public $ParentCategoryId;

    /**
     * @param integer $CategoryId 分类Id
     * @param string $CategoryName 分类名称
     * @param integer $ParentCategoryId 父分类ID,如果为0则没有父分类
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

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("ParentCategoryId",$param) and $param["ParentCategoryId"] !== null) {
            $this->ParentCategoryId = $param["ParentCategoryId"];
        }
    }
}
