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
 * DescribeCRWorkInfo返回参数结构体
 *
 * @method string getWorkName() 获取x
 * @method void setWorkName(string $WorkName) 设置x
 * @method integer getMonitorStatus() 获取x
 * @method void setMonitorStatus(integer $MonitorStatus) 设置x
 * @method integer getAuthStatus() 获取x
 * @method void setAuthStatus(integer $AuthStatus) 设置x
 * @method integer getCommStatus() 获取x
 * @method void setCommStatus(integer $CommStatus) 设置x
 * @method integer getIsProducer() 获取x
 * @method void setIsProducer(integer $IsProducer) 设置x
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCRWorkInfoResponse extends AbstractModel
{
    /**
     * @var string x
     */
    public $WorkName;

    /**
     * @var integer x
     */
    public $MonitorStatus;

    /**
     * @var integer x
     */
    public $AuthStatus;

    /**
     * @var integer x
     */
    public $CommStatus;

    /**
     * @var integer x
     */
    public $IsProducer;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $WorkName x
     * @param integer $MonitorStatus x
     * @param integer $AuthStatus x
     * @param integer $CommStatus x
     * @param integer $IsProducer x
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
        if (array_key_exists("WorkName",$param) and $param["WorkName"] !== null) {
            $this->WorkName = $param["WorkName"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("CommStatus",$param) and $param["CommStatus"] !== null) {
            $this->CommStatus = $param["CommStatus"];
        }

        if (array_key_exists("IsProducer",$param) and $param["IsProducer"] !== null) {
            $this->IsProducer = $param["IsProducer"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
