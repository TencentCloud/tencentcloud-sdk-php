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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线检测项分类树状结构
 *
 * @method integer getParentCategoryId() 获取基线检测项父分类id
 * @method void setParentCategoryId(integer $ParentCategoryId) 设置基线检测项父分类id
 * @method string getParentCategoryName() 获取基线检测项父分类名称
 * @method void setParentCategoryName(string $ParentCategoryName) 设置基线检测项父分类名称
 * @method integer getCategoryCount() 获取基线检测项子分类数目
 * @method void setCategoryCount(integer $CategoryCount) 设置基线检测项子分类数目
 * @method array getCategoryLists() 获取基线检测项子分类列表
 * @method void setCategoryLists(array $CategoryLists) 设置基线检测项子分类列表
 */
class BaselineItemsCategory extends AbstractModel
{
    /**
     * @var integer 基线检测项父分类id
     */
    public $ParentCategoryId;

    /**
     * @var string 基线检测项父分类名称
     */
    public $ParentCategoryName;

    /**
     * @var integer 基线检测项子分类数目
     */
    public $CategoryCount;

    /**
     * @var array 基线检测项子分类列表
     */
    public $CategoryLists;

    /**
     * @param integer $ParentCategoryId 基线检测项父分类id
     * @param string $ParentCategoryName 基线检测项父分类名称
     * @param integer $CategoryCount 基线检测项子分类数目
     * @param array $CategoryLists 基线检测项子分类列表
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
        if (array_key_exists("ParentCategoryId",$param) and $param["ParentCategoryId"] !== null) {
            $this->ParentCategoryId = $param["ParentCategoryId"];
        }

        if (array_key_exists("ParentCategoryName",$param) and $param["ParentCategoryName"] !== null) {
            $this->ParentCategoryName = $param["ParentCategoryName"];
        }

        if (array_key_exists("CategoryCount",$param) and $param["CategoryCount"] !== null) {
            $this->CategoryCount = $param["CategoryCount"];
        }

        if (array_key_exists("CategoryLists",$param) and $param["CategoryLists"] !== null) {
            $this->CategoryLists = [];
            foreach ($param["CategoryLists"] as $key => $value){
                $obj = new BaselineCategory();
                $obj->deserialize($value);
                array_push($this->CategoryLists, $obj);
            }
        }
    }
}
