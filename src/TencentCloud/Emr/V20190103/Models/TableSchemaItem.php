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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格schema信息
 *
 * @method string getName() 获取列标识
 * @method void setName(string $Name) 设置列标识
 * @method boolean getSortable() 获取是否可按该列排序
 * @method void setSortable(boolean $Sortable) 设置是否可按该列排序
 * @method boolean getWithFilter() 获取是否可筛选
 * @method void setWithFilter(boolean $WithFilter) 设置是否可筛选
 * @method array getCandidates() 获取筛选的候选集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCandidates(array $Candidates) 设置筛选的候选集
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getClickable() 获取是否可点击
 * @method void setClickable(boolean $Clickable) 设置是否可点击
 * @method string getTitle() 获取展示的名字
 * @method void setTitle(string $Title) 设置展示的名字
 */
class TableSchemaItem extends AbstractModel
{
    /**
     * @var string 列标识
     */
    public $Name;

    /**
     * @var boolean 是否可按该列排序
     */
    public $Sortable;

    /**
     * @var boolean 是否可筛选
     */
    public $WithFilter;

    /**
     * @var array 筛选的候选集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Candidates;

    /**
     * @var boolean 是否可点击
     */
    public $Clickable;

    /**
     * @var string 展示的名字
     */
    public $Title;

    /**
     * @param string $Name 列标识
     * @param boolean $Sortable 是否可按该列排序
     * @param boolean $WithFilter 是否可筛选
     * @param array $Candidates 筛选的候选集
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Clickable 是否可点击
     * @param string $Title 展示的名字
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sortable",$param) and $param["Sortable"] !== null) {
            $this->Sortable = $param["Sortable"];
        }

        if (array_key_exists("WithFilter",$param) and $param["WithFilter"] !== null) {
            $this->WithFilter = $param["WithFilter"];
        }

        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = $param["Candidates"];
        }

        if (array_key_exists("Clickable",$param) and $param["Clickable"] !== null) {
            $this->Clickable = $param["Clickable"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
