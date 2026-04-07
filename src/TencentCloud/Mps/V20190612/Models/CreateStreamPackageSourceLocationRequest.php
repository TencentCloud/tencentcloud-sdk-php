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
 * CreateStreamPackageSourceLocation请求参数结构体
 *
 * @method string getName() 获取SourceLocation名称。
 * @method void setName(string $Name) 设置SourceLocation名称。
 * @method string getBaseUrl() 获取基准URL。
 * @method void setBaseUrl(string $BaseUrl) 设置基准URL。
 * @method boolean getSegmentDeliverEnable() 获取是否开启补片。
 * @method void setSegmentDeliverEnable(boolean $SegmentDeliverEnable) 设置是否开启补片。
 * @method SegmentDeliverInfo getSegmentDeliverConf() 获取补片配置。
 * @method void setSegmentDeliverConf(SegmentDeliverInfo $SegmentDeliverConf) 设置补片配置。
 * @method boolean getSegmentDeliverUsePackageEnable() 获取是否开启package分发分片，默认开启。
 * @method void setSegmentDeliverUsePackageEnable(boolean $SegmentDeliverUsePackageEnable) 设置是否开启package分发分片，默认开启。
 */
class CreateStreamPackageSourceLocationRequest extends AbstractModel
{
    /**
     * @var string SourceLocation名称。
     */
    public $Name;

    /**
     * @var string 基准URL。
     */
    public $BaseUrl;

    /**
     * @var boolean 是否开启补片。
     */
    public $SegmentDeliverEnable;

    /**
     * @var SegmentDeliverInfo 补片配置。
     */
    public $SegmentDeliverConf;

    /**
     * @var boolean 是否开启package分发分片，默认开启。
     */
    public $SegmentDeliverUsePackageEnable;

    /**
     * @param string $Name SourceLocation名称。
     * @param string $BaseUrl 基准URL。
     * @param boolean $SegmentDeliverEnable 是否开启补片。
     * @param SegmentDeliverInfo $SegmentDeliverConf 补片配置。
     * @param boolean $SegmentDeliverUsePackageEnable 是否开启package分发分片，默认开启。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("SegmentDeliverEnable",$param) and $param["SegmentDeliverEnable"] !== null) {
            $this->SegmentDeliverEnable = $param["SegmentDeliverEnable"];
        }

        if (array_key_exists("SegmentDeliverConf",$param) and $param["SegmentDeliverConf"] !== null) {
            $this->SegmentDeliverConf = new SegmentDeliverInfo();
            $this->SegmentDeliverConf->deserialize($param["SegmentDeliverConf"]);
        }

        if (array_key_exists("SegmentDeliverUsePackageEnable",$param) and $param["SegmentDeliverUsePackageEnable"] !== null) {
            $this->SegmentDeliverUsePackageEnable = $param["SegmentDeliverUsePackageEnable"];
        }
    }
}
