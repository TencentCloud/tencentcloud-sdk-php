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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageAIService返回参数结构体
 *
 * @method integer getType() 获取云存 AI 套餐类型。可能取值：

- `1`：全时套餐
- `2`：事件套餐
- `3`：低功耗套餐
 * @method void setType(integer $Type) 设置云存 AI 套餐类型。可能取值：

- `1`：全时套餐
- `2`：事件套餐
- `3`：低功耗套餐
 * @method integer getStatus() 获取云存 AI 套餐生效状态。可能取值：

- `0`：未开通或已过期
- `1`：生效中
 * @method void setStatus(integer $Status) 设置云存 AI 套餐生效状态。可能取值：

- `0`：未开通或已过期
- `1`：生效中
 * @method integer getExpireTime() 获取云存 AI 套餐过期时间 UNIX 时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置云存 AI 套餐过期时间 UNIX 时间戳
 * @method string getUserId() 获取用户 ID
 * @method void setUserId(string $UserId) 设置用户 ID
 * @method boolean getEnabled() 获取视频分析启用状态
 * @method void setEnabled(boolean $Enabled) 设置视频分析启用状态
 * @method string getConfig() 获取视频分析配置参数
 * @method void setConfig(string $Config) 设置视频分析配置参数
 * @method string getROI() 获取视频分析识别区域
 * @method void setROI(string $ROI) 设置视频分析识别区域
 * @method string getPackageId() 获取云存 AI 套餐 ID
 * @method void setPackageId(string $PackageId) 设置云存 AI 套餐 ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudStorageAIServiceResponse extends AbstractModel
{
    /**
     * @var integer 云存 AI 套餐类型。可能取值：

- `1`：全时套餐
- `2`：事件套餐
- `3`：低功耗套餐
     */
    public $Type;

    /**
     * @var integer 云存 AI 套餐生效状态。可能取值：

- `0`：未开通或已过期
- `1`：生效中
     */
    public $Status;

    /**
     * @var integer 云存 AI 套餐过期时间 UNIX 时间戳
     */
    public $ExpireTime;

    /**
     * @var string 用户 ID
     */
    public $UserId;

    /**
     * @var boolean 视频分析启用状态
     */
    public $Enabled;

    /**
     * @var string 视频分析配置参数
     */
    public $Config;

    /**
     * @var string 视频分析识别区域
     */
    public $ROI;

    /**
     * @var string 云存 AI 套餐 ID
     */
    public $PackageId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Type 云存 AI 套餐类型。可能取值：

- `1`：全时套餐
- `2`：事件套餐
- `3`：低功耗套餐
     * @param integer $Status 云存 AI 套餐生效状态。可能取值：

- `0`：未开通或已过期
- `1`：生效中
     * @param integer $ExpireTime 云存 AI 套餐过期时间 UNIX 时间戳
     * @param string $UserId 用户 ID
     * @param boolean $Enabled 视频分析启用状态
     * @param string $Config 视频分析配置参数
     * @param string $ROI 视频分析识别区域
     * @param string $PackageId 云存 AI 套餐 ID
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ROI",$param) and $param["ROI"] !== null) {
            $this->ROI = $param["ROI"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
