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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDBSBackupSets请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method array getBackupSetIdList() 获取<p>备份集列表 ,值来自 DescribeDBSBackupSets 接口返回</p>
 * @method void setBackupSetIdList(array $BackupSetIdList) 设置<p>备份集列表 ,值来自 DescribeDBSBackupSets 接口返回</p>
 */
class DeleteDBSBackupSetsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>备份集列表 ,值来自 DescribeDBSBackupSets 接口返回</p>
     */
    public $BackupSetIdList;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param array $BackupSetIdList <p>备份集列表 ,值来自 DescribeDBSBackupSets 接口返回</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupSetIdList",$param) and $param["BackupSetIdList"] !== null) {
            $this->BackupSetIdList = $param["BackupSetIdList"];
        }
    }
}
