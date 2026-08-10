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
 * CreateVulScanManual请求参数结构体
 *
 * @method integer getTimeout() 获取<p>超时时间（秒）</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间（秒）</p>
 * @method integer getAssetRange() 获取<p>资产范围（0-全部资产，1-自选资产，2-剔除资产，3-自动资产匹配）</p>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围（0-全部资产，1-自选资产，2-剔除资产，3-自动资产匹配）</p>
 * @method array getMethod() 获取<p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
 * @method void setMethod(array $Method) 设置<p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getVulId() 获取<p>漏洞id</p>
 * @method void setVulId(array $VulId) 设置<p>漏洞id</p>
 * @method array getKbNo() 获取<p>kb编号</p>
 * @method void setKbNo(array $KbNo) 设置<p>kb编号</p>
 * @method array getVulCategory() 获取<p>漏扫类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
 * @method void setVulCategory(array $VulCategory) 设置<p>漏扫类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
 * @method array getLevel() 获取<p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
 * @method void setLevel(array $Level) 设置<p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
 * @method array getAssetList() 获取<p>资产列表（Quuid列表）</p>
 * @method void setAssetList(array $AssetList) 设置<p>资产列表（Quuid列表）</p>
 * @method array getTagIds() 获取<p>标签id</p>
 * @method void setTagIds(array $TagIds) 设置<p>标签id</p>
 */
class CreateVulScanManualRequest extends AbstractModel
{
    /**
     * @var integer <p>超时时间（秒）</p>
     */
    public $Timeout;

    /**
     * @var integer <p>资产范围（0-全部资产，1-自选资产，2-剔除资产，3-自动资产匹配）</p>
     */
    public $AssetRange;

    /**
     * @var array <p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
     */
    public $Method;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>漏洞id</p>
     */
    public $VulId;

    /**
     * @var array <p>kb编号</p>
     */
    public $KbNo;

    /**
     * @var array <p>漏扫类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
     */
    public $VulCategory;

    /**
     * @var array <p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
     */
    public $Level;

    /**
     * @var array <p>资产列表（Quuid列表）</p>
     */
    public $AssetList;

    /**
     * @var array <p>标签id</p>
     */
    public $TagIds;

    /**
     * @param integer $Timeout <p>超时时间（秒）</p>
     * @param integer $AssetRange <p>资产范围（0-全部资产，1-自选资产，2-剔除资产，3-自动资产匹配）</p>
     * @param array $Method <p>扫描方式（VersionCompare: 版本对比, POC: POC检测, VersionComparePOC: 版本对比+POC检测）</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $VulId <p>漏洞id</p>
     * @param array $KbNo <p>kb编号</p>
     * @param array $VulCategory <p>漏扫类型</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
     * @param array $Level <p>漏洞等级（INVALID: 无效, INFO: 提示, LOW: 低危, MEDIUM: 中危, HIGH: 高危, CRITICAL: 严重）</p>
     * @param array $AssetList <p>资产列表（Quuid列表）</p>
     * @param array $TagIds <p>标签id</p>
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }
    }
}
