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
 * 漏洞白名单
 *
 * @method integer getId() 获取<p>id</p>
 * @method void setId(integer $Id) 设置<p>id</p>
 * @method string getName() 获取<p>漏洞名称</p>
 * @method void setName(string $Name) 设置<p>漏洞名称</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getAppId() 获取<p>所属账号</p>
 * @method void setAppId(integer $AppId) 设置<p>所属账号</p>
 * @method array getAssetList() 获取<p>资产列表</p>
 * @method void setAssetList(array $AssetList) 设置<p>资产列表</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getSwitch() 获取<p>策略开关（0-关闭, 1-开启）</p>
 * @method void setSwitch(integer $Switch) 设置<p>策略开关（0-关闭, 1-开启）</p>
 * @method integer getAssetRange() 获取<p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选排除资产</li></ul>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选排除资产</li></ul>
 * @method integer getKBId() 获取<p>补丁KB id</p>
 * @method void setKBId(integer $KBId) 设置<p>补丁KB id</p>
 * @method integer getVulId() 获取<p>漏洞Id</p>
 * @method void setVulId(integer $VulId) 设置<p>漏洞Id</p>
 */
class VulWhitelist extends AbstractModel
{
    /**
     * @var integer <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>漏洞名称</p>
     */
    public $Name;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>所属账号</p>
     */
    public $AppId;

    /**
     * @var array <p>资产列表</p>
     */
    public $AssetList;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>策略开关（0-关闭, 1-开启）</p>
     */
    public $Switch;

    /**
     * @var integer <p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选排除资产</li></ul>
     */
    public $AssetRange;

    /**
     * @var integer <p>补丁KB id</p>
     */
    public $KBId;

    /**
     * @var integer <p>漏洞Id</p>
     */
    public $VulId;

    /**
     * @param integer $Id <p>id</p>
     * @param string $Name <p>漏洞名称</p>
     * @param string $Remark <p>备注</p>
     * @param integer $AppId <p>所属账号</p>
     * @param array $AssetList <p>资产列表</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $Switch <p>策略开关（0-关闭, 1-开启）</p>
     * @param integer $AssetRange <p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选排除资产</li></ul>
     * @param integer $KBId <p>补丁KB id</p>
     * @param integer $VulId <p>漏洞Id</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }
    }
}
