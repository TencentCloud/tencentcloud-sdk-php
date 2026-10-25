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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMiniProgramReplayPack请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getBundleHash() 获取<p>回放包hash（sha256前16位hex）</p>
 * @method void setBundleHash(string $BundleHash) 设置<p>回放包hash（sha256前16位hex）</p>
 */
class DescribeMiniProgramReplayPackRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>回放包hash（sha256前16位hex）</p>
     */
    public $BundleHash;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $BundleHash <p>回放包hash（sha256前16位hex）</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BundleHash",$param) and $param["BundleHash"] !== null) {
            $this->BundleHash = $param["BundleHash"];
        }
    }
}
