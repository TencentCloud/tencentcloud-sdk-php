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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataFlow请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
 * @method string getDataFlowId() 获取数据流动 ID ，由创建数据流动返回
 * @method void setDataFlowId(string $DataFlowId) 设置数据流动 ID ，由创建数据流动返回
 * @method integer getLimit() 获取每次查询返回值个数，默认20；最大100
 * @method void setLimit(integer $Limit) 设置每次查询返回值个数，默认20；最大100
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method string getCfsVersion() 获取文件系统版本；版本号：v1.5，v3.0，v3.1，v4.0
 * @method void setCfsVersion(string $CfsVersion) 设置文件系统版本；版本号：v1.5，v3.0，v3.1，v4.0
 */
class DescribeDataFlowRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
     */
    public $FileSystemId;

    /**
     * @var string 数据流动 ID ，由创建数据流动返回
     */
    public $DataFlowId;

    /**
     * @var integer 每次查询返回值个数，默认20；最大100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var string 文件系统版本；版本号：v1.5，v3.0，v3.1，v4.0
     */
    public $CfsVersion;

    /**
     * @param string $FileSystemId 文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
     * @param string $DataFlowId 数据流动 ID ，由创建数据流动返回
     * @param integer $Limit 每次查询返回值个数，默认20；最大100
     * @param integer $Offset 偏移量，默认为0
     * @param string $CfsVersion 文件系统版本；版本号：v1.5，v3.0，v3.1，v4.0
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

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CfsVersion",$param) and $param["CfsVersion"] !== null) {
            $this->CfsVersion = $param["CfsVersion"];
        }
    }
}
