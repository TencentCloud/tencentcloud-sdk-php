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
 * CreateExposureAutoTagRule请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method string getTag() 获取<p>标签</p>
 * @method void setTag(string $Tag) 设置<p>标签</p>
 * @method string getDescription() 获取<p>规则描述</p>
 * @method void setDescription(string $Description) 设置<p>规则描述</p>
 * @method boolean getEnable() 获取<p>规则开启状态</p>
 * @method void setEnable(boolean $Enable) 设置<p>规则开启状态</p>
 * @method array getAssetTypes() 获取<p>资产类型</p>
 * @method void setAssetTypes(array $AssetTypes) 设置<p>资产类型</p>
 * @method array getPorts() 获取<p>端口</p>
 * @method void setPorts(array $Ports) 设置<p>端口</p>
 * @method array getOpenStatuses() 获取<p>开放状态</p>
 * @method void setOpenStatuses(array $OpenStatuses) 设置<p>开放状态</p>
 * @method boolean getApplyNow() 获取<p>是否立即执行规则</p>
 * @method void setApplyNow(boolean $ApplyNow) 设置<p>是否立即执行规则</p>
 */
class CreateExposureAutoTagRuleRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>标签</p>
     */
    public $Tag;

    /**
     * @var string <p>规则描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>规则开启状态</p>
     */
    public $Enable;

    /**
     * @var array <p>资产类型</p>
     */
    public $AssetTypes;

    /**
     * @var array <p>端口</p>
     */
    public $Ports;

    /**
     * @var array <p>开放状态</p>
     */
    public $OpenStatuses;

    /**
     * @var boolean <p>是否立即执行规则</p>
     */
    public $ApplyNow;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $RuleName <p>规则名称</p>
     * @param string $Tag <p>标签</p>
     * @param string $Description <p>规则描述</p>
     * @param boolean $Enable <p>规则开启状态</p>
     * @param array $AssetTypes <p>资产类型</p>
     * @param array $Ports <p>端口</p>
     * @param array $OpenStatuses <p>开放状态</p>
     * @param boolean $ApplyNow <p>是否立即执行规则</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = $param["AssetTypes"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("OpenStatuses",$param) and $param["OpenStatuses"] !== null) {
            $this->OpenStatuses = $param["OpenStatuses"];
        }

        if (array_key_exists("ApplyNow",$param) and $param["ApplyNow"] !== null) {
            $this->ApplyNow = $param["ApplyNow"];
        }
    }
}
