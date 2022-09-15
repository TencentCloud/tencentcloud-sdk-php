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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBPFakeURLs返回参数结构体
 *
 * @method array getFakeURLInfos() 获取xxx
 * @method void setFakeURLInfos(array $FakeURLInfos) 设置xxx
 * @method integer getTotalCount() 获取xxx
 * @method void setTotalCount(integer $TotalCount) 设置xxx
 * @method string getExportURL() 获取xxx
 * @method void setExportURL(string $ExportURL) 设置xxx
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBPFakeURLsResponse extends AbstractModel
{
    /**
     * @var array xxx
     */
    public $FakeURLInfos;

    /**
     * @var integer xxx
     */
    public $TotalCount;

    /**
     * @var string xxx
     */
    public $ExportURL;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FakeURLInfos xxx
     * @param integer $TotalCount xxx
     * @param string $ExportURL xxx
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FakeURLInfos",$param) and $param["FakeURLInfos"] !== null) {
            $this->FakeURLInfos = [];
            foreach ($param["FakeURLInfos"] as $key => $value){
                $obj = new FakeURLInfo();
                $obj->deserialize($value);
                array_push($this->FakeURLInfos, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ExportURL",$param) and $param["ExportURL"] !== null) {
            $this->ExportURL = $param["ExportURL"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
