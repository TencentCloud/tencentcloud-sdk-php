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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSLogsets请求参数结构体
 *
 * @method string getCLSRegion() 获取CLS 日志集所属的地域，取值有：
ap-guangzhou：广州；
ap-singapore：新加坡。
 * @method void setCLSRegion(string $CLSRegion) 设置CLS 日志集所属的地域，取值有：
ap-guangzhou：广州；
ap-singapore：新加坡。
 */
class DescribeCLSLogsetsRequest extends AbstractModel
{
    /**
     * @var string CLS 日志集所属的地域，取值有：
ap-guangzhou：广州；
ap-singapore：新加坡。
     */
    public $CLSRegion;

    /**
     * @param string $CLSRegion CLS 日志集所属的地域，取值有：
ap-guangzhou：广州；
ap-singapore：新加坡。
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
        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }
    }
}
