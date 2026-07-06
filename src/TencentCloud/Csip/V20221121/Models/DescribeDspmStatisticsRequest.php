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
 * DescribeDspmStatistics请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getAssetType() 获取<p>按照资产类型过滤</p><p>枚举值：</p><ul><li>cdb： cdb</li><li>mariadb： mariadb</li><li>cynosdb： cynosdb</li></ul><p>默认值：默认值为空，即不按照资产类型过滤，返回所有资产信息</p>
 * @method void setAssetType(array $AssetType) 设置<p>按照资产类型过滤</p><p>枚举值：</p><ul><li>cdb： cdb</li><li>mariadb： mariadb</li><li>cynosdb： cynosdb</li></ul><p>默认值：默认值为空，即不按照资产类型过滤，返回所有资产信息</p>
 */
class DescribeDspmStatisticsRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>按照资产类型过滤</p><p>枚举值：</p><ul><li>cdb： cdb</li><li>mariadb： mariadb</li><li>cynosdb： cynosdb</li></ul><p>默认值：默认值为空，即不按照资产类型过滤，返回所有资产信息</p>
     */
    public $AssetType;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $AssetType <p>按照资产类型过滤</p><p>枚举值：</p><ul><li>cdb： cdb</li><li>mariadb： mariadb</li><li>cynosdb： cynosdb</li></ul><p>默认值：默认值为空，即不按照资产类型过滤，返回所有资产信息</p>
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
