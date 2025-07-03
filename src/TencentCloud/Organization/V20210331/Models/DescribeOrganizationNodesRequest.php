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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationNodes请求参数结构体
 *
 * @method integer getLimit() 获取限制数目。最大50
 * @method void setLimit(integer $Limit) 设置限制数目。最大50
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍。默认值 : 0。
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍。默认值 : 0。
 * @method array getTags() 获取部门标签搜索列表，最大10个
 * @method void setTags(array $Tags) 设置部门标签搜索列表，最大10个
 */
class DescribeOrganizationNodesRequest extends AbstractModel
{
    /**
     * @var integer 限制数目。最大50
     */
    public $Limit;

    /**
     * @var integer 偏移量。取值是limit的整数倍。默认值 : 0。
     */
    public $Offset;

    /**
     * @var array 部门标签搜索列表，最大10个
     */
    public $Tags;

    /**
     * @param integer $Limit 限制数目。最大50
     * @param integer $Offset 偏移量。取值是limit的整数倍。默认值 : 0。
     * @param array $Tags 部门标签搜索列表，最大10个
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
