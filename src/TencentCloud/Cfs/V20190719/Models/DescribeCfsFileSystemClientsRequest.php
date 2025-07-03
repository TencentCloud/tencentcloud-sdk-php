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
 * DescribeCfsFileSystemClients请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID，通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID，通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
 * @method integer getOffset() 获取Offset 分页码，默认为0
 * @method void setOffset(integer $Offset) 设置Offset 分页码，默认为0
 * @method integer getLimit() 获取Limit 页面大小，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置Limit 页面大小，默认为10，最大值为100
 */
class DescribeCfsFileSystemClientsRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID，通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
     */
    public $FileSystemId;

    /**
     * @var integer Offset 分页码，默认为0
     */
    public $Offset;

    /**
     * @var integer Limit 页面大小，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @param string $FileSystemId 文件系统 ID，通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
     * @param integer $Offset Offset 分页码，默认为0
     * @param integer $Limit Limit 页面大小，默认为10，最大值为100
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
