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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateTWeSeeDirectUploadObject请求参数结构体
 *
 * @method string getCOSURI() 获取TWeSee 直传对象或目录的 COS URI
 * @method void setCOSURI(string $COSURI) 设置TWeSee 直传对象或目录的 COS URI
 * @method string getOperation() 获取操作类型。可选值：

- `HeadObject`：查询对象元数据
- `DeleteObject`：删除对象
- `ListBucket`：列举对象
 * @method void setOperation(string $Operation) 设置操作类型。可选值：

- `HeadObject`：查询对象元数据
- `DeleteObject`：删除对象
- `ListBucket`：列举对象
 * @method SeeObjectListOptions getListOptions() 获取列举对象时使用的分页和目录选项
 * @method void setListOptions(SeeObjectListOptions $ListOptions) 设置列举对象时使用的分页和目录选项
 */
class OperateTWeSeeDirectUploadObjectRequest extends AbstractModel
{
    /**
     * @var string TWeSee 直传对象或目录的 COS URI
     */
    public $COSURI;

    /**
     * @var string 操作类型。可选值：

- `HeadObject`：查询对象元数据
- `DeleteObject`：删除对象
- `ListBucket`：列举对象
     */
    public $Operation;

    /**
     * @var SeeObjectListOptions 列举对象时使用的分页和目录选项
     */
    public $ListOptions;

    /**
     * @param string $COSURI TWeSee 直传对象或目录的 COS URI
     * @param string $Operation 操作类型。可选值：

- `HeadObject`：查询对象元数据
- `DeleteObject`：删除对象
- `ListBucket`：列举对象
     * @param SeeObjectListOptions $ListOptions 列举对象时使用的分页和目录选项
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
        if (array_key_exists("COSURI",$param) and $param["COSURI"] !== null) {
            $this->COSURI = $param["COSURI"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ListOptions",$param) and $param["ListOptions"] !== null) {
            $this->ListOptions = new SeeObjectListOptions();
            $this->ListOptions->deserialize($param["ListOptions"]);
        }
    }
}
