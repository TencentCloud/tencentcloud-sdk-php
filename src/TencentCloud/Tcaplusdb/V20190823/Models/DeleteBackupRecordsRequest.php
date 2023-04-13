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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBackupRecords请求参数结构体
 *
 * @method string getClusterId() 获取待删除备份记录的所在集群ID
 * @method void setClusterId(string $ClusterId) 设置待删除备份记录的所在集群ID
 * @method array getBackupRecords() 获取待删除备份记录的详情
 * @method void setBackupRecords(array $BackupRecords) 设置待删除备份记录的详情
 */
class DeleteBackupRecordsRequest extends AbstractModel
{
    /**
     * @var string 待删除备份记录的所在集群ID
     */
    public $ClusterId;

    /**
     * @var array 待删除备份记录的详情
     */
    public $BackupRecords;

    /**
     * @param string $ClusterId 待删除备份记录的所在集群ID
     * @param array $BackupRecords 待删除备份记录的详情
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupRecords",$param) and $param["BackupRecords"] !== null) {
            $this->BackupRecords = [];
            foreach ($param["BackupRecords"] as $key => $value){
                $obj = new BackupRecords();
                $obj->deserialize($value);
                array_push($this->BackupRecords, $obj);
            }
        }
    }
}
