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
 * @method integer getAssetRange() 获取资产范围类型（对齐 NotifyAssetRange）
枚举值：
1：全部主机（可剔除）
2：自选主机
3：按标签选择
 * @method void setAssetRange(integer $AssetRange) 设置资产范围类型（对齐 NotifyAssetRange）
枚举值：
1：全部主机（可剔除）
2：自选主机
3：按标签选择
 * @method array getInstanceIds() 获取选中的主机 quuid 列表，仅 AssetRange=2 生效
 * @method void setInstanceIds(array $InstanceIds) 设置选中的主机 quuid 列表，仅 AssetRange=2 生效
 * @method array getExcludedInstanceIds() 获取排除的主机 quuid 列表，仅 AssetRange=1 生效
 * @method void setExcludedInstanceIds(array $ExcludedInstanceIds) 设置排除的主机 quuid 列表，仅 AssetRange=1 生效
 * @method array getTagIds() 获取安全中心标签 ID 列表，仅 AssetRange=3 生效
 * @method void setTagIds(array $TagIds) 设置安全中心标签 ID 列表，仅 AssetRange=3 生效
 * @method array getCloudTags() 获取腾讯云标签列表，仅 AssetRange=3 生效
入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空
 * @method void setCloudTags(array $CloudTags) 设置腾讯云标签列表，仅 AssetRange=3 生效
入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空
 */
class WebhookAssetScope extends AbstractModel
{
    /**
     * @var integer 资产范围类型（对齐 NotifyAssetRange）
枚举值：
1：全部主机（可剔除）
2：自选主机
3：按标签选择
     */
    public $AssetRange;

    /**
     * @var array 选中的主机 quuid 列表，仅 AssetRange=2 生效
     */
    public $InstanceIds;

    /**
     * @var array 排除的主机 quuid 列表，仅 AssetRange=1 生效
     */
    public $ExcludedInstanceIds;

    /**
     * @var array 安全中心标签 ID 列表，仅 AssetRange=3 生效
     */
    public $TagIds;

    /**
     * @var array 腾讯云标签列表，仅 AssetRange=3 生效
入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空
     */
    public $CloudTags;

    /**
     * @param integer $AssetRange 资产范围类型（对齐 NotifyAssetRange）
枚举值：
1：全部主机（可剔除）
2：自选主机
3：按标签选择
     * @param array $InstanceIds 选中的主机 quuid 列表，仅 AssetRange=2 生效
     * @param array $ExcludedInstanceIds 排除的主机 quuid 列表，仅 AssetRange=1 生效
     * @param array $TagIds 安全中心标签 ID 列表，仅 AssetRange=3 生效
     * @param array $CloudTags 腾讯云标签列表，仅 AssetRange=3 生效
入参限制：AssetRange=3 时 TagIds + CloudTags 不能同时为空
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
    }
}
