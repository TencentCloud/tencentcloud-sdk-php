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
 * 标签查询结果项
 *
 * @method string getAlertId() 获取<p>告警ID</p>
 * @method void setAlertId(string $AlertId) 设置<p>告警ID</p>
 * @method array getCloudTags() 获取<p>腾讯云标签</p>
 * @method void setCloudTags(array $CloudTags) 设置<p>腾讯云标签</p>
 * @method array getCSIPTags() 获取<p>安全中心标签</p>
 * @method void setCSIPTags(array $CSIPTags) 设置<p>安全中心标签</p>
 * @method array getThreatTags() 获取<p>情报标签</p>
 * @method void setThreatTags(array $ThreatTags) 设置<p>情报标签</p>
 * @method IPIntelInfo getIPIntel() 获取<p>IP情报信息</p>
 * @method void setIPIntel(IPIntelInfo $IPIntel) 设置<p>IP情报信息</p>
 */
class EdrAlertTagItem extends AbstractModel
{
    /**
     * @var string <p>告警ID</p>
     */
    public $AlertId;

    /**
     * @var array <p>腾讯云标签</p>
     */
    public $CloudTags;

    /**
     * @var array <p>安全中心标签</p>
     */
    public $CSIPTags;

    /**
     * @var array <p>情报标签</p>
     */
    public $ThreatTags;

    /**
     * @var IPIntelInfo <p>IP情报信息</p>
     */
    public $IPIntel;

    /**
     * @param string $AlertId <p>告警ID</p>
     * @param array $CloudTags <p>腾讯云标签</p>
     * @param array $CSIPTags <p>安全中心标签</p>
     * @param array $ThreatTags <p>情报标签</p>
     * @param IPIntelInfo $IPIntel <p>IP情报信息</p>
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
        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("CSIPTags",$param) and $param["CSIPTags"] !== null) {
            $this->CSIPTags = [];
            foreach ($param["CSIPTags"] as $key => $value){
                $obj = new CSIPTag();
                $obj->deserialize($value);
                array_push($this->CSIPTags, $obj);
            }
        }

        if (array_key_exists("ThreatTags",$param) and $param["ThreatTags"] !== null) {
            $this->ThreatTags = $param["ThreatTags"];
        }

        if (array_key_exists("IPIntel",$param) and $param["IPIntel"] !== null) {
            $this->IPIntel = new IPIntelInfo();
            $this->IPIntel->deserialize($param["IPIntel"]);
        }
    }
}
