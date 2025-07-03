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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 软件详情响应对象集合
 *
 * @method string getName() 获取软件名称
 * @method void setName(string $Name) 设置软件名称
 * @method string getInstallDate() 获取安装时间
 * @method void setInstallDate(string $InstallDate) 设置安装时间
 * @method integer getSoftwareId() 获取软件列表id(只支持32位)
 * @method void setSoftwareId(integer $SoftwareId) 设置软件列表id(只支持32位)
 * @method string getMid() 获取唯一标识Mid
 * @method void setMid(string $Mid) 设置唯一标识Mid
 * @method string getVersion() 获取软件版本
 * @method void setVersion(string $Version) 设置软件版本
 * @method string getCorpName() 获取公司名
 * @method void setCorpName(string $CorpName) 设置公司名
 * @method integer getId() 获取列表Id(只支持32位)
 * @method void setId(integer $Id) 设置列表Id(只支持32位)
 * @method integer getPiracyRisk() 获取盗版风险（0:未支持，1:风险，2:未发现，3:未开启）
 * @method void setPiracyRisk(integer $PiracyRisk) 设置盗版风险（0:未支持，1:风险，2:未发现，3:未开启）
 */
class SoftwareInformationData extends AbstractModel
{
    /**
     * @var string 软件名称
     */
    public $Name;

    /**
     * @var string 安装时间
     */
    public $InstallDate;

    /**
     * @var integer 软件列表id(只支持32位)
     */
    public $SoftwareId;

    /**
     * @var string 唯一标识Mid
     */
    public $Mid;

    /**
     * @var string 软件版本
     */
    public $Version;

    /**
     * @var string 公司名
     */
    public $CorpName;

    /**
     * @var integer 列表Id(只支持32位)
     */
    public $Id;

    /**
     * @var integer 盗版风险（0:未支持，1:风险，2:未发现，3:未开启）
     */
    public $PiracyRisk;

    /**
     * @param string $Name 软件名称
     * @param string $InstallDate 安装时间
     * @param integer $SoftwareId 软件列表id(只支持32位)
     * @param string $Mid 唯一标识Mid
     * @param string $Version 软件版本
     * @param string $CorpName 公司名
     * @param integer $Id 列表Id(只支持32位)
     * @param integer $PiracyRisk 盗版风险（0:未支持，1:风险，2:未发现，3:未开启）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstallDate",$param) and $param["InstallDate"] !== null) {
            $this->InstallDate = $param["InstallDate"];
        }

        if (array_key_exists("SoftwareId",$param) and $param["SoftwareId"] !== null) {
            $this->SoftwareId = $param["SoftwareId"];
        }

        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PiracyRisk",$param) and $param["PiracyRisk"] !== null) {
            $this->PiracyRisk = $param["PiracyRisk"];
        }
    }
}
