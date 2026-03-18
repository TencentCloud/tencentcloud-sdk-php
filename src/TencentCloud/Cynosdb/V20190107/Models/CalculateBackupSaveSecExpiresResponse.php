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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CalculateBackupSaveSecExpires返回参数结构体
 *
 * @method integer getWillDeleteBackupFileCount() 获取将被删除的备份文件总数
 * @method void setWillDeleteBackupFileCount(integer $WillDeleteBackupFileCount) 设置将被删除的备份文件总数
 * @method array getWillDeleteBackupFiles() 获取将被删除的备份文件列表
 * @method void setWillDeleteBackupFiles(array $WillDeleteBackupFiles) 设置将被删除的备份文件列表
 * @method integer getWillDeleteBinlogFileCount() 获取将被删除的Binlog文件总数
 * @method void setWillDeleteBinlogFileCount(integer $WillDeleteBinlogFileCount) 设置将被删除的Binlog文件总数
 * @method array getWillDeleteBinlogFiles() 获取将被删除的Binlog文件列表
 * @method void setWillDeleteBinlogFiles(array $WillDeleteBinlogFiles) 设置将被删除的Binlog文件列表
 * @method integer getWillDeleteRedoLogFileCount() 获取将被删除的Redolog文件总数
 * @method void setWillDeleteRedoLogFileCount(integer $WillDeleteRedoLogFileCount) 设置将被删除的Redolog文件总数
 * @method array getWillDeleteRedoLogFiles() 获取将被删除的Redolog文件列表
 * @method void setWillDeleteRedoLogFiles(array $WillDeleteRedoLogFiles) 设置将被删除的Redolog文件列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CalculateBackupSaveSecExpiresResponse extends AbstractModel
{
    /**
     * @var integer 将被删除的备份文件总数
     */
    public $WillDeleteBackupFileCount;

    /**
     * @var array 将被删除的备份文件列表
     */
    public $WillDeleteBackupFiles;

    /**
     * @var integer 将被删除的Binlog文件总数
     */
    public $WillDeleteBinlogFileCount;

    /**
     * @var array 将被删除的Binlog文件列表
     */
    public $WillDeleteBinlogFiles;

    /**
     * @var integer 将被删除的Redolog文件总数
     */
    public $WillDeleteRedoLogFileCount;

    /**
     * @var array 将被删除的Redolog文件列表
     */
    public $WillDeleteRedoLogFiles;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $WillDeleteBackupFileCount 将被删除的备份文件总数
     * @param array $WillDeleteBackupFiles 将被删除的备份文件列表
     * @param integer $WillDeleteBinlogFileCount 将被删除的Binlog文件总数
     * @param array $WillDeleteBinlogFiles 将被删除的Binlog文件列表
     * @param integer $WillDeleteRedoLogFileCount 将被删除的Redolog文件总数
     * @param array $WillDeleteRedoLogFiles 将被删除的Redolog文件列表
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("WillDeleteBackupFileCount",$param) and $param["WillDeleteBackupFileCount"] !== null) {
            $this->WillDeleteBackupFileCount = $param["WillDeleteBackupFileCount"];
        }

        if (array_key_exists("WillDeleteBackupFiles",$param) and $param["WillDeleteBackupFiles"] !== null) {
            $this->WillDeleteBackupFiles = [];
            foreach ($param["WillDeleteBackupFiles"] as $key => $value){
                $obj = new WillDeleteItem();
                $obj->deserialize($value);
                array_push($this->WillDeleteBackupFiles, $obj);
            }
        }

        if (array_key_exists("WillDeleteBinlogFileCount",$param) and $param["WillDeleteBinlogFileCount"] !== null) {
            $this->WillDeleteBinlogFileCount = $param["WillDeleteBinlogFileCount"];
        }

        if (array_key_exists("WillDeleteBinlogFiles",$param) and $param["WillDeleteBinlogFiles"] !== null) {
            $this->WillDeleteBinlogFiles = [];
            foreach ($param["WillDeleteBinlogFiles"] as $key => $value){
                $obj = new WillDeleteItem();
                $obj->deserialize($value);
                array_push($this->WillDeleteBinlogFiles, $obj);
            }
        }

        if (array_key_exists("WillDeleteRedoLogFileCount",$param) and $param["WillDeleteRedoLogFileCount"] !== null) {
            $this->WillDeleteRedoLogFileCount = $param["WillDeleteRedoLogFileCount"];
        }

        if (array_key_exists("WillDeleteRedoLogFiles",$param) and $param["WillDeleteRedoLogFiles"] !== null) {
            $this->WillDeleteRedoLogFiles = [];
            foreach ($param["WillDeleteRedoLogFiles"] as $key => $value){
                $obj = new WillDeleteItem();
                $obj->deserialize($value);
                array_push($this->WillDeleteRedoLogFiles, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
