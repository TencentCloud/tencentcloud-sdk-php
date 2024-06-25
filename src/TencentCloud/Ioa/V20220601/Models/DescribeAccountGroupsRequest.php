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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountGroups请求参数结构体
 *
 * @method integer getDeepin() 获取搜索范围,0-仅搜直接子组,1-深层搜索(只支持32位)
 * @method void setDeepin(integer $Deepin) 设置搜索范围,0-仅搜直接子组,1-深层搜索(只支持32位)
 * @method Condition getCondition() 获取滤条件、分页参数
<li>Name - String - 是否必填：否 - 操作符: like  - 排序支持：否- 按账号分组过滤。</li>
排序条件
<li>Itime - string - 是否必填：否 - 排序支持：是 - 按账号分组创建时间排序。</li>
<li>Utime - string - 是否必填：否 - 排序支持：是 - 按账号分组更新时间排序。</li>
 * @method void setCondition(Condition $Condition) 设置滤条件、分页参数
<li>Name - String - 是否必填：否 - 操作符: like  - 排序支持：否- 按账号分组过滤。</li>
排序条件
<li>Itime - string - 是否必填：否 - 排序支持：是 - 按账号分组创建时间排序。</li>
<li>Utime - string - 是否必填：否 - 排序支持：是 - 按账号分组更新时间排序。</li>
 * @method integer getParentId() 获取父分组id
 * @method void setParentId(integer $ParentId) 设置父分组id
 */
class DescribeAccountGroupsRequest extends AbstractModel
{
    /**
     * @var integer 搜索范围,0-仅搜直接子组,1-深层搜索(只支持32位)
     */
    public $Deepin;

    /**
     * @var Condition 滤条件、分页参数
<li>Name - String - 是否必填：否 - 操作符: like  - 排序支持：否- 按账号分组过滤。</li>
排序条件
<li>Itime - string - 是否必填：否 - 排序支持：是 - 按账号分组创建时间排序。</li>
<li>Utime - string - 是否必填：否 - 排序支持：是 - 按账号分组更新时间排序。</li>
     */
    public $Condition;

    /**
     * @var integer 父分组id
     */
    public $ParentId;

    /**
     * @param integer $Deepin 搜索范围,0-仅搜直接子组,1-深层搜索(只支持32位)
     * @param Condition $Condition 滤条件、分页参数
<li>Name - String - 是否必填：否 - 操作符: like  - 排序支持：否- 按账号分组过滤。</li>
排序条件
<li>Itime - string - 是否必填：否 - 排序支持：是 - 按账号分组创建时间排序。</li>
<li>Utime - string - 是否必填：否 - 排序支持：是 - 按账号分组更新时间排序。</li>
     * @param integer $ParentId 父分组id
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
        if (array_key_exists("Deepin",$param) and $param["Deepin"] !== null) {
            $this->Deepin = $param["Deepin"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
