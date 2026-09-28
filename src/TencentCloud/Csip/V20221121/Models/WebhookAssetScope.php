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
 * 通知资产范围
 *
 * @method integer getAssetRange() 获取<p>资产范围类型（对齐 NotifyAssetRange）<br>枚举值：<br>1：全部主机（可剔除）<br>2：自选主机<br>3：按标签选择</p>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围类型（对齐 NotifyAssetRange）<br>枚举值：<br>1：全部主机（可剔除）<br>2：自选主机<br>3：按标签选择</p>
 * @method array getInstanceIds() 获取<p>选中的主机 quuid 列表，仅 AssetRange=2 生效</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>选中的主机 quuid 列表，仅 AssetRange=2 生效</p>
 * @method array getExcludedInstanceIds() 获取<p>排除的主机 quuid 列表，仅 AssetRange=1 生效</p>
 * @method void setExcludedInstanceIds(array $ExcludedInstanceIds) 设置<p>排除的主机 quuid 列表，仅 AssetRange=1 生效</p>
 * @method array getTagIds() 获取<p>安全中心标签 ID 列表，仅 AssetRange=3 生效</p>
 * @method void setTagIds(array $TagIds) 设置<p>安全中心标签 ID 列表，仅 AssetRange=3 生效</p>
 * @method array getCloudTags() 获取<p>腾讯云标签列表，仅 AssetRange=3 生效<br>入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空</p>
 * @method void setCloudTags(array $CloudTags) 设置<p>腾讯云标签列表，仅 AssetRange=3 生效<br>入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空</p>
 * @method array getProjectIds() 获取<p>项目ID</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>项目ID</p>
 */
class WebhookAssetScope extends AbstractModel
{
    /**
     * @var integer <p>资产范围类型（对齐 NotifyAssetRange）<br>枚举值：<br>1：全部主机（可剔除）<br>2：自选主机<br>3：按标签选择</p>
     */
    public $AssetRange;

    /**
     * @var array <p>选中的主机 quuid 列表，仅 AssetRange=2 生效</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>排除的主机 quuid 列表，仅 AssetRange=1 生效</p>
     */
    public $ExcludedInstanceIds;

    /**
     * @var array <p>安全中心标签 ID 列表，仅 AssetRange=3 生效</p>
     */
    public $TagIds;

    /**
     * @var array <p>腾讯云标签列表，仅 AssetRange=3 生效<br>入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空</p>
     */
    public $CloudTags;

    /**
     * @var array <p>项目ID</p>
     */
    public $ProjectIds;

    /**
     * @param integer $AssetRange <p>资产范围类型（对齐 NotifyAssetRange）<br>枚举值：<br>1：全部主机（可剔除）<br>2：自选主机<br>3：按标签选择</p>
     * @param array $InstanceIds <p>选中的主机 quuid 列表，仅 AssetRange=2 生效</p>
     * @param array $ExcludedInstanceIds <p>排除的主机 quuid 列表，仅 AssetRange=1 生效</p>
     * @param array $TagIds <p>安全中心标签 ID 列表，仅 AssetRange=3 生效</p>
     * @param array $CloudTags <p>腾讯云标签列表，仅 AssetRange=3 生效<br>入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空</p>
     * @param array $ProjectIds <p>项目ID</p>
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
        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ExcludedInstanceIds",$param) and $param["ExcludedInstanceIds"] !== null) {
            $this->ExcludedInstanceIds = $param["ExcludedInstanceIds"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = $param["CloudTags"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
