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
 * ModifyAgentConfigSetting请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getLogCollectSettings() 获取<p>日志采集类型列表，可选值：tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
 * @method void setLogCollectSettings(array $LogCollectSettings) 设置<p>日志采集类型列表，可选值：tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
 * @method string getAssetSelectionType() 获取<p>资产选择方式：all-全部付费资产，tag-按标签选择，direct-直接选择</p>
 * @method void setAssetSelectionType(string $AssetSelectionType) 设置<p>资产选择方式：all-全部付费资产，tag-按标签选择，direct-直接选择</p>
 * @method array getTagIds() 获取<p>按标签选择时的标签ID数组（AssetSelectionType=tag时使用）</p>
 * @method void setTagIds(array $TagIds) 设置<p>按标签选择时的标签ID数组（AssetSelectionType=tag时使用）</p>
 * @method array getInstanceIDs() 获取<p>直接选择的主机instance_id列表（AssetSelectionType=direct时使用）</p>
 * @method void setInstanceIDs(array $InstanceIDs) 设置<p>直接选择的主机instance_id列表（AssetSelectionType=direct时使用）</p>
 * @method array getExcludeInstanceIDs() 获取<p>排除的主机instance_id列表（AssetSelectionType=all时使用）</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) 设置<p>排除的主机instance_id列表（AssetSelectionType=all时使用）</p>
 */
class ModifyAgentConfigSettingRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>日志采集类型列表，可选值：tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
     */
    public $LogCollectSettings;

    /**
     * @var string <p>资产选择方式：all-全部付费资产，tag-按标签选择，direct-直接选择</p>
     */
    public $AssetSelectionType;

    /**
     * @var array <p>按标签选择时的标签ID数组（AssetSelectionType=tag时使用）</p>
     */
    public $TagIds;

    /**
     * @var array <p>直接选择的主机instance_id列表（AssetSelectionType=direct时使用）</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>排除的主机instance_id列表（AssetSelectionType=all时使用）</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $LogCollectSettings <p>日志采集类型列表，可选值：tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
     * @param string $AssetSelectionType <p>资产选择方式：all-全部付费资产，tag-按标签选择，direct-直接选择</p>
     * @param array $TagIds <p>按标签选择时的标签ID数组（AssetSelectionType=tag时使用）</p>
     * @param array $InstanceIDs <p>直接选择的主机instance_id列表（AssetSelectionType=direct时使用）</p>
     * @param array $ExcludeInstanceIDs <p>排除的主机instance_id列表（AssetSelectionType=all时使用）</p>
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

        if (array_key_exists("LogCollectSettings",$param) and $param["LogCollectSettings"] !== null) {
            $this->LogCollectSettings = $param["LogCollectSettings"];
        }

        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }
    }
}
