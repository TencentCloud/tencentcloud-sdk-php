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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogDeliveryKafkaSetting返回参数结构体
 *
 * @method string getInstanceID() 获取消息队列实例ID
 * @method void setInstanceID(string $InstanceID) 设置消息队列实例ID
 * @method string getInstanceName() 获取消息队列实例名称
 * @method void setInstanceName(string $InstanceName) 设置消息队列实例名称
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getLogTypeList() 获取日志类型队列
 * @method void setLogTypeList(array $LogTypeList) 设置日志类型队列
 * @method string getUser() 获取用户名
 * @method void setUser(string $User) 设置用户名
 * @method string getRegionID() 获取地域ID
 * @method void setRegionID(string $RegionID) 设置地域ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecLogDeliveryKafkaSettingResponse extends AbstractModel
{
    /**
     * @var string 消息队列实例ID
     */
    public $InstanceID;

    /**
     * @var string 消息队列实例名称
     */
    public $InstanceName;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 日志类型队列
     */
    public $LogTypeList;

    /**
     * @var string 用户名
     */
    public $User;

    /**
     * @var string 地域ID
     */
    public $RegionID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceID 消息队列实例ID
     * @param string $InstanceName 消息队列实例名称
     * @param string $Domain 域名
     * @param array $LogTypeList 日志类型队列
     * @param string $User 用户名
     * @param string $RegionID 地域ID
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LogTypeList",$param) and $param["LogTypeList"] !== null) {
            $this->LogTypeList = [];
            foreach ($param["LogTypeList"] as $key => $value){
                $obj = new SecLogDeliveryKafkaSettingInfo();
                $obj->deserialize($value);
                array_push($this->LogTypeList, $obj);
            }
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
