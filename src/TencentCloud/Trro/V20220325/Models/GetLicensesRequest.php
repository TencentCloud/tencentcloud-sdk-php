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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLicenses请求参数结构体
 *
 * @method integer getPageNum() 获取页码
 * @method void setPageNum(integer $PageNum) 设置页码
 * @method integer getPageSize() 获取页面数量
 * @method void setPageSize(integer $PageSize) 设置页面数量
 * @method string getProjectId() 获取projectId
 * @method void setProjectId(string $ProjectId) 设置projectId
 * @method string getDeviceId() 获取DeviceId
 * @method void setDeviceId(string $DeviceId) 设置DeviceId
 * @method integer getStatus() 获取license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
 * @method void setStatus(integer $Status) 设置license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
 */
class GetLicensesRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNum;

    /**
     * @var integer 页面数量
     */
    public $PageSize;

    /**
     * @var string projectId
     */
    public $ProjectId;

    /**
     * @var string DeviceId
     */
    public $DeviceId;

    /**
     * @var integer license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
     */
    public $Status;

    /**
     * @param integer $PageNum 页码
     * @param integer $PageSize 页面数量
     * @param string $ProjectId projectId
     * @param string $DeviceId DeviceId
     * @param integer $Status license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
