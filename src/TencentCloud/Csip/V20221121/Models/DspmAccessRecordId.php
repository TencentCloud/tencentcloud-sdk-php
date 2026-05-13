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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm访问管理记录Id
 *
 * @method string getSourceIp() 获取来源ip
 * @method void setSourceIp(string $SourceIp) 设置来源ip
 * @method string getAssetId() 获取资产列表
 * @method void setAssetId(string $AssetId) 设置资产列表
 * @method string getRegion() 获取资产所在地域
 * @method void setRegion(string $Region) 设置资产所在地域
 * @method string getAccount() 获取资产账号
 * @method void setAccount(string $Account) 设置资产账号
 * @method string getHost() 获取主机地址
 * @method void setHost(string $Host) 设置主机地址
 * @method string getRecordTime() 获取记录时间
 * @method void setRecordTime(string $RecordTime) 设置记录时间
 */
class DspmAccessRecordId extends AbstractModel
{
    /**
     * @var string 来源ip
     */
    public $SourceIp;

    /**
     * @var string 资产列表
     */
    public $AssetId;

    /**
     * @var string 资产所在地域
     */
    public $Region;

    /**
     * @var string 资产账号
     */
    public $Account;

    /**
     * @var string 主机地址
     */
    public $Host;

    /**
     * @var string 记录时间
     */
    public $RecordTime;

    /**
     * @param string $SourceIp 来源ip
     * @param string $AssetId 资产列表
     * @param string $Region 资产所在地域
     * @param string $Account 资产账号
     * @param string $Host 主机地址
     * @param string $RecordTime 记录时间
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
        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }
    }
}
