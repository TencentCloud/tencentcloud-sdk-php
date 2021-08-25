<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMusicSaleStatus请求参数结构体
 *
 * @method array getMusicIds() 获取歌曲Id集合，可传单个，也可传多个，上线查询单次50个
 * @method void setMusicIds(array $MusicIds) 设置歌曲Id集合，可传单个，也可传多个，上线查询单次50个
 * @method integer getPurchaseType() 获取查询哪个渠道的数据，1为曲库包，2为单曲
 * @method void setPurchaseType(integer $PurchaseType) 设置查询哪个渠道的数据，1为曲库包，2为单曲
 */
class DescribeMusicSaleStatusRequest extends AbstractModel
{
    /**
     * @var array 歌曲Id集合，可传单个，也可传多个，上线查询单次50个
     */
    public $MusicIds;

    /**
     * @var integer 查询哪个渠道的数据，1为曲库包，2为单曲
     */
    public $PurchaseType;

    /**
     * @param array $MusicIds 歌曲Id集合，可传单个，也可传多个，上线查询单次50个
     * @param integer $PurchaseType 查询哪个渠道的数据，1为曲库包，2为单曲
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
        if (array_key_exists("MusicIds",$param) and $param["MusicIds"] !== null) {
            $this->MusicIds = $param["MusicIds"];
        }

        if (array_key_exists("PurchaseType",$param) and $param["PurchaseType"] !== null) {
            $this->PurchaseType = $param["PurchaseType"];
        }
    }
}
