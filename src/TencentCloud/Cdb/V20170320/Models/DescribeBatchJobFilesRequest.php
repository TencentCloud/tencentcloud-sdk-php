<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFileIds() 获取文件ID数组
 * @method void setFileIds(array $fileIds) 设置文件ID数组
 * @method integer getOffset() 获取记录偏移量，默认值为0
 * @method void setOffset(integer $offset) 设置记录偏移量，默认值为0
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20
 * @method void setLimit(integer $limit) 设置单次请求返回的数量，默认值为20
 */

/**
 *DescribeBatchJobFiles请求参数结构体
 */
class DescribeBatchJobFilesRequest extends AbstractModel
{
    /**
     * @var array 文件ID数组
     */
    public $fileIds;

    /**
     * @var integer 记录偏移量，默认值为0
     */
    public $offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20
     */
    public $limit;
    /**
     * @param array $fileIds 文件ID数组
     * @param integer $offset 记录偏移量，默认值为0
     * @param integer $limit 单次请求返回的数量，默认值为20
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->fileIds = [];
            foreach ($param["FileIds"] as $key => $value){
                $obj = new int64();
                $obj->deserialize($value);
                array_push($this->fileIds, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->limit = $param["Limit"];
        }
    }
}
