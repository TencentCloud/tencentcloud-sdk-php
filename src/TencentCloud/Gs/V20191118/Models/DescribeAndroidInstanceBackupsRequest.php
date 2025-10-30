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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidInstanceBackups请求参数结构体
 *
 * @method array getBackupIds() 获取备份ID列表
 * @method void setBackupIds(array $BackupIds) 设置备份ID列表
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 */
class DescribeAndroidInstanceBackupsRequest extends AbstractModel
{
    /**
     * @var array 备份ID列表
     */
    public $BackupIds;

    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @param array $BackupIds 备份ID列表
     * @param integer $Offset 分页偏移
     * @param integer $Limit 每页数量
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
        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
