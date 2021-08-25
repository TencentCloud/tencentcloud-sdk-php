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
 * 返回单曲页面歌曲是否在售状态
 *
 * @method string getMusicId() 获取歌曲Id
 * @method void setMusicId(string $MusicId) 设置歌曲Id
 * @method integer getSaleStatus() 获取在售状态,0为在售，1为临时下架，2为永久下架
 * @method void setSaleStatus(integer $SaleStatus) 设置在售状态,0为在售，1为临时下架，2为永久下架
 */
class MusicStatus extends AbstractModel
{
    /**
     * @var string 歌曲Id
     */
    public $MusicId;

    /**
     * @var integer 在售状态,0为在售，1为临时下架，2为永久下架
     */
    public $SaleStatus;

    /**
     * @param string $MusicId 歌曲Id
     * @param integer $SaleStatus 在售状态,0为在售，1为临时下架，2为永久下架
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
        if (array_key_exists("MusicId",$param) and $param["MusicId"] !== null) {
            $this->MusicId = $param["MusicId"];
        }

        if (array_key_exists("SaleStatus",$param) and $param["SaleStatus"] !== null) {
            $this->SaleStatus = $param["SaleStatus"];
        }
    }
}
