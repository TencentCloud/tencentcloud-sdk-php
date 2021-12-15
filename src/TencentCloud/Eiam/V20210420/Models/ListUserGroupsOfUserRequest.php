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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserGroupsOfUser请求参数结构体
 *
 * @method string getUserId() 获取用户ID，是用户的全局唯一标识。
 * @method void setUserId(string $UserId) 设置用户ID，是用户的全局唯一标识。
 * @method UserGroupInformationSearchCriteria getSearchCondition() 获取模糊查询条件，支持匹配用户组名称（DisplayName）。如果该字段为空，则默认展示该用户所有的用户组。
 * @method void setSearchCondition(UserGroupInformationSearchCriteria $SearchCondition) 设置模糊查询条件，支持匹配用户组名称（DisplayName）。如果该字段为空，则默认展示该用户所有的用户组。
 * @method SortCondition getSort() 获取排序条件集合。可排序的属性支持：用户组名称（DisplayName）、用户组ID（UserGroupId）、创建时间（CreatedDate）。如果该字段为空，则默认按照用户组名称正向排序。
 * @method void setSort(SortCondition $Sort) 设置排序条件集合。可排序的属性支持：用户组名称（DisplayName）、用户组ID（UserGroupId）、创建时间（CreatedDate）。如果该字段为空，则默认按照用户组名称正向排序。
 * @method integer getOffset() 获取分页偏移量，默认为0。Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0。Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
 * @method integer getLimit() 获取分页读取数量，默认为50，最大值为100。 Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
 * @method void setLimit(integer $Limit) 设置分页读取数量，默认为50，最大值为100。 Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
 */
class ListUserGroupsOfUserRequest extends AbstractModel
{
    /**
     * @var string 用户ID，是用户的全局唯一标识。
     */
    public $UserId;

    /**
     * @var UserGroupInformationSearchCriteria 模糊查询条件，支持匹配用户组名称（DisplayName）。如果该字段为空，则默认展示该用户所有的用户组。
     */
    public $SearchCondition;

    /**
     * @var SortCondition 排序条件集合。可排序的属性支持：用户组名称（DisplayName）、用户组ID（UserGroupId）、创建时间（CreatedDate）。如果该字段为空，则默认按照用户组名称正向排序。
     */
    public $Sort;

    /**
     * @var integer 分页偏移量，默认为0。Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
     */
    public $Offset;

    /**
     * @var integer 分页读取数量，默认为50，最大值为100。 Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
     */
    public $Limit;

    /**
     * @param string $UserId 用户ID，是用户的全局唯一标识。
     * @param UserGroupInformationSearchCriteria $SearchCondition 模糊查询条件，支持匹配用户组名称（DisplayName）。如果该字段为空，则默认展示该用户所有的用户组。
     * @param SortCondition $Sort 排序条件集合。可排序的属性支持：用户组名称（DisplayName）、用户组ID（UserGroupId）、创建时间（CreatedDate）。如果该字段为空，则默认按照用户组名称正向排序。
     * @param integer $Offset 分页偏移量，默认为0。Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
     * @param integer $Limit 分页读取数量，默认为50，最大值为100。 Offset 和 Limit 两个字段需配合使用，即其中一个指定了，另一个必须指定。 如果不指定以上参数，则表示不进行分页查询，即只返回最多50个用户组。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new UserGroupInformationSearchCriteria();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortCondition();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
