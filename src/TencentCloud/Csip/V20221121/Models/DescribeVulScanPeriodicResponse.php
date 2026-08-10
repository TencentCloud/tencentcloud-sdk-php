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
 * DescribeVulScanPeriodic返回参数结构体
 *
 * @method integer getStatus() 获取<p>周期扫描开关（0-关闭, 1-开启）</p>
 * @method void setStatus(integer $Status) 设置<p>周期扫描开关（0-关闭, 1-开启）</p>
 * @method array getVulCategory() 获取<p>漏洞类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
 * @method void setVulCategory(array $VulCategory) 设置<p>漏洞类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
 * @method array getLevel() 获取<p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
 * @method void setLevel(array $Level) 设置<p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
 * @method string getMethod() 获取<p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
 * @method void setMethod(string $Method) 设置<p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
 * @method integer getCycleType() 获取<p>周期扫描类型</p><p>枚举值：</p><ul><li>1： 每天</li><li>2： 每周</li><li>3： 每月</li></ul>
 * @method void setCycleType(integer $CycleType) 设置<p>周期扫描类型</p><p>枚举值：</p><ul><li>1： 每天</li><li>2： 每周</li><li>3： 每月</li></ul>
 * @method string getStartTime() 获取<p>开始时间（09:00:00）</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间（09:00:00）</p>
 * @method string getEndTime() 获取<p>结束时间（18:00:00）</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间（18:00:00）</p>
 * @method integer getAssetRange() 获取<p>资产范围（0-全部资产，1-自选资产，2-剔除资产）</p>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围（0-全部资产，1-自选资产，2-剔除资产）</p>
 * @method array getAssetList() 获取<p>资产列表（instance_id列表）</p>
 * @method void setAssetList(array $AssetList) 设置<p>资产列表（instance_id列表）</p>
 * @method array getCycleValue() 获取<p>周期值</p><p>单位：周几或者每月几号</p>
 * @method void setCycleValue(array $CycleValue) 设置<p>周期值</p><p>单位：周几或者每月几号</p>
 * @method integer getTimeout() 获取<p>超时时长</p><p>单位：秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时长</p><p>单位：秒</p>
 * @method integer getAllowSync() 获取<p>是否运行被同步配置 0-不允许，1-允许</p>
 * @method void setAllowSync(integer $AllowSync) 设置<p>是否运行被同步配置 0-不允许，1-允许</p>
 * @method integer getEnableSync() 获取<p>管理员账号是否开启了自动同步配置开关 0-关闭，1-开启</p>
 * @method void setEnableSync(integer $EnableSync) 设置<p>管理员账号是否开启了自动同步配置开关 0-关闭，1-开启</p>
 * @method AccountBriefInfo getAdminInfo() 获取<p>配置信息来自哪个账号，为空表示自己设置</p>
 * @method void setAdminInfo(AccountBriefInfo $AdminInfo) 设置<p>配置信息来自哪个账号，为空表示自己设置</p>
 * @method array getTagIds() 获取<p>标签id</p>
 * @method void setTagIds(array $TagIds) 设置<p>标签id</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulScanPeriodicResponse extends AbstractModel
{
    /**
     * @var integer <p>周期扫描开关（0-关闭, 1-开启）</p>
     */
    public $Status;

    /**
     * @var array <p>漏洞类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
     */
    public $VulCategory;

    /**
     * @var array <p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
     */
    public $Level;

    /**
     * @var string <p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
     */
    public $Method;

    /**
     * @var integer <p>周期扫描类型</p><p>枚举值：</p><ul><li>1： 每天</li><li>2： 每周</li><li>3： 每月</li></ul>
     */
    public $CycleType;

    /**
     * @var string <p>开始时间（09:00:00）</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间（18:00:00）</p>
     */
    public $EndTime;

    /**
     * @var integer <p>资产范围（0-全部资产，1-自选资产，2-剔除资产）</p>
     */
    public $AssetRange;

    /**
     * @var array <p>资产列表（instance_id列表）</p>
     */
    public $AssetList;

    /**
     * @var array <p>周期值</p><p>单位：周几或者每月几号</p>
     */
    public $CycleValue;

    /**
     * @var integer <p>超时时长</p><p>单位：秒</p>
     */
    public $Timeout;

    /**
     * @var integer <p>是否运行被同步配置 0-不允许，1-允许</p>
     */
    public $AllowSync;

    /**
     * @var integer <p>管理员账号是否开启了自动同步配置开关 0-关闭，1-开启</p>
     */
    public $EnableSync;

    /**
     * @var AccountBriefInfo <p>配置信息来自哪个账号，为空表示自己设置</p>
     */
    public $AdminInfo;

    /**
     * @var array <p>标签id</p>
     */
    public $TagIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status <p>周期扫描开关（0-关闭, 1-开启）</p>
     * @param array $VulCategory <p>漏洞类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
     * @param array $Level <p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
     * @param string $Method <p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
     * @param integer $CycleType <p>周期扫描类型</p><p>枚举值：</p><ul><li>1： 每天</li><li>2： 每周</li><li>3： 每月</li></ul>
     * @param string $StartTime <p>开始时间（09:00:00）</p>
     * @param string $EndTime <p>结束时间（18:00:00）</p>
     * @param integer $AssetRange <p>资产范围（0-全部资产，1-自选资产，2-剔除资产）</p>
     * @param array $AssetList <p>资产列表（instance_id列表）</p>
     * @param array $CycleValue <p>周期值</p><p>单位：周几或者每月几号</p>
     * @param integer $Timeout <p>超时时长</p><p>单位：秒</p>
     * @param integer $AllowSync <p>是否运行被同步配置 0-不允许，1-允许</p>
     * @param integer $EnableSync <p>管理员账号是否开启了自动同步配置开关 0-关闭，1-开启</p>
     * @param AccountBriefInfo $AdminInfo <p>配置信息来自哪个账号，为空表示自己设置</p>
     * @param array $TagIds <p>标签id</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("CycleValue",$param) and $param["CycleValue"] !== null) {
            $this->CycleValue = $param["CycleValue"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("AllowSync",$param) and $param["AllowSync"] !== null) {
            $this->AllowSync = $param["AllowSync"];
        }

        if (array_key_exists("EnableSync",$param) and $param["EnableSync"] !== null) {
            $this->EnableSync = $param["EnableSync"];
        }

        if (array_key_exists("AdminInfo",$param) and $param["AdminInfo"] !== null) {
            $this->AdminInfo = new AccountBriefInfo();
            $this->AdminInfo->deserialize($param["AdminInfo"]);
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
