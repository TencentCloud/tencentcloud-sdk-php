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
 * 通知资产范围配置项
 *
 * @method string getModule() 获取<p>模块名</p>
 * @method void setModule(string $Module) 设置<p>模块名</p>
 * @method string getSubModule() 获取<p>子模块</p>
 * @method void setSubModule(string $SubModule) 设置<p>子模块</p>
 * @method integer getAssetRange() 获取<p>资产范围</p><p>枚举值：</p><ul><li>0： 无含义</li><li>1： 全部</li><li>2： 自选</li><li>3： 按标签</li></ul>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围</p><p>枚举值：</p><ul><li>0： 无含义</li><li>1： 全部</li><li>2： 自选</li><li>3： 按标签</li></ul>
 * @method array getInstanceIds() 获取<p>选中的实例ID</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>选中的实例ID</p>
 * @method array getExcludedInstanceIds() 获取<p>剔除的实例ID</p>
 * @method void setExcludedInstanceIds(array $ExcludedInstanceIds) 设置<p>剔除的实例ID</p>
 * @method array getTagIds() 获取<p>标签ID</p>
 * @method void setTagIds(array $TagIds) 设置<p>标签ID</p>
 * @method array getCloudTags() 获取<p>云标签</p>
 * @method void setCloudTags(array $CloudTags) 设置<p>云标签</p>
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 */
class NotifyAssetConfigItem extends AbstractModel
{
    /**
     * @var string <p>模块名</p>
     */
    public $Module;

    /**
     * @var string <p>子模块</p>
     */
    public $SubModule;

    /**
     * @var integer <p>资产范围</p><p>枚举值：</p><ul><li>0： 无含义</li><li>1： 全部</li><li>2： 自选</li><li>3： 按标签</li></ul>
     */
    public $AssetRange;

    /**
     * @var array <p>选中的实例ID</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>剔除的实例ID</p>
     */
    public $ExcludedInstanceIds;

    /**
     * @var array <p>标签ID</p>
     */
    public $TagIds;

    /**
     * @var array <p>云标签</p>
     */
    public $CloudTags;

    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @param string $Module <p>模块名</p>
     * @param string $SubModule <p>子模块</p>
     * @param integer $AssetRange <p>资产范围</p><p>枚举值：</p><ul><li>0： 无含义</li><li>1： 全部</li><li>2： 自选</li><li>3： 按标签</li></ul>
     * @param array $InstanceIds <p>选中的实例ID</p>
     * @param array $ExcludedInstanceIds <p>剔除的实例ID</p>
     * @param array $TagIds <p>标签ID</p>
     * @param array $CloudTags <p>云标签</p>
     * @param integer $TotalCount <p>总数</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("SubModule",$param) and $param["SubModule"] !== null) {
            $this->SubModule = $param["SubModule"];
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

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
