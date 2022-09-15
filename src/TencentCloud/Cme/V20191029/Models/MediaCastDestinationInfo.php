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
 * 点播转直播输出信息。
 *
 * @method integer getIndex() 获取输出源序号。由系统进行分配。
 * @method void setIndex(integer $Index) 设置输出源序号。由系统进行分配。
 * @method string getName() 获取输出源的名称。
 * @method void setName(string $Name) 设置输出源的名称。
 * @method string getPushUrl() 获取输出直播流地址。支持的直播流类型为 RTMP 和 SRT。
 * @method void setPushUrl(string $PushUrl) 设置输出直播流地址。支持的直播流类型为 RTMP 和 SRT。
 */
class MediaCastDestinationInfo extends AbstractModel
{
    /**
     * @var integer 输出源序号。由系统进行分配。
     */
    public $Index;

    /**
     * @var string 输出源的名称。
     */
    public $Name;

    /**
     * @var string 输出直播流地址。支持的直播流类型为 RTMP 和 SRT。
     */
    public $PushUrl;

    /**
     * @param integer $Index 输出源序号。由系统进行分配。
     * @param string $Name 输出源的名称。
     * @param string $PushUrl 输出直播流地址。支持的直播流类型为 RTMP 和 SRT。
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PushUrl",$param) and $param["PushUrl"] !== null) {
            $this->PushUrl = $param["PushUrl"];
        }
    }
}
