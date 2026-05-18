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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主域名详情
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method string getDomain() 获取<p>主域名</p>
 * @method void setDomain(string $Domain) 设置<p>主域名</p>
 * @method string getICP() 获取<p>ICP</p>
 * @method void setICP(string $ICP) 设置<p>ICP</p>
 * @method string getRegisteredTime() 获取<p>注册时间</p>
 * @method void setRegisteredTime(string $RegisteredTime) 设置<p>注册时间</p>
 * @method string getExpiredTime() 获取<p>过期时间</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>过期时间</p>
 * @method string getCompany() 获取<p>公司</p>
 * @method void setCompany(string $Company) 设置<p>公司</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method integer getIsCloudAsset() 获取<p>是否为云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产状态，-1为下线</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产状态，-1为下线</p>
 */
class DisplayDomain extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var string <p>主域名</p>
     */
    public $Domain;

    /**
     * @var string <p>ICP</p>
     */
    public $ICP;

    /**
     * @var string <p>注册时间</p>
     */
    public $RegisteredTime;

    /**
     * @var string <p>过期时间</p>
     */
    public $ExpiredTime;

    /**
     * @var string <p>公司</p>
     */
    public $Company;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var integer <p>是否为云资产</p>
     */
    public $IsCloudAsset;

    /**
     * @var integer <p>云资产状态，-1为下线</p>
     */
    public $CloudAssetStatus;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param string $Domain <p>主域名</p>
     * @param string $ICP <p>ICP</p>
     * @param string $RegisteredTime <p>注册时间</p>
     * @param string $ExpiredTime <p>过期时间</p>
     * @param string $Company <p>公司</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param integer $IsCloudAsset <p>是否为云资产</p>
     * @param integer $CloudAssetStatus <p>云资产状态，-1为下线</p>
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ICP",$param) and $param["ICP"] !== null) {
            $this->ICP = $param["ICP"];
        }

        if (array_key_exists("RegisteredTime",$param) and $param["RegisteredTime"] !== null) {
            $this->RegisteredTime = $param["RegisteredTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = $param["Company"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("IsCloudAsset",$param) and $param["IsCloudAsset"] !== null) {
            $this->IsCloudAsset = $param["IsCloudAsset"];
        }

        if (array_key_exists("CloudAssetStatus",$param) and $param["CloudAssetStatus"] !== null) {
            $this->CloudAssetStatus = $param["CloudAssetStatus"];
        }
    }
}
