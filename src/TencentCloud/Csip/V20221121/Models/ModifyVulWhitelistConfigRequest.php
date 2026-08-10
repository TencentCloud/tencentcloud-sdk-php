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
 * ModifyVulWhitelistConfig请求参数结构体
 *
 * @method integer getId() 获取<p>id列表</p>
 * @method void setId(integer $Id) 设置<p>id列表</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getAssetRange() 获取<p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选剔除资产</li></ul>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选剔除资产</li></ul>
 * @method array getAssetList() 获取<p>资产列表（Quuid列表）</p>
 * @method void setAssetList(array $AssetList) 设置<p>资产列表（Quuid列表）</p>
 */
class ModifyVulWhitelistConfigRequest extends AbstractModel
{
    /**
     * @var integer <p>id列表</p>
     */
    public $Id;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选剔除资产</li></ul>
     */
    public $AssetRange;

    /**
     * @var array <p>资产列表（Quuid列表）</p>
     */
    public $AssetList;

    /**
     * @param integer $Id <p>id列表</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Remark <p>备注</p>
     * @param integer $AssetRange <p>资产范围</p><p>枚举值：</p><ul><li>0： 全部资产</li><li>1： 自选资产</li><li>2： 全选剔除资产</li></ul>
     * @param array $AssetList <p>资产列表（Quuid列表）</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }
    }
}
