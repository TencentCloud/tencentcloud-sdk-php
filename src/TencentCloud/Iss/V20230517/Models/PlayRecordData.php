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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本地录像播放url数据结构
 *
 * @method string getFlv() 获取<p>flv录像播放地址</p>
 * @method void setFlv(string $Flv) 设置<p>flv录像播放地址</p>
 * @method string getFMp4() 获取<p>fmp4录像播放地址</p>
 * @method void setFMp4(string $FMp4) 设置<p>fmp4录像播放地址</p>
 */
class PlayRecordData extends AbstractModel
{
    /**
     * @var string <p>flv录像播放地址</p>
     */
    public $Flv;

    /**
     * @var string <p>fmp4录像播放地址</p>
     */
    public $FMp4;

    /**
     * @param string $Flv <p>flv录像播放地址</p>
     * @param string $FMp4 <p>fmp4录像播放地址</p>
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
        if (array_key_exists("Flv",$param) and $param["Flv"] !== null) {
            $this->Flv = $param["Flv"];
        }

        if (array_key_exists("FMp4",$param) and $param["FMp4"] !== null) {
            $this->FMp4 = $param["FMp4"];
        }
    }
}
