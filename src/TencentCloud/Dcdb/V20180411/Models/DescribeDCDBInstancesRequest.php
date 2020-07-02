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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取按照一个或者多个实例 ID 查询。实例 ID 形如：dcdbt-2t4cf98d
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例 ID 查询。实例 ID 形如：dcdbt-2t4cf98d
 * @method string getSearchName() 获取搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
 * @method void setSearchName(string $SearchName) 设置搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
 * @method string getSearchKey() 获取搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
 * @method void setSearchKey(string $SearchKey) 设置搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
 * @method array getProjectIds() 获取按项目 ID 查询
 * @method void setProjectIds(array $ProjectIds) 设置按项目 ID 查询
 * @method boolean getIsFilterVpc() 获取是否根据 VPC 网络来搜索
 * @method void setIsFilterVpc(boolean $IsFilterVpc) 设置是否根据 VPC 网络来搜索
 * @method string getVpcId() 获取私有网络 ID， IsFilterVpc 为 1 时有效
 * @method void setVpcId(string $VpcId) 设置私有网络 ID， IsFilterVpc 为 1 时有效
 * @method string getSubnetId() 获取私有网络的子网 ID， IsFilterVpc 为 1 时有效
 * @method void setSubnetId(string $SubnetId) 设置私有网络的子网 ID， IsFilterVpc 为 1 时有效
 * @method string getOrderBy() 获取排序字段， projectId， createtime， instancename 三者之一
 * @method void setOrderBy(string $OrderBy) 设置排序字段， projectId， createtime， instancename 三者之一
 * @method string getOrderByType() 获取排序类型， desc 或者 asc
 * @method void setOrderByType(string $OrderByType) 设置排序类型， desc 或者 asc
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取返回数量，默认为 10，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 10，最大值为 100。
 * @method integer getExclusterType() 获取1非独享集群，2独享集群， 0全部
 * @method void setExclusterType(integer $ExclusterType) 设置1非独享集群，2独享集群， 0全部
 * @method boolean getIsFilterExcluster() 获取标识是否使用ExclusterType字段, false不使用，true使用
 * @method void setIsFilterExcluster(boolean $IsFilterExcluster) 设置标识是否使用ExclusterType字段, false不使用，true使用
 * @method array getExclusterIds() 获取独享集群ID
 * @method void setExclusterIds(array $ExclusterIds) 设置独享集群ID
 */
class DescribeDCDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例 ID 查询。实例 ID 形如：dcdbt-2t4cf98d
     */
    public $InstanceIds;

    /**
     * @var string 搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
     */
    public $SearchName;

    /**
     * @var string 搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
     */
    public $SearchKey;

    /**
     * @var array 按项目 ID 查询
     */
    public $ProjectIds;

    /**
     * @var boolean 是否根据 VPC 网络来搜索
     */
    public $IsFilterVpc;

    /**
     * @var string 私有网络 ID， IsFilterVpc 为 1 时有效
     */
    public $VpcId;

    /**
     * @var string 私有网络的子网 ID， IsFilterVpc 为 1 时有效
     */
    public $SubnetId;

    /**
     * @var string 排序字段， projectId， createtime， instancename 三者之一
     */
    public $OrderBy;

    /**
     * @var string 排序类型， desc 或者 asc
     */
    public $OrderByType;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 10，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 1非独享集群，2独享集群， 0全部
     */
    public $ExclusterType;

    /**
     * @var boolean 标识是否使用ExclusterType字段, false不使用，true使用
     */
    public $IsFilterExcluster;

    /**
     * @var array 独享集群ID
     */
    public $ExclusterIds;

    /**
     * @param array $InstanceIds 按照一个或者多个实例 ID 查询。实例 ID 形如：dcdbt-2t4cf98d
     * @param string $SearchName 搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
     * @param string $SearchKey 搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
     * @param array $ProjectIds 按项目 ID 查询
     * @param boolean $IsFilterVpc 是否根据 VPC 网络来搜索
     * @param string $VpcId 私有网络 ID， IsFilterVpc 为 1 时有效
     * @param string $SubnetId 私有网络的子网 ID， IsFilterVpc 为 1 时有效
     * @param string $OrderBy 排序字段， projectId， createtime， instancename 三者之一
     * @param string $OrderByType 排序类型， desc 或者 asc
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 返回数量，默认为 10，最大值为 100。
     * @param integer $ExclusterType 1非独享集群，2独享集群， 0全部
     * @param boolean $IsFilterExcluster 标识是否使用ExclusterType字段, false不使用，true使用
     * @param array $ExclusterIds 独享集群ID
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
        if (array_key_exists('InstanceIds',$param) and $param['InstanceIds'] !== null) {
            $this->InstanceIds = $param['InstanceIds'];
        }

        if (array_key_exists('SearchName',$param) and $param['SearchName'] !== null) {
            $this->SearchName = $param['SearchName'];
        }

        if (array_key_exists('SearchKey',$param) and $param['SearchKey'] !== null) {
            $this->SearchKey = $param['SearchKey'];
        }

        if (array_key_exists('ProjectIds',$param) and $param['ProjectIds'] !== null) {
            $this->ProjectIds = $param['ProjectIds'];
        }

        if (array_key_exists('IsFilterVpc',$param) and $param['IsFilterVpc'] !== null) {
            $this->IsFilterVpc = $param['IsFilterVpc'];
        }

        if (array_key_exists('VpcId',$param) and $param['VpcId'] !== null) {
            $this->VpcId = $param['VpcId'];
        }

        if (array_key_exists('SubnetId',$param) and $param['SubnetId'] !== null) {
            $this->SubnetId = $param['SubnetId'];
        }

        if (array_key_exists('OrderBy',$param) and $param['OrderBy'] !== null) {
            $this->OrderBy = $param['OrderBy'];
        }

        if (array_key_exists('OrderByType',$param) and $param['OrderByType'] !== null) {
            $this->OrderByType = $param['OrderByType'];
        }

        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('ExclusterType',$param) and $param['ExclusterType'] !== null) {
            $this->ExclusterType = $param['ExclusterType'];
        }

        if (array_key_exists('IsFilterExcluster',$param) and $param['IsFilterExcluster'] !== null) {
            $this->IsFilterExcluster = $param['IsFilterExcluster'];
        }

        if (array_key_exists('ExclusterIds',$param) and $param['ExclusterIds'] !== null) {
            $this->ExclusterIds = $param['ExclusterIds'];
        }
    }
}
