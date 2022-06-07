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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingResourceGroups请求参数结构体
 *
 * @method string getType() 获取资源组类型; 枚举值 TRAIN:训练 INFERENCE:推理
 * @method void setType(string $Type) 设置资源组类型; 枚举值 TRAIN:训练 INFERENCE:推理
 * @method array getFilters() 获取Filter.Name: 枚举值: ResourceGroupId (资源组id列表)
                    ResourceGroupName (资源组名称列表)
Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为5，Filter.Values的上限为100
 * @method void setFilters(array $Filters) 设置Filter.Name: 枚举值: ResourceGroupId (资源组id列表)
                    ResourceGroupName (资源组名称列表)
Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为5，Filter.Values的上限为100
 * @method array getTagFilters() 获取标签过滤
 * @method void setTagFilters(array $TagFilters) 设置标签过滤
 * @method integer getOffset() 获取偏移量，默认为0；分页查询起始位置，如：Limit为100，第一页Offset为0，第二页OffSet为100....即每页左边为闭区间
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0；分页查询起始位置，如：Limit为100，第一页Offset为0，第二页OffSet为100....即每页左边为闭区间
 * @method integer getLimit() 获取返回数量，默认为20，最大值为30;
注意：小于0则默认为20；大于30则默认为30
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为30;
注意：小于0则默认为20；大于30则默认为30
 * @method string getSearchWord() 获取支持模糊查找资源组id和资源组名
 * @method void setSearchWord(string $SearchWord) 设置支持模糊查找资源组id和资源组名
 * @method boolean getDontShowInstanceSet() 获取是否不展示节点列表; 
true: 不展示，false 展示；
默认为false
 * @method void setDontShowInstanceSet(boolean $DontShowInstanceSet) 设置是否不展示节点列表; 
true: 不展示，false 展示；
默认为false
 */
class DescribeBillingResourceGroupsRequest extends AbstractModel
{
    /**
     * @var string 资源组类型; 枚举值 TRAIN:训练 INFERENCE:推理
     */
    public $Type;

    /**
     * @var array Filter.Name: 枚举值: ResourceGroupId (资源组id列表)
                    ResourceGroupName (资源组名称列表)
Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为5，Filter.Values的上限为100
     */
    public $Filters;

    /**
     * @var array 标签过滤
     */
    public $TagFilters;

    /**
     * @var integer 偏移量，默认为0；分页查询起始位置，如：Limit为100，第一页Offset为0，第二页OffSet为100....即每页左边为闭区间
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为30;
注意：小于0则默认为20；大于30则默认为30
     */
    public $Limit;

    /**
     * @var string 支持模糊查找资源组id和资源组名
     */
    public $SearchWord;

    /**
     * @var boolean 是否不展示节点列表; 
true: 不展示，false 展示；
默认为false
     */
    public $DontShowInstanceSet;

    /**
     * @param string $Type 资源组类型; 枚举值 TRAIN:训练 INFERENCE:推理
     * @param array $Filters Filter.Name: 枚举值: ResourceGroupId (资源组id列表)
                    ResourceGroupName (资源组名称列表)
Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为5，Filter.Values的上限为100
     * @param array $TagFilters 标签过滤
     * @param integer $Offset 偏移量，默认为0；分页查询起始位置，如：Limit为100，第一页Offset为0，第二页OffSet为100....即每页左边为闭区间
     * @param integer $Limit 返回数量，默认为20，最大值为30;
注意：小于0则默认为20；大于30则默认为30
     * @param string $SearchWord 支持模糊查找资源组id和资源组名
     * @param boolean $DontShowInstanceSet 是否不展示节点列表; 
true: 不展示，false 展示；
默认为false
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("DontShowInstanceSet",$param) and $param["DontShowInstanceSet"] !== null) {
            $this->DontShowInstanceSet = $param["DontShowInstanceSet"];
        }
    }
}
