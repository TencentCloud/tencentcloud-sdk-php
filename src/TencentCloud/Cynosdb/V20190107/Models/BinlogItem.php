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
 * Binlog描述
 *
 * @method string getFileName() 获取<p>Binlog文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>Binlog文件名称</p>
 * @method integer getFileSize() 获取<p>文件大小，单位：字节</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小，单位：字节</p>
 * @method string getStartTime() 获取<p>事务最早时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>事务最早时间</p>
 * @method string getFinishTime() 获取<p>事务最晚时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>事务最晚时间</p>
 * @method integer getBinlogId() 获取<p>Binlog文件ID</p>
 * @method void setBinlogId(integer $BinlogId) 设置<p>Binlog文件ID</p>
 * @method array getCrossRegions() 获取<p>binlog所跨地域</p>
 * @method void setCrossRegions(array $CrossRegions) 设置<p>binlog所跨地域</p>
 * @method string getCopyStatus() 获取<p>备份投递状态</p>
 * @method void setCopyStatus(string $CopyStatus) 设置<p>备份投递状态</p>
 * @method array getVaultInfos() 获取<p>保险箱信息</p>
 * @method void setVaultInfos(array $VaultInfos) 设置<p>保险箱信息</p>
 * @method string getEncryptKeyId() 获取<p>加密秘钥key</p>
 * @method void setEncryptKeyId(string $EncryptKeyId) 设置<p>加密秘钥key</p>
 * @method string getEncryptRegion() 获取<p>加密秘钥地域</p>
 * @method void setEncryptRegion(string $EncryptRegion) 设置<p>加密秘钥地域</p>
 * @method array getExistRegions() 获取<p>备份的地域分布信息</p>
 * @method void setExistRegions(array $ExistRegions) 设置<p>备份的地域分布信息</p>
 */
class BinlogItem extends AbstractModel
{
    /**
     * @var string <p>Binlog文件名称</p>
     */
    public $FileName;

    /**
     * @var integer <p>文件大小，单位：字节</p>
     */
    public $FileSize;

    /**
     * @var string <p>事务最早时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>事务最晚时间</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>Binlog文件ID</p>
     */
    public $BinlogId;

    /**
     * @var array <p>binlog所跨地域</p>
     */
    public $CrossRegions;

    /**
     * @var string <p>备份投递状态</p>
     */
    public $CopyStatus;

    /**
     * @var array <p>保险箱信息</p>
     */
    public $VaultInfos;

    /**
     * @var string <p>加密秘钥key</p>
     */
    public $EncryptKeyId;

    /**
     * @var string <p>加密秘钥地域</p>
     */
    public $EncryptRegion;

    /**
     * @var array <p>备份的地域分布信息</p>
     */
    public $ExistRegions;

    /**
     * @param string $FileName <p>Binlog文件名称</p>
     * @param integer $FileSize <p>文件大小，单位：字节</p>
     * @param string $StartTime <p>事务最早时间</p>
     * @param string $FinishTime <p>事务最晚时间</p>
     * @param integer $BinlogId <p>Binlog文件ID</p>
     * @param array $CrossRegions <p>binlog所跨地域</p>
     * @param string $CopyStatus <p>备份投递状态</p>
     * @param array $VaultInfos <p>保险箱信息</p>
     * @param string $EncryptKeyId <p>加密秘钥key</p>
     * @param string $EncryptRegion <p>加密秘钥地域</p>
     * @param array $ExistRegions <p>备份的地域分布信息</p>
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

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("CopyStatus",$param) and $param["CopyStatus"] !== null) {
            $this->CopyStatus = $param["CopyStatus"];
        }

        if (array_key_exists("VaultInfos",$param) and $param["VaultInfos"] !== null) {
            $this->VaultInfos = [];
            foreach ($param["VaultInfos"] as $key => $value){
                $obj = new VaultInfo();
                $obj->deserialize($value);
                array_push($this->VaultInfos, $obj);
            }
        }

        if (array_key_exists("EncryptKeyId",$param) and $param["EncryptKeyId"] !== null) {
            $this->EncryptKeyId = $param["EncryptKeyId"];
        }

        if (array_key_exists("EncryptRegion",$param) and $param["EncryptRegion"] !== null) {
            $this->EncryptRegion = $param["EncryptRegion"];
        }

        if (array_key_exists("ExistRegions",$param) and $param["ExistRegions"] !== null) {
            $this->ExistRegions = [];
            foreach ($param["ExistRegions"] as $key => $value){
                $obj = new BinlogRegionInfo();
                $obj->deserialize($value);
                array_push($this->ExistRegions, $obj);
            }
        }
    }
}
