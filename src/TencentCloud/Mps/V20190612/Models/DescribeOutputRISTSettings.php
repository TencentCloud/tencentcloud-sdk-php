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
 * 查询输出的RIST拉流配置信息。
 *
 * @method string getMode() 获取RIST模式，可选[LISTENER|CALLER]，默认为LISTENER。
 * @method void setMode(string $Mode) 设置RIST模式，可选[LISTENER|CALLER]，默认为LISTENER。
 * @method string getProfile() 获取RIST配置方案，可选[MAIN|SIMPLE]，默认为MAIN。
 * @method void setProfile(string $Profile) 设置RIST配置方案，可选[MAIN|SIMPLE]，默认为MAIN。
 * @method integer getBuffer() 获取RIST缓冲区大小，单位为毫秒。最小值为50毫秒，最大值为5000毫秒。默认值：120
 * @method void setBuffer(integer $Buffer) 设置RIST缓冲区大小，单位为毫秒。最小值为50毫秒，最大值为5000毫秒。默认值：120
 * @method array getSourceAddresses() 获取服务器监听地址，RIST模式为LISTENER时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceAddresses(array $SourceAddresses) 设置服务器监听地址，RIST模式为LISTENER时使用。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeOutputRISTSettings extends AbstractModel
{
    /**
     * @var string RIST模式，可选[LISTENER|CALLER]，默认为LISTENER。
     */
    public $Mode;

    /**
     * @var string RIST配置方案，可选[MAIN|SIMPLE]，默认为MAIN。
     */
    public $Profile;

    /**
     * @var integer RIST缓冲区大小，单位为毫秒。最小值为50毫秒，最大值为5000毫秒。默认值：120
     */
    public $Buffer;

    /**
     * @var array 服务器监听地址，RIST模式为LISTENER时使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceAddresses;

    /**
     * @param string $Mode RIST模式，可选[LISTENER|CALLER]，默认为LISTENER。
     * @param string $Profile RIST配置方案，可选[MAIN|SIMPLE]，默认为MAIN。
     * @param integer $Buffer RIST缓冲区大小，单位为毫秒。最小值为50毫秒，最大值为5000毫秒。默认值：120
     * @param array $SourceAddresses 服务器监听地址，RIST模式为LISTENER时使用。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Buffer",$param) and $param["Buffer"] !== null) {
            $this->Buffer = $param["Buffer"];
        }

        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new OutputRISTSourceAddressResp();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }
    }
}
