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
 * DescribeDBSAvailableRecoveryTime请求参数结构体
 *
 * @method string getInstanceId() 获取<p>db实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>db实例ID</p>
 * @method integer getBackupSetId() 获取<p>备份集ID,值来自 DescribeDBSBackupSets 接口返回</p>
 * @method void setBackupSetId(integer $BackupSetId) 设置<p>备份集ID,值来自 DescribeDBSBackupSets 接口返回</p>
 */
class DescribeDBSAvailableRecoveryTimeRequest extends AbstractModel
{
    /**
     * @var string <p>db实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>备份集ID,值来自 DescribeDBSBackupSets 接口返回</p>
     */
    public $BackupSetId;

    /**
     * @param string $InstanceId <p>db实例ID</p>
     * @param integer $BackupSetId <p>备份集ID,值来自 DescribeDBSBackupSets 接口返回</p>
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

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }
    }
}
