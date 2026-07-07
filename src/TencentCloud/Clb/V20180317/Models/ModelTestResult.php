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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BYOK健康探测结果
 *
 * @method string getModel() 获取<p>模型</p>
 * @method void setModel(string $Model) 设置<p>模型</p>
 * @method string getStatus() 获取<p>健康状况</p><p>枚举值：</p><ul><li>Success： 健康</li><li>Error： 不健康</li></ul>
 * @method void setStatus(string $Status) 设置<p>健康状况</p><p>枚举值：</p><ul><li>Success： 健康</li><li>Error： 不健康</li></ul>
 * @method ProviderTestConnectionErrorInfo getErrorInfo() 获取<p>错误信息</p>
 * @method void setErrorInfo(ProviderTestConnectionErrorInfo $ErrorInfo) 设置<p>错误信息</p>
 * @method TestConnectionRequestInfo getTestConnectionRequest() 获取<p>探测请求</p>
 * @method void setTestConnectionRequest(TestConnectionRequestInfo $TestConnectionRequest) 设置<p>探测请求</p>
 */
class ModelTestResult extends AbstractModel
{
    /**
     * @var string <p>模型</p>
     */
    public $Model;

    /**
     * @var string <p>健康状况</p><p>枚举值：</p><ul><li>Success： 健康</li><li>Error： 不健康</li></ul>
     */
    public $Status;

    /**
     * @var ProviderTestConnectionErrorInfo <p>错误信息</p>
     */
    public $ErrorInfo;

    /**
     * @var TestConnectionRequestInfo <p>探测请求</p>
     */
    public $TestConnectionRequest;

    /**
     * @param string $Model <p>模型</p>
     * @param string $Status <p>健康状况</p><p>枚举值：</p><ul><li>Success： 健康</li><li>Error： 不健康</li></ul>
     * @param ProviderTestConnectionErrorInfo $ErrorInfo <p>错误信息</p>
     * @param TestConnectionRequestInfo $TestConnectionRequest <p>探测请求</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = new ProviderTestConnectionErrorInfo();
            $this->ErrorInfo->deserialize($param["ErrorInfo"]);
        }

        if (array_key_exists("TestConnectionRequest",$param) and $param["TestConnectionRequest"] !== null) {
            $this->TestConnectionRequest = new TestConnectionRequestInfo();
            $this->TestConnectionRequest->deserialize($param["TestConnectionRequest"]);
        }
    }
}
