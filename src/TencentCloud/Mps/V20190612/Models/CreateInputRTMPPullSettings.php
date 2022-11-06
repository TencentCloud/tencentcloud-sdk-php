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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建的输入RTMP拉流的配置信息。
 *
 * @method array getSourceAddresses() 获取RTMP源站的源站地址，有且只能有一个。
 * @method void setSourceAddresses(array $SourceAddresses) 设置RTMP源站的源站地址，有且只能有一个。
 */
class CreateInputRTMPPullSettings extends AbstractModel
{
    /**
     * @var array RTMP源站的源站地址，有且只能有一个。
     */
    public $SourceAddresses;

    /**
     * @param array $SourceAddresses RTMP源站的源站地址，有且只能有一个。
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
        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new RTMPPullSourceAddress();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }
    }
}
