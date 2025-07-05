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
 * ExpandCapacity请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method integer getExpandedCapacity() 获取新增扩容的系统容量
 * @method void setExpandedCapacity(integer $ExpandedCapacity) 设置新增扩容的系统容量
 * @method string getModifyType() 获取容量修改类型：add/sub
 * @method void setModifyType(string $ModifyType) 设置容量修改类型：add/sub
 */
class ExpandCapacityRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var integer 新增扩容的系统容量
     */
    public $ExpandedCapacity;

    /**
     * @var string 容量修改类型：add/sub
     */
    public $ModifyType;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param integer $ExpandedCapacity 新增扩容的系统容量
     * @param string $ModifyType 容量修改类型：add/sub
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

        if (array_key_exists("ExpandedCapacity",$param) and $param["ExpandedCapacity"] !== null) {
            $this->ExpandedCapacity = $param["ExpandedCapacity"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }
    }
}
