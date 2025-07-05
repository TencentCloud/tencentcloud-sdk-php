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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分层存储详细信息
 *
 * @method integer getTieringSizeInBytes() 获取低频存储容量
 * @method void setTieringSizeInBytes(integer $TieringSizeInBytes) 设置低频存储容量
 * @method integer getSecondaryTieringSizeInBytes() 获取冷存储容量
 * @method void setSecondaryTieringSizeInBytes(integer $SecondaryTieringSizeInBytes) 设置冷存储容量
 */
class TieringDetailInfo extends AbstractModel
{
    /**
     * @var integer 低频存储容量
     */
    public $TieringSizeInBytes;

    /**
     * @var integer 冷存储容量
     */
    public $SecondaryTieringSizeInBytes;

    /**
     * @param integer $TieringSizeInBytes 低频存储容量
     * @param integer $SecondaryTieringSizeInBytes 冷存储容量
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
        if (array_key_exists("TieringSizeInBytes",$param) and $param["TieringSizeInBytes"] !== null) {
            $this->TieringSizeInBytes = $param["TieringSizeInBytes"];
        }

        if (array_key_exists("SecondaryTieringSizeInBytes",$param) and $param["SecondaryTieringSizeInBytes"] !== null) {
            $this->SecondaryTieringSizeInBytes = $param["SecondaryTieringSizeInBytes"];
        }
    }
}
