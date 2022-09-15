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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationGroup请求参数结构体
 *
 * @method integer getLimit() 获取实例列表的大小，参数默认值20
 * @method void setLimit(integer $Limit) 设置实例列表的大小，参数默认值20
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 * @method string getGroupId() 获取复制组ID
 * @method void setGroupId(string $GroupId) 设置复制组ID
 * @method string getSearchKey() 获取实例ID和实例名称，支持模糊查询
 * @method void setSearchKey(string $SearchKey) 设置实例ID和实例名称，支持模糊查询
 */
class DescribeReplicationGroupRequest extends AbstractModel
{
    /**
     * @var integer 实例列表的大小，参数默认值20
     */
    public $Limit;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @var string 复制组ID
     */
    public $GroupId;

    /**
     * @var string 实例ID和实例名称，支持模糊查询
     */
    public $SearchKey;

    /**
     * @param integer $Limit 实例列表的大小，参数默认值20
     * @param integer $Offset 偏移量，取Limit整数倍
     * @param string $GroupId 复制组ID
     * @param string $SearchKey 实例ID和实例名称，支持模糊查询
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
