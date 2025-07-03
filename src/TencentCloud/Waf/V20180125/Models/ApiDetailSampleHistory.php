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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api历史样例返回结构体
 *
 * @method string getSampleNme() 获取样例名称
 * @method void setSampleNme(string $SampleNme) 设置样例名称
 * @method string getRepLog() 获取请求样例
 * @method void setRepLog(string $RepLog) 设置请求样例
 * @method string getRspLog() 获取响应样例
 * @method void setRspLog(string $RspLog) 设置响应样例
 */
class ApiDetailSampleHistory extends AbstractModel
{
    /**
     * @var string 样例名称
     */
    public $SampleNme;

    /**
     * @var string 请求样例
     */
    public $RepLog;

    /**
     * @var string 响应样例
     */
    public $RspLog;

    /**
     * @param string $SampleNme 样例名称
     * @param string $RepLog 请求样例
     * @param string $RspLog 响应样例
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
        if (array_key_exists("SampleNme",$param) and $param["SampleNme"] !== null) {
            $this->SampleNme = $param["SampleNme"];
        }

        if (array_key_exists("RepLog",$param) and $param["RepLog"] !== null) {
            $this->RepLog = $param["RepLog"];
        }

        if (array_key_exists("RspLog",$param) and $param["RspLog"] !== null) {
            $this->RspLog = $param["RspLog"];
        }
    }
}
