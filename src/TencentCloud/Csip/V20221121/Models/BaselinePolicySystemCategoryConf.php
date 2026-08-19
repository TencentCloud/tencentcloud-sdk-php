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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统策略下父分类维度的检测项命中配置。
 *
 * @method integer getCategoryID() 获取<p>系统父分类 ID。</p>
 * @method void setCategoryID(integer $CategoryID) 设置<p>系统父分类 ID。</p>
 * @method boolean getAllSelect() 获取<p>是否全选该父分类下所有子分类。true 全选，false 按 SubCategoryConfList 明细生效。</p>
 * @method void setAllSelect(boolean $AllSelect) 设置<p>是否全选该父分类下所有子分类。true 全选，false 按 SubCategoryConfList 明细生效。</p>
 * @method array getSubCategoryConfList() 获取<p>子分类配置列表，AllSelect=false 时按此明细生效。</p>
 * @method void setSubCategoryConfList(array $SubCategoryConfList) 设置<p>子分类配置列表，AllSelect=false 时按此明细生效。</p>
 */
class BaselinePolicySystemCategoryConf extends AbstractModel
{
    /**
     * @var integer <p>系统父分类 ID。</p>
     */
    public $CategoryID;

    /**
     * @var boolean <p>是否全选该父分类下所有子分类。true 全选，false 按 SubCategoryConfList 明细生效。</p>
     */
    public $AllSelect;

    /**
     * @var array <p>子分类配置列表，AllSelect=false 时按此明细生效。</p>
     */
    public $SubCategoryConfList;

    /**
     * @param integer $CategoryID <p>系统父分类 ID。</p>
     * @param boolean $AllSelect <p>是否全选该父分类下所有子分类。true 全选，false 按 SubCategoryConfList 明细生效。</p>
     * @param array $SubCategoryConfList <p>子分类配置列表，AllSelect=false 时按此明细生效。</p>
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
        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("AllSelect",$param) and $param["AllSelect"] !== null) {
            $this->AllSelect = $param["AllSelect"];
        }

        if (array_key_exists("SubCategoryConfList",$param) and $param["SubCategoryConfList"] !== null) {
            $this->SubCategoryConfList = [];
            foreach ($param["SubCategoryConfList"] as $key => $value){
                $obj = new BaselinePolicySubCategoryConf();
                $obj->deserialize($value);
                array_push($this->SubCategoryConfList, $obj);
            }
        }
    }
}
