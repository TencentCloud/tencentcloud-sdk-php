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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binlog描述
 *
 * @method string getFileName() 获取Binlog文件名称
 * @method void setFileName(string $FileName) 设置Binlog文件名称
 * @method integer getFileSize() 获取文件大小，单位：字节
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位：字节
 * @method string getStartTime() 获取事务最早时间
 * @method void setStartTime(string $StartTime) 设置事务最早时间
 * @method string getFinishTime() 获取事务最晚时间
 * @method void setFinishTime(string $FinishTime) 设置事务最晚时间
 * @method integer getBinlogId() 获取Binlog文件ID
 * @method void setBinlogId(integer $BinlogId) 设置Binlog文件ID
 */
class BinlogItem extends AbstractModel
{
    /**
     * @var string Binlog文件名称
     */
    public $FileName;

    /**
     * @var integer 文件大小，单位：字节
     */
    public $FileSize;

    /**
     * @var string 事务最早时间
     */
    public $StartTime;

    /**
     * @var string 事务最晚时间
     */
    public $FinishTime;

    /**
     * @var integer Binlog文件ID
     */
    public $BinlogId;

    /**
     * @param string $FileName Binlog文件名称
     * @param integer $FileSize 文件大小，单位：字节
     * @param string $StartTime 事务最早时间
     * @param string $FinishTime 事务最晚时间
     * @param integer $BinlogId Binlog文件ID
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BinlogId",$param) and $param["BinlogId"] !== null) {
            $this->BinlogId = $param["BinlogId"];
        }
    }
}
