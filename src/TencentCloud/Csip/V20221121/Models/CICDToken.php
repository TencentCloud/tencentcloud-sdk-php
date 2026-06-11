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
 * CI/CD接入Token
 *
 * @method integer getId() 获取<p>ID</p>
 * @method void setId(integer $Id) 设置<p>ID</p>
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getName() 获取<p>CI/CD名称</p>
 * @method void setName(string $Name) 设置<p>CI/CD名称</p>
 * @method string getToken() 获取<p>用于接入的Token</p>
 * @method void setToken(string $Token) 设置<p>用于接入的Token</p>
 * @method integer getPeriod() 获取<p>扫描结果存储时长</p>
 * @method void setPeriod(integer $Period) 设置<p>扫描结果存储时长</p>
 * @method integer getFileCnt() 获取<p>已扫描文件</p>
 * @method void setFileCnt(integer $FileCnt) 设置<p>已扫描文件</p>
 * @method string getLastScanStatus() 获取<p>最近扫描状态</p>
 * @method void setLastScanStatus(string $LastScanStatus) 设置<p>最近扫描状态</p>
 * @method string getLastScanTime() 获取<p>最近扫描时间</p>
 * @method void setLastScanTime(string $LastScanTime) 设置<p>最近扫描时间</p>
 */
class CICDToken extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $Id;

    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>CI/CD名称</p>
     */
    public $Name;

    /**
     * @var string <p>用于接入的Token</p>
     */
    public $Token;

    /**
     * @var integer <p>扫描结果存储时长</p>
     */
    public $Period;

    /**
     * @var integer <p>已扫描文件</p>
     */
    public $FileCnt;

    /**
     * @var string <p>最近扫描状态</p>
     */
    public $LastScanStatus;

    /**
     * @var string <p>最近扫描时间</p>
     */
    public $LastScanTime;

    /**
     * @param integer $Id <p>ID</p>
     * @param integer $AppId <p>appid</p>
     * @param string $Name <p>CI/CD名称</p>
     * @param string $Token <p>用于接入的Token</p>
     * @param integer $Period <p>扫描结果存储时长</p>
     * @param integer $FileCnt <p>已扫描文件</p>
     * @param string $LastScanStatus <p>最近扫描状态</p>
     * @param string $LastScanTime <p>最近扫描时间</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("FileCnt",$param) and $param["FileCnt"] !== null) {
            $this->FileCnt = $param["FileCnt"];
        }

        if (array_key_exists("LastScanStatus",$param) and $param["LastScanStatus"] !== null) {
            $this->LastScanStatus = $param["LastScanStatus"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }
    }
}
