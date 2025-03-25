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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceCertificates请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method array getFilters() 获取支持搜索参数
ClientId：客户端id
CaSn：所属的CA证书SN
DeviceCertificateSn：设备证书SN
DeviceCertificateCn：设备证书CN
OrganizationalUnit：证书OU
NotAfterEnd：过期时间小于等于指定时间的证书
NotAfterStart：过期时间大于等于指定时间的证书
Status：证书状态

 * @method void setFilters(array $Filters) 设置支持搜索参数
ClientId：客户端id
CaSn：所属的CA证书SN
DeviceCertificateSn：设备证书SN
DeviceCertificateCn：设备证书CN
OrganizationalUnit：证书OU
NotAfterEnd：过期时间小于等于指定时间的证书
NotAfterStart：过期时间大于等于指定时间的证书
Status：证书状态

 * @method integer getLimit() 获取分页limit
 * @method void setLimit(integer $Limit) 设置分页limit
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getOrderBy() 获取CREATE_TIME_DESC, 创建时间降序
    CREATE_TIME_ASC,创建时间升序
    UPDATE_TIME_DESC,更新时间降序
    UPDATE_TIME_ASC,更新时间升序
 * @method void setOrderBy(string $OrderBy) 设置CREATE_TIME_DESC, 创建时间降序
    CREATE_TIME_ASC,创建时间升序
    UPDATE_TIME_DESC,更新时间降序
    UPDATE_TIME_ASC,更新时间升序
 */
class DescribeDeviceCertificatesRequest extends AbstractModel
{
    /**
     * @var string 实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var array 支持搜索参数
ClientId：客户端id
CaSn：所属的CA证书SN
DeviceCertificateSn：设备证书SN
DeviceCertificateCn：设备证书CN
OrganizationalUnit：证书OU
NotAfterEnd：过期时间小于等于指定时间的证书
NotAfterStart：过期时间大于等于指定时间的证书
Status：证书状态

     */
    public $Filters;

    /**
     * @var integer 分页limit
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var string CREATE_TIME_DESC, 创建时间降序
    CREATE_TIME_ASC,创建时间升序
    UPDATE_TIME_DESC,更新时间降序
    UPDATE_TIME_ASC,更新时间升序
     */
    public $OrderBy;

    /**
     * @param string $InstanceId 实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param array $Filters 支持搜索参数
ClientId：客户端id
CaSn：所属的CA证书SN
DeviceCertificateSn：设备证书SN
DeviceCertificateCn：设备证书CN
OrganizationalUnit：证书OU
NotAfterEnd：过期时间小于等于指定时间的证书
NotAfterStart：过期时间大于等于指定时间的证书
Status：证书状态

     * @param integer $Limit 分页limit
     * @param integer $Offset 分页偏移量
     * @param string $OrderBy CREATE_TIME_DESC, 创建时间降序
    CREATE_TIME_ASC,创建时间升序
    UPDATE_TIME_DESC,更新时间降序
    UPDATE_TIME_ASC,更新时间升序
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
