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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirmwareTask请求参数结构体
 *
 * @method string getProductID() 获取<p>产品ID</p>
 * @method void setProductID(string $ProductID) 设置<p>产品ID</p>
 * @method string getFirmwareVersion() 获取<p>固件版本号</p>
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置<p>固件版本号</p>
 * @method integer getTaskId() 获取<p>固件任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>固件任务ID</p>
 */
class DescribeFirmwareTaskRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductID;

    /**
     * @var string <p>固件版本号</p>
     */
    public $FirmwareVersion;

    /**
     * @var integer <p>固件任务ID</p>
     */
    public $TaskId;

    /**
     * @param string $ProductID <p>产品ID</p>
     * @param string $FirmwareVersion <p>固件版本号</p>
     * @param integer $TaskId <p>固件任务ID</p>
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
