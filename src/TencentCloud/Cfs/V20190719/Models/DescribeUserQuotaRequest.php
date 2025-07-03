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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserQuota请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
 * @method array getFilters() 获取过滤条件。
UserType - Array of String - 是否必填：否 -（过滤条件）按配额类型过滤。(Uid|Gid|Dir，分别对应用户，用户组，目录 )
UserId- Array of String - 是否必填：否 -（过滤条件）按用户id过滤。
 * @method void setFilters(array $Filters) 设置过滤条件。
UserType - Array of String - 是否必填：否 -（过滤条件）按配额类型过滤。(Uid|Gid|Dir，分别对应用户，用户组，目录 )
UserId- Array of String - 是否必填：否 -（过滤条件）按用户id过滤。
 * @method integer getOffset() 获取Offset 分页码，默认值0
 * @method void setOffset(integer $Offset) 设置Offset 分页码，默认值0
 * @method integer getLimit() 获取Limit 页面大小，可填范围为大于0的整数，默认值是10
 * @method void setLimit(integer $Limit) 设置Limit 页面大小，可填范围为大于0的整数，默认值是10
 */
class DescribeUserQuotaRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
     */
    public $FileSystemId;

    /**
     * @var array 过滤条件。
UserType - Array of String - 是否必填：否 -（过滤条件）按配额类型过滤。(Uid|Gid|Dir，分别对应用户，用户组，目录 )
UserId- Array of String - 是否必填：否 -（过滤条件）按用户id过滤。
     */
    public $Filters;

    /**
     * @var integer Offset 分页码，默认值0
     */
    public $Offset;

    /**
     * @var integer Limit 页面大小，可填范围为大于0的整数，默认值是10
     */
    public $Limit;

    /**
     * @param string $FileSystemId 文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
     * @param array $Filters 过滤条件。
UserType - Array of String - 是否必填：否 -（过滤条件）按配额类型过滤。(Uid|Gid|Dir，分别对应用户，用户组，目录 )
UserId- Array of String - 是否必填：否 -（过滤条件）按用户id过滤。
     * @param integer $Offset Offset 分页码，默认值0
     * @param integer $Limit Limit 页面大小，可填范围为大于0的整数，默认值是10
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
