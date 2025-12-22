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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除成功的版本信息
 *
 * @method SimpleVersion getVersion() 获取版本简化信息
 * @method void setVersion(SimpleVersion $Version) 设置版本简化信息
 * @method string getRequestId() 获取删除版本的 RequestId
 * @method void setRequestId(string $RequestId) 设置删除版本的 RequestId
 * @method string getResult() 获取删除版本结果
 * @method void setResult(string $Result) 设置删除版本结果
 */
class SuccessDeleteVersions extends AbstractModel
{
    /**
     * @var SimpleVersion 版本简化信息
     */
    public $Version;

    /**
     * @var string 删除版本的 RequestId
     */
    public $RequestId;

    /**
     * @var string 删除版本结果
     */
    public $Result;

    /**
     * @param SimpleVersion $Version 版本简化信息
     * @param string $RequestId 删除版本的 RequestId
     * @param string $Result 删除版本结果
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new SimpleVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
