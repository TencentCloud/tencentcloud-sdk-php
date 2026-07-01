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
 * IP威胁情报信息（通过TIX IPAnalysis接口获取）
 *
 * @method array getTags() 获取<p>情报标签（如常规木马、漏洞软件、窃密木马）</p>
 * @method void setTags(array $Tags) 设置<p>情报标签（如常规木马、漏洞软件、窃密木马）</p>
 * @method string getBasis() 获取<p>研判依据</p>
 * @method void setBasis(string $Basis) 设置<p>研判依据</p>
 * @method string getISP() 获取<p>所属运营商</p>
 * @method void setISP(string $ISP) 设置<p>所属运营商</p>
 * @method string getLocation() 获取<p>地理位置</p>
 * @method void setLocation(string $Location) 设置<p>地理位置</p>
 * @method string getCharacteristic() 获取<p>家族团伙</p>
 * @method void setCharacteristic(string $Characteristic) 设置<p>家族团伙</p>
 * @method string getPurpose() 获取<p>IP画像</p>
 * @method void setPurpose(string $Purpose) 设置<p>IP画像</p>
 * @method array getReferer() 获取<p>反查域名列表</p>
 * @method void setReferer(array $Referer) 设置<p>反查域名列表</p>
 */
class IPIntelInfo extends AbstractModel
{
    /**
     * @var array <p>情报标签（如常规木马、漏洞软件、窃密木马）</p>
     */
    public $Tags;

    /**
     * @var string <p>研判依据</p>
     */
    public $Basis;

    /**
     * @var string <p>所属运营商</p>
     */
    public $ISP;

    /**
     * @var string <p>地理位置</p>
     */
    public $Location;

    /**
     * @var string <p>家族团伙</p>
     */
    public $Characteristic;

    /**
     * @var string <p>IP画像</p>
     */
    public $Purpose;

    /**
     * @var array <p>反查域名列表</p>
     */
    public $Referer;

    /**
     * @param array $Tags <p>情报标签（如常规木马、漏洞软件、窃密木马）</p>
     * @param string $Basis <p>研判依据</p>
     * @param string $ISP <p>所属运营商</p>
     * @param string $Location <p>地理位置</p>
     * @param string $Characteristic <p>家族团伙</p>
     * @param string $Purpose <p>IP画像</p>
     * @param array $Referer <p>反查域名列表</p>
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Basis",$param) and $param["Basis"] !== null) {
            $this->Basis = $param["Basis"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Characteristic",$param) and $param["Characteristic"] !== null) {
            $this->Characteristic = $param["Characteristic"];
        }

        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = [];
            foreach ($param["Referer"] as $key => $value){
                $obj = new DomainInfo();
                $obj->deserialize($value);
                array_push($this->Referer, $obj);
            }
        }
    }
}
