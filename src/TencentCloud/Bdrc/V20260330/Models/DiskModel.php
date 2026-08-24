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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云盘信息
 *
 * @method string getDiskType() 获取云盘类型
 * @method void setDiskType(string $DiskType) 设置云盘类型
 * @method integer getDiskSize() 获取云盘大小（单位GB，范围 (0, 32000]）
 * @method void setDiskSize(integer $DiskSize) 设置云盘大小（单位GB，范围 (0, 32000]）
 * @method boolean getDeleteWithInstance() 获取是否随实例删除（仅 DataDisks 元素能传）
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置是否随实例删除（仅 DataDisks 元素能传）
 */
class DiskModel extends AbstractModel
{
    /**
     * @var string 云盘类型
     */
    public $DiskType;

    /**
     * @var integer 云盘大小（单位GB，范围 (0, 32000]）
     */
    public $DiskSize;

    /**
     * @var boolean 是否随实例删除（仅 DataDisks 元素能传）
     */
    public $DeleteWithInstance;

    /**
     * @param string $DiskType 云盘类型
     * @param integer $DiskSize 云盘大小（单位GB，范围 (0, 32000]）
     * @param boolean $DeleteWithInstance 是否随实例删除（仅 DataDisks 元素能传）
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }
    }
}
