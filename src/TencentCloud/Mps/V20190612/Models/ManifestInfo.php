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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线性组装频道配置。
 *
 * @method integer getWindows() 获取单位秒。
 * @method void setWindows(integer $Windows) 设置单位秒。
 * @method string getAdMarkupType() 获取打到output广告标签的格式，可选Date Range和Enhanced SCTE-35。
 * @method void setAdMarkupType(string $AdMarkupType) 设置打到output广告标签的格式，可选Date Range和Enhanced SCTE-35。
 */
class ManifestInfo extends AbstractModel
{
    /**
     * @var integer 单位秒。
     */
    public $Windows;

    /**
     * @var string 打到output广告标签的格式，可选Date Range和Enhanced SCTE-35。
     */
    public $AdMarkupType;

    /**
     * @param integer $Windows 单位秒。
     * @param string $AdMarkupType 打到output广告标签的格式，可选Date Range和Enhanced SCTE-35。
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
        if (array_key_exists("Windows",$param) and $param["Windows"] !== null) {
            $this->Windows = $param["Windows"];
        }

        if (array_key_exists("AdMarkupType",$param) and $param["AdMarkupType"] !== null) {
            $this->AdMarkupType = $param["AdMarkupType"];
        }
    }
}
