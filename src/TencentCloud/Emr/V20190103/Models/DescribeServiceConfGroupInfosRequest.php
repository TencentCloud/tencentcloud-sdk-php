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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceConfGroupInfos请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getServiceName() 获取组件名
 * @method void setServiceName(string $ServiceName) 设置组件名
 * @method string getConfGroupName() 获取配置组名称
 * @method void setConfGroupName(string $ConfGroupName) 设置配置组名称
 * @method integer getPageNo() 获取页码，从1开始
 * @method void setPageNo(integer $PageNo) 设置页码，从1开始
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 */
class DescribeServiceConfGroupInfosRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 组件名
     */
    public $ServiceName;

    /**
     * @var string 配置组名称
     */
    public $ConfGroupName;

    /**
     * @var integer 页码，从1开始
     */
    public $PageNo;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @param string $InstanceId 集群id
     * @param string $ServiceName 组件名
     * @param string $ConfGroupName 配置组名称
     * @param integer $PageNo 页码，从1开始
     * @param integer $PageSize 页大小
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
