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
 * @method integer getDeepin() 获取搜索范围：0-仅当前分组的直接子组，1-当前分组的所有子组。默认为0。
 * @method void setDeepin(integer $Deepin) 设置搜索范围：0-仅当前分组的直接子组，1-当前分组的所有子组。默认为0。
 * @method Condition getCondition() 获取查询条件

过滤参数
1、Name，string类型，按分组名过滤
是否必填：否
操作符: like

排序条件
1、Itime，string类型，按分组创建时间排序
是否必填：否
2、Utime，string类型，按分组更新时间排序
是否必填：否
 * @method void setCondition(Condition $Condition) 设置查询条件

过滤参数
1、Name，string类型，按分组名过滤
是否必填：否
操作符: like

排序条件
1、Itime，string类型，按分组创建时间排序
是否必填：否
2、Utime，string类型，按分组更新时间排序
是否必填：否
 * @method integer getParentId() 获取父分组ID，获取该分组下的子组信息。默认查询全网根分组下子组信息。
 * @method void setParentId(integer $ParentId) 设置父分组ID，获取该分组下的子组信息。默认查询全网根分组下子组信息。
 */
class DescribeAccountGroupsRequest extends AbstractModel
{
    /**
     * @var integer 搜索范围：0-仅当前分组的直接子组，1-当前分组的所有子组。默认为0。
     */
    public $Deepin;

    /**
     * @var Condition 查询条件

过滤参数
1、Name，string类型，按分组名过滤
是否必填：否
操作符: like

排序条件
1、Itime，string类型，按分组创建时间排序
是否必填：否
2、Utime，string类型，按分组更新时间排序
是否必填：否
     */
    public $Condition;

    /**
     * @var integer 父分组ID，获取该分组下的子组信息。默认查询全网根分组下子组信息。
     */
    public $ParentId;

    /**
     * @param integer $Deepin 搜索范围：0-仅当前分组的直接子组，1-当前分组的所有子组。默认为0。
     * @param Condition $Condition 查询条件

过滤参数
1、Name，string类型，按分组名过滤
是否必填：否
操作符: like

排序条件
1、Itime，string类型，按分组创建时间排序
是否必填：否
2、Utime，string类型，按分组更新时间排序
是否必填：否
     * @param integer $ParentId 父分组ID，获取该分组下的子组信息。默认查询全网根分组下子组信息。
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
