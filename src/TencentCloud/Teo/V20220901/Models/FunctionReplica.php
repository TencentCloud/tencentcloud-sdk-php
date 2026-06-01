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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘函数副本。
 *
 * @method string getFunctionId() 获取函数 ID。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID。
 * @method string getReplicaName() 获取边缘函数副本名称。
 * @method void setReplicaName(string $ReplicaName) 设置边缘函数副本名称。
 * @method string getContent() 获取边缘函数副本内容。格式为 JavaScript 代码。
 * @method void setContent(string $Content) 设置边缘函数副本内容。格式为 JavaScript 代码。
 * @method string getRemark() 获取边缘函数副本描述。
 * @method void setRemark(string $Remark) 设置边缘函数副本描述。
 * @method string getCreatedOn() 获取边缘函数副本创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置边缘函数副本创建时间。
 * @method string getModifiedOn() 获取边缘函数副本更新时间。
 * @method void setModifiedOn(string $ModifiedOn) 设置边缘函数副本更新时间。
 */
class FunctionReplica extends AbstractModel
{
    /**
     * @var string 函数 ID。
     */
    public $FunctionId;

    /**
     * @var string 边缘函数副本名称。
     */
    public $ReplicaName;

    /**
     * @var string 边缘函数副本内容。格式为 JavaScript 代码。
     */
    public $Content;

    /**
     * @var string 边缘函数副本描述。
     */
    public $Remark;

    /**
     * @var string 边缘函数副本创建时间。
     */
    public $CreatedOn;

    /**
     * @var string 边缘函数副本更新时间。
     */
    public $ModifiedOn;

    /**
     * @param string $FunctionId 函数 ID。
     * @param string $ReplicaName 边缘函数副本名称。
     * @param string $Content 边缘函数副本内容。格式为 JavaScript 代码。
     * @param string $Remark 边缘函数副本描述。
     * @param string $CreatedOn 边缘函数副本创建时间。
     * @param string $ModifiedOn 边缘函数副本更新时间。
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ReplicaName",$param) and $param["ReplicaName"] !== null) {
            $this->ReplicaName = $param["ReplicaName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
