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
 * 曲库包已下架歌曲详细信息
 *
 * @method string getItemId() 获取歌曲Id
 * @method void setItemId(string $ItemId) 设置歌曲Id
 * @method string getMusicName() 获取歌曲名称
 * @method void setMusicName(string $MusicName) 设置歌曲名称
 * @method string getOffRemark() 获取不可用原因
 * @method void setOffRemark(string $OffRemark) 设置不可用原因
 * @method string getOffTime() 获取不可用时间
 * @method void setOffTime(string $OffTime) 设置不可用时间
 */
class OfflineMusicDetail extends AbstractModel
{
    /**
     * @var string 歌曲Id
     */
    public $ItemId;

    /**
     * @var string 歌曲名称
     */
    public $MusicName;

    /**
     * @var string 不可用原因
     */
    public $OffRemark;

    /**
     * @var string 不可用时间
     */
    public $OffTime;

    /**
     * @param string $ItemId 歌曲Id
     * @param string $MusicName 歌曲名称
     * @param string $OffRemark 不可用原因
     * @param string $OffTime 不可用时间
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("MusicName",$param) and $param["MusicName"] !== null) {
            $this->MusicName = $param["MusicName"];
        }

        if (array_key_exists("OffRemark",$param) and $param["OffRemark"] !== null) {
            $this->OffRemark = $param["OffRemark"];
        }

        if (array_key_exists("OffTime",$param) and $param["OffTime"] !== null) {
            $this->OffTime = $param["OffTime"];
        }
    }
}
