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
 * 子分类维度的检测项命中配置。
 *
 * @method integer getCategoryID() 获取<p>基线子分类 ID。</p>
 * @method void setCategoryID(integer $CategoryID) 设置<p>基线子分类 ID。</p>
 * @method boolean getAllSelect() 获取<p>是否全选该子分类下所有检测项。true 全选，false 按 ItemIDList 明细生效。</p>
 * @method void setAllSelect(boolean $AllSelect) 设置<p>是否全选该子分类下所有检测项。true 全选，false 按 ItemIDList 明细生效。</p>
 * @method array getItemIDList() 获取<p>已选的检测项 ID 列表，AllSelect=false 时按此明细生效。</p>
 * @method void setItemIDList(array $ItemIDList) 设置<p>已选的检测项 ID 列表，AllSelect=false 时按此明细生效。</p>
 */
class BaselinePolicySubCategoryConf extends AbstractModel
{
    /**
     * @var integer <p>基线子分类 ID。</p>
     */
    public $CategoryID;

    /**
     * @var boolean <p>是否全选该子分类下所有检测项。true 全选，false 按 ItemIDList 明细生效。</p>
     */
    public $AllSelect;

    /**
     * @var array <p>已选的检测项 ID 列表，AllSelect=false 时按此明细生效。</p>
     */
    public $ItemIDList;

    /**
     * @param integer $CategoryID <p>基线子分类 ID。</p>
     * @param boolean $AllSelect <p>是否全选该子分类下所有检测项。true 全选，false 按 ItemIDList 明细生效。</p>
     * @param array $ItemIDList <p>已选的检测项 ID 列表，AllSelect=false 时按此明细生效。</p>
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

        if (array_key_exists("ItemIDList",$param) and $param["ItemIDList"] !== null) {
            $this->ItemIDList = $param["ItemIDList"];
        }
    }
}
