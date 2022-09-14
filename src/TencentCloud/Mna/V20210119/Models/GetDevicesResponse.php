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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDevices返回参数结构体
 *
 * @method array getDeviceInfos() 获取设备信息列表
 * @method void setDeviceInfos(array $DeviceInfos) 设置设备信息列表
 * @method integer getLength() 获取设备总记录条数
 * @method void setLength(integer $Length) 设置设备总记录条数
 * @method integer getTotalPage() 获取总页数
 * @method void setTotalPage(integer $TotalPage) 设置总页数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDevicesResponse extends AbstractModel
{
    /**
     * @var array 设备信息列表
     */
    public $DeviceInfos;

    /**
     * @var integer 设备总记录条数
     */
    public $Length;

    /**
     * @var integer 总页数
     */
    public $TotalPage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DeviceInfos 设备信息列表
     * @param integer $Length 设备总记录条数
     * @param integer $TotalPage 总页数
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
        if (array_key_exists("DeviceInfos",$param) and $param["DeviceInfos"] !== null) {
            $this->DeviceInfos = [];
            foreach ($param["DeviceInfos"] as $key => $value){
                $obj = new DeviceBaseInfo();
                $obj->deserialize($value);
                array_push($this->DeviceInfos, $obj);
            }
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
