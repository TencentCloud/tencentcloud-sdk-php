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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getNamespaceIdList() 获取命名空间ID列表，不传入时查询全量
 * @method void setNamespaceIdList(array $NamespaceIdList) 设置命名空间ID列表，不传入时查询全量
 * @method string getClusterId() 获取集群ID，不传入时查询全量
 * @method void setClusterId(string $ClusterId) 设置集群ID，不传入时查询全量
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method integer getOffset() 获取起始偏移量
 * @method void setOffset(integer $Offset) 设置起始偏移量
 * @method string getNamespaceId() 获取命名空间ID，不传入时查询全量
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID，不传入时查询全量
 */

/**
 *DescribeSimpleNamespaces请求参数结构体
 */
class DescribeSimpleNamespacesRequest extends AbstractModel
{
    /**
     * @var array 命名空间ID列表，不传入时查询全量
     */
    public $NamespaceIdList;

    /**
     * @var string 集群ID，不传入时查询全量
     */
    public $ClusterId;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var integer 起始偏移量
     */
    public $Offset;

    /**
     * @var string 命名空间ID，不传入时查询全量
     */
    public $NamespaceId;
    /**
     * @param array $NamespaceIdList 命名空间ID列表，不传入时查询全量
     * @param string $ClusterId 集群ID，不传入时查询全量
     * @param integer $Limit 每页条数
     * @param integer $Offset 起始偏移量
     * @param string $NamespaceId 命名空间ID，不传入时查询全量
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NamespaceIdList",$param) and $param["NamespaceIdList"] !== null) {
            $this->NamespaceIdList = $param["NamespaceIdList"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }
    }
}
