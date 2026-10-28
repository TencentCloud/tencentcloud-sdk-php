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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserQuota请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统id</p>
 * @method array getQuotaIds() 获取<p>QuotaId列表</p>
 * @method void setQuotaIds(array $QuotaIds) 设置<p>QuotaId列表</p>
 * @method string getQuotaType() 获取<p>配额类型</p>
 * @method void setQuotaType(string $QuotaType) 设置<p>配额类型</p>
 * @method array getQuotaObjectNames() 获取<p>配额对象名称列表</p>
 * @method void setQuotaObjectNames(array $QuotaObjectNames) 设置<p>配额对象名称列表</p>
 */
class DescribeUserQuotaRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统id</p>
     */
    public $FileSystemId;

    /**
     * @var array <p>QuotaId列表</p>
     */
    public $QuotaIds;

    /**
     * @var string <p>配额类型</p>
     */
    public $QuotaType;

    /**
     * @var array <p>配额对象名称列表</p>
     */
    public $QuotaObjectNames;

    /**
     * @param string $FileSystemId <p>文件系统id</p>
     * @param array $QuotaIds <p>QuotaId列表</p>
     * @param string $QuotaType <p>配额类型</p>
     * @param array $QuotaObjectNames <p>配额对象名称列表</p>
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

        if (array_key_exists("QuotaIds",$param) and $param["QuotaIds"] !== null) {
            $this->QuotaIds = $param["QuotaIds"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaObjectNames",$param) and $param["QuotaObjectNames"] !== null) {
            $this->QuotaObjectNames = $param["QuotaObjectNames"];
        }
    }
}
