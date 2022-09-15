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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在非打包上传备份模式下，每个库对应一个备份文件
 *
 * @method integer getId() 获取备份文件唯一标识
 * @method void setId(integer $Id) 设置备份文件唯一标识
 * @method string getFileName() 获取备份文件名称
 * @method void setFileName(string $FileName) 设置备份文件名称
 * @method integer getSize() 获取文件大小(K)
 * @method void setSize(integer $Size) 设置文件大小(K)
 * @method array getDBs() 获取备份文件的库的名称
 * @method void setDBs(array $DBs) 设置备份文件的库的名称
 * @method string getDownloadLink() 获取下载地址
 * @method void setDownloadLink(string $DownloadLink) 设置下载地址
 * @method string getRegion() 获取当前实例地域码
 * @method void setRegion(string $Region) 设置当前实例地域码
 * @method array getCrossBackupAddr() 获取备份的跨地域region和所对应的下载地址
 * @method void setCrossBackupAddr(array $CrossBackupAddr) 设置备份的跨地域region和所对应的下载地址
 */
class BackupFile extends AbstractModel
{
    /**
     * @var integer 备份文件唯一标识
     */
    public $Id;

    /**
     * @var string 备份文件名称
     */
    public $FileName;

    /**
     * @var integer 文件大小(K)
     */
    public $Size;

    /**
     * @var array 备份文件的库的名称
     */
    public $DBs;

    /**
     * @var string 下载地址
     */
    public $DownloadLink;

    /**
     * @var string 当前实例地域码
     */
    public $Region;

    /**
     * @var array 备份的跨地域region和所对应的下载地址
     */
    public $CrossBackupAddr;

    /**
     * @param integer $Id 备份文件唯一标识
     * @param string $FileName 备份文件名称
     * @param integer $Size 文件大小(K)
     * @param array $DBs 备份文件的库的名称
     * @param string $DownloadLink 下载地址
     * @param string $Region 当前实例地域码
     * @param array $CrossBackupAddr 备份的跨地域region和所对应的下载地址
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = $param["DBs"];
        }

        if (array_key_exists("DownloadLink",$param) and $param["DownloadLink"] !== null) {
            $this->DownloadLink = $param["DownloadLink"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CrossBackupAddr",$param) and $param["CrossBackupAddr"] !== null) {
            $this->CrossBackupAddr = [];
            foreach ($param["CrossBackupAddr"] as $key => $value){
                $obj = new CrossBackupAddr();
                $obj->deserialize($value);
                array_push($this->CrossBackupAddr, $obj);
            }
        }
    }
}
