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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDeviceTrustStatus请求参数结构体
 *
 * @method integer getStatus() 获取<p>设备状态，1表示拉黑，0表示加白</p>
 * @method void setStatus(integer $Status) 设置<p>设备状态，1表示拉黑，0表示加白</p>
 * @method array getDeviceIDList() 获取<p>设备MID列表</p>
 * @method void setDeviceIDList(array $DeviceIDList) 设置<p>设备MID列表</p>
 * @method integer getBlackStatusDeadline() 获取<p>设备拉黑有效期，UnixTime, 单位是 ms,0表示永久有效，默认值是0</p>
 * @method void setBlackStatusDeadline(integer $BlackStatusDeadline) 设置<p>设备拉黑有效期，UnixTime, 单位是 ms,0表示永久有效，默认值是0</p>
 * @method array getIdList() 获取<p>DescribeAccuserList返回的Id 列表</p>
 * @method void setIdList(array $IdList) 设置<p>DescribeAccuserList返回的Id 列表</p>
 * @method integer getUpdateFlags() 获取<p>默认值：0，根据id更新，1根据DeviceIDList</p>
 * @method void setUpdateFlags(integer $UpdateFlags) 设置<p>默认值：0，根据id更新，1根据DeviceIDList</p>
 */
class ModifyDeviceTrustStatusRequest extends AbstractModel
{
    /**
     * @var integer <p>设备状态，1表示拉黑，0表示加白</p>
     */
    public $Status;

    /**
     * @var array <p>设备MID列表</p>
     */
    public $DeviceIDList;

    /**
     * @var integer <p>设备拉黑有效期，UnixTime, 单位是 ms,0表示永久有效，默认值是0</p>
     */
    public $BlackStatusDeadline;

    /**
     * @var array <p>DescribeAccuserList返回的Id 列表</p>
     */
    public $IdList;

    /**
     * @var integer <p>默认值：0，根据id更新，1根据DeviceIDList</p>
     */
    public $UpdateFlags;

    /**
     * @param integer $Status <p>设备状态，1表示拉黑，0表示加白</p>
     * @param array $DeviceIDList <p>设备MID列表</p>
     * @param integer $BlackStatusDeadline <p>设备拉黑有效期，UnixTime, 单位是 ms,0表示永久有效，默认值是0</p>
     * @param array $IdList <p>DescribeAccuserList返回的Id 列表</p>
     * @param integer $UpdateFlags <p>默认值：0，根据id更新，1根据DeviceIDList</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeviceIDList",$param) and $param["DeviceIDList"] !== null) {
            $this->DeviceIDList = $param["DeviceIDList"];
        }

        if (array_key_exists("BlackStatusDeadline",$param) and $param["BlackStatusDeadline"] !== null) {
            $this->BlackStatusDeadline = $param["BlackStatusDeadline"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("UpdateFlags",$param) and $param["UpdateFlags"] !== null) {
            $this->UpdateFlags = $param["UpdateFlags"];
        }
    }
}
