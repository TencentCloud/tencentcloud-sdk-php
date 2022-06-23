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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播文件播放信息，包含当前在播地址和该地址已播时长 。
 *
 * @method string getUrl() 获取当前正在播放文件 Url 。
 * @method void setUrl(string $Url) 设置当前正在播放文件 Url 。
 * @method float getTimeOffset() 获取点播文件已播放时长，单位：秒。
 * @method void setTimeOffset(float $TimeOffset) 设置点播文件已播放时长，单位：秒。
 */
class VodPullInputPlayInfo extends AbstractModel
{
    /**
     * @var string 当前正在播放文件 Url 。
     */
    public $Url;

    /**
     * @var float 点播文件已播放时长，单位：秒。
     */
    public $TimeOffset;

    /**
     * @param string $Url 当前正在播放文件 Url 。
     * @param float $TimeOffset 点播文件已播放时长，单位：秒。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }
    }
}
